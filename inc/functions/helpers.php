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


// Social Share Count
// Adapted from http://www.cssreflex.com/snippets/get-total-social-share-count-in-wordpress

class shareCount {
	private $url,$timeout;
	function __construct($url,$timeout=10) {
	$this->url=rawurlencode($url);
	$this->timeout=$timeout;
}

function get_tweets() { 
	$json_string = $this->file_get_contents_curl('http://urls.api.twitter.com/1/urls/count.json?url=' . $this->url);
	$json = json_decode($json_string, true);
	return isset($json['count'])?intval($json['count']):0;
}

function get_linkedin() { 
	$json_string = $this->file_get_contents_curl("http://www.linkedin.com/countserv/count/share?url=$this->url&format=json");
	$json = json_decode($json_string, true);
	return isset($json['count'])?intval($json['count']):0;
}

function get_fb() {
	$json_string = $this->file_get_contents_curl('http://api.facebook.com/restserver.php?method=links.getStats&format=json&urls='.$this->url);
	$json = json_decode($json_string, true);
	return isset($json[0]['total_count'])?intval($json[0]['total_count']):0;
}

function get_plusones()  {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc");
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"'.rawurldecode($this->url).'","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	$curl_results = curl_exec ($curl);
	curl_close ($curl);
	$json = json_decode($curl_results, true);
	return isset($json[0]['result']['metadata']['globalCounts']['count'])?intval( $json[0]['result']['metadata']['globalCounts']['count'] ):0;
}

function get_stumble() {
	$json_string = $this->file_get_contents_curl('http://www.stumbleupon.com/services/1.01/badge.getinfo?url='.$this->url);
	$json = json_decode($json_string, true);
	return isset($json['result']['views'])?intval($json['result']['views']):0;
}

function get_delicious() {
	$json_string = $this->file_get_contents_curl('http://feeds.delicious.com/v2/json/urlinfo/data?url='.$this->url);
	$json = json_decode($json_string, true);
	return isset($json[0]['total_posts'])?intval($json[0]['total_posts']):0;
}

function get_pinterest() {
	$return_data = $this->file_get_contents_curl('http://api.pinterest.com/v1/urls/count.json?url='.$this->url);
	$json_string = preg_replace('/^receiveCount\((.*)\)$/', "\\1", $return_data);
	$json = json_decode($json_string, true);
	return isset($json['count'])?intval($json['count']):0;
}

private function file_get_contents_curl($url){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
	$cont = curl_exec($ch);
	if(curl_error($ch))
		{
			die(curl_error($ch));
		}
		return $cont;
	}
}

// use with

/*

<span> 
php $obj=new shareCount(get_permalink( $post->ID ));  
echo $obj->get_tweets() + $obj->get_plusones() + $obj->get_fb() + $obj->get_stumble() + $obj->get_pinterest() + $obj->get_delicious() + $obj->get_linkedin(); end php
</span>

*/

// remove p tags from shortcodes

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_unautop',100 );

// Filter Read More link

function cornerstone_excerpt( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'cornerstone_excerpt', 'new_cornerstone_excerpt' );