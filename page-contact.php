<!-- 
  Template Name: Contact
 -->

<?php get_header(); ?>

    <div id="primary" class="content-area wrapper">

        <div id="main" class="site-main" role="main">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
            <div class="heading-container">

                <h1 class="heading-primary contact-heading"><?php the_title(); ?></h1>

            </div>

            <?php the_content(); ?>
        
            <?php endwhile; ?>

        </div>

    </div>

<?php get_footer(); ?>