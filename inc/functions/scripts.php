<?php // foundation scripts

// styles
 
function cornerstone_load_styles()  
{ 
  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
  // register styles for stuff
  wp_register_style( 'stylesheet', get_template_directory_uri() . '/stylesheets/app.css', array(), '0.0.3', 'screen' );   
  wp_enqueue_style('stylesheet');
}
 
add_action('wp_enqueue_scripts', 'cornerstone_load_styles');
 
// scripts
 
 
// Register some javascript files, because we love javascript files. Enqueue in the damned templates (finally!) except for the conditional for the home page slider.
 
function cornerstone_load_scripts() {
  wp_register_script( 'modernizr', get_template_directory_uri().'/bower_components/modernizr/modernizr.js', array('jquery'), '2.7.0', false );
  wp_register_script( 'foundation', get_template_directory_uri().'/bower_components/foundation/js/foundation.js', array('jquery'), '1.9.1', true );
  wp_register_script( 'foundation-app', get_template_directory_uri().'/js/app.js', array('jquery'), '1.9.1', true );
   
  wp_enqueue_script('modernizr');
  wp_enqueue_script('foundation');
  wp_enqueue_script('foundation-app');
 
}

add_action( 'wp_enqueue_scripts', 'cornerstone_load_scripts' );