<?php
/*
Plugin Name: SambaAds oEmbed
Plugin URI: http://app.sambaads.com/sambaads-oembed-wordpress-plugin
Description: Adds oEmbed support for sambaads.com in WordPress posts, pages and custom post types. There are no settings. Simply, add the Screenr video URL in your content editor.
Version: 1.0.0
Author: Lucas Nogueira
License: GPL2
*/
wp_oembed_add_provider ('http://player.sambaads.com/*', 'http://player.sambaads.com/services/oembed', false );
?>