<?php
/**
 * Created by PhpStorm.
 * User: darrenc
 * Date: 02/06/14
 * Time: 12:34
 */
get_header();

?>
    <style>
    </style>
<?php if (have_posts()) {
    while ( have_posts() ) : the_post(); ?>
    <section class="wraper_bg-bright cbp-so-scroller single" id="category">

        <h1><?php the_title() ?></h1>
        <div class="polosochka2"></div>
        <h3 class='thedate'><?php the_date() ?></h3>
        <?php if ( comments_open() && is_single()) : ?>
            <h3 class='thecomments'>
                <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
            </h3><!-- .comments-link -->
        <?php endif; // comments_open() ?>
        <div class="services_cont">
            <div class="cat_left"><?php
                        get_template_part( 'content', get_post_format() );
						
				if (has_tag()) {
                ?><div class="widget tagwidget"><?php
                       the_tags();
                ?></div><?php
				}
                        comments_template( '', true );

                if ( $wp_query->max_num_pages > 1 ) : ?>
                    <nav class="navigation" role="navigation">
                        <h3 class="assistive-text"><?php _e('Post Navigation','quickloans_theme'); ?></h3>
                        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'quickloans_theme' ) ); ?></div>
                        <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'quickloans_theme' ) ); ?></div>
                    </nav><!-- .navigation -->
                <?php endif; ?>
            </div>
            <div class="cat_right">
                <?php dynamic_sidebar('ql2-sidebar-right'); ?>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div style="clear: both;"></div>
    </section>
<?php
    endwhile;
                } else { // no posts
                    get_template_part('content','none');
                } // endif have_posts or not
get_footer();
