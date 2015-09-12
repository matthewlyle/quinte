<?php
/**
 * @package words
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container">
	<header class="post-header">
		<?php the_title( sprintf( '<h3 class="post-header__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	  <?php if ( 'post' == get_post_type() ) : ?>
			<?php include("inc/post-meta.php") ?>
	  <?php endif; ?>
	</header>


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