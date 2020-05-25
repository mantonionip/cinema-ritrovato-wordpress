<?php get_header(); ?>

<div class="content-area">

  <main class="site-main">

    <h1 class="category-page-heading">Category: <?php single_cat_title(); ?></h1>

    <?php
      $category_description = category_description();
      if ( ! empty( $category_description ) )
        echo '' . $category_description . '';
        get_template_part( 'index', 'category' );
      ?>

</main> <!-- /.content -->

  <?php //get_sidebar(); ?>

</div>

<?php get_footer(); ?>