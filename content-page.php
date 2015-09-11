<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package words
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="post-header">
    <div class="container">
    <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
    </div>
  </header>
  <main class="container">
    <section class="post-content">
      <?php the_content(); ?>
    </section>
    <footer class="post-meta">
      <?php words_entry_footer(); ?>
    </footer>
  </main>
</article>
