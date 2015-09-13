<?php get_header(); ?>

<main role="main">
  <?php if ( have_posts() ) : ?>
  <header class="page-header">
    <div class="container">
      <?php the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="taxonomy-description">', '</div>' );
      ?>
    </div>
  </header>
  <?php ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
  <?php endwhile; ?>
  <?php the_posts_navigation(); ?>
    <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
