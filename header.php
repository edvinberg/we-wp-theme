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
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Lato:300,900" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<script>$(function () { objectFitImages() })</script>
<body <?php body_class(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'we' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-branding">
            <div class="full">
                <div class="intro-container">
                    <div class="video-container">
<!--                        <video autoplay loop muted id="myvideo">-->
<!--                            <source src="http://localhost:8888/wp-content/uploads/2018/06/IMG_0165.mov"-->
<!--                                    type="video/mp4">-->
<!--                        </video>-->

                        <img class="poster" src="http://vespr.se/wp-content/uploads/2018/08/DSCF0111.jpg">

                        </img>
                    </div>
                    <div href="#" class="scroll-down" address="true">
<!--                        <div class="subheading">VESPR</div>-->
	                  <div> <?php the_custom_logo(); ?></div>
                        <div class="centered">Arkitektur & fastighetsutveckling</div>
<!--                        <div class="centered">Vi på Vespr arbetar med rådgivning, idé och analys, gestaltningsprogram, kostnads- och beslutsunderlag, plan, bygglov samt detaljprojektering.</div>-->
                    </div>
                </div>
            </div>
			<?php
			//			the_custom_logo();

			//TODO use description instead of H-Coded
			//			$description = get_bloginfo( 'description', 'display' );
			//			if ( $description || is_customize_preview() ) : ?>
            <!--                <p class="site-description">-->
			<?php //echo $description; /* WPCS: xss ok. */ ?><!--</p>-->
            <!--				--><?php
			//			endif; ?>
        </div>
    </header>

    <div id="content" class="site-content">