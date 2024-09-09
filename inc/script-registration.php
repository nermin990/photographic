<?php

/**
 * Enqueue scripts and styles.
 */
function nermin_new_theme_scripts() {

    // GLOBAL STYLES
	wp_enqueue_style('nermin_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-grid.min.css');
    wp_enqueue_style( 'nermin_new_theme-global', get_template_directory_uri() . '/assets/css/global.css');
    wp_enqueue_style( 'nermin_new_theme-header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style( 'nermin_new_theme-footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style( 'nermin_new_theme-full-width-img', get_template_directory_uri() . '/assets/css/components/full-width-img.css');
    wp_enqueue_style( 'nermin_new_theme-two-image-in-row', get_template_directory_uri() . '/assets/css/components/two-image-in-row.css');
    wp_enqueue_style( 'nermin_new_theme-three-in-row', get_template_directory_uri() . '/assets/css/components/three-in-row.css');
    wp_enqueue_style( 'nermin_new_theme-left-one-big-image-right-two-small-images', get_template_directory_uri() . '/assets/css/components/left-one-big-image-right-two-small-images.css');
    wp_enqueue_style( 'nermin_new_theme-left-two-small-images-right-one-big-image', get_template_directory_uri() . '/assets/css/components/left-two-small-images-right-one-big-image.css');
    wp_enqueue_style( 'nermin_new_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'b22_new_theme-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );

    // JQUERY
    wp_enqueue_script( 'jquery');

    // SCRIPTS
    wp_enqueue_script( 'nermin_new_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'nermin_new_theme-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'b22_new_theme-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), _S_VERSION, true );

    if(is_archive('project')) {
        wp_enqueue_script( 'project-archive', get_template_directory_uri() . '/assets/js/project.js', array(), _S_VERSION, true );
    }

    if (is_page_template('template-homepage.php')) {
        wp_enqueue_style('nermin_new_theme-homepage', get_template_directory_uri() . '/assets/css/homepage.css', array(), _S_VERSION);
        wp_enqueue_script( 'nermin_new_theme-homepage', get_template_directory_uri() . '/assets/js/homepage.js', array(), _S_VERSION, true );
    }

    if (is_page_template('template-portfolio.php')) {
        wp_enqueue_style('nermin_new_theme-portfolio', get_template_directory_uri() . '/assets/css/portfolio.css', array(), _S_VERSION);
    }

    if (is_singular('single-portfolio.php')) {
        wp_enqueue_style('b22_new_theme-single-portfolio', get_template_directory_uri() . '/assets/css/single-portfolio.css', array(), _S_VERSION);
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'nermin_new_theme_scripts' );

// COMPONENTS IMPORT CSS JS FILES

function test_template_part_hook($slug, $name, $args) {
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/assets/css/components/blog-element.css', false, '1.0', 'all' );
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/assets/css/components/full-width-img.css', false, '1.0', 'all' );
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/assets/css/components/two-image-in-row.css', false, '1.0', 'all' );
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/assets/css/components/three-in-row.css', false, '1.0', 'all' );
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/assets/css/components/left-one-big-image-right-two-small-images.css', false, '1.0', 'all' );
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/assets/css/components/left-two-small-images-right-one-big-image.css', false, '1.0', 'all' );
}

add_action( 'get_template_part_template-parts/components/blog-element', 'test_template_part_hook', 10, 3 );