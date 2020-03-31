<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wiggle_Doug
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wiggle-doug' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<!-- <?php the_custom_logo(); ?> -->
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg" alt="Brand logo for company">
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
