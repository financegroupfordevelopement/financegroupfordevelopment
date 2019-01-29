<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package SaturnThemes
 */

if ( ! function_exists( 'saturnthemes_financebank_get_page_layout' ) ) {
    function saturnthemes_financebank_get_page_layout() {
        $page_layout = Kirki::get_option( 'saturnthemes', 'site_page_layout' );

        if ( is_home() ) {
            $page_layout = Kirki::get_option( 'saturnthemes', 'post_archives_page_layout' );
        } if ( is_archive() ) {

            if ( is_category() ) {
                $page_layout = Kirki::get_option( 'saturnthemes', 'post_archives_page_layout' );
            } else if ( function_exists('is_shop') && is_shop() ) {
                $page_layout = Kirki::get_option( 'saturnthemes', 'woocommerce_archives_page_layout' );
            } else {
                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                if ( $term ) {
                    switch ( $term->taxonomy ) {
                        case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'product' ) ) :
                            $page_layout = Kirki::get_option( 'saturnthemes', 'woocommerce_archives_page_layout' );
                            break;
                        case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'post' ) ) :
                            $page_layout = Kirki::get_option( 'saturnthemes', 'post_archives_page_layout' );
                            break;
                    }
                } else if ( is_tag() ) {
                    $page_layout = Kirki::get_option( 'saturnthemes', 'post_archives_page_layout' );
                }
            }

        } else if ( is_singular() ) {

            switch ( get_post_type() ) {
                case 'post':
                    $page_layout = Kirki::get_option( 'saturnthemes', 'post_single_page_layout' );
                    break;
                case 'product':
                    $page_layout = Kirki::get_option( 'saturnthemes', 'woocommerce_single_page_layout' );
                    break;
                case 'page':
                    if ( $meta_page_layout = get_post_meta( get_the_ID(), 'saturnthemes_financebank_page_layout', true ) ) {
                        $page_layout = $meta_page_layout;
                    }
                    break;
                default:
                    break;
            }

        }

        return $page_layout;
    }
}

if ( ! function_exists( 'saturnthemes_financebank_get_content_layout' ) ) {
	function saturnthemes_financebank_get_content_layout() {
		$content_layout = Kirki::get_option( 'saturnthemes', 'site_content_layout' );

		if ( is_home() ) {
			$content_layout = Kirki::get_option( 'saturnthemes', 'post_archives_content_layout' );
		} if ( is_archive() ) {

			if ( is_category() ) {
				$content_layout = Kirki::get_option( 'saturnthemes', 'post_archives_content_layout' );
			} else if ( function_exists('is_shop') && is_shop() ) {
				$content_layout = Kirki::get_option( 'saturnthemes', 'woocommerce_archives_content_layout' );
			} else {
				$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				if ( $term ) {
					switch ( $term->taxonomy ) {
						case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'product' ) ) :
							$content_layout = Kirki::get_option( 'saturnthemes', 'woocommerce_archives_content_layout' );
							break;
						case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'post' ) ) :
							$content_layout = Kirki::get_option( 'saturnthemes', 'post_archives_content_layout' );
							break;
						case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'service' ) ) :
							$content_layout = Kirki::get_option( 'saturnthemes', 'service_archives_content_layout' );
							break;
                        case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'staff' ) ) :
                            $content_layout = Kirki::get_option( 'saturnthemes', 'staff_archives_content_layout' );
                            break;
					}
				} else if ( is_tag() ) {
					$content_layout = Kirki::get_option( 'saturnthemes', 'post_archives_content_layout' );
				}
			}

		} else if ( is_singular() ) {

			switch ( get_post_type() ) {
				case 'post':
					$content_layout = Kirki::get_option( 'saturnthemes', 'post_single_content_layout' );
					break;
				case 'product':
					$content_layout = Kirki::get_option( 'saturnthemes', 'woocommerce_single_content_layout' );
					break;
				case 'page':
					if ( $meta_page_layout = get_post_meta( get_the_ID(), 'saturnthemes_financebank_content_layout', true ) ) {
						$content_layout = $meta_page_layout;
					}
					break;
                case 'service':
                    if ( $meta_page_layout = get_post_meta( get_the_ID(), 'saturnthemes_financebank_content_layout', true ) ) {
                        $content_layout = $meta_page_layout;
                    }
                    break;
                case 'staff':
                    if ( $meta_page_layout = get_post_meta( get_the_ID(), 'saturnthemes_financebank_content_layout', true ) ) {
                        $content_layout = $meta_page_layout;
                    }
                    break;
                default:
                    break;
            }
        }

		return $content_layout;
	}
}

if ( ! function_exists( 'saturnthemes_financebank_get_sidebar_position' ) ) {
    function saturnthemes_financebank_get_sidebar_position() {
        $sidebar_position = Kirki::get_option( 'saturnthemes', 'site_sidebar_position' );

        if ( is_home() ) {
            $sidebar_position = Kirki::get_option( 'saturnthemes', 'post_archives_sidebar_position' );
        } else if ( is_archive() ) {
	        if ( is_post_type_archive( 'service' ) ) {
		        $sidebar_position = Kirki::get_option( 'saturnthemes', 'service_archives_sidebar_position' );
	        }

            if ( is_post_type_archive( 'staff' ) ) {
                $sidebar_position = Kirki::get_option( 'saturnthemes', 'staff_archives_sidebar_position' );
            }

            if ( is_category() ) {
                $sidebar_position = Kirki::get_option( 'saturnthemes', 'post_archives_sidebar_position' );
            } else if ( function_exists('is_shop') && is_shop() ) {
                $sidebar_position = Kirki::get_option( 'saturnthemes', 'woocommerce_archives_sidebar_position' );
            } else {
                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                if ( $term ) {
                    switch ( $term->taxonomy ) {
                        case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'product' ) ) :
                            $sidebar_position = Kirki::get_option( 'saturnthemes', 'woocommerce_archives_sidebar_position' );
                            break;
                        case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'post' ) ) :
                            $sidebar_position = Kirki::get_option( 'saturnthemes', 'post_archives_sidebar_position' );
                            break;
	                    case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'service' ) ) :
		                    $sidebar_position = Kirki::get_option( 'saturnthemes', 'service_archives_sidebar_position' );
		                    break;
                        case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'staff' ) ) :
                            $sidebar_position = Kirki::get_option( 'saturnthemes', 'staff_archives_sidebar_position' );
                            break;
                    }
                } else if ( is_tag() ) {
                    $sidebar_position = Kirki::get_option( 'saturnthemes', 'post_archives_sidebar_position' );
                }
            }

        } else if ( is_singular() ) {

            switch ( get_post_type() ) {
                case 'post':
                    $sidebar_position = Kirki::get_option( 'saturnthemes', 'post_single_sidebar_position' );
                    break;
                case 'product':
                    $sidebar_position = Kirki::get_option( 'saturnthemes', 'woocommerce_single_sidebar_position' );
                    break;
                case 'page':
                case 'service':
                    if ( $meta_sidebar_position = get_post_meta( get_the_ID(), 'saturnthemes_financebank_sidebar_position', true ) ) {
                        $sidebar_position = $meta_sidebar_position;
                    }
                    break;
                default:
                    break;
            }

        }

        return $sidebar_position;
    }
}

if ( ! function_exists( 'saturnthemes_financebank_get_sidebar' ) ) {
    function saturnthemes_financebank_get_sidebar() {
        $sidebar = '';

        if ( is_home() ) {
            $sidebar = 'sidebar-1';
        } else if ( is_archive() ) {
	        if ( is_post_type_archive( 'service' ) ) {
		        $sidebar = 'sidebar-service';
	        }

            if ( is_post_type_archive( 'staff' ) ) {
                $sidebar = 'sidebar-staff';
            }

            if ( is_category() ) {
                $sidebar = 'sidebar-1';
            } else if ( function_exists('is_shop') && is_shop() ) {
                $sidebar = 'sidebar-shop';
            } else {
                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                if ( $term ) {
                    switch ( $term->taxonomy ) {
                        case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'product' ) ) :
                            $sidebar = 'sidebar-shop';
                            break;
                        case in_array( $term->taxonomy, saturnthemes_financebank_get_taxonomies( 'post' ) ) :
                            $sidebar = 'sidebar-1';
                            break;
                    }
                } else if ( is_tag() ) {
                    $sidebar = 'sidebar-1';
                }
            }

        } else if ( is_singular() ) {

            switch ( get_post_type() ) {
                case 'post':
                    $sidebar = 'sidebar-1';
                    break;
                case 'product':
                    $sidebar = 'sidebar-product';
                    break;
                case 'page':
                case 'service':
                    if ( $meta_sidebar = get_post_meta( get_the_ID(), 'saturnthemes_financebank_sidebar', true ) ) {
                        $sidebar = saturnthemes_financebank_get_custom_sidebar_id( $meta_sidebar );
                    }
                    break;
                default:
                    break;
            }

        }

        return saturnthemes_financebank_get_custom_sidebar_id( $sidebar );
    }
}

if ( ! function_exists( 'saturnthemes_financebank_get_overlay_header' ) ) {
    function saturnthemes_financebank_get_overlay_header() {
        if ( is_page() ) {
            if ( get_post_meta( get_the_ID(), 'saturnthemes_financebank_overlay_header', true ) == 'on' ) {
                return true;
            }
        }

        return false;
    }
}

if ( ! function_exists( 'saturnthemes_financebank_search_form' ) ) {
    function saturnthemes_financebank_get_search_form() {
        ob_start();
        ?>
        <form action="<?php echo esc_url( home_url( '/'  ) ) ?>" role="search" method="get" class="searchform">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Search ..." value="" name="s">
            </label>
            <input type="submit" class="search-submit" value="Search">
        </form>
        <?php
        return ob_get_clean();
    }
}


if ( ! function_exists( 'saturnthemes_financebank_paging_nav' ) ) :
    /**
     * Display navigation to next/previous set of posts when applicable.
     */
    function saturnthemes_financebank_paging_nav() {
        global $wp_query, $wp_rewrite;

        // Don't print empty markup if there's only one page.
        if ( $wp_query->max_num_pages < 2 ) {
            return;
        }

        $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
        $pagenum_link = wp_specialchars_decode( get_pagenum_link(), ENT_QUOTES );
        $query_args   = array();
        $url_parts    = explode( '?', $pagenum_link );

        if ( isset( $url_parts[1] ) ) {
            wp_parse_str( $url_parts[1], $query_args );
        }

        $pagenum_link = esc_url( remove_query_arg( array_keys( $query_args ), $pagenum_link ) );
        $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

        $format = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
        $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

        // Set up paginated links.
        $links = paginate_links( array(
                                     'base'      => $pagenum_link,
                                     'format'    => $format,
                                     'total'     => $wp_query->max_num_pages,
                                     'current'   => $paged,
                                     'mid_size'  => 1,
                                     'add_args'  => array_map( 'urlencode', $query_args ),
                                     'prev_text' => __( 'Previous', 'saturnthemes-financebank' ),
                                     'next_text' => __( 'Next', 'saturnthemes-financebank' ),
                                 ) );

        if ( $links ) :

            ?>
            <div class="pagination loop-pagination">
                <?php echo '' . $links; ?>
            </div><!-- .pagination -->
            <?php
        endif;
    }
endif;

/**
 * Cart Link
 * Displayed a link to the cart including the number of items present and the cart total
 * @param  array $settings Settings
 * @return array           Settings
 * @since  1.0.0
 */
if ( ! function_exists( 'saturnthemes_financebank_cart_link' ) ) {
    function saturnthemes_financebank_cart_link() {
        if ( Kirki::get_option( 'saturnthemes', 'woocommerce_general_catalog_mode' ) ) {
            return;
        }
        ?>
        <div class="mini-cart dropdown">
            <a class="cart-contents" data-toggle="dropdown" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>">
                <i class="fa fa-shopping-basket"></i>
                <span class="count"><?php echo WC()->cart->get_cart_contents_count();?></span>
            </a>
            <div class="cart-details dropdown-menu">
                <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
            </div>
        </div>
        <?php
    }
}

if ( ! function_exists( 'the_post_navigation' ) ) :
    /**
     * Display navigation to next/previous post when applicable.
     *
     * @todo Remove this function when WordPress 4.3 is released.
     */
    function the_post_navigation() {
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
        $next     = get_adjacent_post( false, '', false );

        if ( ! $next && ! $previous ) {
            return;
        }
        ?>
        <nav class="navigation post-navigation" role="navigation">
            <h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'saturnthemes-financebank' ); ?></h2>

            <div class="nav-links">
                <?php
                previous_post_link( '<div class="nav-previous">%link</div>', '%title' );
                next_post_link( '<div class="nav-next">%link</div>', '%title' );
                ?>
            </div>
            <!-- .nav-links -->
        </nav><!-- .navigation -->
        <?php
    }
endif;

if ( ! function_exists( 'saturnthemes_financebank_related_posts' ) ) :
    /**
     * Display related posts
     */
    function saturnthemes_financebank_related_posts() {
        global $post;

        // Get all tags
        $tags = wp_get_post_tags( $post->ID );

        if ( $tags ) :
            $first_tag = $tags[0]->term_id;
            $args = array(
                'tag__in'             => array( $first_tag ),
                'post__not_in'        => array( $post->ID ),
                'posts_per_page'      => 3,
                'ignore_sticky_posts' => 1,
            );

            $query     = new WP_Query( $args );

            if ( $query->have_posts() ) : ?>
                <div class="post-related">
                    <h3 class="widget-title"><span><?php esc_html_e( 'Related Posts', 'saturnthemes-financebank' ); ?></span></h3>

                    <div class="row">
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="col-sm-4">
                                <?php get_template_part( 'template-parts/content', 'grid-style1' ); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif;
            wp_reset_postdata();
            ?>
        <?php endif; ?>
    <?php }
endif;

if ( ! function_exists( 'saturnthemes_financebank_post_pagination' ) ) :
    /**
     * Display post pagination
     */
    function saturnthemes_financebank_post_pagination() {
    ?>
        <div class="post-pagination">

            <?php
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            ?>

            <?php if (!empty( $prev_post )) : ?>
                <div class="prev-post">
                    <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
                        <?php echo get_the_title( $prev_post->ID ); ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php if (!empty( $next_post )) : ?>
                <div class="next-post">
                    <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                        <?php echo get_the_title( $next_post->ID ); ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>
    <?php }
endif;

if ( ! function_exists( 'saturnthemes_financebank_posted_on' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function saturnthemes_financebank_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf( $time_string, esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ), esc_attr( get_the_modified_date( 'c' ) ), esc_html( get_the_modified_date() ) );

        $posted_on = sprintf( esc_html_x( '%s', 'post date', 'saturnthemes-financebank' ), $time_string );

        echo '<span class="posted-on">' . '<i class="fa fa-clock-o"></i>' . $posted_on . '</span>';

    }
endif;

if ( ! function_exists( 'saturnthemes_financebank_entry_categories' ) ) :
    /**
     * Prints HTML with meta information for the categories
     */
    function saturnthemes_financebank_entry_categories() {
        if ( 'post' == get_post_type() ) {
            $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'saturnthemes-financebank' ) );
            if ( $categories_list && saturnthemes_financebank_categorized_blog() ) {
                printf( esc_html__( '%1$s', 'saturnthemes-financebank' ), $categories_list ); // WPCS: XSS OK.
            }
        }
    }
endif;

if ( ! function_exists( 'saturnthemes_financebank_entry_tags' ) ) :
    /**
     * Prints HTML with meta information for the tags
     */
    function saturnthemes_financebank_entry_tags() {
        if ( 'post' == get_post_type() ) {
            $tags_list = get_the_tag_list( '',  esc_html( '', 'saturnthemes-financebank' ) );
            if ( $tags_list ) {
                printf( esc_html__( '%1$s', 'saturnthemes-financebank' ), $tags_list ); // WPCS: XSS OK.
            }
        }
    }
endif;

if ( ! function_exists( 'saturnthemes_financebank_entry_comments' ) ) :
    /**
     * Prints HTML with meta information for the comments
     */
    function saturnthemes_financebank_entry_comments() {
        if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
	        echo '<i class="fa fa-comments body-color"></i>';
            echo '<span class="comments-link">';
            comments_popup_link( esc_html__( '0 Comment', 'saturnthemes-financebank' ), esc_html__( '1 Comment', 'saturnthemes-financebank' ), esc_html__( '% Comments', 'saturnthemes-financebank' ), 'body-color' );
            echo '</span>';
        }
    }
endif;

if ( ! function_exists( 'saturnthemes_financebank_entry_author' ) ) :
    /**
     * Display author information
     */
    function saturnthemes_financebank_entry_author() {
        $output = '<div class="author-info">';
        $output .= '<picture class="author-info-img">';
        $output .= get_avatar( get_the_author_meta( 'user_email' ), 100 );
        $output .= '</picture>';
        $output .= '<div class="row author-info-content">';
        $output .= '<div class="col-md-4 author-info-top">';
        $output .= '<a class="author-info-name" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . get_the_author() . '</a>';
        $output .= '<span class="author-info-position">' . get_the_author_meta('position'). '</span>';
        $output .= '</div>';
        $output .= '<p class="col-md-8 author-info-description">' . get_the_author_meta( 'description' ) . '</p>';
        $output .= '</div>';
        $output .= '</div>';
        echo '' . $output;
    }
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function saturnthemes_financebank_categorized_blog() {
    if ( false === ( $all_the_cool_cats = get_transient( 'saturnthemes_financebank_categories' ) ) ) {
        // Create an array of all the categories that are attached to posts.
        $all_the_cool_cats = get_categories( array(
                                                 'fields'     => 'ids',
                                                 'hide_empty' => 1,
                                                 // We only need to know if there is more than one category.
                                                 'number'     => 2,
                                             ) );

        // Count the number of categories that are attached to the posts.
        $all_the_cool_cats = count( $all_the_cool_cats );

        set_transient( 'saturnthemes_financebank_categories', $all_the_cool_cats );
    }

    if ( $all_the_cool_cats > 1 ) {
        // This blog has more than 1 category so saturnthemes_financebank_categorized_blog should return true.
        return true;
    } else {
        // This blog has only 1 category so saturnthemes_financebank_categorized_blog should return false.
        return false;
    }
}

/**
 * Flush out the transients used in saturnthemes_financebank_categorized_blog.
 */
function saturnthemes_financebank_category_transient_flusher() {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // Like, beat it. Dig?
    delete_transient( 'saturnthemes_financebank_categories' );
}

add_action( 'edit_category', 'saturnthemes_financebank_category_transient_flusher' );
add_action( 'save_post', 'saturnthemes_financebank_category_transient_flusher' );

/**
 * Flush out the transients used in saturnthemes_financebank_categorized_blog.
 */
function custom_excerpt_length( $length ) {
    return 200;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function saturnthemes_financebank_string_limit_words( $string, $word_limit ) {
    $words = explode( ' ', $string, ( $word_limit + 1 ) );

    if ( count( $words ) > $word_limit ) {
        array_pop( $words );
    }

    return implode( ' ', $words );
}

/**
 * Custom comment layout
 *
 * @param $comment
 * @param $args
 * @param $depth
 */
function saturnthemes_financebank_comment( $comment, $args, $depth ) {
    $GLOBALS[ 'comment' ] = $comment; ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?>">
        <div class="comment-author vcard">
            <?php echo get_avatar( $comment, $size = '100' ); ?>
        </div>
        <div class="comment-content">
            <?php if ( $comment->comment_approved == '0' ) : ?>
                <em><?php esc_html_e( 'Your comment is awaiting moderation.', 'saturnthemes-financebank' ) ?></em>
                <br />
            <?php endif; ?>
            <div class="metadata">
                <?php printf( wp_kses( __( '<cite class="fn">%s</cite>', 'saturnthemes-financebank' ), array( 'cite' => array() ), 'saturnthemes-financebank' ), get_comment_author_link() ) ?>
                <span
                    class="post-date"><?php printf( esc_html__( '%1$s', 'saturnthemes-financebank' ), get_comment_date(), get_comment_time() ) ?></span>
                <?php edit_comment_link( esc_html__( '(Edit)', 'saturnthemes-financebank' ), '  ', '' ) ?>
            </div>
            <?php comment_text() ?>
            <?php comment_reply_link( array_merge( $args, array( 'depth'     => $depth,
                                                                 'max_depth' => $args[ 'max_depth' ]
            ) ) ) ?>
        </div>
    </div>
    <?php
}

add_action( 'saturnthemes_financebank_after_footer', 'saturnthemes_financebank_promo_popup_html' );
function saturnthemes_financebank_promo_popup_html() {
    if ( ! Kirki::get_option( 'saturnthemes', 'promo_popup_show' ) || ! Kirki::get_option( 'saturnthemes', 'promo_popup_content' ) ) {
        return;
    }

    $inline_styles = array();
    $inline_styles[] = 'width: ' . Kirki::get_option( 'saturnthemes', 'promo_popup_width' ). 'px';
    $inline_styles[] = 'height: ' . Kirki::get_option( 'saturnthemes', 'promo_popup_height' ) . 'px';
    if ( Kirki::get_option( 'saturnthemes', 'promo_popup_background_color' ) ) {
        $inline_styles[] = 'background-color: ' . Kirki::get_option( 'saturnthemes', 'promo_popup_background_color' );
    }
    if ( Kirki::get_option( 'saturnthemes', 'promo_popup_background_image' ) ) {
        $inline_styles[] = 'background-image: url("' . Kirki::get_option( 'saturnthemes', 'promo_popup_background_color' ) . '")';
    }
    if ( Kirki::get_option( 'saturnthemes', 'promo_popup_background_repeat' ) ) {
        $inline_styles[] = 'background-repeat: ' . Kirki::get_option( 'saturnthemes', 'promo_popup_background_repeat' );
    }
    if ( Kirki::get_option( 'saturnthemes', 'promo_popup_background_attachment' ) ) {
        $inline_styles[] = 'background-attachment: ' . Kirki::get_option( 'saturnthemes', 'promo_popup_background_attachment' );
    }
    if ( Kirki::get_option( 'saturnthemes', 'promo_popup_background_position' ) ) {
        $inline_styles[] = 'background-position: ' . Kirki::get_option( 'saturnthemes', 'promo_popup_background_position' );
    }
    ?>
    <div id="promo-popup" style="<?php echo esc_attr( implode( ';', $inline_styles ) ); ?>">
        <?php echo do_shortcode( wp_specialchars_decode( Kirki::get_option( 'saturnthemes', 'promo_popup_content' ), ENT_QUOTES) ); ?>
        <label id="promo-popup-checkbox-label">
            <input type="checkbox" id="promo-popup-checkbox" />
            <?php echo esc_html( "Don't show this popup again.", 'saturnthemes-financebank' ); ?>
        </label>
    </div>
    <?php
}

if ( ! function_exists( 'saturnthemes_financebank_read_more' ) && ! is_admin() ) :
	function saturnthemes_financebank_read_more() {
		$link = sprintf( '<a href="%1$s" class="more-link secondary-color">%2$s <i class="fa fa-chevron-right"></i></a>',
			esc_url( get_permalink( get_the_ID() ) ),
			sprintf( __( 'Read more<span class="screen-reader-text"> "%s"</span>', 'saturnthemes-financebank' ), get_the_title( get_the_ID() ) )
		);
		return $link;
	}
endif;