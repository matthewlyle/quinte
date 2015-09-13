<?php get_header(); ?>

<main role="main">
	<?php
    while ( have_posts() ) : the_post();
    get_template_part( 'content', 'single' );
  			if ( comments_open() || get_comments_number() ) :
  				comments_template();
  			endif;
    endwhile;
  ?>
</main>

<?php get_footer(); ?>
