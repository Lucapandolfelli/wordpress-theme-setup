<?php
/**
 * 
 * Template part for displaying posts
 * 
 * 
 * @package WordpressTheme
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

		<?php if(is_singular()): ?>

			<?php the_title('<h1 class="entry-title">','</h1>'); ?>

		<?php else: ?>

			<?php the_title(sprintf('<h3 class="entry-title"><a href="%s">', esc_url(get_permalink())),'</a></h3>' ); ?>

		<?php endif; ?>

	</header>

	<div class="entry-meta">

		<?php wordpress_theme_entry_meta(); ?>

	</div>

    <div class="entry-content">

        <?php the_excerpt(); ?>

    </div>

	<footer class="entry-footer">

		<?php wordpress_theme_entry_footer(); ?>

	</footer>

</article>