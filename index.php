<?php get_header(); ?>

    <div class="container">
        <div class="blog-hero">
            <p class="title-large"><?php echo get_bloginfo('description') ?></p>
        </div>
    </div>
    <div class="container">
        <div class="s-grid--home">
            <div class="home-post-list">
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="home-post-item">
                    
                        <?php the_post_thumbnail( 'small-square', array('class' => 'home-post-thumbnail') ); ?>

                        <div>
                            <h2><a class="title-h2" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            <p class="postmetadata"><?php the_time('d M,'); ?> por <?php the_author_posts_link(); ?> <?php _e( 'postado em' ); ?> <?php the_category( ', ' ); ?></p>
                            <p><?php the_excerpt('30'); ?></p>
                        </div>
                    
                    </div>
                    <?php endwhile; ?>
                        <div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
                        <div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
                    <?php else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
            </div>

            <div class="sidebar">
sidebar
            </div>
        </div>
    </div>

<?php get_footer(); ?>