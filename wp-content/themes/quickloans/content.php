<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
        <div class="featured-post">
            <?php _e( 'Featured post', 'twentytwelve' ); ?>
        </div>
    <?php endif; ?>
	
    <div class="entry-left">
        <header class="entry-header">
        <?php if ( comments_open() && !is_single() && !is_search()) : ?>
            <div class="comments-link">
                <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
            </div><!-- .comments-link -->
        <?php endif; // comments_open() ?>
            <?php if ( is_single() ) : ?>
            <?php else : ?>
                <h1 class="entry-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h1>
            <?php endif; // is_single() ?>
        </header><!-- .entry-header -->

    <?php if ( ! post_password_required() && ! is_attachment() ) :
        the_post_thumbnail();
    endif; ?>

        <?php if ( !is_singular() ) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        <?php else : ?>
            <div class="entry-content">
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
        <?php endif; ?>
    </div>
    <div class="entry-right">
        <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
    <div style="clear: both;"></div>
</article><!-- #post -->
