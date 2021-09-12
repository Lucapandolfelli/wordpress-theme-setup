<?php
/**
 * 
 * The 404 page (not found)
 * 
 * 
 * @package WordpressTheme
 * @since 1.0.0
 */

get_header();
?>

	<div class="container">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('Nothing here', 'wp-theme'); ?></h1>
		</header>

		<div class="error-404 not-found">
			<div class="page-content">
				<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'wp-theme'); ?></p>
			</div>
		</div>
	</div>

<?php get_footer(); ?>