<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wiggle_Doug
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="grid">
			<div class="footer-link">
				<a href="<?php echo esc_url( __( '/terms-conditions/', 'wiggle-doug' ) ); ?>">
					Terms and Conditions
				</a>
			</div>
			<div class="site-branding">
				<!-- <?php the_custom_logo(); ?> -->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg" alt="Brand logo for company">
			</div><!-- .site-branding -->
			<div class="footer-link">
				<?php echo get_the_privacy_policy_link(); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
