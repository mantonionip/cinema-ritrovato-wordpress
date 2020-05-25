<article id="post-<?php the_ID(); ?>" class="post">

    <header class="entry-header">

        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_post_type( $post ); ?>
                <?php //the_title(); ?>
            </a>
        </h2>
        
    </header>

    <div class="entry-content">

        <?php get_template_part( 'template-parts/content' ); ?>

    </div>

</article>