<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nermin_new_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#primary"><?php esc_html_e('Skip to content', 'nermin_new_theme'); ?></a>

    <header id="masthead" class="header">
        <div class="container">
            <div class="row">
                <div class="header-holder">
                    <div class="header-holder__logo">
                        <?= get_custom_logo(); ?>
                        <a class="hamburger-menu-logo" href="<?= get_home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img.png" alt="loading...">
                        </a>
                    </div>
                    <div class="header-holder__menu">
                        <?php
                        wp_nav_menu(array(
                            'menu' => "main-menu",
                        ));
                        ?>
                    </div>
                    <div class="hamburger-menu-icon">
                        <svg class="hamburger-open" width="800px" height="800px" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 5C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H4ZM7 12C7 11.4477 7.44772 11 8 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H8C7.44772 13 7 12.5523 7 12ZM13 18C13 17.4477 13.4477 17 14 17H20C20.5523 17 21 17.4477 21 18C21 18.5523 20.5523 19 20 19H14C13.4477 19 13 18.5523 13 18Z" fill="#0d0d0d"/>
                        </svg>
                        <svg class="hamburger-close" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <rect x="11.5148" y="10.1005" width="26" height="2" transform="rotate(45 11.5148 10.1005)" fill="#0d0d0d"></rect>
                            <rect x="29.8995" y="11.5148" width="26" height="2" transform="rotate(135 29.8995 11.5148)" fill="#0d0d0d"></rect>
                        </svg>
                    </div>
                </div>
                <div class="hamburger-menu">
                    <div class="header-holder__menu-hamburger">

                        <?php
                        wp_nav_menu(array(
                            'menu' => "main-menu",
                        ));
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </header><!-- #masthead -->
