<?php
    // This function registers a new widget for Instagram plugin
    function register_widgets () {
        if (function_exists('register_sidebar')) {
            register_sidebar(
                array(
                    'name' => 'instagram',
                    'id' => 'instagram',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                )
            );
        }
    }

    add_action('widgets_init', 'register_widgets');

    // This function adds a div element as wrapper of Youtube embeds
    function alx_embed_html( $html ) {
        return '<div class="video-container">' . $html . '</div>';
    }

    add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
    add_filter( 'video_embed_html', 'alx_embed_html' ); // Jetpack
?>