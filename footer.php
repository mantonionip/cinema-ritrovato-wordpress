</main>

  <footer id="colophon" class="site-footer" role="contentinfo">

    <div class="wrapper footer">

      <div class="brand-container">

        <a href="<?php echo site_url(); ?>">
            <?php the_field('logo', 'options'); ?>
        </a>

      </div>
    
      <div class="social-media">

        <p><?php the_field('follow_text', 'options'); ?></p>

        <?php wp_nav_menu( array(
          'theme_location' => 'social',
          'menu_class'     => 'social-media-items'
          )); 
        ?>

      </div>

    </div>

  </footer>

  
</div><!-- #content -->

<?php wp_footer(); ?>

</body>

</html>