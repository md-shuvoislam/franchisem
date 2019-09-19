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


<div class="wrapper" id="full-width-page-wrapper hero-area" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slider-banner.jpg');background-size: cover; background-position: center; background-repeat: no-repeat; height: 100%; padding: 160px 0; ">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row text-center">
			<div class="col-md-12 hero-content-area" id="primary">
				<h1><strong>#</strong>1 Source of Franchise Leads </h1>
				<h2>For Franchisors Looking To </h2>
				<p>WANT more organic business for your Franchise  sales Team?</p>
				<a href="">See If you Qualify</a>
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->

<div class="cta-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8 cta-left">
				<p>Download our FREE E-Book</p>
				<h3>Cracking the code to Success</h3>
			</div>
			<div class="col-md-4 text-right">
				<a href="#">Download</a>
			</div>
		</div>
	</div>
</div>

<div class="screenshot-area">
	<div class="container">
		<div class="row">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample-screenhshot.png" alt="">
			<h3>Imagine having access to as many </h3>
			<h2><a href="">commission-free</a> leads your sales team could handle...</h2>
			<div class="screenshot-area-list">
				<ul>
					<li>What if you could generate so many in-house leads that you’ll be struggling to hire capable sales people to keep up with growth?</li>
					<li>What if you didn’t have to sacrifice your growth by using franchise brokers who take up to 90% of your franchise fee as commision?</li>
					<li>What if using brokers was just an option and not the rule to grow your franchise business?</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="how-franchis-area">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h2>How Franchise MOB <strong>Will Help Accelerate Your Growth...</strong></h2>
			</div>
		</div>
		<?php
		if( have_rows('how_franshise_lists') ): ?>
		 	
		   <?php while ( have_rows('how_franshise_lists') ) : the_row(); ?>

		    	<div class="row how-franchis-lists">
					<div class="col-md-2 number">
						<p><?php the_sub_field('number'); ?></p>
					</div>
					<div class="col-md-10 how-item-text">
						<?php the_sub_field('franchise_item_text'); ?>
					</div>
				</div>
		   <?php endwhile;
		else :
		endif;

		?>
	</div>
</div>

<div class="team-area">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<div class="single-team" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team-single-image.png'); background-repeat: no-repeat; background-position: center; background-size: contain;height: 328px;">
					<h3>Franchise Development</h3>
					<a href="" class="learn-more-btn">Learn More</a>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="single-team" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team-single-image.png'); background-repeat: no-repeat; background-position: center; background-size: contain;height: 328px;">
					<h3>Franchise Development</h3>
					<a href="" class="learn-more-btn">Learn More</a>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="single-team" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team-single-image.png'); background-repeat: no-repeat; background-position: center; background-size: contain;height: 328px;">
					<h3>Franchise Development</h3>
					<a href="" class="learn-more-btn">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="services-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="servivces-heading">
					<h2>Services to <strong>GROW YOUR Franchise</strong></h2>
				</div>
			</div>
		</div>

		<div class="row service">
			<div class="col-lg-6 col-md-6 service-text1">
				<h3>Custom In house Lead Generation Programs</h3>
				<p>Let us develop a custom lead-generation solution that will attract qualified franchise leads. This is our premier service and almost gauranteed to crush broker referral volume.</p>
				<a href="" class="service-btn">Learn More</a>
			</div>
			<div class="col-md-6 text-right">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services-image.jpg" alt="">
			</div>
		</div>

		<div class="row service">
			<div class="col-md-6 service-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services-image.jpg" alt="">
			</div>
			<div class="col-md-6 service-text">
				<h3>Custom In house Lead Generation Programs</h3>
				<p>Let us develop a custom lead-generation solution that will attract qualified franchise leads. This is our premier service and almost gauranteed to crush broker referral volume.</p>
				<a href="" class="service-btn">Learn More</a>
			</div>
		</div>

		<div class="row service">
			<div class="col-md-6 service-text">
				<h3>Custom In house Lead Generation Programs</h3>
				<p>Let us develop a custom lead-generation solution that will attract qualified franchise leads. This is our premier service and almost gauranteed to crush broker referral volume.</p>
				<a href="" class="service-btn">Learn More</a>
			</div>
			<div class="col-md-6 text-right service-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services-image.jpg" alt="">
			</div>
		</div>

		<div class="row service">
			<div class="col-md-6 service-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services-image.jpg" alt="">
			</div>
			<div class="col-md-6 service-text">
				<h3>Custom In house Lead Generation Programs</h3>
				<p>Let us develop a custom lead-generation solution that will attract qualified franchise leads. This is our premier service and almost gauranteed to crush broker referral volume.</p>
				<a href="" class="service-btn">Learn More</a>
			</div>
		</div>

		<div class="row service">
			<div class="col-md-6 service-text">
				<h3>Custom In house Lead Generation Programs</h3>
				<p>Let us develop a custom lead-generation solution that will attract qualified franchise leads. This is our premier service and almost gauranteed to crush broker referral volume.</p>
				<a href="" class="service-btn">Learn More</a>
			</div>
			<div class="col-md-6 text-right service-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services-image.jpg" alt="">
			</div>
		</div>
	</div>
</div>


<div class="featured-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="servivces-heading">
					<h2>Featured <strong>TRAININGS</strong></h2>
				</div>
			</div>
		</div>
		<div class="blogs">
			<?php echo do_shortcode('[rajimakers-blog]');?>
		</div>
		<div class="row see-all-blog">
			<div class="col-md-12 text-center">
				<a href="#">See All Blogs</a>
			</div>
		</div>
	</div>
</div>


<div class="footer-cta-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8 cta-left">
				<p>Download our FREE E-Book</p>
				<h3>Cracking the code to Success</h3>
			</div>
			<div class="col-md-4 text-left">
				<a href="#">Download</a>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>