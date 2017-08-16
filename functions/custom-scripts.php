<?php
	// Add custom CSS and javascript and remove unneeded scripts
	function add_dependencies() {
		wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.32');
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', "https://code.jquery.com/jquery-2.2.0.min.js", array(), '2.2.0', true);
	    wp_enqueue_script('website-js', get_template_directory_uri() . '/js/website.min.js', array('jquery'), '1.0.32', true);
	    wp_deregister_script( 'wp-embed' );
	}

	add_action ('wp_enqueue_scripts', 'add_dependencies');
?>