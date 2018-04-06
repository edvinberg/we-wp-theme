<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package we
 */

get_header(); ?>
    <div id="header-usp" class="header-usp">
        <p>  <img width="768" height="455" src="http://localhost:8888/wp-content/uploads/2017/11/logo-768x455-copy.png" class="custom-toto" alt="VESPR" itemprop="logo" srcset="http://localhost:8888/wp-content/uploads/2017/11/logo-768x455-copy.png 768w, http://localhost:8888/wp-content/uploads/2017/11/logo-768x455-copy-300x178.png 300w" sizes="(max-width: 768px) 100vw, 768px">
         tel +46(0)72 503 6570</p>
    </div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <!-- Header -->
            <!--            <header>-->
            <!--                <div class="logo">-->
            <!--                </div>-->
            <!---->
            <!--                </nav>-->
            <!--            </header>-->
            <!-- Slider -->
            <!--     <div style="width: 65%;  float: left;" >-->
            <!--            <div id="slider">-->
            <!--                <div class="slides">-->
            <!---->

            <!---->
            <!---->
            <!---->
            <!---->
            <!---->
            <!---->
            <!---->
            <!---->
            <!---->
            <!---->
            <!---->
            <!--                </div>-->
            <!--                <div class="switch">-->
            <!--                    <ul>-->
            <!--                        <li>-->
            <!--                            <div class="on"></div>-->
            <!--                        </li>-->
            <!--                        <li></li>-->
            <!--                        <li></li>-->
            <!--                        <li></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->
            <!---->
            <!--     </div>-->
            <!--            <div style="width: 35%; background: red;  float: left;">-->
            <!--                <video  autoplay>-->
            <!--                    Your browser does not support the video tag.-->
            <!--                </video>-->
            <!--            </div>-->

            <div class="videoContainer" style="height: 130px">
                 <div id="centered">

                     <p>Vi på Vespr arbetar med rådgivning, idé och analys, gestaltningsprogram, kostnads- och
                         beslutsunderlag, plan, bygglov samt detaljprojektering.</p>
                     <div class="contact-info">anders.eriksson@vespr.se</div>
                </div>

            </div>
<!--            <section style="margin:0 auto;width:1000px;height:100%"  >-->
<!--                <div id="sec"></div>-->
<!---->
<!---->
<!--                <div id="hori">-->
<!---->
<!--                    <img src="http://andishehit.ir/images/m2.jpg" height="150" width="200"/>-->
<!--                </div>-->
<!--                <div id="hori2">-->
<!---->
<!--                    <img src="http://andishehit.ir/images/m1.jpg" height="150" width="200"/>-->
<!--                </div>-->
<!--            </section>-->
            <div class="flex-grid-thirds">
                     <?php
	                if ( have_posts() ) :

		                if ( is_home() && ! is_front_page() ) : ?>
                            <header>
                                <h1 class="page-title screen-reader-text">
					                <?php single_post_title(); ?></h1>
                            </header>

			                <?php
		                endif;

		                /* Start the Loop */
		                while ( have_posts() ) : the_post();
			                /*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
			                get_template_part( 'template-parts/content', get_post_format());

		                endwhile;

		                the_posts_navigation();

	                else :

		                get_template_part( 'template-parts/content', 'none' );

	                endif; ?>
<!--                <div class="col col2">  <video style="width: 100%" loop autoplay>-->
<!--                        <source src="http://localhost:8888/wp-content/uploads/2018/04/IMG_0165.mov" type="video/mp4">-->
<!--                        <source src="http://localhost:8888/wp-content/uploads/2018/04/IMG_0165.mov" type="video/ogg">-->
<!--                        Video not supported.-->
<!--                    </video></div>-->
<!--                <div class="col2">This little piggy had roast beef.</div>-->
            </div>






<!--            <div class="videoContainer">-->
<!--                <video loop autoplay>-->
<!--                    <source src="http://localhost:8888/wp-content/uploads/2018/04/IMG_0165.mov" type="video/mp4">-->
<!--                    <source src="http://localhost:8888/wp-content/uploads/2018/04/IMG_0165.mov" type="video/ogg">-->
<!--                    Video not supported.-->
<!--                </video>-->
<!---->
<!---->
<!---->
<!--            </div>-->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
#get_sidebar();
get_footer();
