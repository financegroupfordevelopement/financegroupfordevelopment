<?php
/**
 * Template Name: Template Blog
 */
$ac_link = get_post_meta(get_the_ID(),'_cmb_action_link', true);
$ac_text = get_post_meta(get_the_ID(),'_cmb_action_text', true);
$link1 = get_post_meta(get_the_ID(),'_cmb_link_out_1', true);
$text1 = get_post_meta(get_the_ID(),'_cmb_text_1', true);
$text2 = get_post_meta(get_the_ID(),'_cmb_text_2', true);
$link2 = get_post_meta(get_the_ID(),'_cmb_link_out_2', true);
global $borrow_option;
get_header(); ?>

<!-- subheader begin -->
<div class="page-header" 
  <?php if( function_exists( 'rwmb_meta' ) ) { ?>
  <?php $images = rwmb_meta( '_cmb_subheader_image', "type=image" ); ?>
      <?php if($images){ ?>              
          <?php  foreach ( $images as $image ) {  ?>
                <?php $img = $image['full_url']; ?>
                style="background:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), rgba(0, 0, 0, 0.2) url(<?php echo esc_url($img); ?>) no-repeat center;"
          <?php } ?>                
      <?php } ?>
  <?php } ?>
  >
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
              <h1 class="page-title"><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></h1>
            </div>
            <?php if($ac_link !=''){ ?>
            <div class="col-md-4 col-sm-5 col-xs-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="btn-action"> <a href="<?php echo esc_url($ac_link); ?>" class="btn btn-default"><?php echo esc_attr($ac_text); ?></a> </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="sub-nav" id="sub-nav">
          <ul class="nav nav-justified">
            <?php if($link1 != ''){ ?><li><a href="<?php echo esc_url($link1); ?>"><?php echo esc_attr($text1); ?></a></li><?php } ?>
            <?php if($link2 != ''){ ?><li><a href="<?php echo esc_url($link2); ?>"><?php echo esc_attr($text2); ?></a></li><?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- subheader close -->

<!-- content begin -->
<div class=""><!-- main container -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="wrapper-content bg-white pinside40">
          <div class="row">

            <?php if($borrow_option['sidebar']=='left'){ ?>
              <div class="col-md-4 col-sm-12 col-xs-12"> 
                <div class="sidebar-area">                                  
                  <?php get_sidebar();?>                
                </div>
              </div>
            <?php } ?>

            <div class="<?php if($borrow_option['sidebar']=='fullwidth'){ echo'col-md-12';}else{echo 'col-md-8';} ?> col-sm-12 col-xs-12">
              <div class="row">
                <?php 
                    $args = array(    
                      'paged' => $paged,
                      'post_type' => 'post',
                    );
                    $wp_query = new WP_Query($args);
                    while ($wp_query -> have_posts()): $wp_query -> the_post();                         
                    get_template_part( 'content', get_post_format() ) ; ?> 
                <?php endwhile;?> 

                <div class="col-md-12 text-center col-xs-12">
                  <div class="st-pagination">
                    <?php echo borrow_pagination(); ?>
                  </div>
                </div>
              </div>
            </div>

            <?php if($borrow_option['sidebar']=='right'){ ?>
              <div class="col-md-4 col-sm-12 col-xs-12">                              
                <?php get_sidebar();?>                
              </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content close -->

<?php get_footer(); ?>