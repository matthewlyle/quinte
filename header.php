 <?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package words
 */
?><!DOCTYPE html>
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
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'words' ); ?></a>

  <header class="site-header" role="banner">

    <div class="container">
      <div class="site-header-collapsed">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header-logo"><?php bloginfo( 'name' ); ?></a>
        <!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
        <i class="fa fa-list site-header-nav-trigger"></i>
      </div>
    </div>

    <div class="expanded-site-header">
      <div class="expanded-site-header-left">
         <?php dynamic_sidebar( 'left' ); ?>
      </div>
        <section class="expanded-site-header-right">
          <?php dynamic_sidebar( 'right' ); ?>
        </section>
      </div>

  </header>

  <div id="content" class="site-content">
