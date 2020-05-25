<section class="team-members-section">
    <div class="team-members wrapper">
        <?php 
        
        // ======= Our Team Query
        $ourteam_args = array(
            'post_type' => 'team_members',
            'tax_query' => array(
                array(
                    'taxonomy' => 'team',
                    'field' => 'slug',
                    'terms' => 'our-team'
                )
            )
        );
        $ourteam_query = new WP_Query( $ourteam_args );
    
        if ( $ourteam_query->have_posts() ): ?>
    
        <h2 class="text-container-heading">Our Team</h2>
    
        <?php endif; ?>
    
        <?php
        
        // ======= Leadership Query
        $leadership_args = array(
            'post_type' => 'team_members',
            'posts_per_page'=> -1,
            'order'=> 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'team',
                    'field' => 'slug',
                    'terms' => 'leadership'
                )
            )
        );
        $leadership_query = new WP_Query( $leadership_args );
    
    
        
        // The Loop
        if ( $leadership_query->have_posts() ): ?>
    
            <h3 class="teams-heading">Leadership</h3>
    
            <ul class="team-members-list">
    
                <?php while ( $leadership_query->have_posts() ) : $leadership_query->the_post(); ?>
    
                <?php $job_title = get_field('job_title'); ?> 
    
                    <li class="team-members-item">
                        <a class="team-members-link" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('sqaure-large'); ?>
                            <h3 class="team-members-h3"><?php the_title(); ?></h3>
                            <?php if(get_field('job_title', get_the_id())): ?> 
                            <p class="team-members-p"><?php echo get_field('job_title', get_the_id()); ?></p>
                            <?php endif; ?>
                        </a>
                    </li>
    
                <?php endwhile; ?>
    
            </ul>
            
        	<?php /* Restore original Post Data */
        	wp_reset_postdata();
         else : ?>
        
            <!-- no posts found -->
        	<p>There are no posts</p>
        <?php endif; ?>
    
        <?php 
    
            // ======= Programming Query
            $programming_args = array(
            'post_type' => 'team_members',
            'posts_per_page'=> -1,
            'order'=> 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'team',
                    'field' => 'slug',
                    'terms' => 'programming'
                )
            )
        );
        $programming_query = new WP_Query( $programming_args );
    
        // The Loop
        if ( $programming_query->have_posts() ): ?>
    
            <h3 class="teams-heading">Artistic Committee</h3>
    
            <ul class="team-members-list">
    
                <?php while ( $programming_query->have_posts() ) : $programming_query->the_post(); ?>
    
                <?php $job_title = get_field('job_title'); ?> 
    
                    <li class="team-members-item">
                        <a class="team-members-link" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('sqaure-large'); ?>
                            <h3 class="team-members-h3"><?php the_title(); ?></h3>
                            <?php if(get_field('job_title', get_the_id())): ?> 
                            <p class="team-members-p"><?php echo get_field('job_title', get_the_id()); ?></p>
                            <?php endif; ?>
                        </a>
                    </li>
    
                <?php endwhile; ?>
    
            </ul>
            
        	<?php /* Restore original Post Data */
        	wp_reset_postdata();
         else : ?>
        
            <!-- no posts found -->
        	<p>There are no posts</p>
        <?php endif; ?>
    
    
        <?php 
    
            // ======= Festival Query
            $festival_args = array(
            'post_type' => 'team_members',
            'posts_per_page'=> -1,
            'order'=> 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'team',
                    'field' => 'slug',
                    'terms' => 'festival'
                )
            )
        );
        $festival_query = new WP_Query( $festival_args );
    
        // The Loop
        if ( $festival_query->have_posts() ): ?>
    
            <h3 class="teams-heading">Programming Committee</h3>
    
            <ul class="team-members-list">
    
                <?php while ( $festival_query->have_posts() ) : $festival_query->the_post(); ?>
    
                <?php $job_title = get_field('job_title'); ?> 
    
                    <li class="team-members-item">
                        <a class="team-members-link" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('sqaure-large'); ?>
                            <h3 class="team-members-h3"><?php the_title(); ?></h3>
                            <?php if(get_field('job_title', get_the_id())): ?> 
                            <p class="team-members-p"><?php echo get_field('job_title', get_the_id()); ?></p>
                            <?php endif; ?>
                        </a>
                    </li>
    
                <?php endwhile; ?>
    
            </ul>
            
        	<?php /* Restore original Post Data */
        	wp_reset_postdata();
         else : ?>
        
            <!-- no posts found -->
        	<p>There are no posts</p>
        <?php endif; ?>
    
    </div>
</section>