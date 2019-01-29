<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );

$css_classes = array(
    'counter-container',
    $el_class,
    vc_shortcode_custom_css_class( $css ),
);

$wrapper_attributes = array();

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class=' . esc_attr( trim( $css_class ) ) ;

wp_enqueue_script( 'waypoints' );
wp_enqueue_script( 'jquery-count-up' );

?>

<div <?php echo esc_attr( implode( ' ', $wrapper_attributes ) ); ?>>
    <div class="counter-icon">
		<?php if ( 'custom' != $icon_type ) : ?>
            <i class="primary-color <?php echo esc_attr( isset( ${'icon_' . $icon_type} ) ? ${'icon_' . $icon_type} : 'fa fa-adjust' ); ?>" style="font-size: <?php echo esc_attr( $icon_size ); ?>; color: <?php echo esc_attr( $custom_color ? $custom_color : '' ); ?>;"></i>
        <?php else :
            $img = wpb_getImageBySize( array(
                                           'attach_id' => $icon_image,
                                           'thumb_size' => $icon_image_width,
                                       ) );

            echo '' . $img['thumbnail'];
        endif; ?>
	</div>

	<div class="counter-info">
		<div class="counter-wrapper heading-color">
			<?php if ( $counter_prefix ) : ?>
				<?php echo $counter_prefix; ?>
			<?php endif; ?>
			<h2 id="counter-<?php echo esc_attr( WPBakeryShortCode_saturnthemes_financebank_Counter::getIndex() ) ?>" class="counter" data-speed="<?php echo esc_attr( $speed ) ?>" data-value="<?php echo esc_attr( $counter_value ) ?>" data-separator="<?php echo esc_attr( $counter_sep ) ?>" data-decimal="<?php echo esc_attr( $counter_decimal ) ?>">0</h2>
			<?php if ( $counter_suffix ) : ?>
				<?php echo $counter_suffix; ?>
			<?php endif; ?>
		</div>

		<?php if ( $counter_title ) : ?>
			<p class="counter-title"><?php echo '' . $counter_title; ?></p>
		<?php endif; ?>
	</div>

</div>
