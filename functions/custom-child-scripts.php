<?php
    function child_theme_scripts() {
        wp_enqueue_style( 'wordpress-theme-floor' );
    }

    add_action( 'wp_enqueue_scripts', 'child_theme_scripts' );
?>