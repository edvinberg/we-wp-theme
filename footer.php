<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package we
 */

?>

	</div><!-- #content -->
<?php
?>
	<footer id="colophon" class="site-footer" style="height:150px; padding: 2vw;">
		<div class="site-info">
            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="no-logo"><?php bloginfo( 'name' ); ?></span>
                </a>
            </h1>
			<a href="<?php echo esc_url( __( 'www.vespr.se', 'we' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Love  %s', 'we' ), 'Ed' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( ': %1$s by %2$s.', 'we' ), 'we', '<a href="http://dagghätta.se/">eddaB</a>' );
			?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
