<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

global $saturnthemes_video_player_id;
$saturnthemes_video_player_id = (int) $saturnthemes_video_player_id++;

?>
<style type="text/css">
    #saturnthemes-video-player-<?php echo $saturnthemes_video_player_id; ?> .svg-video-player {
        transform: scale(<?php echo $player_scale; ?>, <?php echo $player_scale; ?>);
    }

    #saturnthemes-video-player-<?php echo $saturnthemes_video_player_id; ?> a:hover .svg-video-player {
        transform: scale(<?php echo $player_scale * 1.2; ?>, <?php echo $player_scale * 1.2; ?>);
    }

    <?php if ( $player_color ) : ?>
    #saturnthemes-video-player-<?php echo $saturnthemes_video_player_id; ?> .svg-video-player .svg-video-player-border {
        stroke: <?php echo $player_color; ?>;
    }

    #saturnthemes-video-player-<?php echo $saturnthemes_video_player_id; ?> .svg-video-player .svg-video-player-icon {
        fill: <?php echo $player_color; ?>;
    }
    <?php endif; ?>

    <?php if ( $player_color_hover ) : ?>
    #saturnthemes-video-player-<?php echo $saturnthemes_video_player_id; ?> a:hover .svg-video-player .svg-video-player-border {
        stroke: <?php echo $player_color_hover; ?>;
    }

    #saturnthemes-video-player-<?php echo $saturnthemes_video_player_id; ?> a:hover .svg-video-player .svg-video-player-icon {
        fill: <?php echo $player_color_hover; ?>;
    }
    <?php endif; ?>
</style>

<div id="saturnthemes-video-player-<?php echo esc_attr( $saturnthemes_video_player_id ); ?>" class="saturnthemes-video-player <?php echo esc_attr( $css_class . ' ' . $el_class ); ?>">
    <a href="<?php echo esc_url( $url ); ?>">
		<svg class="svg-video-player" viewBox="0 0 52 52" version="1.1"
			xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
			x="0px" y="0px" width="52px" height="52px"
		>
			<g>
				<rect x="1" y="1" width="50" height="50" stroke="#ffffff" stroke-width="3" fill="none"/>
				<g>
					<path d="M 34.3228 24.9746 C 34.3228 24.8196 34.226 24.7034 34.0322 24.5871 L 17.4859 15.384 C 17.2922 15.2871 17.1178 15.2871 16.9822 15.3646 C 16.8465 15.4421 16.7884 15.5971 16.7884 15.7909 L 16.7884 34.139 C 16.7884 34.3328 16.8465 34.4878 16.9822 34.5846 C 17.1178 34.6428 17.2922 34.6428 17.4859 34.5459 L 34.0322 25.3427 C 34.226 25.2459 34.3228 25.1296 34.3228 24.9746 L 34.3228 24.9746 Z" fill="#ffffff"/>
				</g>
			</g>
		</svg>
    </a>
</div><?php echo $this->endBlockComment('saturnthemes_financebank_video_player'); ?>

<script>
    jQuery( document ).ready( function ( $ ) {
        $( '#saturnthemes-video-player-<?php echo $saturnthemes_video_player_id; ?> a' ).swipebox( {
            autoplayVideos: true
        } );
    } );
</script>