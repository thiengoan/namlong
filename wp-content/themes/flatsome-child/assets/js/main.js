jQuery(document).ready(function($) {
    $( '#slider' ).slick({
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
});

jQuery(document).ready(function($) {
    $('.wpcf7-spinner').remove();

    document.addEventListener('wpcf7submit', function (event) {
        $('.wpcf7-form').removeClass('processing');
    }, false);
});


window.onscroll = function(e) { 
    var scrollY = window.pageYOffset || document.documentElement.scrollTop;
    var header = document.querySelector('header');

    scrollY <= this.lastScroll 
      ? header.style.visibility = 'visible'
      : header.style.visibility = 'hidden'; 

    this.lastScroll = scrollY ;
}