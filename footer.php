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
	<footer id="colophon" class="site-footer" style="height:35px; padding: 2vw;">
		<div class="site-info">
<!--            <h1 class="site-title">-->
<!--                <a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home"><span class="no-logo">--><?php //bloginfo( 'name' ); ?><!--</span>-->
<!--                </a>-->
<!--            </h1>-->
            <strong><a href="<?php echo esc_url( __( 'mailto:anders.eriksson@vespr.se?Subject=Hej', 'we' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Kontakt  %s', 'we' ), '' );
			?></a></strong>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( ' %1$s %2$s', 'vespr arkitektur' ), '', '<a href="mailto:anders.eriksson@vespr.se?Subject=Hej">
anders.eriksson@vespr.se 
</a> 	<span class="sep"> | </span> +46(0)72 503 6570' );
			?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
