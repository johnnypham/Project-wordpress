<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
			<div class="site-info">
				<?php dynamic_sidebar( 'sidebar-footer' ); ?>
			</div><!-- site-info -->
		<?php endif; ?>
		<div id="author">Copyright@2013 BNI Everest Chapter - Designed & Developed by Goscom</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>