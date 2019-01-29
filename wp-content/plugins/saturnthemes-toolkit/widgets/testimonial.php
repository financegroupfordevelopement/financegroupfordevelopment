<?php

if ( ! class_exists( 'SaturnThemes_Testimonial_Widget' ) ) {

    add_action( 'widgets_init', 'load_saturnthemes_testimonial_widget' );

    function load_saturnthemes_testimonial_widget() {
        register_widget( 'SaturnThemes_Testimonial_Widget' );
    }

    class SaturnThemes_Testimonial_Widget extends WP_Widget {

        function __construct() {

            $widget_details = array(
                'classname'   => 'saturnthemes-testimonial-widget',
                'description' => 'Show testimonial list as carousel'
            );

            parent::__construct( 'saturnthemes-testimonial-widget', __( 'SaturnThemes Testimonial', 'saturnthemes-toolkit' ), $widget_details );

        }

        function widget( $args, $instance ) {
            $instance['title'] = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );

            echo $args['before_widget'];

            $query = new WP_Query( array(
                'post_type' => 'testimonial',
                'posts_per_page' => $instance['limit'],
                'orderby' => $instance['orderby'],
                'order' => $instance['order'],
            ) );

            ?>

            <?php if ( $query->have_posts() ) : ?>
                <div class="widget-testimonial-list">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php get_template_part( 'template-parts/widget', 'testimonial' ); ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php

            echo $args['after_widget'];
        }

        function form( $instance ) {
            $defaults = array(
                'title' 			=> '',
                'limit' 			=> 5,
                'orderby' 			=> 'date',
                'order' 			=> 'DESC',
            );

            $instance = wp_parse_args( (array) $instance, $defaults );
?>
            <!-- Widget Title: Text Input -->
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title (optional):', 'saturnthemes-toolkit' ); ?></label>
                <input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"  value="<?php echo $instance['title']; ?>" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" />
            </p>
            <!-- Widget Limit: Text Input -->
            <p>
                <label for="<?php echo $this->get_field_id( 'limit' ); ?>"><?php _e( 'Limit:', 'saturnthemes-toolkit' ); ?></label>
                <input type="text" name="<?php echo $this->get_field_name( 'limit' ); ?>"  value="<?php echo $instance['limit']; ?>" class="widefat" id="<?php echo $this->get_field_id( 'limit' ); ?>" />
            </p>
            <!-- Widget Order By: Select Input -->
            <p>
                <label for="<?php echo $this->get_field_id( 'orderby' ); ?>"><?php _e( 'Order By:', 'saturnthemes-toolkit' ); ?></label>
                <select name="<?php echo $this->get_field_name( 'orderby' ); ?>" class="widefat" id="<?php echo $this->get_field_id( 'orderby' ); ?>">
                    <?php foreach ( $this->get_orderby_options() as $k => $v ) { ?>
                        <option value="<?php echo $k; ?>"<?php selected( $instance['orderby'], $k ); ?>><?php echo $v; ?></option>
                    <?php } ?>
                </select>
            </p>
            <!-- Widget Order: Select Input -->
            <p>
                <label for="<?php echo $this->get_field_id( 'order' ); ?>"><?php _e( 'Order Direction:', 'saturnthemes-toolkit' ); ?></label>
                <select name="<?php echo $this->get_field_name( 'order' ); ?>" class="widefat" id="<?php echo $this->get_field_id( 'order' ); ?>">
                    <?php foreach ( $this->get_order_options() as $k => $v ) { ?>
                        <option value="<?php echo $k; ?>"<?php selected( $instance['order'], $k ); ?>><?php echo $v; ?></option>
                    <?php } ?>
                </select>
            </p>
            <?php
        }

        protected function get_orderby_options () {
            return array(
                'none' => __( 'No Order', 'saturnthemes-toolkit' ),
                'ID' => __( 'Entry ID', 'saturnthemes-toolkit' ),
                'title' => __( 'Title', 'saturnthemes-toolkit' ),
                'date' => __( 'Date Added', 'saturnthemes-toolkit' ),
                'rand' => __( 'Random Order', 'saturnthemes-toolkit' )
            );
        } // End get_orderby_options()

        /**
         * Get an array of the available order options.
         * @since  1.0.0
         * @return array
         */
        protected function get_order_options () {
            return array(
                'ASC' => __( 'Ascending', 'saturnthemes-toolkit' ),
                'DESC' => __( 'Descending', 'saturnthemes-toolkit' )
            );
        } // End get_order_options()

    } // end class

} // end if
?>