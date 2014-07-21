<?php
/**
 * Template Name: Themepage Blog
 *
 */
 
$indexPageOverride = true;

get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 0;
$args = array("post_type" => "post","paged" => $paged);

$wp_query = new WP_Query($args);
?>
    <style>
    </style>
    <section class="wraper_bg-bright cbp-so-scroller" id="category">

        <h1><span><?php _e('Latest Posts','quickloans_theme'); ?></span></h1>
        <div class="polosochka2"></div>
        <div class="services_cont">
            <div class="cat_left">
                <?php if (have_posts()) {
                    while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile;
                } else { // no posts
                    get_template_part('content','none');
                } // endif have_posts or not ?>

                <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                    <nav class="navigation" role="navigation">
                        <h3 class="assistive-text"><?php _e('Post Navigation','quickloans_theme'); ?></h3>
                        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'quickloans_theme' ) ); ?></div>
                        <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'quickloans_theme' ) ); ?></div>
                    </nav>
                <?php endif; ?>

            </div>
            <div class="cat_right">
                <?php dynamic_sidebar('ql-sidebar-right'); ?>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div style="clear: both;"></div>
    </section>
<?php

get_footer();
