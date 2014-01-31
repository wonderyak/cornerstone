<?php // misc. theme functions

// Add SVG to Media uploader

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


// Image Catcher
// http://css-tricks.com/snippets/wordpress/get-the-first-image-from-a-post/

function catch_that_image($size = 'full') {
	if (has_post_thumbnail()) {
		$image_id = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src($image_id, $size);
		$image_url = $image_url[0];
	} else {
		global $post, $posts;
		$image_url = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$image_url = $matches [1] [0];
		
		//Defines a default image
		if(empty($image_url)){
			$image_url = get_bloginfo('template_url') . "/img/default.png";
		}
	}
	return $image_url;
}

// Put something here to customize the excerpt


// Add support for Gist embeds
// http://css-tricks.com/snippets/wordpress/detect-gists-and-embed-them
// [gist id="ID" file="FILE"]
function gist_shortcode($atts) {
	return sprintf(
		'<script src="https://gist.github.com/%s.js%s"></script>', 
		$atts['id'], 
		$atts['file'] ? '?file=' . $atts['file'] : ''
	);
} add_shortcode('gist','gist_shortcode');

// Remove this function if you don't want autoreplace gist links to shortcodes
function gist_shortcode_filter($content) {
	return preg_replace('/https:\/\/gist.github.com\/([\d]+)[\.js\?]*[\#]*file[=|_]+([\w\.]+)(?![^<]*<\/a>)/i', '[gist id="${1}" file="${2}"]', $content );
} add_filter( 'the_content', 'gist_shortcode_filter', 9);


// Change upload image quality

add_filter( 'jpeg_quality', 'cornerstone_thumbnail_quality' );
add_filter( 'wp_editor_set_quality', 'cornerstone_thumbnail_quality' );
/**
 * Filters the image quality for thumbnails to be at the highest ratio possible.
 *
 * Supports the new 'wp_editor_set_quality' filter added in WP 3.5.
 */
function cornerstone_thumbnail_quality( $quality ) {
		return 100;
}

// remove p tags from shortcodes

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_unautop',100 );

// Filter Read More link