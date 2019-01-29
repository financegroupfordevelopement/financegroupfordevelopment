<?php
add_action( 'widget_woothemes_testimonials_bottom', 'saturnthemes_financebank_widget_woothemes_testimonials_bottom' );
function saturnthemes_financebank_widget_woothemes_testimonials_bottom() {
	?>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('.widget_woothemes_testimonials .testimonials-list').slick({
				autoplay: true,
				arrows: false
			});
		});
	</script>
<?php
}