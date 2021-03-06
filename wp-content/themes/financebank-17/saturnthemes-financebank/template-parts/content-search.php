<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 *  @package ThemeMove
 */

$saturnthemes_financebank_hide_category       =  Kirki::get_option( 'saturnthemes', 'post_hide_category' );
$saturnthemes_financebank_hide_date           =  Kirki::get_option( 'saturnthemes', 'post_hide_date' );
$saturnthemes_financebank_hide_tags           =  Kirki::get_option( 'saturnthemes', 'post_hide_tags' );
$saturnthemes_financebank_hide_share_buttons  =  Kirki::get_option( 'saturnthemes', 'post_hide_share_buttons' );
$saturnthemes_financebank_hide_featured_image =  Kirki::get_option( 'saturnthemes', 'post_hide_featured_image' );
$saturnthemes_financebank_hide_comment_link   =  Kirki::get_option( 'saturnthemes', 'post_hide_comment_link' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if(has_post_thumbnail() && !$saturnthemes_financebank_hide_featured_image) { ?>
    <div class="post-img">
      <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('single-thumb');?></a>
    </div>
  <?php }  ?>

	<header class="entry-header">

    <?php if(!$saturnthemes_financebank_hide_category) { ?>
      <div class="post-categories">
        <?php saturnthemes_financebank_entry_categories(); ?>
      </div><!--post-categories-->
    <?php } ?>

    <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

    <?php if(!$saturnthemes_financebank_hide_date) { ?>
      <div class="post-date">
        <?php saturnthemes_financebank_posted_on(); ?>
      </div><!--post-date-->
    <?php } ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

  <footer class="entry-footer">
    <?php if(!$saturnthemes_financebank_hide_tags) { ?>
      <div class="post-tags">
        <?php saturnthemes_financebank_entry_tags(); ?>
      </div><!--post-tags-->
    <?php } ?>
    <div class="post-meta">
      <div class="row">
        <?php if($saturnthemes_financebank_hide_comment_link || $saturnthemes_financebank_hide_share_buttons) {
          $class = 'col-xs-12';
        } else {
          $class = 'col-xs-12 col-sm-6';
        } ?>
        <?php if(!$saturnthemes_financebank_hide_comment_link) { ?>
          <div class="post-comments <?php echo esc_attr($class); ?>">
            <?php saturnthemes_financebank_entry_comments(); ?>
          </div><!--post-date-->
        <?php } ?>
        <?php if (!$saturnthemes_financebank_hide_share_buttons) { ?>
          <div class="post-share-buttons <?php echo esc_attr($class); ?>">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
               onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=455,width=600'); return false;">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php the_title(); ?>%20-%20<?php the_permalink(); ?>"
               onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=455,width=600'); return false;">
              <i class="fa fa-twitter"></i>
            </a>
            <?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
            <a data-pin-do="skipLink" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo esc_url($pin_image); ?>&description=<?php the_title(); ?>"
               onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=455,width=600'); return false;">
              <i class="fa fa-pinterest"></i>
            </a>
            <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"
               onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=455,width=600'); return false;">
              <i class="fa fa-google-plus"></i>
            </a>
            <a href="mailto:<?php echo get_option( 'admin_email' ); ?>"><i class="fa fa-envelope-o"></i></a>
          </div>
        <?php } ?>
      </div>
    </div>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->

