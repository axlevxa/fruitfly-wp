<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fruitfly
 */

?>
<?php
$text_color = get_field('text_color');
?>
	</div><!-- #content-wrapper -->
	<footer id="colophon" class="container site-footer margin-top-l padding-bottom-m">
		<div class="site-info<?php if( $text_color ): ?> color-<?php echo $text_color; ?><?php endif; ?>">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fruitfly' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'fruitfly' ), 'WordPress' );
				?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
