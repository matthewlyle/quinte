<?php
/**
 * @package words
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="post-header">
    <div class="container">
    <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
    <?php include("inc/post-meta.php") ?>
    </div>
  </header>

  <main class="container">

    <section class="post-content">

      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
      } ?>

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

  </main>

</article>
