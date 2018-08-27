<?php
/**
 * @package we
 */

get_header(); ?>
    <!--    <div id="header-usp" class="header-usp">-->
    <!--        <p>  <img width="768" height="455" src="http://localhost:8888/wp-content/uploads/2017/11/logo-768x455-copy.png" class="custom-toto" alt="VESPR" itemprop="logo" src="http://localhost:8888/wp-content/uploads/2017/11/logo-768x455-copy.png">-->
    <!--         tel +46(0)72 503 6570</p>-->
    <!--    </div>-->
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <!--            <div class="videoContainer" style="height: 130px">-->
            <!--                 <div id="centered">-->
            <!---->
            <!--                     <p><strong>HEJ!</strong> Vi på Vespr arbetar med rådgivning, idé och analys, gestaltningsprogram, kostnads- och-->
            <!--                         beslutsunderlag, plan, bygglov samt detaljprojektering.</p>-->
            <!--                     <div class="contact-info">anders.eriksson@vespr.se</div>-->
            <!--                </div>-->
            <!---->
            <!--            </div>-->

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
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
