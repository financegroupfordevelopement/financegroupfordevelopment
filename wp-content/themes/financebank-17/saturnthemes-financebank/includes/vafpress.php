<?php
// Adding new field for Quote Post Format

if ( ! function_exists( 'saturnthemes_financebank_add_quote_text_field' ) ) {
function saturnthemes_financebank_add_quote_text_field() {
global $post;
?>
<div class="vp-pfui-elm-block">
    <label for="vp-pfui-format-quote-text"><?php esc_html_e( 'Quote', 'saturnthemes-financebank' ); ?></label>

      <textarea name="_format_quote_text" id="vp-pfui-format-quote-text" cols="30"
                rows="10"><?php echo esc_attr( get_post_meta( $post->ID, '_format_quote_text', true ) ); ?></textarea>

</div>
<?php
}

add_action( 'vp_pfui_after_quote_meta', 'saturnthemes_financebank_add_quote_text_field' );
}

if ( ! function_exists( 'saturnthemes_financebank_add_gallery_type_field' ) ) {
    function saturnthemes_financebank_add_gallery_type_field() {
        global $post;
        $type = get_post_meta( $post->ID, '_format_gallery_type', true );
        if ( ! $type ) {
            $type = 'slider';
        }
        ?>
        <div class="vp-pfui-elm-block">
            <label for="vp-pfui-format-gallery-type"><?php esc_html_e( 'Gallery Type', 'saturnthemes-financebank' ); ?></label>
            <input type="radio" name="_format_gallery_type" value="slider"
                   id="slider" <?php checked( $type, "slider" ); ?>><label style="display: inline-block; padding:0 10px 0 0;"
                                                                           for="slider"><?php esc_html_e( 'Slider', 'saturnthemes-financebank' ); ?></label>
            <input type="radio" name="_format_gallery_type" value="masonry"
                   id="masonry" <?php checked( $type, "masonry" ); ?>><label
                style="display: inline-block; padding:0 10px 0 0;" for="masonry"><?php esc_html_e( 'Masonry', 'saturnthemes-financebank' ); ?></label>
        </div>
        <?php
    }

    add_action( 'vp_pfui_after_gallery_meta', 'saturnthemes_financebank_add_gallery_type_field' );
}

add_action( 'admin_init', 'saturnthemes_financebank_admin_init' );
function saturnthemes_financebank_admin_init() {
    $post_formats = get_theme_support( 'post-formats' );
    if ( ! empty( $post_formats[0] ) && is_array( $post_formats[0] ) ) {
        if ( in_array( 'quote', $post_formats[0] ) ) {
            add_action( 'save_post', 'saturnthemes_financebank_custom_save_post' );
        }
    }
}

function saturnthemes_financebank_custom_save_post( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! defined( 'XMLRPC_REQUEST' ) ) {
        if ( isset( $_POST['_format_quote_text'] ) ) {
            update_post_meta( $post_id, '_format_quote_text', $_POST['_format_quote_text'] );
        }
        if ( isset( $_POST['_format_gallery_type'] ) ) {
            update_post_meta( $post_id, '_format_gallery_type', $_POST['_format_gallery_type'] );
        }
    }
}