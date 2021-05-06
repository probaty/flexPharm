
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            800: {
                items:3,
            },
            1100:{
                items:4,

            }
        },
        navText: ['<img class="owl-prev" src="img/left-arrow.svg">','<img class="owl-next" src="img/right-arrow.svg">']
    })

    var categories = $('.categories')
    var popup = $('.popup')

    $('.categories-mobile').click(function (){
        categories.show()
        popup.show()
    })

    $('.categories-title span , .popup').click(function (){
        categories.hide()
        popup.hide()
    })

});
