<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
<!-- 			<a href="javascript:void(0)	" class="imprint" title="<?php esc_attr_e( 'love life', 'twentytwelve' ); ?>">
				<?php printf( __( '明日天寒地冻，日短夜长，路远马亡', '梦马' ), '梦马' ); ?>
			</a> -->
			<p>明日天寒地冻，日短夜长，路远马亡</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
