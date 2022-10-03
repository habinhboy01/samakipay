// menu pc

// menu mobile

$('.icon-bar').on('click', function() {
    $('.menu-mobile').slideToggle();
})

// menu footer

var active_footer = document.querySelectorAll('ul.menu-footer > li > a');

active_footer.forEach(function (element) {
    element.id = 'active_footer';
})

var active_footer2 = document.querySelectorAll('ul.menu-footer2 > li > a');

active_footer2.forEach(function (element) {
    element.id = 'active_footer';
})


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

// // prevent copy cut, f12 in website

  jQuery("body").bind("cut copy", function (e) {
    e.preventDefault();
  });

  jQuery(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
      return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
      return false;
    }
  });

  // prenvent mouse right
  jQuery(document).on("contextmenu", function (e) {      
      e.preventDefault();
  });
  
  
  