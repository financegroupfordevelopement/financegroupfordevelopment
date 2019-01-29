<?php global $borrow_option; ?>
<?php if($borrow_option['top_head']==true){ ?>
    <div class="top-bar">
      <!-- top-bar -->
      <div class="container">
          <div class="row">
                <?php echo htmlspecialchars_decode(do_shortcode($borrow_option['header_layout2'])); ?>
          </div>
      </div>
    </div>
<?php } ?>

<div class="<?php if( isset($borrow_option['header_fixed']) and $borrow_option['header_fixed']=='fixed' ) { echo 'header-transparent navbar-fixed-top'; }else{ echo 'header'; } ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-6">
                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                      <?php if($borrow_option['logo']['url'] != ''){ ?>
                          <img src="<?php echo esc_url($borrow_option['logo']['url']); ?>" alt="">
                      <?php } ?>   
                    </a>
                </div>
            </div>
            <!-- logo -->
            <div class="col-md-9 col-sm-12 col-xs-12 navigation">
                <div id="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?> 
                </div>
                <!-- /.navigation start-->
            </div>
        </div>
    </div>
</div>
