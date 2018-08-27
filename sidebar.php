<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package we
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>




<div class="absoluteico">
    <img src="/static/media/loggatran.c9f76a59.png" class="absoluteico--ico" alt="logo">
</div>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary
