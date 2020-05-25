<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

  <a href="#maincontent" class="skiplink">
    <?php esc_html_e( 'Go to main menu' ); ?>
  </a>

    <header id="masthead" class="site-header" role="banner">

      <div class="main-nav">
        
        <nav id="site-navigation" class="wrapper main-navigation" role="navigation">
          <button class="menu-button">
            <span><i class="fas fa-film"></i></span>
            <span class="visuallyhidden">Menu</span>
          </button>
          <?php 
            $args = [
              'theme_location'  => 'primary',
              'container_class' => 'navigation-menu'
            ];
            wp_nav_menu( $args );
          ?>
        </nav>
          
      </div>

    </header>

    <!-- <div id="maincontent" class="site-content"> -->

<main id="maincontent">