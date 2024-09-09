<?php

function portfolio_cpt_nermin()
{
    $labels = array(
        'name' => _x('Portfolio', 'Post type general name', 'recipe'),
        'singular_name' => _x('Portfolio', 'Post type singular name', 'recipe'),
        'menu_name' => _x('Portfolio', 'Admin Menu text', 'recipe'),
        'name_admin_bar' => _x('Portfolio', 'Add New on Toolbar', 'recipe'),
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Portfolio custom post type.',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-admin-post',
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'supports' => array('title', 'editor', 'author', 'thumbnail'),
        'show_in_rest' => true,
        'taxonomies' => array('category'),
    );

    register_post_type('Portfolio', $args);
}

add_action('init', 'portfolio_cpt_nermin');

?>
