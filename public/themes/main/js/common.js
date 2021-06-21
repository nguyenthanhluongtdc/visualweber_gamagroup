$('.main-slider').owlCarousel({
    smartSpeed: 1000,
    loop: false,
    autoplay: false,
    dots: false,
    margin : 0,
    nav: true,
    
    navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i></div>", "<div class='nav-btn next-slide'><i class='fas fa-chevron-right'></i></div>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
