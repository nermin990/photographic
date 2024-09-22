$ = jQuery;

// Slick slider hero section
$(document).ready(function () {
    $(".hero-holder").slick({
        centerMode: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        arrows: false,
        pauseOnHover: false
    });
});

// Automatic class for first gallery
function addClassesToGalleryImages() {
    const images = document.querySelectorAll('.first-gallery-holder__img');

    images.forEach((img, index) => {
        const className = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'][index];
        if (className) {
            img.classList.add(className);
        }
    });
}

document.addEventListener('DOMContentLoaded', addClassesToGalleryImages);

// Automatic class for second gallery
function addClassesToGalleryImagesSecond() {
    const images = document.querySelectorAll('.second-gallery-holder__img');

    images.forEach((img, index) => {
        const className = ['one-s', 'two-s', 'three-s', 'four-s', 'five-s', 'six-s', 'seven-s', 'eight-s', 'nine-s', 'ten-s', 'eleven-s', 'twelve-s'][index];
        if (className) {
            img.classList.add(className);
        }
    });
}

document.addEventListener('DOMContentLoaded', addClassesToGalleryImagesSecond);

$(document).ready(function () {
    $(".other-photos-holder").slick({
        slidesToScroll: 1,
        draggable: true,
        autoplay: false,
        infinite: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3,
        arrows: true,
        prevArrow:
            '<svg class="gallery-prev" xmlns="http://www.w3.org/2000/svg" width="43" height="28" viewBox="0 0 43 28" fill="none">' +
            '<path d="M14.8672 3L1.64062 14.1863L14.8672 25.3718" stroke="#323232FF" stroke-width="1.52838"/>' +
            '<path d="M1.43359 14.1777L41.4336 14.1777L1.43359 14.1777Z" fill="#161615"/>' +
            '<path d="M1.43359 14.1777L41.4336 14.1777" stroke="#323232FF" stroke-width="1.52838"/>' +
            "</svg>",
        nextArrow:
            '<svg class="gallery-next" xmlns="http://www.w3.org/2000/svg" width="42" height="28" viewBox="0 0 42 28" fill="none">' +
            '<path d="M27 25.3721L40.2266 14.1858L27 3.0003" stroke="#323232FF" stroke-width="1.52838"/>' +
            '<path d="M40.4336 14.1943L0.433594 14.1943L40.4336 14.1943Z" fill="#161615"/>' +
            '<path d="M40.4336 14.1943L0.433592 14.1943" stroke="#323232FF" stroke-width="1.52838"/>' +
            "</svg>",
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    autoplay: true,
                    pauseOnHover: false
                }
            }
        ]
    });
    $(".gallery-prev, .gallery-next").on("mousedown", function (e) {
        e.preventDefault(); // Sprečava defaultnu akciju (selektovanje teksta)
    });
});


$(document).ready(function () {
    $('.gallery-prev').appendTo('.other-photos-holder-arrows');
    $('.gallery-next').appendTo('.other-photos-holder-arrows');
})


// When we are logged in, on scroll turn off margin top, and bringing back margin when we scroll on top
// $(document).ready(function() {
//     var hasScrolled = false;
//
//     $(window).on('scroll', function() {
//         if ($(this).scrollTop() > 0) {
//             if (!hasScrolled) {
//                 $('.header').css('margin-top', '0px');
//                 $('.hero').css('margin-top', '85px');
//                 hasScrolled = true;
//             }
//         } else {
//             if (hasScrolled) {
//                 $('.header').css('margin-top', '40px');
//                 $('.hero').css('margin-top', '125px');
//                 hasScrolled = false;
//             }
//         }
//     });
// });

