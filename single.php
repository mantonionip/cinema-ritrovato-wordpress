<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <!-- Single Blog Post on a Separate page -->
  <div class="single-blog-page wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="single-blog-container">

      <div class="post-title">

        <!-- Option 1 -->
        <?php // echo get_the_category_list(); ?>
        <!-- Option 2 -->
        <div class="category-paragraph">
          <?php $categories = get_the_category(); 
            foreach($categories as $category) { ?>
              <p class="category"> <?php echo $category->name; ?> </p>
            <?php }
          ?>
        </div>

        <h1><?php the_title(); ?></h1>

        <h2>By <?php the_author(); ?></h2>

      </div>

      <div class="single-blog-img">
        <?php 
        $attr = [
          'class' => 'img-featured',
          'title' => get_the_title()
        ];
        the_post_thumbnail('large', $attr); ?>
      </div>

    </div>

    <div class="single-blog-content">

      <?php the_content(); ?>

      <?php wp_link_pages(array(
        'before' => '<div class="page-link"> Pages: ',
        'after'  => '</div>'
      )); ?>

    </div><!-- .entry-content -->

  </div><!-- #post-## -->

<?php endwhile; ?>

<?php get_footer(); ?>