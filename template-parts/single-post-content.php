<?php
/**
 * Template part for displaying SINGLE post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package we
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <?php $url = wp_get_attachment_url(get_post_thumbnail_id(), 'thumbnail'); ?>
    <div class="parallax-window" data-parallax="scroll" data-image-src=<?php echo $url ?>>
        <div class='description description--single'>
            <!-- description content -->
            <header class="entry-header entry-header--single">
                <?php


                    the_title(
                            '<span class="entry-title">
                                    <a href="' . esc_url(get_permalink()) . '" rel="bookmark">
                                    <div class="no-link">
                                    ', '
                                       </div>
                                    </a></span>');


                if ('post' === get_post_type()) : ?>
                    <!--                <div class="entry-meta">-->
                    <!--                    --><?php //we_posted_on(); ?>
                    <!--                </div>-->
                    <?php
                endif; ?>


            <!--        <footer class="entry-footer">-->
            <!--            --><?php //we_entry_footer(); ?>
            <!--        </footer>-->
            <div class="entry-content entry-content--single">
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
    </div>


</article>
