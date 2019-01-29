<?php

function elfsight_form_builder_mail() {
    $mail_to = elfsight_form_builder_mail_input('mailTo');
    $fields = elfsight_form_builder_mail_input('fields');

    if (empty($mail_to)) {
        $widget_id = elfsight_form_builder_mail_input('widgetId');

        if ($widget_id) {
            $widget_options = elfsight_form_builder_mail_get_widget_settings($widget_id);

            if (is_array($widget_options)) {
                $mail_to = $widget_options['mailTo'];
            }
        }
    }

    if (empty($mail_to)) {
        return elfsight_form_builder_mail_response('MAILTO_IS_NOT_SPECIFIED', 400);
    }

    if (empty($fields)) {
        return elfsight_form_builder_mail_response('EMPTY_FIELDS', 400);
    }

    $mail = elfsight_form_builder_mail_build_message($fields, $mail_to);

    if (elfsight_form_builder_mail_handle_recaptcha()) {
        if (!empty($widget_id)) {
            elfsight_form_builder_mail_save_mail_to_db($fields, $widget_id);
        }

        if (elfsight_form_builder_mail_send_message($mail, $mail_to)) {
            return elfsight_form_builder_mail_response('OK', 200);
        }
        else {
            return elfsight_form_builder_mail_response('FAIL', 400);
        }
    } else {
        return elfsight_form_builder_mail_response('WRONG_RECAPTCHA', 400);
    }
}
add_action('wp_ajax_nopriv_elfsight_form_builder_mail', 'elfsight_form_builder_mail');
add_action('wp_ajax_elfsight_form_builder_mail', 'elfsight_form_builder_mail');


function elfsight_form_builder_mail_build_message($fields, $mail_to) {
    $mail = null;

    $subject = 'New message from your website ' . $_SERVER['SERVER_NAME'];

    $text = '
    <p>
        This message was sent via Elfsight Form Builder from your website ' . $_SERVER['SERVER_NAME'] . '.<br>
        See it below:
    </p>';

    $text .= '<ul>';

    foreach($fields as $field => $value) {
        $text .= '<li><b>' . $field . '</b>: ' . $value . '</li>';
    }

    $text .= '</ul>';


    $headers = 'From: ' . $_SERVER['SERVER_NAME'] . ' <' . (!empty($fields['email']) ? $fields['email'] : $mail_to) .'>' . "\r\n";

    if ($fields['email']) {
        $headers .= 'Reply-To: ' . $fields['email'] . "\r\n";
    }

    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    $mail = array(
        'subject' => $subject,
        'text' => $text,
        'headers' => $headers
    );

    return $mail;
}

function elfsight_form_builder_mail_get_table_name($name) {
    global $wpdb;

    $slug = 'elfsight_form_builder';

    return $wpdb->prefix . $slug . '_' . $name;
}

function elfsight_form_builder_mail_get_widget_settings($widget_id) {
    global $wpdb;

    $table_name = elfsight_form_builder_mail_get_table_name('widgets');

    $results = $wpdb->get_results('SELECT * FROM `' . esc_sql($table_name) . '` WHERE `id` = ' . esc_sql($widget_id));

    if (is_array($results) && !empty($results[0])) {
        return json_decode($results[0]->options, true);
    }
    else {
        return false;
    }
}

function elfsight_form_builder_mail_send_message($mail, $mail_to) {
    return wp_mail($mail_to, $mail['subject'], $mail['text'], $mail['headers']);
}

function elfsight_form_builder_mail_create_mails_table() {
    $table_name = elfsight_form_builder_mail_get_table_name('mails');

    if (!function_exists('dbDelta')) {
        require(ABSPATH . 'wp-admin/includes/upgrade.php');
    }

    dbDelta(
        'CREATE TABLE `' . esc_sql($table_name) . '` (
            `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
            `data` text NOT NULL,
            `widget_id` int(11) NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;'
    );
}

function elfsight_form_builder_mail_mails_table_exist() {
    global $wpdb;

    $table_name = elfsight_form_builder_mail_get_table_name('mails');

    return !!$wpdb->get_var('SHOW TABLES LIKE "' . esc_sql($table_name) . '"');
}

function elfsight_form_builder_mail_save_mail_to_db($fields, $widget_id) {
    global $wpdb;

    $table_name = elfsight_form_builder_mail_get_table_name('mails');
    $data = json_encode($fields);

    if (!elfsight_form_builder_mail_mails_table_exist()) {
        elfsight_form_builder_mail_create_mails_table();
    }

    $wpdb->insert($table_name, array(
        'data' => $data,
        'widget_id' => $widget_id
    ));
}

function elfsight_form_builder_mail_handle_recaptcha() {
    $recaptcha_secret = '6LfEdU0UAAAAAElGJlm2PvCxHom9fzoZQEuUH1ok';
    $recaptcha_token = elfsight_form_builder_mail_input('recaptcha_token');
    $referer = $_SERVER['SERVER_NAME'];
    $hostname = parse_url($referer, PHP_URL_HOST);

    if (empty($recaptcha_secret)) {
        elfsight_form_builder_mail_response('No Recaptcha secret has been specified.', 400);
    }
    if (empty($recaptcha_token)) {
        elfsight_form_builder_mail_response('Recaptcha token is missing.', 400);
    }

    $response = wp_remote_get('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_token);
    $result = json_decode($response['body'], true);

    if ($result['success'] !== true) {
        return false;
    }

    return true;
}

function elfsight_form_builder_mail_response($status, $code) {
    $response = array($code, $status);

    header('Content-type: application/json; charset=utf-8');
    exit(json_encode($response));
}

function elfsight_form_builder_mail_input($name, $default = null) {
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $default;
}

?>