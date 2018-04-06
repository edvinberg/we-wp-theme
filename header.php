<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package we
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'we' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
//			/*if ( is_front_page() && is_home() ) : */?>
<!--				<h1 class="site-title">-->
<!--                    <a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">-->
<!--                        <span class="no-logo">--><?php //bloginfo( 'name' ); ?><!--</span>-->
<!--                    </a>-->
<!--                </h1>-->
			<?php /*else : */?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
			<?php
//			endif;/**/

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
<!--				<p class="site-description">--><?php //echo $description; /* WPCS: xss ok. */ ?><!--</p>-->
			<?php
			endif; ?>
		</div><!-- .site-branding -->

<!--		<nav id="site-navigation" class="main-navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'we' ); ?><!--</button>-->
<!--			--><?php
//				wp_nav_menu( array(
//					'theme_location' => 'menu-1',
//					'menu_id'        => 'primary-menu',
//				) );
//			?>
<!--		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
