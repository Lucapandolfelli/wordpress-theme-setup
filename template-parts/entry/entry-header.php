<?php
/**
 * 
 * Entry header
 * 
 * 
 * @package WordpressTheme
 * @since 1.0.0
 */
?>

<header class="entry-header">

    <?php

        // Title

        if(is_single() || is_page()){
            printf(
                '<h1 class="page-title %1$s">%2$s</h1>',
                wp_kses_post(get_the_title())
            );
        } else {
            printf(
                '<h2 class="entry-header"><a href="%1$s">%2$s</a></h2>',
                esc_url(get_the_permalink()),
                wp_kses_post(get_the_title())
            );
        }
    ?>

</header>