<?php
/**
 * 
 * Index file
 * 
 *
 * @package WordpressTheme
 * @since 1.0.0
 */

get_header();
?>

<div class="container">

	<?php if (is_home() && ! is_front_page() && ! empty(single_post_title('', false))) : ?>

		<header class="page-header alignwide">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>

	<?php endif; ?>

	<?php if(have_posts()): while(have_posts()): the_post(); ?>

		<?php get_template_part('template-parts/content/content'); ?>

	<?php endwhile; ?>

		<?php wordpress_theme_the_posts_navigation(); ?>

	<?php else: ?>

		<?php get_template_part('template-parts/content/content-none'); ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>