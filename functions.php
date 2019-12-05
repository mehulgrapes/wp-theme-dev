<?php
function learn_theme_setup() {
  
  // custome logo
  add_theme_support( 'custom-logo' );

  // post thumbnail
  add_theme_support( 'post-thumbnails' );
  
  // add thumbnail size for blog
  add_image_size( 'blog-thumbnail', 305, 200, true );

  // register menu locations
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );

  // link styles and script files
  $theme_version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style( 'learn-style', get_stylesheet_uri(), array(), $theme_version );
  

  wp_enqueue_script( 'custome-sscript', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '', true );

}
add_action( 'after_setup_theme', 'learn_theme_setup' );

 /**
 * change comment form layout
 */
function learn_comment_layout( $fields ) {
  $comment_field = $fields['comment'];
  $cookie_field = $fields['cookies'];
  unset( $fields['url'] );
  unset( $fields['comment'] );
  unset( $fields['cookies'] );
  $fields['comment'] = $comment_field;
  $fields['cookies'] = $cookie_field;
  return $fields;
}
  
add_filter( 'comment_form_fields', 'learn_comment_layout');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function learn_widgets_init() {

  // main sidebar
	register_sidebar( array(
		'name'          => 'Main sidebar',
		'id'            => 'main_sidebar',
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="side-widget-title"><span>',
		'after_title'   => '</span></div>',
	) );
  
  // footer 1
	register_sidebar( array(
		'name'          => 'Footer column 1',
		'id'            => 'footer_column_1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-widget-title"><span>',
		'after_title'   => '</span></div>',
	) );
  // footer 2
	register_sidebar( array(
		'name'          => 'Footer column 2',
		'id'            => 'footer_column_2',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-widget-title"><span>',
		'after_title'   => '</span></div>',
	) );
  // footer 3
	register_sidebar( array(
		'name'          => 'Footer column 3',
		'id'            => 'footer_column_3',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-widget-title"><span>',
		'after_title'   => '</span></div>',
	) );
  // footer 4
	register_sidebar( array(
		'name'          => 'Footer column 4',
		'id'            => 'footer_column_4',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-widget-title"><span>',
		'after_title'   => '</span></div>',
	) );

}
add_action( 'widgets_init', 'learn_widgets_init' );

// add requered plugin installation suggestions
require get_template_directory().'/inc/install-plugin.php';

?>