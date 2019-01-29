<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package borrow
 */
global $borrow_option;
$subtitle = get_post_meta(get_the_ID(),'_cmb_subtitle', true);
$btn_text = get_post_meta(get_the_ID(),'_cmb_btn_text', true);
$btn_link = get_post_meta(get_the_ID(),'_cmb_btn_link', true);
get_header(); ?>

  <div class="page-header" <?php if($borrow_option['bg_blogpage'] != ''){ ?> style="background:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), rgba(0, 0, 0, 0.2) url(<?php echo esc_url($borrow_option['bg_blogpage']['url']); ?>) no-repeat center;"<?php } ?>>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-breadcrumb">
            <?php if($borrow_option['bread-switch']==true){ ?>
               <ol class="breadcrumb">
                  <?php if(function_exists('bcn_display'))
                  {
                      bcn_display();
                  }?>
              </ol>
            <?php } ?>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="bg-white pinside30">
            <div class="row">
              <div class="col-md-8 col-sm-7 col-xs-12">
                <h1 class="page-title"><?php the_title(); ?></h1>
              </div>
              <?php if($borrow_option['action_link']!=''){ ?>
                <div class="col-md-4 col-sm-5 col-xs-12">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="btn-action"> <a href="<?php echo esc_url($borrow_option['action_link']); ?>" class="btn btn-default"><?php echo esc_attr($borrow_option['action_text']); ?></a> </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <?php if($borrow_option['sub_nav']!=''){ ?>
          <div class="sub-nav" id="sub-nav">
            <ul class="nav nav-justified">
              <?php echo htmlspecialchars_decode($borrow_option['sub_nav']); ?>
            </ul>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- subheader close -->
	
  <!-- content begin -->
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="wrapper-content bg-white pinside40">                
                <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                  <div class="card-head-sections">
                    <div class="row">
                        <div class="col-lg-3">
                            <!-- card listing -->
                            <div class="card-img">
                              <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                              <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-7">
                          <h2 class="card-name"><?php the_title(); ?></h2>           
                          <?php if($subtitle != ''){ ?><p><?php echo esc_attr($subtitle); ?></p><?php } ?>  
                        </div>

                        <?php if ($btn_link != '') { ?>
                          <div class="col-lg-2">                           
                            <?php echo '<a class="btn btn-default btn-sm" href="' . esc_url( $btn_link ) . '">' . esc_attr( $btn_text ) . '</a>'; ?>                          
                          </div>
                        <?php } ?>
                    </div>
                  </div>
                  <?php the_content(); ?>        
                <?php endwhile; endif; ?>
              </div>
          </div>
      </div>
  </div>
  <!-- content close -->
	
<?php get_footer(); ?>
