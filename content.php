<?php
/**
 * @package words
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<div class="container">
			<div class="post-header-container">
				<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			</div>
		<?php if ( 'post' == get_post_type() ) : ?>
			<?php include("inc/post-meta.php") ?>
		<?php endif; ?>			
		</div>
	</header>

	<div class="container">

		<div class="post">
			<div class="post-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'words' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'words' ),
						'after'  => '</div>',
					) );
				?>
			</div>


		<footer class="post-meta">
			<?php words_entry_footer(); ?>
		</footer>

		</div>

	</div>

</article>