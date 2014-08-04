<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package tcrs
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'tcrs' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'tcrs' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( '%1$s by %2$s.', 'tcrs' ), 'Two Column Right Sidebar', '<a href="http://precode.io/" rel="designer">Precode</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
