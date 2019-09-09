<?php global $redux_opt; ?>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="footer-top-area">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<img src="http://localhost/franchisem/wp-content/uploads/2019/09/Screenshot_1.png" alt="">
				<ul>
					<li><a href=""><i class="fa fa-facebook"></i></a></li>
					<li><a href=""><i class="fa fa-google-plus"></i></a></li>
					<li><a href=""><i class="fa fa-twitter"></i></a></li>
					<li><a href=""><i class="fa fa-instagram"></i></a></li>
				</ul>
				<a href="" class="footer-top-btn">See You Qualify</a>

				<div class="footer-menu">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer-menu',
						)
					); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row text-center">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<p><?php echo $redux_opt['footer_copyright']; ?></p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

