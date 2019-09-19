<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'single' ); ?>
					<div id="post-nav" class="navigation">
						<?php $prevPost = get_previous_post(true);
						if($prevPost) ?>
						<div class="nav-box previous">
							<?php previous_post_link('', 'yes'); ?>
							<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(301,199) );?>
							<?php previous_post_link('%link',"$prevthumbnail <p>%title</p>", TRUE); ?>
						</div>
							<?php $nextPost = get_next_post(true);
							if($nextPost) ?>
						<div class="nav-box next">
							<?php previous_post_link('', 'yes'); ?>
							<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(301,199) ); ?>
							<?php next_post_link('%link',"$nextthumbnail <p>%title</p>", TRUE); ?>
						</div>
						<?php ?>
					</div><!--#post-nav div -->
					<div class="nextprev-content">
						<?php the_content(); ?>
						<a href="">Back to Listing</a>
					</div>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

		<div class="row single-post-realted">
			<div class="col-md-12">
				<div class="divider-title">
					<h2><span>Related Articles</span></h2>
				</div>
				<?php echo do_shortcode('[rajimakers-blog]');?>
			</div>
		</div>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
