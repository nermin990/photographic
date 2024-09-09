<?php

function nermin_theme_project_init() {
    $labels = array(
        'name'                  => _x( 'Projects', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Project', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Projects', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'project', $args );
}

add_action( 'init', 'nermin_theme_project_init' );

// Custom taxonomy

function nermin_theme_register_category_taxonomy() {
    $args = array(
        'label'        => __( 'Project categories', 'textdomain' ),
        'public'       => true,
        'rewrite'      => array( 'slug' => 'project_categories' ),
        'hierarchical' => true,
    );

    register_taxonomy( 'project_categories', 'project', $args );
}
add_action( 'init', 'nermin_theme_register_category_taxonomy', 0 );