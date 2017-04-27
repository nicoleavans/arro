<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ARRO
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!------- todo what is tara's dominant url? ------>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'arro' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'arro' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<!---------  TODO what does this link look like? -->
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'arro' ), 'arro', '<a href="https://github.com/nicoleavans" rel="designer">ARRO</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
