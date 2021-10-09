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
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'fruitfly' ), 'fruitfly', '<a href="https://thelonghaul.org">long haul collective</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
