<?php

// Building inital functions, theme set up options on init

if ( ! isset( $content_width ) ) $content_width = 1440;

// Theme Support Declarations

// This theme uses post thumbnails - all heights of 9999 designate a responsive image setting
add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'cornerstone-content-width-orbit', 970, 340, false ); // content width slider 
	add_image_size( 'cornerstone-container-width-orbit', 2500, 765, false ); // container width slider 	 
	add_image_size(	'page-featured-image', 1440, 500, true); // full width capability moderate height
	add_image_size( 'wc-category-image', 350, 350, false );
	add_image_size( 'wc-single-image', 1440, 500, false );
}
	
// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Add support for post formats
add_theme_support( 'post-formats', 
	array( 
		'aside', 
		'gallery',
		'link',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat'
	) 
);
add_post_type_support( 'post', 'post-formats' );

/**
 * Enable theme features
 */
add_theme_support('cornerstone-gallery');     // Enable Foundation's thumbnails component on [gallery]

