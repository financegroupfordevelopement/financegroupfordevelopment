<?php
class saturnthemes_financebank_Customizer {
    public static function init() {
        include_once( get_template_directory() . '/core/includes/libraries/kirki/kirki.php' );
        add_filter( 'kirki/config', 'saturnthemes_financebank_Customizer::config' );
    }

    public static function config() {
        $args = array(
            'url_path'  => SaturnThemesC()->core_url() . '/includes/libraries/kirki/',
            'option_type' => 'theme_mod',
        );

        return $args;
    }
}

if ( ! function_exists( 'saturnthemes_financebank_register_legend_control' ) ) {

    add_action( 'customize_register', 'saturnthemes_financebank_register_legend_control' );

    function saturnthemes_financebank_register_legend_control( $wp_customize ) {

        class Kirki_Controls_Legend_Control extends Kirki_Control_Base {

            public $type = 'legend';

            protected function content_template() { ?>
                <# if ( data.label ) { #>
                    <h4 class="customize-legend" style="
                display: block;
    margin: 0 -20px;
    border: 1px solid #eee;
    border-left: 0;
    border-right: 0;
    padding: 9px 20px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 2px;
    line-height: 1;
    text-transform: uppercase;
    color: #444;
    background: #dedede;
                ">{{{ data.label }}}</h4>
                    <# } #>
                <?php
            }
        }

        $wp_customize->register_control_type( 'Kirki_Controls_Legend_Control' );

    }
}

add_filter( 'kirki/values/get_value', 'saturnthemes_financebank_kirki_db_get_theme_mod_value', 10, 2 );
function saturnthemes_financebank_kirki_db_get_theme_mod_value( $value, $setting ) {
    static $settings;

	if ( is_customize_preview() ) {
		return $value;
	}

    if ( is_page() ) {

        $presets = apply_filters( 'saturnthemes_financebank_page_meta_box_presets', array() );

        if ( ! empty( $presets ) ) {
            foreach ( $presets as $preset ) {
                $page_preset_value = get_post_meta( get_the_ID(), 'saturnthemes_financebank_' . $preset, true );

                if ( $page_preset_value ) {
                    $_GET[ $preset ] = $page_preset_value;
                }
            }
        }

        if ( $primary_color = get_post_meta( get_the_ID(), 'saturnthemes_industry_primary_color', true ) ) {
        	$_GET[ 'site_primary_color' ] = $primary_color;
        }

    }

    if ( empty( $settings ) ) {
        $settings = array();

        if ( ! empty( $_GET ) ) {
            foreach ( $_GET as $key => $query_value ) {
                if ( ! empty( Kirki::$fields[ $key ] ) ) {
                    $settings[ $key ] = $query_value;

                    if ( is_array( Kirki::$fields[ $key ] ) &&
                         'kirki-preset' == Kirki::$fields[ $key ]['type'] &&
                         ! empty( Kirki::$fields[ $key ]['choices'] ) &&
                         ! empty( Kirki::$fields[ $key ]['choices'][ $query_value ] ) &&
                         ! empty( Kirki::$fields[ $key ]['choices'][ $query_value ]['settings'] ) ) {

                        foreach ( Kirki::$fields[ $key ]['choices'][ $query_value ]['settings'] as $kirki_setting => $kirkir_value ) {
                            $settings[ $kirki_setting ] = $kirkir_value;
                        }

                    }
                }
            }
        }

    }

    if ( isset ( $settings[ $setting ] ) ) {
        return $settings[ $setting ];
    }

    return $value;
}

saturnthemes_financebank_Customizer::init();