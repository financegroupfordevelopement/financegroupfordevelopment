<?php 

// Custom Heading
add_shortcode('heading','heading_func');
function heading_func($atts, $content = null){
	extract(shortcode_atts(array(
		'text'		=>	'',
		'tag'		  => 	'',
		'size'		=>	'',
		'color'		=>	'',
		'align'		=>	'',	    
		'class'		=>	'',
    'css'     =>  '',
	), $atts));
	
	$size1 = (!empty($size) ? 'font-size: '.$size.'px;' : '');
	$color1 = (!empty($color) ? 'color: '.$color.';' : '');
	$align1 = (!empty($align) ? 'text-align: '.$align.';' : '');	

  $css_custom = vc_shortcode_custom_css_class( $css );

	ob_start(); ?>
	
	<?php echo htmlspecialchars_decode('<'. $tag . ' class="' . $css_custom . $class . '" style="' . $size1 . $align1 . $color1 .'" > '. $text .'</'.$tag.'>'); ?>
	
<?php
    return ob_get_clean();
}

// Buttons
add_shortcode('button', 'button_func');
function button_func($atts, $content = null){
  extract(shortcode_atts(array(

    'btntext'   => '',
    'btnlink'   => '',
    'type'      => '',
    'size'      => '',
    'class'     => '',

  ), $atts));

  ob_start(); ?>
  <?php 
    $type2 = '';
    $size2 = '';
    if($type == 'primary'){
      $type2 = ' btn-primary ';
    }else{ 
    $type2 = ' btn-default ';
    } 
    if($size == 'small'){
      $size2 = ' btn-sm';
    }elseif($size == 'xs'){
      $size2 = ' btn-xs';
    }elseif($size == 'large'){
      $size2 = ' btn-lg';
    }else{
      $size2 = '';
    }
  ?>
  <a href="<?php echo esc_url($btnlink); ?>" class="btn<?php echo esc_attr($size2.$type2.$class); ?>"><?php echo esc_attr($btntext); ?></a>
  <?php return ob_get_clean();
}

// Home Slider (use)
add_shortcode('sliderh','sliderh_func');
function sliderh_func($atts, $content = null){
  extract(shortcode_atts(array(
    'body'  => '',
    'speed' => '',
    'auto'  => '',
    'paginationSpeed' => '',
    'transition'  => '',
    'bg_overlay' => 'overlay',
  ), $atts));
  $body = (array) vc_param_group_parse_atts( $body );

  $speed1  = (!empty($speed) ? esc_attr($speed) : 3000);
  $auto1  = (!empty($auto) ? esc_attr($auto) : 5000);
  $paginationSpeed1  = (!empty($paginationSpeed) ? esc_attr($paginationSpeed) : 400);

  $bg_overlay1 = '';
  if($bg_overlay == 'transparent'){ 
    $bg_overlay1 = 'student-slider-img';
  }elseif ($bg_overlay == 'gradient') {
    $bg_overlay1 = 'slider-gradient-img';
  }else{ 
    $bg_overlay1 = 'slider-img';
  }

  ob_start(); ?>
    <div class="slider" id="slider">
      <?php 
      foreach ( $body as $data ) {
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $data['highlight'] = isset( $data['highlight'] ) ? $data['highlight'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['btntext'] = isset( $data['btntext'] ) ? $data['btntext'] : '';
        $data['link'] = isset( $data['link'] ) ? $data['link'] : '';
      ?>
      <div class="<?php echo esc_attr($bg_overlay1); ?>">
        <img src="<?php echo esc_url($img); ?>" class="" alt="">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="slider-captions">
                <!-- slider-captions -->
                <?php if($data['title']!=''){ ?><h1 class="slider-title"><?php echo htmlspecialchars_decode($data['title']); ?> </h1><?php } ?>
                <?php if($data['desc']!=''){ ?><p class="slider-text hidden-xs"><?php echo htmlspecialchars_decode($data['desc']); ?></p><?php } ?>
                <?php if($data['btntext']!=''){ ?><a href="<?php echo esc_url($data['link']); ?>" class="btn btn-default hidden-xs"><?php echo esc_attr($data['btntext']); ?></a> <?php } ?>
              </div>
              <!-- /.slider-captions -->
            </div>
          </div>
        </div>
      </div>
      
      <?php } ?> 
    </div>
    <script type="text/javascript">
      (function($) {
        $(document).on('ready', function() {
            "use strict";
              $("#slider").owlCarousel({
              navigation: true, // Show next and prev buttons
              slideSpeed: <?php echo esc_attr($speed1); ?>,
              paginationSpeed: <?php echo esc_attr($paginationSpeed1); ?>,
              singleItem: true,
              pagination: true,
              <?php if($transition == 'fade'){ ?>
              transitionStyle : 'fade',
              <?php } ?>
              autoPlay: <?php echo esc_attr($auto1); ?>,
              navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
              addClassActive: true,
             });
        });
        })(jQuery);
    </script>
  <?php
    return ob_get_clean();
}

// Home Slider 2
add_shortcode('home_slider2','home_slider2_func');
function home_slider2_func($atts, $content = null){
  extract(shortcode_atts(array(
    'body'  => '',
    'speed' => '',
    'auto'  => '',
    'paginationSpeed' => '',
    'transition'  => '',
    'bg_overlay' => 'overlay',
  ), $atts));
  $body = (array) vc_param_group_parse_atts( $body );
  $speed1  = (!empty($speed) ? esc_attr($speed) : 3000);
  $auto1  = (!empty($auto) ? esc_attr($auto) : 5000);
  $paginationSpeed1  = (!empty($paginationSpeed) ? esc_attr($paginationSpeed) : 400);

  $bg_overlay1 = '';
  if($bg_overlay == 'transparent'){ 
    $bg_overlay1 = 'student-slider-img';
  }elseif ($bg_overlay == 'gradient') {
    $bg_overlay1 = 'slider-gradient-img';
  }else{ 
    $bg_overlay1 = 'slider-img';
  }

  ob_start(); ?>
    <div class="slider" id="slider">
      <?php 
      foreach ( $body as $data ) {
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $data['highlight'] = isset( $data['highlight'] ) ? $data['highlight'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['btntext'] = isset( $data['btntext'] ) ? $data['btntext'] : '';
        $data['link'] = isset( $data['link'] ) ? $data['link'] : '';
        $data['rate_badge'] = isset( $data['rate_badge'] ) ? $data['rate_badge'] : '';
      ?>
      <div class="<?php echo esc_attr($bg_overlay1); ?>">
        <img src="<?php echo esc_url($img); ?>" class="" alt="">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="slider-captions">
                <!-- slider-captions -->
                <?php if($data['title']!=''){ ?><h1 class="slider-title"><?php echo htmlspecialchars_decode($data['title']); ?></h1><?php } ?>
                <?php if($data['desc']!=''){ ?><p class="slider-text hidden-xs"><?php echo htmlspecialchars_decode($data['desc']); ?></p><?php } ?>
                <?php if($data['btntext']!=''){ ?><a href="<?php echo esc_url($data['link']); ?>" class="btn btn-default hidden-xs"><?php echo esc_attr($data['btntext']); ?></a> <?php } ?>
                <?php if($data['rate_badge']!=''){ ?><span class="rate-badge"><?php echo htmlspecialchars_decode($data['rate_badge']); ?></span><?php } ?>
              </div>
              <!-- /.slider-captions -->
            </div>
          </div>
        </div>
      </div>
      
      <?php } ?> 
    </div>
    <script type="text/javascript">
      (function($) {
        $(document).on('ready', function() {
            "use strict";
              $("#slider").owlCarousel({
              navigation: true, // Show next and prev buttons
              slideSpeed: <?php echo esc_attr($speed1); ?>,
              paginationSpeed: <?php echo esc_attr($paginationSpeed1); ?>,
              singleItem: true,
              pagination: true,
              <?php if($transition == 'fade'){ ?>
                transitionStyle : 'fade',
              <?php } ?>
              autoPlay: <?php echo esc_attr($auto1); ?>,
              navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
              addClassActive: true,
             });
        });
        })(jQuery);
    </script>
  <?php
    return ob_get_clean();
}

//Table
add_shortcode('table', 'table_func');
function table_func( $atts, $content ) {
  $atts = shortcode_atts(array(
   'titles'         => '',
   'class_name'     => '',
  ), $atts );

  $output = array();
  if( $atts['titles'] ) {
   $titles = explode( "|", $atts['titles'] );
   $column = '';

   if( $titles ) {
    foreach ( $titles as $title ) {
     $column .= sprintf( '<th class="%s">%s</th>', '', $title );
    }
   }
   $output[] = sprintf( '<thead><tr>%s</tr></thead>',  $column );
  }

  if( $content ) {
   $content = explode( "\n", $content );

   if( $content ) {
    $output[] = '<tbody>';
    foreach ( $content as $row ) {
     $row = explode( "|", $row );
     $column = '';
     $i = 0;

     if( $row ) {
      foreach ( $row as $label ) {
       $data = '';
       if( $label ) {    
         $column .= sprintf( '<td %s>%s</td>', $data, $label );
       }
       $i++;
      }
     }
     $output[] = sprintf( '<tr>%s</tr>',  $column );
    }
    $output[] = '</tbody>';
   }
  }
  return sprintf( 
    '
      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered %s">%s</table>
        </div>
      </div>
    ',
  esc_attr( $atts['class_name'] ),
  implode( '', $output )
  );
}

//Rate Counter
add_shortcode('rate', 'rate_func');
function rate_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image'      =>  '',    
        'title'      =>  '',     
        'rate'       =>  '',
    ), $atts));
        $img = wp_get_attachment_image_src($image,'full');
        $img = $img[0];
    ob_start(); 
?>
  <div class="rate-counter-block">
      <div class="icon rate-icon  "> <img src="<?php echo esc_url($img); ?>" class="icon-svg-1x" alt=""></div>
      <div class="rate-box">
          <?php if($rate != ''){ ?><h1 class="loan-rate"><?php echo esc_attr($rate); ?></h1><?php } ?>
          <?php if($title != ''){ ?><small class="rate-title"><?php echo htmlspecialchars_decode($title); ?></small><?php } ?>
      </div>
  </div>
<?php
    return ob_get_clean();
}

//Price Rate
add_shortcode('price_rate', 'price_rate_func');
function price_rate_func($atts, $content = null){
    extract(shortcode_atts(array(
        'new_price'    =>  '',    
        'old_price'    =>  '',     
        'new_title'    =>  '',   
        'old_title'    =>  '',
    ), $atts));
    ob_start(); 
?>
  <div class="price-rate">
      <?php if($new_price != ''){ ?><div class="new-price"><span class="price-big"><?php echo htmlspecialchars_decode($new_price); ?> </span><small><?php echo htmlspecialchars_decode($new_title); ?></small></div><?php } ?>
      <?php if($old_price != ''){ ?><div class="old-price"><span class="price-big"><?php echo htmlspecialchars_decode($old_price); ?> </span><small><?php echo htmlspecialchars_decode($old_title); ?></small></div><?php } ?>
  </div>
<?php
    return ob_get_clean();
}

//Review
add_shortcode('review', 'review_func');
function review_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'icon'    =>  '',     
        'title'   =>  '',     
        'number'  =>  '',  
        'numrat'  =>  '1', 
        'style'   =>  'style1',
    ), $atts));
    ob_start(); 
?>
<?php if($style =='style1'){ ?>
  <div class="text-center mb30">
      <?php if($icon != ''){ ?><div class="icon"> <i class="icon-4x <?php echo esc_attr($icon); ?> icon-default"></i><?php } ?>
      <?php if($number != ''){ ?><h1 class="big-title"><?php echo esc_attr($number); ?></h1><?php } ?>
      <?php if($title != ''){ ?><div class="small-title"><?php echo esc_attr($title); ?></div><?php } ?>
      <?php if($icon != ''){ ?></div><?php } ?>
  </div>
<?php }elseif($style=='style2'){ ?>
  <div class="text-center mb30">
    <?php if($icon != ''){ ?><div class="icon"> <i class="icon-4x <?php echo esc_attr($icon); ?> icon-default"></i><?php } ?>
      <div class="icon icon-1x icon-primary">
      <?php if($numrat==1){ ?><i class="fa fa-star"></i>
      <?php }elseif($numrat==2){ ?><i class="fa fa-star"></i><i class="fa fa-star"></i>
      <?php }elseif($numrat==3){ ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
      <?php }elseif($numrat==4){ ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
      <?php }else{ ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><?php } ?>
      </div>
      <div class="small-title"><?php echo esc_attr($title); ?></div>
    <?php if($icon != ''){ ?></div><?php } ?>
  </div>
<?php }else{ ?>
  <div class="testimonial-simple text-center">
    <?php if($content != ''){ ?><p class="testimonial-text"><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
    <div>
      <div class="client-rating">
          <?php if($numrat==1){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i>
          <?php }elseif($numrat==2){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i>
          <?php }elseif($numrat==3){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i>
          <?php }elseif($numrat==4){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i>
          <?php }else{ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i><?php } ?>
      </div>
      <?php if($title != ''){ ?><span class="testimonial-name-inverse"><?php echo htmlspecialchars_decode($title); ?></span><?php } ?>
    </div>
  </div>
<?php } ?>
<?php
    return ob_get_clean();
}

// Loan
add_shortcode('services', 'services_func');
function services_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'    =>  '',
        'show_sub'  =>  '',
        'show_bt'   =>  '',
        'outline'   =>  '',
        'padd'      =>  '',
        'style'     =>  'style1',
        'btntext'   =>  '',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    $number1  = (!empty($number) ? esc_attr($number) : 4);
    ob_start(); 
?>
<?php if($style == 'style1'){ ?>
<div class="row">
   <div class="service" id="service">
      <?php 
           $args = array(   
              'post_type' => 'loan',   
              'posts_per_page' => $number1,
           );  
           $wp_query = new WP_Query($args);
           while ($wp_query -> have_posts()) : $wp_query -> the_post();

          $subtitle = get_post_meta(get_the_ID(),'_cmb_subtitle', true);
       ?>  
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="bg-white pinside40 service-block outline mb30">
            <div class="icon mb40"> 
            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
              <?php $images = rwmb_meta( '_cmb_image_service', "type=image" ); ?>
              <?php if($images != ''){ ?>              
                  <?php  foreach ( $images as $image ) {  ?>
                      <?php $img = $image['full_url']; ?>
                      <img src="<?php echo esc_url($img); ?>" class="icon-svg-2x" alt="">
                  <?php } ?>                
              <?php }else{
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                      the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                  } 
              } ?>
            <?php } ?>  
            </div>
            <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
            <p><?php echo htmlspecialchars_decode($subtitle); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a> 
          </div>
        </div> 
      <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>  
<?php }elseif($style=='style2'){ ?> 
<div class="row isotope">
  <?php 
     $args = array(   
        'post_type' => 'loan',   
        'posts_per_page' => $number1,
     );  
     $wp_query = new WP_Query($args);
     while ($wp_query -> have_posts()) : $wp_query -> the_post();

    $subtitle = get_post_meta(get_the_ID(),'_cmb_subtitle', true);
   ?>  
    <div class="col-md-4 col-sm-6 col-xs-12 gallery-masonry">
      <div class="service-img-box mb30 text-center <?php if($outline==true){echo 'outline';}else{'';} ?>">
        <div class="service-img">
            <a href="<?php the_permalink(); ?>" class="imghover">
              <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
            </a>
        </div>
        <div class="service-content bg-white <?php if($padd=='10'){echo 'pinside10';}elseif($padd=='20'){echo 'pinside20';}else{echo 'pinside30';} ?>">
            <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
            <?php if($show_sub=='true'){ ?>
              <p><?php echo htmlspecialchars_decode($subtitle); ?></p>
            <?php } ?>
            <?php if($show_bt=='true'){ ?>
              <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a> 
            <?php } ?>
        </div>
      </div>
    </div>
  <?php endwhile; wp_reset_postdata(); ?>
</div> 
<?php }else{ ?>
  <div class="row isotope">
    <?php 
       $args = array(   
          'post_type' => 'loan',   
          'posts_per_page' => $number1,
       );  
       $wp_query = new WP_Query($args);
       while ($wp_query -> have_posts()) : $wp_query -> the_post();
       $subtitle = get_post_meta(get_the_ID(),'_cmb_subtitle', true);
     ?> 
     <div class="col-md-4 col-sm-6 col-xs-12 gallery-masonry">
        <div class="bg-white pinside40 outline mb30 text-center service-block">
            <div class="icon mb40"> 
            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
              <?php $images = rwmb_meta( '_cmb_image_service', "type=image" ); ?>
              <?php if($images != ''){ ?>              
                  <?php  foreach ( $images as $image ) {  ?>
                      <?php $img = $image['full_url']; ?>
                      <img src="<?php echo esc_url($img); ?>" class="icon-svg-2x" alt="">
                  <?php } ?>                
              <?php }else{
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                      the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                  } 
              } ?>
            <?php } ?>  
            </div>
            <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
            <p><?php echo htmlspecialchars_decode($subtitle); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a> 
        </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>
<?php } ?>
<?php
    return ob_get_clean();
}

// OT Loan 2
add_shortcode('ot_loan2', 'ot_loan2_func');
function ot_loan2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'    =>  '',
        'btntext'   =>  '',
        'grid_columns' => '',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Apply now');
    $number1  = (!empty($number) ? esc_attr($number) : 4);
    $grid_columns1 = '';
    if ($grid_columns == 6) {
      $grid_columns1 = 'col-lg-2 col-md-2 col-sm-3';
    }elseif ($grid_columns == 3) {
      $grid_columns1 = 'col-lg-4 col-md-4 col-sm-4';
    }elseif ($grid_columns == 2) {
      $grid_columns1 = 'col-lg-6 col-md-6 col-sm-6';
    }else{
      $grid_columns1 = 'col-lg-3 col-md-3 col-sm-3';
    }
    ob_start(); 
?>

<div class="row">
   <div id="service">
      <?php 
           $args = array(   
              'post_type' => 'loan',   
              'posts_per_page' => $number1,
           );  
           $wp_query = new WP_Query($args);
           while ($wp_query -> have_posts()) : $wp_query -> the_post();
           $rate_number = get_post_meta(get_the_ID(),'_cmb_rate_number', true);
           $rate_text = get_post_meta(get_the_ID(),'_cmb_rate_text', true);
       ?>  
        <div class="<?php echo $grid_columns1; ?> col-xs-12">
          <div class="service-block-v3">
              <div class="icon mb30">
                  <a href="<?php the_permalink(); ?>">
                    <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                      <?php $images = rwmb_meta( '_cmb_image_service', "type=image" ); ?>
                      <?php if($images){ ?>              
                          <?php  foreach ( $images as $image ) {  ?>
                            <?php $img = $image['full_url']; ?>
                            <img src="<?php echo esc_url($img); ?>" class="icon-svg-2x" alt="">
                          <?php } ?>                
                      <?php }else{
                          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                          } 
                      } ?>
                    <?php } ?>
                  </a>
              </div>
              <div class="service-content">
                  <h2 class="service-title"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
              </div>
              <div class="service-rate-block">
                <?php if($rate_number != ''){ ?><h3 class="product-rate"><?php echo esc_attr($rate_number); ?></h3><?php } ?>
                <?php if($rate_text != ''){ ?><p class="rate-text"><?php echo esc_attr($rate_text); ?></p><?php } ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-block"><?php echo esc_attr($btntext1); ?></a>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>  

<?php
    return ob_get_clean();
}

//Process Box
add_shortcode('process', 'process_func');
function process_func($atts, $content = null){
    extract(shortcode_atts(array(
        'shadow'     =>  '',    
        'number'     =>  '',    
        'title'      =>  '',    
    ), $atts));
    ob_start(); 
?>
  <div class="bg-white pinside40 number-block outline mb60 <?php if($shadow=='true'){echo 'bg-boxshadow';}else{'';} ?>">
      <?php if($number!=''){ ?><div class="circle"><span class="number"><?php echo htmlspecialchars_decode($number); ?></span></div><?php } ?>
      <?php if($title!=''){ ?><h3 class="number-title"><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
      <?php if($content!=''){ ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
  </div>
<?php
    return ob_get_clean();
}

//OT Process Box 2
add_shortcode('process2', 'process2_func');
function process2_func($atts, $content = null){
    extract(shortcode_atts(array(          
        'number'     =>  '',    
        'title'      =>  '',  
        'linkbox'    =>  '', 
    ), $atts));
    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  
  <div class="how-it-block">
    <?php if($number!=''){ ?><h3 class="how-it-no"><?php echo esc_attr($number); ?></h3><?php } ?>
    <div class="how-it-content">
      <?php if($title!=''){ ?><h2><?php echo esc_attr($title); ?></h2><?php } ?>
      <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
        echo '<a class="btn btn-default btn-sm" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
      } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//Question Box
add_shortcode('question', 'question_func');
function question_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'     =>  '',    
        'linkbox'  =>  '',    
        'title'    =>  '',    
    ), $atts));
      $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  <i class="<?php echo esc_attr($icon); ?> icon-2x icon-default"></i>
  <?php if($title!=''){ ?><h1><?php echo htmlspecialchars_decode($title); ?></h1><?php } ?>
  <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
  <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
      echo '<a class="btn btn-primary" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
  } ?>
<?php
    return ob_get_clean();
}

//Miscellaneous Box
add_shortcode('miscell', 'miscell_func');
function miscell_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  '',    
        'title'      =>  '',     
        'linkbox'    =>  '',     
        'style'      =>  'style1',     
    ), $atts));
    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
<?php if($style == 'style1'){ ?>
  <div class="bg-white pinside60 number-block outline">
    <div class="mb20"><i class="<?php echo esc_attr($icon); ?>  icon-4x icon-primary"></i></div>
    <?php if($title!=''){ ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
    <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
        echo '<a class="btn btn-outline mt20" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
    } ?>
  </div>
<?php }else{ ?>
  <div class="number-block text-white mb30">
      <div class="mb30 res-mb0"><i class="<?php echo esc_attr($icon); ?>  icon-4x icon-white"></i></div>
      <?php if($title!=''){ ?><h3 class="text-white mb30 res-mb10"><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
      <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
  </div>
<?php } ?>
<?php
    return ob_get_clean();
}

//About Popup Video Box
add_shortcode('about_popup_video', 'about_popup_video_func');
function about_popup_video_func($atts, $content = null){
  extract(shortcode_atts(array(
      'bgimage'      =>  '',
      'iconplay'     =>  '',                
      'videolink'    =>  '',     
      'location'     =>  '',     
  ), $atts));

  $bgimg = wp_get_attachment_image_src($bgimage,'full');
  $bgimg = $bgimg[0];

  $iconimg = wp_get_attachment_image_src($iconplay,'full');
  $iconimg = $iconimg[0];

  $location1 = '';
  if ($location == 'center') {
    $location1 = 'center';
  }elseif ($location == 'right') {
    $location1 = 'right';
  }else{
    $location1 = '';
  }

  ob_start(); 
?>

  <div class="section-about-video">
    <div class="about-img"><img src="<?php echo esc_url($bgimg); ?>" alt=""></div>
    <div class="video-play <?php echo esc_attr($location1); ?>">
        <a class="popup-youtube" href="<?php echo esc_url($videolink); ?>"><img src="<?php echo esc_url($iconimg); ?>"></a>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Feature Box 1
add_shortcode('features', 'features_func');
function features_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  '',    
        'icon2'      =>  '',    
        'title'      =>  '',      
        'style'      =>  'style1',     
    ), $atts));
    ob_start(); 
?>
<?php if($style == 'style1'){ ?>
  <div class="feature-icon">
    <div class="icon mb20"><i class="<?php echo esc_attr($icon); ?> icon-default icon-2x"></i></div>
    <?php if($title!=''){ ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
    <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
  </div>
<?php }elseif($style=='style2'){ ?>
  <div class="feature feature-left mb40">
      <div class="feature-icon"><i class="<?php echo esc_attr($icon2); ?>"></i></div>
      <div class="feature-content">
          <?php if($title!=''){ ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
          <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      </div>
  </div>
<?php }else{ ?>
  <div class="feature  mb40 pinside40 text-center">
      <div class="feature-icon"><i class="<?php echo esc_attr($icon); ?> icon-default icon-2x"></i></div>
      <div class="feature-content">
          <?php if($title!=''){ ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
          <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      </div>
  </div>
<?php } ?>
<?php
    return ob_get_clean();
}

//OT Feature Box 2
add_shortcode('features2', 'features2_func');
function features2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  'fa fa-heart',     
        'title'      =>  '',   
        'css'        =>  '',   
    ), $atts));
    $custom_css = vc_shortcode_custom_css_class( $css );
    ob_start(); 
?>
  
  <div class="feature feature-icon-style <?php echo esc_attr($custom_css); ?>">
    <div class="feature-icon"><i class="<?php echo esc_attr($icon); ?> fa-2x"></i></div>
    <div class="feature-content">
        <h3 class="feature-title"><?php echo esc_attr($title); ?></h3>
        <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Feature Box 3
add_shortcode('features3', 'features3_func');
function features3_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  'fa fa-heart',     
        'title'      =>  '',   
        'css'        =>  '',   
    ), $atts));
    $custom_css = vc_shortcode_custom_css_class( $css );
    ob_start(); 
?>
  <div class="feature <?php echo esc_attr($custom_css); ?>">
    <div class="feature-icon feature-circle"><i class="<?php echo esc_attr($icon); ?>"></i></div>
    <div class="feature-content">
        <h3><?php echo esc_attr($title); ?></h3>
        <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Feature Box 4
add_shortcode('features4', 'features4_func');
function features4_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  'fa fa-heart',     
        'title'      =>  '',   
        'css'        =>  '',   
    ), $atts));
    $custom_css = vc_shortcode_custom_css_class( $css );
    ob_start(); 
?>
  
  <div class="feature feature-bg <?php echo esc_attr($custom_css); ?>">
    <div class="feature-icon"><i class="<?php echo esc_attr($icon); ?>"></i></div>
    <div class="feature-content">
        <h3><?php echo esc_attr($title); ?></h3>
        <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Feature Box 5 (Flaticon)
add_shortcode('features5', 'features5_func');
function features5_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  'flaticon-time-is-money',     
        'title'      =>  '',   
        'css'        =>  '',   
    ), $atts));
    $custom_css = vc_shortcode_custom_css_class( $css );
    ob_start(); 
?>
  
  <div class="business-loan-products bg-boxshadow <?php echo esc_attr($custom_css); ?>">
    <div class="loan-products-icon"><i class="<?php echo esc_attr($icon); ?> icon-4x icon-primary"></i></div>
    <div class="loan-products-content">
      <h3><?php echo esc_attr($title); ?></h3>
      <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Feature Box 6 (Flaticon)
add_shortcode('features6', 'features6_func');
function features6_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  'flaticon-time-is-money',     
        'title'      =>  '',   
        'css'        =>  '',   
    ), $atts));
    $custom_css = vc_shortcode_custom_css_class( $css );
    ob_start(); 
?>
  
  <div class="feature-box-6 <?php echo esc_attr($custom_css); ?>">
    <i class="<?php echo esc_attr($icon); ?> icon-4x icon-primary"></i>
    <div class="feature-box-6-content">
      <h4><?php echo esc_attr($title); ?></h4>
      <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//Share
add_shortcode('share', 'share_func');
function share_func($atts, $content = null){
    extract(shortcode_atts(array(
        'faceb'       =>  '',    
        'twitter'     =>  '',    
        'google'      =>  '',      
        'linkedin'    =>  '',        
    ), $atts));
    ob_start(); 
?>
<div class="widget-share">
  <ul class="listnone">
    <?php if($faceb == true){ ?><li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="btn-share btn-facebook" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li><?php } ?>
    <?php if($twitter == true){ ?><li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" class="btn-share btn-twitter" title="Share on Twitter"><i class="fa fa-twitter"></i></a></li><?php } ?>
    <?php if($google == true){ ?><li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="btn-share btn-google" title="Share on Google"> <i class="fa fa-google"></i></a></li><?php } ?>
    <?php if($linkedin == true){ ?><li><a href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>" class="btn-share btn-linkedin" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li><?php } ?>
  </ul>
</div>
<?php
    return ob_get_clean();
}

// OT Credit Card Grid
add_shortcode('ot_creditcard', 'ot_creditcard_func');
function ot_creditcard_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'            =>  '',
        'number'           =>  '',
        'btntext'           =>  '',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    $number1 = (!empty($number) ? esc_attr($number) : 3);
    ob_start(); 
?>
  <?php 
    $args = array(   
        'post_type' => 'credit_card',   
        'posts_per_page' => $number1,
    );  
    $wp_query = new WP_Query($args);
    while($wp_query->have_posts()) : $wp_query->the_post();     
    $btn_text = get_post_meta(get_the_ID(),'_cmb_btn_text', true);
    $btn_link = get_post_meta(get_the_ID(),'_cmb_btn_link', true);
    $except = get_post_meta(get_the_ID(),'_cmb_except', true);
  ?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="card-listing">
          <!-- card listing -->
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="card-img">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
            </div>
          <?php }  ?>
          <div class="card-content">
              <h3 class="card-name"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h3>
              <?php if($except != ''){ ?>
                <div class="card-features ">
                    <?php echo htmlspecialchars_decode($except); ?>
                </div>
              <?php } ?>
              <?php if($btn_link != ''){ ?><a href="<?php echo esc_url($btn_link); ?>" class="btn btn-default btn-sm"><?php echo esc_attr($btn_text); ?></a><?php } ?>
              <a href="<?php the_permalink(); ?>" class="btn-link"> <?php echo esc_attr($btntext1); ?></a>
          </div>
      </div>
      <!-- /.card listing -->
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php
    return ob_get_clean();
}

// OT Lender Grid
add_shortcode('ot_lendergrid', 'ot_lendergrid_func');
function ot_lendergrid_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'            =>  '',
        'number'           =>  '',
        'btntext'           =>  '',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'More Informations');
    $number1 = (!empty($number) ? esc_attr($number) : 3);
    ob_start(); 
?>
  <?php 
    $args = array(   
        'post_type' => 'ot_lenders',   
        'posts_per_page' => $number1,
    );  
    $wp_query = new WP_Query($args);
    while($wp_query->have_posts()) : $wp_query->the_post();     
    $advertised_title = get_post_meta(get_the_ID(),'_cmb_advertised_title', true);
    $advertised_number = get_post_meta(get_the_ID(),'_cmb_advertised_number', true);
    $comparison_title = get_post_meta(get_the_ID(),'_cmb_comparison_title', true);
    $comparison_number = get_post_meta(get_the_ID(),'_cmb_comparison_number', true);
    $btn_text = get_post_meta(get_the_ID(),'_cmb_btn_text', true);
    $btn_link = get_post_meta(get_the_ID(),'_cmb_btn_link', true);
    $except = get_post_meta(get_the_ID(),'_cmb_except', true);
  ?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="lender-listing">
          <!-- lender listing -->
          <div class="lender-head">
              <?php if ( has_post_thumbnail() ) { ?>
                <div class="lender-logo">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php } ?>
              <div class="lender-reviews">
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i>
              </div>
          </div>
          <div class="lender-rate-box">
            <?php if($advertised_title != ''){ ?>
              <div class="lender-ads-rate">
                  <small><?php echo esc_attr($advertised_title); ?></small>
                  <h3 class="lender-rate-value"><?php echo esc_attr($advertised_number); ?></h3>
              </div>
            <?php } ?>  
            <?php if($comparison_title != ''){ ?>
              <div class="lender-compare-rate">
                  <small><?php echo esc_attr($comparison_title); ?></small>
                  <h3 class="lender-rate-value"><?php echo esc_attr($comparison_number); ?></h3>
              </div>
            <?php } ?>  
          </div>
          <?php if($except != ''){ ?>
            <div class="lender-feature-list">
                <?php echo htmlspecialchars_decode($except); ?>
            </div>
          <?php } ?>
          <div class="lender-actions">
              <?php if($btn_link != ''){ ?><a href="<?php echo esc_url($btn_link); ?>" class="btn btn-default btn-block"><?php echo esc_attr($btn_text); ?></a><?php } ?>
              <a href="<?php the_permalink(); ?>" class="btn-link"> <?php echo esc_attr($btntext1); ?></a>
          </div>
      </div>
      <!-- /.lender listing -->
  </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php
    return ob_get_clean();
}

//Compare Box
add_shortcode('compares', 'compares_func');
function compares_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'            =>  '',
        'image'            =>  '',
        'rate_number'      =>  '',
        'rate'             =>  '',
        'fees_number'      =>  '',
        'fees'             =>  '',
        'compare_number'   =>  '',
        'compare'          =>  '',
        'repayment_number' =>  '',
        'repayment'        =>  '',
        'linkbox'          =>  '',
    ), $atts));
    $img = wp_get_attachment_image_src($image,'full');
    $img = $img[0];
    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  <div class="compare-block mb30">
    <div class="compare-title bg-primary pinside20">
        <?php if($title!=''){ ?><h3 class="mb0"><?php echo esc_attr($title); ?></h3><?php } ?>
    </div>
    <div class="compare-row outline pinside30">
        <div class="row">
            <?php if($img!=''){ ?><div class="col-md-2 col-sm-12 col-xs-12"> <img src="<?php echo esc_url($img); ?>" alt=""> </div><?php } ?>
            <div class="col-md-2 col-sm-2 col-xs-6">
                <div class="text-center">
                    <?php if($rate_number!=''){ ?><h3 class="rate"><?php echo esc_attr($rate_number); ?></h3><?php } ?>
                   <small><?php echo esc_attr($rate); ?></small>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6">
                <div class="text-center">
                    <?php if($fees_number!=''){ ?><h3 class="fees"><?php echo esc_attr($fees_number); ?></h3><?php } ?>
                    <small><?php echo esc_attr($fees); ?></small> 
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <div class="text-center">
                    <?php if($compare_number!=''){ ?><h3 class="compare-rate"><?php echo esc_attr($compare_number); ?></h3><?php } ?>
                    <small><?php echo esc_attr($compare); ?>*</small> 
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6">
                <div class="text-center">
                    <?php if($repayment_number!=''){ ?><h3 class="repayment"><?php echo esc_attr($repayment_number); ?></h3><?php } ?>
                    <small><?php echo esc_attr($repayment); ?></small> 
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-12">
                <div class="text-center comapre-action"> 
                  <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
                      echo '<a class="btn btn-default btn-sm" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
                  } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    return ob_get_clean();
}

//Contact info
add_shortcode('conin', 'conin_func');
function conin_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  '',    
        'title'      =>  '',    
        'stitle'     =>  '',    
        'linkbox'    =>  '',     
    ), $atts));
    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
    <div class="mb40"><i class="<?php echo esc_attr($icon); ?>  icon-2x icon-default"></i></div>
    <?php if($title!=''){ ?><h2 class="capital-title"><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>
    <?php if($stitle!=''){ ?><h1 class="text-big"><?php echo htmlspecialchars_decode($stitle); ?></h1><?php } ?>
    <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
        echo '<a class="btn-link" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
    } ?>
  </div>
<?php
    return ob_get_clean();
}

//Loan Calculator
add_shortcode('calculator', 'calculator_func');
function calculator_func($atts, $content = null){
    extract(shortcode_atts(array(
        'amount_tx'  =>  '',    
        'amount'     =>  '', 
        'range_amount'  => '',   
        'month_tx'   =>  '',    
        'month'      =>  '',   
        'range_month'  => '',   
        'rate_tx'    =>  '',    
        'rate'       =>  '', 
        'range_rate'  => '',    
        'edm_m'      =>  '',    
        'interest'   =>  '',   
        'payable'    =>  '',    
        'percentage' =>  '', 
        'linkbox'    =>  '',     
    ), $atts));
    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  <div class="row">
    <div class="col-md-6">
        <div class="bg-light pinside40 outline">
            <span><?php echo esc_attr($amount_tx); ?> </span>
            <strong><span class="pull-right" id="la_value"><?php echo esc_attr($amount); ?></span></strong>
            <input type="text" data-slider="true" value="<?php echo esc_attr($amount); ?>" data-slider-range="<?php echo esc_attr($range_amount); ?>" data-slider-step="10000" data-slider-snap="true" id="la">
            <hr>
            <span><?php echo esc_attr($month_tx); ?> <strong><span class="pull-right"  id="nm_value"><?php echo esc_attr($month); ?></span> </strong>
            </span>
            <input type="text" data-slider="true" value="<?php echo esc_attr($month); ?>" data-slider-range="<?php echo esc_attr($range_month); ?>" data-slider-step="1" data-slider-snap="true" id="nm">
            <hr>
            <span><?php echo esc_attr($rate_tx); ?> <strong><span class="pull-right"  id="roi_value"><?php echo esc_attr($rate); ?></span>
            </strong>
            </span>
            <input type="text" data-slider="true" value="<?php echo esc_attr($rate); ?>" data-slider-range="<?php echo esc_attr($range_rate); ?>" data-slider-step=".05" data-slider-snap="true" id="roi">
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12 ">
                <div class="bg-light pinside30 outline">
                    <?php echo esc_attr($edm_m); ?>
                    <h2 id='emi' class="pull-right"></h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="bg-light pinside30 outline">
                    <?php echo esc_attr($interest); ?>
                    <h2 id='tbl_int' class="pull-right"></h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="bg-light pinside30 outline"> <?php echo esc_attr($payable); ?>
                    <h2 id='tbl_full' class="pull-right"></h2></div>
            </div>
            <div class="col-md-12">
                <div class="bg-light pinside30 outline">
                     <?php echo esc_attr($percentage); ?>
                    <h2 id='tbl_int_pge' class="pull-right"></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
          echo '<a class="btn btn-default" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
        } ?>
    </div>
</div>
<script type="text/javascript">
   (function($) {
        $(document).ready(function(){
            $("#la").bind(
                "slider:changed", function (event, data) {              
                    $("#la_value").html(data.value.toFixed(0)); 
                    calculateEMI();
                }
            );

            $("#nm").bind(
                "slider:changed", function (event, data) {              
                    $("#nm_value").html(data.value.toFixed(0)); 
                    calculateEMI();
                }
            );
            
            $("#roi").bind(
                "slider:changed", function (event, data) {              
                    $("#roi_value").html(data.value.toFixed(2)); 
                    calculateEMI();
                }
            );
            
            function calculateEMI(){
                var loanAmount = $("#la_value").html();
                var numberOfMonths = $("#nm_value").html();
                var rateOfInterest = $("#roi_value").html();
                var monthlyInterestRatio = (rateOfInterest/100)/12;
                
                var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
                var bottom = top -1;
                var sp = top / bottom;
                var emi = ((loanAmount * monthlyInterestRatio) * sp);
                var full = numberOfMonths * emi;
                var interest = full - loanAmount;
                var int_pge =  (interest / full) * 100;
                $("#tbl_int_pge").html(int_pge.toFixed(2)+" %");
                //$("#tbl_loan_pge").html((100-int_pge.toFixed(2))+" %");               
                
                var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                
                $("#emi").html(emi_str);
                $("#tbl_emi").html(emi_str);
                $("#tbl_la").html(loanAmount_str);
                $("#tbl_nm").html(numberOfMonths);
                $("#tbl_roi").html(rateOfInterest);
                $("#tbl_full").html(full_str);
                $("#tbl_int").html(int_str);                 
            }
            calculateEMI();
        });
	})(jQuery);
</script>

<?php
    return ob_get_clean();
}

//Loan Eligibility
add_shortcode('eligibility', 'eligibility_func');
function eligibility_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title1'  =>  '',    
        'title2'     =>  '', 
        'currentcy'  => '',   
        'text_label_input1'   =>  '',    
        'text_placeholder1'      =>  '',   
        'text_label_input2'   =>  '',    
        'text_placeholder2'      =>  '',  
        'text_label_input3'   =>  '',    
        'text_placeholder3'      =>  '',
        'text_label_input4'   =>  '',    
        'text_placeholder4'      =>  '', 
        'text_label_input5'   =>  '',    
        'text_placeholder5'      =>  '', 
        'btn_text1'   =>  '', 
        'btn_text2'   =>  '',         
    ), $atts));
    ob_start(); 
?>
  
  <div class="loan-eligibility-block">
    <div class="row">
        <div class="col-lg-6">
            <h2 class="mb20"><?php echo esc_attr($title1); ?></h2>
            <form name="formval2" class="form-horizontal loan-eligibility-form">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="input" class="control-label"><?php echo esc_attr($text_label_input1); ?></label>
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo esc_attr($currentcy); ?></span>
                            <input type="number" class="form-control input-sm" id="input" name="pr_amt2" placeholder="<?php echo esc_attr($text_placeholder1); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="input" class="control-label"><?php echo esc_attr($text_label_input2); ?></label>
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo esc_attr($currentcy); ?></span>
                            <input type="number" class="form-control" id="input" name="NetIncome" placeholder="<?php echo esc_attr($text_placeholder2); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="input" class="control-label"><?php echo esc_attr($text_label_input3); ?></label>
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo esc_attr($currentcy); ?></span>
                            <input type="number" class="form-control" id="input" Name="ExLoan" placeholder="<?php echo esc_attr($text_placeholder3); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="input" class="control-label"><?php echo esc_attr($text_label_input4); ?></label>
                        <input type="number" class="form-control" id="input" name="period2" placeholder="<?php echo esc_attr($text_placeholder4); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="input" class="control-label"><?php echo esc_attr($text_label_input5); ?></label>
                        <div class="input-group">
                            <span class="input-group-addon">%</span>
                            <input type="number" class="form-control" id="input" value="<?php echo esc_attr($text_placeholder5); ?>" name="int_rate2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-default" onclick="eligiable()"><?php echo esc_attr($btn_text1); ?></button>
                        <button type="reset" class="btn btn-primary"><?php echo esc_attr($btn_text2); ?></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h2 class="mb40"><?php echo esc_attr($title2); ?></h2>
            <div class="loan-eligibility-info">
                <form name="formval3" class="">
                    <div class="form-group">
                        <output class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-text" name="field13">
                        </output>
                        <output class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-amount" name="field11"></output>
                    </div>
                    <div class="form-group">
                        <output class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-text" name="field12"></output>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
<script type="text/javascript">
  function eligiable() {
    var P1 = document.formval2.pr_amt2.value; // pick the form input value..
    var rate1 = document.formval2.int_rate2.value; // pick the form input value..
    var n1 = document.formval2.period2.value; // pick the form input value..
    var r1 = rate1 / (12 * 100); // to calculate rate percentage..
    var prate1 = (P1 * r1 * Math.pow((1 + r1), n1 * 12)) / (Math.pow((1 + r1), n1 * 12) - 1); // to calculate compound interest..
    var emi1 = Math.ceil(prate1 * 100) / 100; // to parse emi amount..
    var existing = document.formval2.ExLoan.value;
    var existingLoan = (existing - (existing * 60 / 100));
    var income1 = document.formval2.NetIncome.value;
    if (income1 <= 14999) {
      var incomere = ((income1) * 40 / 100) - existingLoan;
    } else if (income1 <= 29999) {
      var incomere = ((income1) * 45 / 100) - existingLoan;
    } else if (income1 >= 30000) {
      var incomere = ((income1) * 50 / 100) - existingLoan;
    }
    var incomereq = Math.floor(incomere / emi1 * P1);
    var prate2 = (incomereq * r1 * Math.pow((1 + r1), n1 * 12)) / (Math.pow((1 + r1), n1 * 12) - 1); // to calculate compound interest2..
    var emi2 = Math.ceil((prate2) * 100) / 100; // to parse emi2 amount..   //Check again Reminder
    // to assign value in field1 as fixed upto two decimal..
    if (incomereq > P1) {
      document.formval3.field13.value = ("You are Eligible for this loan");
      document.formval3.field11.value = (("<?php echo esc_attr($currentcy); ?>" + P1 + " at EMI " + "<?php echo esc_attr($currentcy); ?>" + emi1.toFixed(0)));
      document.formval3.field12.value = ("You are Eligible for a maximum loan of " + ("<?php echo esc_attr($currentcy); ?>" + incomereq + " at EMI " + "<?php echo esc_attr($currentcy); ?>" + emi2.toFixed(0)));                
    } else {
      document.formval3.field13.value = ("You are not Eligible for this loan");
      document.formval3.field11.value = ("");
      document.formval3.field12.value = ("You are Eligible for a maximum loan of " + ("<?php echo esc_attr($currentcy); ?>" + incomereq + " at EMI " + "<?php echo esc_attr($currentcy); ?>" + emi2.toFixed(0)));
    }
  }
</script>

<?php
    return ob_get_clean();
}

// Blog (use)
add_shortcode('blog', 'blog_func');
function blog_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'    => '',
        'excerpt'   => '',
        'image'     => 'img1',
        'style'     => 'style1',
        'btntext'   =>  '',
    ), $atts));
    $excerpt1 = (!empty($excerpt)) ? $excerpt : 15;
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    ob_start();
?>
    <?php if($style == 'style1'){ ?>
    <div class="row">
      <?php 
          $args = array(   
              'post_type' => 'post',   
              'posts_per_page' => $number,
          );  
          $wp_query = new WP_Query($args);
          while($wp_query->have_posts()) : $wp_query->the_post(); 
      ?>
      <?php $format = get_post_format();?>
      <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="post-block mb30">
              <div class="post-img">
                  <a href="<?php the_permalink(); ?>" class="imghover">
                  <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                      <?php $images = rwmb_meta( '_cmb_image2', "type=image" ); ?>
                      <?php if($images){ ?>              
                          <?php  foreach ( $images as $image ) {  ?>
                              <?php $img = $image['full_url']; ?>
                              <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
                          <?php } ?>                
                      <?php }else{
                          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                          } 
                      } ?>
                  <?php } ?>
                  </a>
              </div>
              <div class="bg-white pinside40 outline">
                  <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
                  <p class="meta"><span class="meta-date"><?php the_time( get_option( 'date_format' ) ); ?></span><span class="meta-author"><?php esc_html_e('by ','otvcp-i10n'); ?> <?php the_author_posts_link(); ?></span></p>
                  <p><?php echo borrow_excerpt($excerpt1); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a> 
              </div>
          </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <?php }else{ ?>
    <div class="row">
      <?php 
          $args = array(   
              'post_type' => 'post',   
              'posts_per_page' => $number,
          );  
          $wp_query = new WP_Query($args);
          while($wp_query->have_posts()) : $wp_query->the_post(); 
      ?>
      <?php $format = get_post_format();?>
      <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="post-block mb30">
              <div class="post-img">
                  <a href="<?php the_permalink(); ?>" class="imghover">
                  <?php if($image=='img1'){ ?>
                  <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                  <?php }else{ ?>
                  <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                      <?php $images = rwmb_meta( '_cmb_image2', "type=image" ); ?>
                      <?php if($images){ ?>              
                          <?php  foreach ( $images as $image ) {  ?>
                              <?php $img = $image['full_url']; ?>
                              <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
                          <?php } ?>                
                      <?php }else{
                          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                          } 
                      } ?>
                  <?php } ?>
                  <?php } ?>
                  </a>
              </div>
              <div class="bg-white pinside40 outline">
                  <h3><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h3>
                  <p class="meta"><span class="meta-date"><?php the_time( get_option( 'date_format' ) ); ?></span><span class="meta-author"><?php esc_html_e('by ','otvcp-i10n'); ?> <?php the_author_posts_link(); ?></span></p>
              </div>
          </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <?php } ?>
<?php 
  return ob_get_clean();
}

// Lastest New Slider (use)
add_shortcode('blogslide', 'blogslide_func');
function blogslide_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'    => '',
        'excerpt'   => '',
        'image'     => 'img1',
        'btntext'   =>  '',
    ), $atts));
    $excerpt1 = (!empty($excerpt)) ? $excerpt : 15;
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    ob_start();
?>
    <div class="row">
      <div class="blog-slide" id="blog-slide">
      <?php 
          $args = array(   
              'post_type' => 'post',   
              'posts_per_page' => $number,
          );  
          $wp_query = new WP_Query($args);
          while($wp_query->have_posts()) : $wp_query->the_post(); 
      ?>
      <?php $format = get_post_format();?>
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="post-block mb30">
              <div class="post-img">
                  <a href="<?php the_permalink(); ?>" class="imghover">
                  <?php if($image=='img1'){ ?>
                  <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                  <?php }else{ ?>
                  <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                      <?php $images = rwmb_meta( '_cmb_image2', "type=image" ); ?>
                      <?php if($images){ ?>              
                          <?php  foreach ( $images as $image ) {  ?>
                              <?php $img = $image['full_url']; ?>
                              <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
                          <?php } ?>                
                      <?php }else{
                          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                          } 
                      } ?>
                  <?php } ?>
                  <?php } ?>
                  </a>
              </div>
              <div class="bg-white pinside40 outline">
                  <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
                  <p class="meta"><span class="meta-date"><?php the_time( get_option( 'date_format' ) ); ?></span><span class="meta-author"><?php esc_html_e('by ','otvcp-i10n'); ?> <?php the_author_posts_link(); ?></span></p>
                  <p><?php echo borrow_excerpt($excerpt1); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a> 
              </div>
          </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      </div>
    </div>
<?php 
  return ob_get_clean();
}

// Team (use)
add_shortcode('team', 'team_func');
function team_func($atts, $content = null){
  extract(shortcode_atts(array(
    'number'   =>  '',
  ), $atts));
  ob_start(); ?>
  <div class="row isotope">
    <?php 
        $args = array(   
            'post_type' => 'team',   
            'posts_per_page' => $number,
        );  
        $wp_query = new WP_Query($args);
        while($wp_query->have_posts()) : $wp_query->the_post(); 
        $job = get_post_meta(get_the_ID(),'_cmb_job', true);
    ?>
    <div class="col-md-4 col-sm-4 col-xs-12 gallery-masonry">
      <div class="team-block mb30">
          <div class="team-img mb30"><?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?> </div>
          <div class="team-content text-center">
              <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
              <small class="designation"><?php echo htmlspecialchars_decode($job); ?></small> 
          </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
<?php
  return ob_get_clean();
}

// Filter Gallery (use)

add_shortcode('filgl','filgl_func');
function filgl_func($atts, $content = null){
    extract( shortcode_atts( array(      
      'all'     => '',
      'number'  => '',
      'column'  => '',
   ), $atts ) );
    ob_start(); ?>

    <div class="row">     
       <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="portfolioFilter">
            <a href="#" class="current" data-filter="*" title=""> <?php echo esc_attr($all); ?></a>
            <?php 
             $categories = get_terms('category_gallery');   
             foreach( (array)$categories as $categorie){
              $cat_name = $categorie->name;
              $cat_slug = $categorie->slug;
             ?>
             <a href="#" data-filter=".<?php echo esc_attr($cat_slug); ?>"><?php echo esc_attr($cat_name); ?></a>
            <?php } ?>
          </div>
        </div>        
    </div>
    <div class="row">
      <div id="effect-6" class="effects clearfix">
        <div class="portfolioContainer">
          <?php 
            $number1 = (!empty($number)) ? $number : 9;
            $args = array(   
                'post_type' => 'ot_gallery',
                'posts_per_page' => $number1,   

            );  
            $wp_query = new WP_Query($args);    
            if($wp_query->have_posts()):        
            while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
            $cates = get_the_terms(get_the_ID(),'category_gallery');
               $cate_name ='';
               $cate_slug = '';
                  foreach((array)$cates as $cate){
                 if(count($cates)>0){
                  $cate_name .= $cate->name.' ' ;
                  $cate_slug .= $cate->slug .' ';     
                 } 
               }
          ?>       
            <div class="<?php if($column == 3){echo 'col-md-4 col-sm-4';}else{echo 'col-md-6 col-sm-6';} ?> <?php echo esc_attr($cate_slug); ?> col-xs-12">
                <div class="gallery-thumbnail mb30">
                    <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="image-link"> <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                    </a>
                </div>
            </div>       
            
        <?php endwhile;?> 
        </div>
      </div>
    </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>         
    <script type="text/javascript">
      (function($) {
        "use strict";
          $(document).ready(function() {
              if (Modernizr.touch) {
                  // show the close overlay button
                  $(".close-overlay").removeClass("hidden");
                  // handle the adding of hover class when clicked
                  $(".img").click(function(e) {
                      if (!$(this).hasClass("hover")) {
                          $(this).addClass("hover");
                      }
                  });
                  // handle the closing of the overlay
                  $(".close-overlay").click(function(e) {
                      e.preventDefault();
                      e.stopPropagation();
                      if ($(this).closest(".img").hasClass("hover")) {
                          $(this).closest(".img").removeClass("hover");
                      }
                  });
              } else {
                  // handle the mouseenter functionality
                  $(".img").mouseenter(function() {
                          $(this).addClass("hover");
                      })
                      // handle the mouseleave functionality
                      .mouseleave(function() {
                          $(this).removeClass("hover");
                      });
              }
          });
      })(jQuery);
    </script>
<?php
    return ob_get_clean();
}

// Gallery (use)
add_shortcode('gallerypup', 'gallerypup_func');
function gallerypup_func($atts, $content = null){
  extract(shortcode_atts(array(
    'gallery'   =>  '',
  ), $atts));
  ob_start(); ?>
    <div class="row">
      <?php 
      $img_ids = explode(",",$gallery);
      foreach( $img_ids AS $img_id ){
      $meta = wp_prepare_attachment_for_js($img_id);
      $image_src = wp_get_attachment_image_src($img_id,''); ?>
                  
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="gallery-block text-center mb30">
                <div class="gallery-img mb30">
                    <a href="<?php echo esc_url( $image_src[0] ); ?>" class="image-link"><img src="<?php echo esc_url( $image_src[0] ); ?>" class="img-responsive" alt=""></a>
                </div>
            </div>
        </div>
      <?php } ?>
    </div>
<?php
  return ob_get_clean();
}

// Gallery masonry (use)
add_shortcode('gallerymason', 'gallerymason_func');
function gallerymason_func($atts, $content = null){
  extract(shortcode_atts(array(
    'gallery'   =>  '',
  ), $atts));
  ob_start(); ?>
    <div class="row isotope">
      <div id="effect-6" class="effects clearfix">
        <div class="portfolioContainer">

          <?php 
          $img_ids = explode(",",$gallery);
          foreach( $img_ids AS $img_id ){
          $meta = wp_prepare_attachment_for_js($img_id);
          $image_src = wp_get_attachment_image_src($img_id,''); ?>
                  
          <div class="col-md-4 col-sm-4 gallery-masonry col-xs-12">
              <div class="gallery-thumbnail mb30">
                  <a href="<?php echo esc_url( $image_src[0] ); ?>" class="image-link"> <img src="<?php echo esc_url( $image_src[0] ); ?>" class="img-responsive" alt=""></a>
              </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    
<?php
    return ob_get_clean();
}

// Logos Client (use)
add_shortcode('logos', 'logos_func');
function logos_func($atts, $content = null){
  extract(shortcode_atts(array(
    'gallery'   =>  '',
    'columns'   =>  6,   
  ), $atts));
  ob_start(); 
  
  $columns1 = '';
  if ($columns == 3) {
    $columns1 = 'col-md-4';
  }elseif ($columns == 4) {
    $columns1 = 'col-md-3';
  }else{
    $columns1 = 'col-md-2';
  }
?>
  <div class="row">
    <?php 
      $img_ids = explode(",",$gallery);
      foreach( $img_ids AS $img_id ){
        $meta = wp_prepare_attachment_for_js($img_id);
        $caption = $meta['caption'];
        $title = $meta['title']; 
        $alt = $meta['alt'];  
        $description = $meta['description'];  
        $image_src = wp_get_attachment_image_src($img_id,''); 
    ?>
      <?php if(!empty($caption)){ ?> 
        <div class="<?php echo $columns1; ?> col-sm-4 col-xs-6">
          <a target="_blank" href="<?php echo esc_attr($caption); ?>">
            <img src="<?php echo esc_url( $image_src[0] ); ?>" alt="<?php echo esc_attr($alt); ?>" class="img-responsive">
          </a>
        </div>
      <?php }else{ ?>           
        <div class="<?php echo $columns1; ?> col-sm-4 col-xs-6"><img src="<?php echo esc_url( $image_src[0] ); ?>" alt="<?php echo esc_attr($title); ?>" class="img-responsive"></div>
      <?php } ?>
    <?php } ?>
  </div>
<?php
  return ob_get_clean();
}

// Testimonial Slider
add_shortcode('testislide', 'testislide_func');
function testislide_func($atts, $content = null){
    extract(shortcode_atts(array(
      'body'  => '',
    ), $atts));
    $body = (array) vc_param_group_parse_atts( $body );
    ob_start(); 
?>
<div class="row">
   <div class="testimonial-slide" id="testimonial-slide">
      
      <?php 
      foreach ( $body as $data ) {
        $data['name'] = isset( $data['name'] ) ? $data['name'] : '';
        $data['desc'] = isset( $data['desc'] ) ? $data['desc'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['loan'] = isset( $data['loan'] ) ? $data['loan'] : '';
      ?>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="testimonial-block mb30">
          <div class="bg-white pinside30 mb20">
            <p class="testimonial-text"> <?php echo htmlspecialchars_decode($data['desc']); ?></p>
          </div>
          <div class="testimonial-autor-box">
            <div class="testimonial-img pull-left"> <img src="<?php echo esc_url($img); ?>" alt=""> </div>
            <div class="testimonial-autor pull-left">
              <h4 class="testimonial-name"><?php echo htmlspecialchars_decode($data['name']); ?></h4>
              <span class="testimonial-meta text-default"><?php echo htmlspecialchars_decode($data['loan']); ?></span> 
            </div>
          </div>
        </div>
      </div>
      
      <?php } ?> 
  </div>
</div>  
<?php
    return ob_get_clean();
}


// Testimonial (use)
add_shortcode('testimonial','testimonial_func');
function testimonial_func($atts, $content = null){
  extract(shortcode_atts(array(
    'body'  => '',
    'style' => 'style1',
  ), $atts));
  $body = (array) vc_param_group_parse_atts( $body );
  ob_start(); ?>
  <?php if($style == 'style1'){ ?>
    <div class="row isotope">
      <?php 
      foreach ( $body as $data ) {
        $data['name'] = isset( $data['name'] ) ? $data['name'] : '';
        $data['desc'] = isset( $data['desc'] ) ? $data['desc'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['loan'] = isset( $data['loan'] ) ? $data['loan'] : '';
      ?>
      <div class="col-md-4 col-sm-4 clearfix col-xs-12 gallery-masonry">
        <div class="testimonial-block mb30">
          <div class="bg-white pinside30 mb20">
            <p class="testimonial-text"> <?php echo htmlspecialchars_decode($data['desc']); ?></p>
          </div>
          <div class="testimonial-autor-box">
            <div class="testimonial-img pull-left"> <img src="<?php echo esc_url($img); ?>" alt=""> </div>
            <div class="testimonial-autor pull-left">
              <h4 class="testimonial-name"><?php echo htmlspecialchars_decode($data['name']); ?></h4>
              <span class="testimonial-meta text-default"><?php echo htmlspecialchars_decode($data['loan']); ?></span> 
            </div>
          </div>
        </div>
      </div>
      
      <?php } ?> 
    </div>
  <?php }elseif($style=='style2'){ ?>
    <div class="row isotope">
      <?php 
      foreach ( $body as $data ) {
        $data['name'] = isset( $data['name'] ) ? $data['name'] : '';
        $data['desc'] = isset( $data['desc'] ) ? $data['desc'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['loan'] = isset( $data['loan'] ) ? $data['loan'] : '';
      ?>

      <div class="col-md-6 col-sm-6 clearfix col-xs-12 gallery-masonry">
          <div class="testimonial-block mb30 text-center">
              <div class="mb20 testimonial-img-1"> <img src="<?php echo esc_url($img); ?>" class="img-circle" alt=""> </div>
              <div class="mb20">
                  <p class="testimonial-text"><?php echo htmlspecialchars_decode($data['desc']); ?></p>
              </div>
              <div class="testimonial-autor-box">
                  <div class="testimonial-autor">
                      <h4 class="testimonial-name-1"><?php echo htmlspecialchars_decode($data['name']); ?></h4>
                      <span class="testimonial-meta"><?php echo htmlspecialchars_decode($data['loan']); ?></span> 
                  </div>
              </div>
          </div>
      </div>
      <?php } ?> 
    </div>
  <?php }else{ ?>
    <div class="row isotope">
      <?php 
      foreach ( $body as $data ) {
        $data['name'] = isset( $data['name'] ) ? $data['name'] : '';
        $data['desc'] = isset( $data['desc'] ) ? $data['desc'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['loan'] = isset( $data['loan'] ) ? $data['loan'] : '';
      ?>

      <div class="col-md-6 col-sm-12 col-xs-12 gallery-masonry">
        <div class="testimonial-block mb30">
          <div class="bg-white outline pinside30 mb20">
              <p class="testimonial-text"> <?php echo esc_attr($data['desc']); ?></p>
          </div>
          <div class="testimonial-autor-box mb30">
              <div class="testimonial-img"> <img src="<?php echo esc_url($img); ?>" alt=""> </div>
              <div class="testimonial-autor">
                  <h4 class="testimonial-title"><?php echo esc_attr($data['name']); ?></h4>
                  <span class="testimonial-meta"><?php echo esc_attr($data['loan']); ?></span> 
              </div>
          </div>
        </div>
      </div>
      <?php } ?> 
    </div>
  <?php } ?>
  <?php
    return ob_get_clean();
}

// Testimonial 2 (use)
add_shortcode('testi2', 'testi2_func');
function testi2_func($atts, $content = null){
  extract(shortcode_atts(array(
    'image'   =>  '',
    'name'    =>  '',
    'loan'    =>  '',
  ), $atts));
    $img = wp_get_attachment_image_src($image,'full');
    $img = $img[0];
  ob_start(); ?>
   <div class="testimonial-block mb30">
      <div class="bg-white pinside30 mb20">
        <p class="testimonial-text"> <?php echo htmlspecialchars_decode($content); ?></p>
      </div>
      <div class="testimonial-autor-box">
        <div class="testimonial-img pull-left"> <img src="<?php echo esc_url($img); ?>" alt=""> </div>
        <div class="testimonial-autor pull-left">
          <h4 class="testimonial-name"><?php echo htmlspecialchars_decode($name); ?></h4>
          <span class="testimonial-meta text-default"><?php echo htmlspecialchars_decode($loan); ?></span> 
        </div>
      </div>
    </div>
<?php
  return ob_get_clean();

}

// Testimonial 3 (use)
add_shortcode('testi3', 'testi3_func');
function testi3_func($atts, $content = null){
  extract(shortcode_atts(array(
    'image'   =>  '',
    'name'    =>  '',
  ), $atts));
    $img = wp_get_attachment_image_src($image,'full');
    $img = $img[0];
  ob_start(); ?>

  <div class="customer-block">
    <div class="customer-quote-circle">
        <i class="fa fa-quote-right "></i>
    </div>
    <div class="customer-img"><img src="<?php echo esc_url($img); ?>" alt="" class="img-circle"></div>
    <div class="customer-content">
        <p class="customer-text"><?php echo htmlspecialchars_decode($content); ?></p>
        <div class="customer-meta"><span class="customer-name"><?php echo htmlspecialchars_decode($name); ?></span></div>
    </div>
  </div>

<?php
  return ob_get_clean();
}

// Map
add_shortcode('maps','maps_func');
function maps_func($atts, $content = null){
    extract(shortcode_atts(array(       
        'imgmap'         => '', 
        'latitude'       => '23.0225',
        'longitude'      => '72.5714',
        'zoommap'        => '8',
    ), $atts));

    $img = wp_get_attachment_image_src($imgmap,'full');
    $img = $img[0];

    ob_start(); ?>
    <div class="map" id="googleMap"></div>
      <script type="text/javascript">
       
        (function($) { "use strict";
        
          //set your google maps parameters

          $(document).ready(function(){
              var myLatLng = {
                  lat: <?php echo esc_attr($latitude); ?>,
                  lng: <?php echo esc_attr($longitude); ?>
              };

              var map = new google.maps.Map(document.getElementById('googleMap'), {
                  zoom: <?php echo esc_attr($zoommap); ?>,
                  center: myLatLng,
                  scrollwheel: false,

              });
              var image = '<?php echo esc_url($img); ?>';
              var marker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  icon: image,
                  title: 'Hello World!'

              }); 
          });

        })(jQuery); 
      </script>

<?php
  return ob_get_clean();
}
?>