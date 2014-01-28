<?php // widget stuff
/**
 * Register widgetized area and update sidebar with default widgets
 */
function cornerstone_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cornerstone' ),
		'id'            => 'right-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page', 'cornerstone' ),
		'id'            => 'home-widget-area',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer One', 'cornerstone' ),
		'id'            => 'footer-one',
		'before_widget' => '<aside id="%1$s" class="widget %2$s small-12 medium-6 large-4 columns">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="home-widget widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Two', 'cornerstone' ),
		'id'            => 'footer-two',
		'before_widget' => '<aside id="%1$s" class="widget %2$s small-12 medium-6 large-4 columns">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="home-widget widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Three', 'cornerstone' ),
		'id'            => 'footer-three',
		'before_widget' => '<aside id="%1$s" class="widget %2$s small-12 medium-6 large-4 columns">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="home-widget widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'cornerstone_widgets_init' );


// Allow Shortcodes in Widgets

add_filter('widget_text', 'do_shortcode');