<?php
/**
 * 
 * The single file
 * 
 * 
 * @package WordpressTheme
 * @since 1.0.0
 */

get_header();
?>

<?php while(have_posts()): the_post(); ?>
		
	<div class="container">

		<?php get_template_part('template-parts/content/content-single'); ?>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>

