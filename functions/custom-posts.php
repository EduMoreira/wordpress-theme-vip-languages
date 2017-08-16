<?php

// Creates 'Posts' post type
function type_post_posts() {
    $labels = array(
        'name' => _x('Posts', 'post type general name'),
        'singular_name' => _x('Posts', 'post type singular name'),
        'add_new' => _x('Novo', 'Novo item'),
        'add_new_item' => __('Novo'),
        'edit_item' => __('Editar'),
        'new_item' => __('Novo'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' =>  __('Nenhum registro encontrado'),
        'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Posts',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array('title','editor','thumbnail', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
    );
    register_post_type( 'post' , $args );
    flush_rewrite_rules();
}

add_action('init', 'type_post_posts');

// Supot theme thumbnails
add_theme_support( 'post-thumbnails' );
?>