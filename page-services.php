<!-- 
    Template Name: Services
 -->

<?php get_header(); ?>

    <!-- <div id="primary" class="content-area wrapper"> -->

        <div id="main" class="site-main" role="main">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


            
            <section class="services">
                
                <div class="heading-container">
                    <h1 class="heading-primary services-heading">
                        <?php the_title(); ?>
                    </h1>
                </div>

                <div class="wrapper">

                    <?php include('services.php') ?>

                </div>
                
            </section>
            
            <?php endwhile; ?>
            
        </div>
        
    <!-- </div> -->

<?php get_footer(); ?>