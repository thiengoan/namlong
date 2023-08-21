jQuery(document).ready(function($) {
    $( '#slider' ).slick({
        lazyLoad: 'ondemand',
        autoplay: true,
        dots: true,
        arrows: false,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
    });

    $('#project').slick({
        infinity: true,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 500,
                settings: "unslick"
            }
        ]
    });

    $('.news').slick({
        lazyLoad: 'ondemand',
        autoplay: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        vertical: true,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 500,
                settings: "unslick"
            }
        ]
    });

    $('img[data-lazy]').one('load', function(e) {
        if (this.complete) {
            $(this).siblings('.ajax-loader').remove();
        }
    });
});

jQuery(document).ready(function($) {
    $('.wpcf7-spinner').remove();

    document.addEventListener('wpcf7submit', function (event) {
        $('.wpcf7-form').removeClass('processing');
    }, false);
});