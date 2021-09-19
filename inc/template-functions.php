<?php
/**
 * 
 * Functions which enhance the theme by hooking into WordPress
 * 
 * 
 * @package WordpressTheme
 * @since 1.0.0
 */

function wordpress_theme_continue_reading_text() {

	$continue_reading = sprintf(
		esc_html__('Continue reading %s','wp-theme'),
		the_title('<span class="screen-reader-text">','</span>', false)
	);

	return $continue_reading;

}

?>