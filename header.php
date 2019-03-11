<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>
<?php wp_head(); ?>

<?php  
	global $phone,$toll_free;
	$phone = get_field('phone_number','option');
	$toll_free = get_field('toll-free_number','option');
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site clear">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<nav id="mobile-navigation" class="mobile-navigation" role="navigation">
		<a href="#" id="toggleMenu" class="toggleMenu"><span></span></a>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mobile-primary-menu','container_class'=>'mobile-menu-wrapper' ) ); ?>
	</nav>

	<header id="masthead" class="site-header clear" role="banner">
		<div class="wrapper clear">
			<?php  
			$button_1_label = get_field('button_1_label','option');
			$button_1_link = get_field('button_1_link','option');
			$button_2_label = get_field('button_2_label','option');
			$button_2_link = get_field('button_2_link','option');
			?>
			
			<?php if( get_custom_logo() ) { ?>
	            <div class="logo">
	            	<?php the_custom_logo(); ?>
	            </div>
	        <?php } else { ?>
	            <h1 class="logo">
		            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </h1>
	        <?php } ?>

	        <div class="outer-nav-wrap">
	        	<div class="headtop clear">
	        		<span class="col left">
	        			<?php if ($phone) { ?>
		        		<span class="phone info"><i>Phone:</i> 
		        			<span class="desktop"><?php echo $phone ?></span>
		        			<a class="mobile" href="tel:<?php echo format_phone_number($phone) ?>"><?php echo $phone ?></a>
		        		</span>	
		        		<?php } ?>

		        		<?php if ($toll_free) { ?>
		        		<span class="toll info"><i>Toll Free:</i> 
		        			<span class="desktop"><?php echo $toll_free ?></span>
		        			<a class="mobile" href="tel:<?php echo format_phone_number($toll_free) ?>"><?php echo $toll_free ?></a>
		        		</span>	
		        		<?php } ?>
	        		</span>
	        		<span class="col right cta-buttons">
	        			<?php if ($button_1_link || $button_2_link) { ?>
	        				<?php if ($button_1_label && $button_1_link) { ?>
	        					<a href="<?php echo $button_1_link ?>"><span><?php echo $button_1_label ?></span></a>
	        				<?php } ?>

	        				<?php if ($button_2_label && $button_2_link) { ?>
	        					<a href="<?php echo $button_2_link ?>"><span><?php echo $button_2_label ?></span></a>
	        				<?php } ?>
		        		<?php } ?>
	        		</span>
	        	</div>
				<nav id="site-navigation" class="main-navigation clear" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu','container_class'=>'main-menu-wrapper' ) ); ?>
				</nav>
			</div>

		</div><!-- wrapper -->
	</header><!-- #masthead -->

	<?php get_template_part('template-parts/banner','home'); ?>

	<div id="content" class="site-content clear">
