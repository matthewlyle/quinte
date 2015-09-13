<?php get_header(); ?>

	<section id="primary" class="content-area">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'quinte' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>
			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'search' );
				endwhile;
				the_posts_navigation();
			else :
				get_template_part( 'content', 'none' ); ?>
			endif; ?>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
