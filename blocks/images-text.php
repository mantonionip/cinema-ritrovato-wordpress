<section class="images-text wrapper">

   <div class="text-container">

      <?php if(get_field('title')): ?>
         <h2 class="text-container-heading"><?php the_field('title'); ?></h2>
      <?php endif; ?>
​
      <?php if(get_field('content')): ?>
         <?php the_field('content'); ?>
      <?php endif; ?>
​
      <?php $link = get_field('link'); ?>
      <?php if($link): ?>
         <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      <?php endif; ?>
      
   </div>
​
   <?php $image = get_field('image'); ?>
   <?php echo wp_get_attachment_image(
      $image,
      'medium'
      ); 
   ?>
  
</section>