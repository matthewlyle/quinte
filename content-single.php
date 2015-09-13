<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container">
    <header class="post-header post-header--single">
      <?php the_title( '<h1 class="post-header__title">', '</h1>' ); ?>
      <?php if (is_single()) {
        include("inc/post-meta.php");
      } ?>
    </header>

    <section class="post-content">
      <?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
      <?php the_content(); ?>
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . __( 'Pages:', 'words' ),
          'after'  => '</div>',
        ) );
      ?>
      <footer class="post-meta">
        <?php words_entry_footer(); ?>
      </footer>
    </section>

  </div>
</article>
