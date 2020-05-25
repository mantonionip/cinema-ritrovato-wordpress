<!-- 
    Template Name: Home 
-->
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class="home-page">
        
        <section class="home-hero wrapper">
            <span class="filmroll-img filmroll-img-home"></span>

            <div class="hero-container">
                <h1><?php the_title(); ?></h1>
        
                <div>
                    <p class="home-hero-text"><?php the_field('home_hero_text'); ?></p>
                    <?php $hero_link = get_field('home_hero_link'); ?>
            
                    <a href="<?php echo $hero_link['url'] ?>" target="<?php echo $hero_link['target'] ?>" class="learn-more-button"><?php echo $hero_link['title'] ?></a>
                </div>
            </div>
        </section>
    
        <!-- About Us Section -->
        <section class="home-about wrapper">
            <div class="home-column-text">
                <?php if(get_field('about_title')): ?>
                    <h2><?php the_field('about_title'); ?></h2>
                <?php endif; ?>
        
                
                <?php if(get_field('about_content')):
                    the_field('about_content');
                endif; ?>
        
                <?php $about_link = get_field('about_link'); ?>
                <?php if($about_link): ?>
                    <a href="<?php echo $about_link['url'] ?>" target="<?php echo $about_link['target'] ?>" class="learn-more-button"><?php echo $about_link['title'] ?></a>
                <?php endif; ?>
            </div>
            
            <div class="home-column-image">
                <?php $about_image = get_field('about_image'); 
                    echo wp_get_attachment_image(
                        $about_image,
                        'square-large',
                        array( 'class' => 'about-image' )  
                    );
                ?>
            </div>
            
        </section>
    
        <!-- Featured Section -->
        <section class="home-featured home-featured-one wrapper">
            <div class="home-column-image">
                <?php $featured_image = get_field('featured_image');
                    echo wp_get_attachment_image(
                        $featured_image,
                        'medium'
                    );
                ?>
            </div>
    
            <div class="home-column-text">
                <?php if(get_field('featured_sub_heading')): ?>
                    <h3><?php the_field('featured_sub_heading'); ?></h3>
                <?php endif; ?>
        
                <?php $featured_title = get_field('featured_title'); ?>
                <?php if($featured_title): ?>
                    <h2>
                        <a href="<?php echo $featured_title['url'] ?>" target="<?php echo $featured_title['target'] ?>"><?php echo $featured_title['title'] ?></a>
                    </h2>
                <?php endif; ?>
        
                <?php if(get_field('featured_content')):
                    the_field('featured_content');
                endif; ?>
            </div>
        </section>
        
        <?php 
        
        $employee = get_field('featured_employee'); ?>
        
        <?php if($employee): ?>
            <section class="home-featured home-featured-two wrapper">
                
                <div class="home-column-text">
                    <h3><?php the_field('featured_employee_title'); ?></h3>
                    <h2><?php echo $employee->post_title; ?></h2>
                    <p><?php echo wp_trim_words($employee->post_content, 200); ?></p>
                </div>
                <div class="home-column-image">
                <?php $employee_id = $employee->ID;
                    $featured_image_id = get_post_thumbnail_id($employee_id);
                    
                    
                    echo wp_get_attachment_image(
                        $featured_image_id,
                        'square-large'
                    )
                ?>
                </div>
            </section>
        <?php endif; ?>
    </div>
        
<?php endwhile; ?>

<?php get_footer(); ?>