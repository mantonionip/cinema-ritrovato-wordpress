<?php get_header(); ?>

    <?php if ( have_posts() ) the_post(); ?>

    <div class="wrapper">
      <h1 class="monthly-archive-heading">
        <?php if ( is_day() ) : ?>
          Daily Archives: <?php the_date(); ?>
        <?php elseif ( is_month() ) : ?>
          Monthly Archives: <?php the_date('F Y'); ?>
        <?php elseif ( is_year() ) : ?>
          Yearly Archives: <?php the_date('Y'); ?>
        <?php else : ?>
          Blog Archives
        <?php endif; ?>
      </h1>
    </div>

    <?php
    /* Since we called the_post() above, we need to
      * rewind the loop back to the beginning that way
      * we can run the loop properly, in full.
      */
    rewind_posts();

    /* Run the loop for the archives page to output the posts.
      * If you want to overload this in a child theme then include a file
      * called loop-archives.php and that will be used instead.
      */
    get_template_part( 'index' );
    ?>

<?php //get_footer(); ?>