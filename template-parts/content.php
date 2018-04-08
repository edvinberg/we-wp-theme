<?php
/**
 * @package we
 */

?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id(), 'thumbnail' ); ?>

<div class="col">
	<?php
	the_content( sprintf(
		wp_kses(
		/* translators: %s: Name of current post. Only visible to screen readers */
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'we' ),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		)
	) );

	?>
</div>