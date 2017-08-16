<?php
	// This function changes the logo image
	function change_login_logo() {
		echo '<style type="text/css">';
		echo 'h1 a { background-image: url('.get_bloginfo('template_directory').'/img/logo/logo.png) !important; background-size: auto !important; height: 80px !important; width: 151px !important; text-align: center !important; }';
		echo '</style>';
	}

	// This function changes the url in the logo's link
	function change_login_logo_url() {
	    return home_url();
	}

	// This function changes the logo alt text
	function change_login_logo_url_title() {
	    return '__Floor__';
	}

	add_action ('login_head', 'change_login_logo');
	add_filter ('login_headerurl', 'change_login_logo_url');
	add_filter ('login_headertitle', 'change_login_logo_url_title');
?>