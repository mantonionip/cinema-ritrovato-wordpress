<!-- 
    Template Name: Gallery
-->

<?php get_header();  ?>

    <div class="wrapper">

    <div class="site-main">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
            <div class="heading-container">
                <h1 class="heading-primary gallery-heading">
                    <?php the_title(); ?>
                </h1>
            </div>

            <?php the_content(); ?>
        
        <?php endwhile; ?>

    </div>
    
</div>

<?php get_footer(); ?>