<?php
	// Hide admin top bar 
	add_filter('show_admin_bar', '__return_false');
	// Turn-off feeds 
	remove_action ('do_feed_rdf', 'do_feed_rdf', 10, 1);
	remove_action ('do_feed_rss', 'do_feed_rss', 10, 1);
	remove_action ('do_feed_rss2', 'do_feed_rss2', 10, 1);
	remove_action ('do_feed_atom', 'do_feed_atom', 10, 1);
	// Remove emoji detection scripts and emoji styles 
	remove_action ('wp_head', 'print_emoji_detection_script', 7);
	remove_action ('admin_print_scripts', 'print_emoji_detection_script');
	remove_action ('wp_print_styles', 'print_emoji_styles');
	remove_action ('admin_print_styles', 'print_emoji_styles');
	// Remove feeds links from header 
	remove_action ('wp_head', 'feed_links_extra', 3);
	remove_action ('wp_head', 'feed_links', 2);
	// Remove RSD, WLW Manifest, shortlink & generator from header 
	remove_action ('wp_head', 'rsd_link');
	remove_action ('wp_head', 'wlwmanifest_link');
	remove_action ('wp_head', 'wp_shortlink_wp_head');
	remove_action ('wp_head', 'wp_generator');
	remove_action('wp_head', 'rel_canonical');
	// Disbable API
	add_filter('rest_enabled', '_return_false');
	add_filter('rest_jsonp_enabled', '_return_false');
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
	// Disable XML-RCP
	add_filter('xmlrpc_enabled', '__return_false');
?>