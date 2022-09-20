// menu mobile

$('.icon-bar').on('click', function() {
    $('.menu-mobile').slideToggle();
})

// menu footer

$('.icon-footer').on('click', function() {
    $('.menu-footer').slideToggle();
})

$('.icon-footer2').on('click', function() {
    $('.menu-footer2').slideToggle();
})

$('.icon-footer3').on('click', function() {
    $('.menu-footer3').slideToggle();
})

$('.icon-footer4').on('click', function() {
    $('.menu-footer4').slideToggle();
})


// slider home

$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='fas fa-arrow-left'></i></div>","<div class='btn-next'><i class='fas fa-arrow-right'></i></div>"],

    autoplay:true,
    // autoplayTimeout:8000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


$('.carousel_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fas fa-arrow-left'></i></div>","<div class='btn-next2'><i class='fas fa-arrow-right'></i></div>"],

    autoplay:true,
    // autoplayTimeout:8000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:4
        }
    }
})

$('.carousel_3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fas fa-arrow-left'></i></div>","<div class='btn-next2'><i class='fas fa-arrow-right'></i></div>"],

    autoplay:true,
    // autoplayTimeout:8000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
})