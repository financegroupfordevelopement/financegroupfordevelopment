<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$classes = array( 'team-member' );

$classes[] = $css_class;
if ( $el_class ) {
	$classes[] = $el_class;
}
?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<h3 class="team-member-name"><?php echo esc_html( $member_name ); ?></h3>
	<div class="team-member-position primary-color"><?php echo esc_html( $position ); ?></div>
	<div class="team-member-description"><?php echo wp_kses_post( $member_quote ); ?></div>
	<div class="row">
		<div class="col-xs-6">
			<h4><?php echo esc_html( 'Contact', 'saturnthemes-financebank' ); ?></h4>
			<ul class="team-member-contact-list">
				<?php if ( $phone_number ) : ?>
					<li><i class="fa fa-phone"></i> <?php echo esc_html( $phone_number ); ?></li>
				<?php endif; ?>
				<?php if ( $email ) : ?>
					<li><i class="fa fa-envelope-o"></i> <?php echo esc_html( $email ); ?></li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="col-xs-6">
			<h4><?php echo esc_html( 'Follow on Socials', 'saturnthemes-financebank' ); ?></h4>
			<ul class="team-member-social-icon-list">
				<?php if ( $facebook ) : ?>
					<li>
						<a class="team-member-social-icon team-member-social-icon-facebook" href="<?php echo esc_url( $facebook ); ?>" target="_blank">
							<i class="fa fa-facebook-square"></i>
						</a>
					</li>
				<?php endif; ?>
				<?php if ( $twitter ) : ?>
					<li>
						<a class="team-member-social-icon team-member-social-icon-twitter" href="<?php echo esc_url( $twitter ); ?>" target="_blank">
							<i class="fa fa-twitter-square"></i>
						</a>
					</li>
				<?php endif; ?>
				<?php if ( $instagram ) : ?>
					<li>
						<a class="team-member-social-icon team-member-social-icon-instagram" href="<?php echo esc_url( $instagram ); ?>" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>