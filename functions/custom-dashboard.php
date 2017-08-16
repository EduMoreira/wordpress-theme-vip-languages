<?php
	// This function removes useless meta boxes from dashboard
	function remove_dashboard_widgets() {
	    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	}

	// Changes the 'Thank you for create with WordPress' massege on dashboard footer
	function remove_footer_admin() {
		echo '<span id="footer-thankyou">Desenvolvido por <a href="http://www.publicitymidias.com.br" target="_blank">Publicity Mídias</a></span>';
	}
	
	add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
	add_filter('admin_footer_text', 'remove_footer_admin');
?>