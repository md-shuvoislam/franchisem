<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ));
    wp_enqueue_style( 'child-understrap-fontsawesame', get_stylesheet_directory_uri() . 'assets/css/font-awesome.min.css', array(), $the_theme->get( 'Version' ));


    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/**
* Site Menus
*/

register_nav_menus( array(
    'right-menu' => esc_html__( 'Right Menu', 'understrap-child' ),
) );

register_nav_menus( array(
    'left-menu' => esc_html__( 'Left Menu', 'understrap-child' ),
) );

register_nav_menus( array(
    'footer-menu' => esc_html__( 'Footer Menu', 'understrap-child' ),
) );


/**
 * TGM Activation
 */
require dirname( __FILE__ ) . '/inc/tgm/tgm-init.php';

/**
 * Theme Option.
 */
require get_stylesheet_directory() . '/inc/options-init_php.php';




function rajimakers_custom_blog($atts)
{

// Attributes

$atts = shortcode_atts(array(
'posts_per_page' => 3,
'cat' => '',
'offset' => ''
), $atts);

$query = new WP_Query(array(
'posts_per_page' => $atts['posts_per_page'],
'offset' => $atts['offset'],
'cat' => $atts['cat']

));
ob_start();
if ($query->have_posts()) {
?>
<div class="rajimakers-blog-shortcode" > 
    <div class="container">
        <div class="row">
            <?php while ($query->have_posts()): $query->the_post(); ?>
            <div class="col-md-4">
                <div class="single-blog">
                    <a href="<?php the_permalink()?>">
                        <?php 
                        if ( has_post_thumbnail() ) { 
                                the_post_thumbnail(); 
                            }
                        ?>  
                    </a>
                    <div class="blog-content">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            ?>
        </div>  
    </div>
<?php wp_reset_query();?>
</div><?php
}
return ob_get_clean();
}
add_shortcode('rajimakers-blog', 'rajimakers_custom_blog');