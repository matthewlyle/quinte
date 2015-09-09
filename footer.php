<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package words
 */
?>

	</div><!-- #content -->

	<footer class="site-footer" role="contentinfo">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'words' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'words' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( '%1$s by %2$s.', 'words' ), 'words', '<a href="http://processyellow.ca/">Matt Dunn</a>' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
