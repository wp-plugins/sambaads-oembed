<?php
/*
Plugin Name: SambaAds oEmbed
Plugin URI: http://app.sambaads.com/sambaads-oembed-wordpress-plugin
Description: Adds oEmbed support for sambaads.com in WordPress posts, pages and custom post types. There are no settings. Simply, add the Screenr video URL in your content editor.
Version: 1.0.1
Author: Lucas Nogueira
License: GPL2
*/
function smbaads_oembed_service()
{
	$oembedUrls = array(
		array(
			'format' => '#https?://(player\.)?sambaads\.com/.*#i', 
			'provider' => 'http://player.sambaads.com/services/oembed',
			'regex' => true),
	);
	foreach ($oembedUrls as $oembed) {
		wp_oembed_add_provider( $oembed['format'], $oembed['provider'], $oembed['regex']);
	}
}


// Now tell WP about the service
add_action( 'init','smbaads_oembed_service' );
?>