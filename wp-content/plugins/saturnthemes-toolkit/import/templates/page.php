<div class="saturnthemes-import-demo-container">
	<p class="saturnthemes-import-about-text">
		<strong>*NOTE:</strong> If you import demo content, it will overwrite the existing data and settings.<br />
		The import will take time needed to download all images.
		If it has any problem, please contact to us via email <a href="mailto:<?php echo esc_attr( 'saturnthemes@gmail.com' ); ?>"><?php echo esc_html( 'saturnthemes@gmail.com' ); ?></a><br />
	</p>
	<hr>
	<div class="saturnthemes-demo-source-container">
		<?php foreach ( $demos as $demo_id => $demo ) : ?>
			<div class="saturnthemes-demo-source">
				<div class="saturnthemes-demo-source-screenshot">
					<img src="<?php echo esc_url( $demo['screenshot'] ); ?>" alt="<?php echo esc_attr( $demo['name'] ); ?>">
				</div>
				<div class="saturnthemes-demo-source-heading">
					<h3 class="saturnthemes-demo-source-title"><?php echo esc_html( $demo['name'] ); ?></h3>
					<button class="button button-primary saturnthemes-demo-source-install" data-demo="<?php echo esc_attr( $demo_id ); ?>">Install</button>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<div id="saturnthemes-import-result-container">
		<div id="saturnthemes-import-result">
			<div id="saturnthemes-import-progress-importing" class="saturnthemes-import-progress">
				<h3>Importing...</h3>
			</div>
		</div>
	</div>
</div>
<script type="text/html" id="saturnthemes-import-progress">
	<div id="saturnthemes-import-progress-<%= data %>" class="saturnthemes-import-progress">
		<h3><%= title %></h3>
		<div class="saturnthemes-import-progressbar">
			<div class="saturnthemes-import-progressbar-inner"></div>
		</div>
	</div>
</script>
<script type="text/html" id="saturnthemes-import-done-template">
	<a href="<?php echo esc_url( get_site_url() ); ?>" class="saturnthemes-import-button" target="_blank">View site</a>
	|
	<a href="#" class="saturnthemes-import-button saturnthemes-import-button-close">Close</a>
</script>