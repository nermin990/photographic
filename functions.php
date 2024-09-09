<?php
/**
 * nermin_new_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nermin_new_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nermin_new_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nermin_new_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'nermin_new_theme_content_width', 0 );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

// Widgets area registration

require get_template_directory() . '/inc/widgets.php';

// Theme Setup

require get_template_directory() . '/inc/theme-setup.php';

// Script registration

require get_template_directory() . '/inc/script-registration.php';

// Custom Header

require get_template_directory() . '/inc/custom-header.php';

// Template tags

require get_template_directory() . '/inc/template-tags.php';

// Template functions

require get_template_directory() . '/inc/template-functions.php';

// Customizer

require get_template_directory() . '/inc/customizer.php';

// CPT Registration

require get_template_directory() . '/inc/custom-post-type/project.php';
require get_template_directory() . '/inc/custom-post-type/portfolio.php';

// Filter CPT

require get_template_directory() . '/inc/filter-cpt.php';