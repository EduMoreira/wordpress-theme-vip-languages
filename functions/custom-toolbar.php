<?php
	// This function removes default posts and comments links in the admin toolbar
	function customize_menu() {
		remove_menu_page('edit.php');
		remove_menu_page('edit-comments.php');
	}

	add_action ('admin_menu', 'customize_menu');

	// This adds a options page to the admin toolbar
	// if (function_exists('acf_add_options_page')) {
	// 	acf_add_options_page(array(
	// 		'page_title' 	=> 'Configurações do Tema',
	// 		'menu_title'	=> 'Configurações do Tema',
	// 		'menu_slug' 	=> 'theme-settings',
	// 		'capability'	=> 'edit_posts',
	// 		'redirect'		=> false
	// 	));
	// }
	
?>