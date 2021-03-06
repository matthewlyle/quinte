<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'quinte' ); ?></a>

  <header class="site-header">

    <div class="container">
      <div class="site-header-collapsed">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header-logo"><?php bloginfo( 'name' ); ?></a>
        <!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
        <i class="fa fa-list site-header-nav-trigger"></i>
      </div>
    </div>

    <div class="expanded-site-header">
      <div class="expanded-site-header-left">
        <h2 class="widget-title">Menu</h2>
        <?php
          if ( has_nav_menu('primary') ) {
            wp_nav_menu( array( 'theme_location' => 'primary' ) );
          }
          dynamic_sidebar( 'left' );
        ?>
      </div>
        <div class="expanded-site-header-right">
          <?php dynamic_sidebar( 'right' ); ?>
        </div>
      </div>

  </header>

  <div id="content" class="site-content">
