<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package we
 */

get_header(); ?>

<!--    <article id="post---><?php //the_ID(); ?><!--" --><?php //post_class(); ?><!-->
<!--        --><?php //$url = wp_get_attachment_url(get_post_thumbnail_id(), 'thumbnail'); ?>
<!---->
<!--    </article>-->
    <div class='description'>
        <!-- description content -->
        <header class="entry-header">
            <?php

                the_title('<span class="entry-title">', '</span>');

//            if ('post' === get_post_type()) : ?>
<!--                                <div class="entry-meta">-->
<!--                                    --><?php //we_posted_on(); ?>
<!--                                </div>-->
<!--                --><?php
//            endif; ?>



            <div class="entry-content">
                <?php
                the_content(sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'we'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ));

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'we'),
                    'after' => '</div>',
                ));
                ?>
            </div>
        </header><!-- .entry-header -->

        <!--        --><?php //the_ID(); ?>
    </div>



    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', get_post_type());

//                the_post_navigation();

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
//                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main>
    </div>

<?php
//get_sidebar();
get_footer();
