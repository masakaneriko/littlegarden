// Front Page Hero Slider
$(document).ready(function () {
    $(".hero-slider").slick({
        autoplay: true,
        autoplaySpeed: 8000,
        arrows: false,
        dots: true,
        speed: 800,
        fade: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                },
            },
        ],
    });
});


// Front Page News Slider
$(document).ready(function () {
    $(".blog-slider").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4500,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    slidesToShow: 1,
                    dots: false,
                    arrows: false,
                    // autoplay: false,
                },
            },
        ],
    });
});


// Single-Center.php Sliders
$(document).ready(function () {
    $(".slider-day").slick({
        centerMode: true,
        centerPadding: "80px",
        slidesToShow: 1,
        infinite: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
        ],
    });
});
$(document).ready(function () {
    $(".slider-annual").slick({
        centerMode: true,
        centerPadding: "80px",
        slidesToShow: 1,
        infinite: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
        ],
    });
});
