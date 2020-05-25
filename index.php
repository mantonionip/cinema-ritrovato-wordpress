<?php get_header(); ?>

  <div id="primary" class="content-area wrapper">
    
    <main id="main" class="site-main" role="main">

      <!-- Title of the page -->
      <div class="heading-container">
        <h1 class="heading-primary blog-heading">
          <?php echo get_the_title(13) ?>
        </h1>
      </div>

      <!-- Categories Dropdown -->
      <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="categories-selector-form">

        <?php
        $args = array(
            'show_option_all' => __( 'Categories' ),
            'orderby'         => 'name'
          );
        ?>

        <?php wp_dropdown_categories( $args ); ?>

        <input type="submit" name="submit" value="Go" class="categories-selector-button visuallyhidden2" >
        
      </form>
      
      <!-- Blog columns -->
      <div class="grid-blog">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content' ); ?>

        <?php endwhile; endif; ?>

      </div> <!--/.content -->

      <!-- Pagination letting user to go to the next/prev page -->
      <?php the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => __( '＜ PREV', 'Previous set of posts' ),
        'next_text' => __( 'NEXT ＞', 'Next set of posts' ),
        'screen_reader_text' => __( 'Going to another page', 'textdomain' ),
        )); 
      ?>

      <?php get_sidebar(); ?>

    </main>

  </div> 

<?php get_footer(); ?>



