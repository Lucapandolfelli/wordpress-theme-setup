<?php
/**
 * 
 * The archive file
 * 
 * 
 * @package WordpressTheme
 * @since 1.0.0
 */

get_header();

$description = get_the_archive_description();
?>

<div class="container">

	<?php if(have_posts()): ?>

		<header class="page-header alignwide">

			<?php the_archive_title('<h1 class="page-title">','</h1>'); ?>

			<?php if($description): ?>

				<div class="archive-description"><?php echo wp_kses_post(wpautop($description)); ?></div>

			<?php endif; ?>

		</header>

		<?php while(have_posts()): ?>

			<?php the_post(); ?>
			<?php get_template_part('template-parts/content/content'); ?>

		<?php endwhile; ?>

		<?php wordpress_theme_the_posts_navigation(); ?>

	<?php else: ?>

		<?php get_template_part('template-parts/content/content-none'); ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
