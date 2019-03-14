<?php
/**
 * Template Name: Contact Us
 *
 */

get_header(); ?>

	<div id="primary" class="full-content-area wrapper default-template clear">
		<main id="main" class="site-main content-area contact-page" role="main">
			<?php
			while ( have_posts() ) : the_post();
				$map = get_field("google_map"); ?>
				<header class="entry-header"><h1 class="entry-title"><?php the_title(); ?></h1></header>
				<div class="entry-content <?php echo ($map) ? 'half':'full clear'?>"><?php the_content(); ?></div>
				<?php if ($map) { ?>
					<div class="googlemap"><?php echo $map ?></div>
				<?php } ?>

			<?php endwhile; ?>
		</main><!-- #main -->
		<?php get_sidebar('default'); ?>
	</div><!-- #primary -->

<?php
get_footer();
