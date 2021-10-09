<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fruitfly
 */

get_header();
?>
		<section class="error-404 not-found">
			<h1>page lost in the clouds!</h1>
			<p>You have found the crusty long haul bathroom.</p>
			<div class="page-content">
				<p>Try a search?</p>
					<?php
					get_search_form();

					?>
					<p><span class="dashicons dashicons-arrow-left-alt"></span> Or go back to <a href="/">home page</a>...</p>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->


<?php
get_footer();
