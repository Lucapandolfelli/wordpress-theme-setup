<?php
/**
 * 
 * Custom template tags for this theme
 * 
 * 
 * @package WordpressTheme
 * @since 1.0.0
 */

if(! function_exists('wordpress_theme_posted_on')){

    function wordpress_theme_posted_on() {

		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf(
			$time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date())
		);

		echo '<span class="posted-on">';

		printf(
			esc_html__('Posted on %s','wp-theme'),
			$time_string 
		);

		echo '</span>';

	}

}

if(! function_exists('wordpress_theme_entry_meta')){

	function wordpress_theme_entry_meta(){

		if(! is_single()){

			if(has_category() || has_tag()){

				echo '<div class="post-taxonomies">';

				$categories_list = get_the_category_list(__(', ','wp-theme'));

				if ($categories_list){

					printf(
						'<span class="cat-links">' . esc_html__('Categorized as %s','wp-theme') . '</span>',
						$categories_list
					);

				}

				$tags_list = get_the_tag_list('', __(', ','wp-theme'));

				if ($tags_list) {

					printf(
						'<span class="tags-links">' . esc_html__('Tagged %s','wp-theme') . '</span>',
						$tags_list
					);
				}

				echo '</div>';

			}

		}

	}

}
