<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage learn
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'main_sidebar' ) ) {
	return;
}
?>
<aside class="sidebar">
    <?php dynamic_sidebar( 'main_sidebar' ); ?>
</aside>