$(document).ready(function(){

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:false,
        autoplayTimeout: 1500,
        dots:false,
        nav:false,
        // navText:["<",">"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            950:{
                items:4
            },
            1150:{
                items:5
            }
        }
    })


});