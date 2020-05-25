<?php get_header(); ?>

  <div id="primary" class="content-area wrapper">
    
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

        <?php endwhile; else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; // End the loop. Whew. ?>

    </main>

  </div> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>



