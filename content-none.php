<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package words
 */
?>

<section class="page no-results not-found">
  <header class="post-header">
    <div class="container">
      <h1 class="post-title"><?php _e( 'Nothing Found', 'words' ); ?></h1>      
    </div>
  </header><!-- .page-header -->

  <div class="container">
    <div class="post-content">
      <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
        <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'words' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
      <?php elseif ( is_search() ) : ?>
        <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'words' ); ?></p>
        <?php get_search_form(); ?>
      <?php else : ?>
        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'words' ); ?></p>
        <?php get_search_form(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>