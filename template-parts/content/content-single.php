<?php
/**
 * 
 * Template part for displaying single posts
 * 
 * 
 * @package WordpressTheme
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

		<?php the_title('<h1 class="entry-title">','</h1>'); ?>

	</header>

    <div class="entry-meta">

        <?php wordpress_theme_entry_meta(); ?>

    </div>

    <div class="entry-content">

        <?php the_content(); ?>

    </div>

    <footer class="entry-footer">

        <?php wordpress_theme_entry_footer(); ?>

    </footer>

</article>