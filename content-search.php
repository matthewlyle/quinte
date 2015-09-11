<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package words
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<div class="container">
		<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
			<?php include("inc/post-meta.php") ?>
		<?php endif; ?>
	</header>
	<div class="post-content container">
		<?php the_excerpt(); ?>
	</div>
</article>
