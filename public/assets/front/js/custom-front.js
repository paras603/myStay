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


    $('.hs_preview_image_close').click(function (e) {
        e.preventDefault();
        let parent_container = $(this).parent('.hs_preview_image_container');
        parent_container.addClass('d-none');
        parent_container.siblings("input[type='file']").val('');
    });


});

/** preview currently uploaded images on form**/
function loadPreview(input, id) {
    id = id || '#hs_preview_img';
    let image_container = $(input).siblings('div');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(id).attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
        image_container.removeClass("d-none");
    }
}
