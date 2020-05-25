<?php get_header();  ?>

<!-- <div class="wrapper"> -->
  <div class="site-main">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->

  <?php //get_sidebar(); ?>

<!-- </div> -->

<?php get_footer(); ?>