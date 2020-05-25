<?php if(have_rows('services')): ?>
            
    <ul class="service-container u-relative">
        
        <?php $post_num = 1; ?>    

        <?php while(have_rows('services')) : the_row(); ?>

            <?php $service_title = get_sub_field('name'); ?>

            <li class="service-item">

                <h2 class="service-title service-title-<?php echo $post_num; ?> <?php
                    if ( $post_num == 1 ) {
                        echo "service-title-selected";
                    }
                ?>">
                    <?php echo $service_title ?>
                    <span class="icon"><i class="fas fa-angle-down"></i></span>
                </h2>

                <div class="servic-description service-description-<?php echo $post_num; ?>">

                    <?php the_sub_field('description'); ?>
                    
                </div>

            </li>

            <?php $post_num++; ?>

        <?php endwhile; ?>

    </ul>
<?php endif; ?>