<?php
add_action( 'sidebar_admin_page', 'saturnthemes_financebank_custom_sidebar_form', 30 );
function saturnthemes_financebank_custom_sidebar_form() {
    ?>
    <form action="<?php echo admin_url( 'widgets.php' ); ?>" id="saturnthemes-financebank-custom-sidebar-form" style="margin-top: 50px;">
        <h2 style="margin-bottom: 10px;"><?php echo esc_html__( 'Custom Sidebar', 'saturnthemes-financebank' ); ?></h2>
        <input type="text" name="saturnthemes_financebank_sidebar_name" id="saturnthemes-financebank-sidebar-name" placeholder="<?php echo esc_attr( 'Sidebar Name', 'saturnthemes-financebank' ); ?>" required="required" style="width: 300px;" />
        <button type="submit" class="button-primary" value="add"><?php echo esc_html__( 'Add Sidebar', 'saturnthemes-financebank' ); ?></button>
        <span class="spinner" style="float: none;"></span>
    </form>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var $form = $('#saturnthemes-financebank-custom-sidebar-form');

            $('#widgets-right').append('<div style="clear:both;"></div>');
            $('#widgets-right').append($form);

            $form.on('submit', function ( evt ) {
                evt.preventDefault();

                $form.find('[type="submit"]').prop('disable', true).next().addClass('is-active');

                $.ajax({
                    url: ajaxurl,
                    dataType: 'json',
                    data: {
                        action: 'saturnthemes_financebank_add_sidebar',
                        sidebar_name: $('#saturnthemes-financebank-sidebar-name').val()
                    },
                    success: function (response) {
                        if ( typeof response.data != 'undefined' ) {
                            alert(response.data.message);
                        }

                        $form.find('[type="submit"]').prop('disable', false).next().removeClass('is-active');

                        if ( response['success'] ) {
                            window.location.reload(true);
                        }
                    }
                });
            });

            // Delete Button
            $('.sidebar-saturnthemes-financebank-custom-sidebar').find('.sidebar-name-arrow').before('<span class="dashicons dashicons-trash saturnthemes-financebank-delete-sidebar" style="float: right; margin-right: 40px; margin-top: 12px;"></span>')
            $('.saturnthemes-financebank-delete-sidebar').on('click', function (evt) {
                evt.preventDefault();

                if (!confirm('Do you want to delete this custom sidebar?')) {
                    return;
                }

                var $btn = $(this);
                $btn.parent().parent().parent().hide();

                $.ajax({
                    url: ajaxurl,
                    dataType: 'json',
                    data: {
                        action: 'saturnthemes_financebank_delete_sidebar',
                        sidebar_name: $btn.parent().find('h3').text()
                    },
                    success: function (response) {
                    }
                });
            });
        });
    </script>
    <?php
}

add_action('wp_ajax_saturnthemes_financebank_add_sidebar', 'saturnthemes_financebank_add_sidebar');
function saturnthemes_financebank_add_sidebar() {
    if ( empty( $_GET['sidebar_name'] ) ) {
        wp_send_json_error( array(
            'message' => esc_html__( 'No sidebar name', 'saturnthemes-financebank' ),
        ) );
    }

    $response_data = array();

    if ( $sidebars = get_option( 'saturnthemes_financebank_custom_sidebars' ) ) {
        if ( ! is_array( $sidebars ) ) {
            $sidebars = array();
        }

        $sidebars[] = $_GET['sidebar_name'];

        update_option( 'saturnthemes_financebank_custom_sidebars', array_unique( $sidebars ) );
    } else {
        add_option( 'saturnthemes_financebank_custom_sidebars', array( $_POST['sidebar_name'] ) );
    }

    wp_send_json_success( array(
        'message' => esc_html__( 'Added new sidebar', 'saturnthemes-financebank' ),
    ) );
}

add_action('wp_ajax_saturnthemes_financebank_delete_sidebar', 'saturnthemes_financebank_delete_sidebar');
function saturnthemes_financebank_delete_sidebar() {
    if ( empty( $_GET['sidebar_name'] ) ) {
        wp_send_json_error( array(
            'message' => esc_html__( 'No sidebar name', 'saturnthemes-financebank' ),
        ) );
    }

    $remove_sidebar = trim( $_GET['sidebar_name'] );

    if ( $sidebars = get_option( 'saturnthemes_financebank_custom_sidebars' ) ) {
        if ( is_array( $sidebars ) ) {
            foreach ( $sidebars as $index => $sidebar ) {
                if ( $sidebar == $remove_sidebar ) {
                    unset( $sidebars[ $index ] );
                }
            }
        }

        update_option( 'saturnthemes_financebank_custom_sidebars', $sidebars );
    }

    wp_send_json_success( array(
        'message' => esc_html__( 'Removed sidebar', 'saturnthemes-financebank' ),
    ) );
}

add_action( 'widgets_init', 'saturnthemes_financebank_register_custom_sidebars', 15 );
function saturnthemes_financebank_register_custom_sidebars() {
    if ( $sidebars = get_option( 'saturnthemes_financebank_custom_sidebars' ) ) {
        if ( is_array( $sidebars ) ) {
            foreach ( $sidebars as $sidebar ) {
                if ( $sidebar ) {
                    register_sidebar( array(
                        'name'          => $sidebar,
                        'id'            => saturnthemes_financebank_get_custom_sidebar_id( $sidebar ),
                        'class'         => 'saturnthemes-financebank-custom-sidebar',
                        'description'   => '',
                        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</aside>',
                        'before_title'  => '<h3 class="widget-title">',
                        'after_title'   => '</h3>',
                    ) );
                }
            }
        }
    }
}

function saturnthemes_financebank_get_custom_sidebar_id( $sidebar_name ) {
    return preg_replace( '#[\s_]#', '-', strtolower( $sidebar_name ) );
}

function saturnthemes_financebank_get_custom_sidebars() {
    $results = array();

    $sidebars = get_option( 'saturnthemes_financebank_custom_sidebars' );
    if ( is_array( $sidebars ) ) {
        foreach ( $sidebars as $sidebar ) {
            $results[ saturnthemes_financebank_get_custom_sidebar_id( $sidebar ) ] = $sidebar;
        }
    }

    return $results;
}