<?php get_header(); ?>

<div class="error-404">
  <div class="site-main wrapper">
  
    <div class="heading-container">
      <h1>Oops! Page not found.</h1>
    </div>

    <p class="msg-404"><?php esc_html_e( 'Apologies, but the page you are looking for doesn’t exist or has been moved!', 'Starter Theme' ) ?></p>

    <div class="search-form-404">
      <?php get_search_form(); ?>
    </div>
  
  </div> 

<?php get_footer(); ?>