$ = jQuery;

// Hamburger menu
$(document).ready(function () {
    $('.hamburger-menu-icon .hamburger-open').on('click', function () {
        $(this).css('display', 'none');
        $('.hamburger-menu').slideDown();
        $('.hamburger-close').fadeIn();
    })
    $('.hamburger-menu-icon .hamburger-close').on('click', function () {
        $(this).css('display', 'none');
        $('.hamburger-menu').slideUp();
        $('.hamburger-open').fadeIn();
    })
    $('.hamburger-menu .header-holder__menu-hamburger .menu-main-menu-container .menu li a').on('click', function () {
        $('.hamburger-menu').slideUp();
        $('.hamburger-close').css('display', 'none');
        $('.hamburger-open').fadeIn();
    });
})