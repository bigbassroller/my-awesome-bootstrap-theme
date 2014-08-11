<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package My Awesome Bootstrap Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'my_awesome_bootstrap_theme_credits' ); ?>
			<a href="http://wordpress.org/"><?php printf( __( 'Proudly powered by %s', 'my-awesome-bootstrap-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'my-awesome-bootstrap-theme' ), 'My Awesome Bootstrap Theme', '<a href="http://underscores.me/" rel="author">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>