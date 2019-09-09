<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper hero-area" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/1165.jpg');background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; ">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row text-center">

			<div class="col-md-12 content-area" id="primary">

				<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti assumenda minus voluptatibus, provident totam quo ipsum consectetur minima vero, corrupti repudiandae animi! Corporis soluta amet eaque vitae, sint molestias eligendi.</h2>

			</div><!-- #primary -->

		</div><!-- .row end -->

		<?php 
				echo do_shortcode('[rajimakers-blog]');
			?>

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
