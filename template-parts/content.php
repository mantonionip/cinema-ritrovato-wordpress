<article class="single-blog" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="blog-image">
        <?php the_post_thumbnail('medium'); ?>
    </div>

    <div class="entry-content">

        <div class="blog-title-info">

            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                <?php the_title(); ?>
                </a>
            </h2>
        
            <div class="entry-info">

                <p class="byline">
                    <?php the_author(); ?> - 
                    <?php echo get_the_date('d/m/Y'); ?>
                </p>

            </div>

        </div>
        
        <section class="excerpt-section">

            <?php the_excerpt('Read more'); ?>

        </section>

    </div>

</article><!-- #post-## -->