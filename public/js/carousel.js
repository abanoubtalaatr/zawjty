$(document).ready(function()
{
    if($('.bbb_viewed_slider').length)
    {
        var viewedSlider = $('.bbb_viewed_slider');

        viewedSlider.owlCarousel(
            {
                // loop:true,
                margin:30,
                autoplay:true,
                autoplayTimeout:6000,
                nav:false,
                dots:false,
            });

        if($('.bbb_viewed_prev').length)
        {
            var prev = $('.bbb_viewed_prev');
            prev.on('click', function()
            {
                viewedSlider.trigger('prev.owl.carousel');
            });
        }

        if($('.bbb_viewed_next').length)
        {
            var next = $('.bbb_viewed_next');
            next.on('click', function()
            {
                viewedSlider.trigger('next.owl.carousel');
            });
        }
    }


});

$(document).ready(function(){

    if($('.brands_slider').length)
    {
        var brandsSlider = $('.brands_slider');

        brandsSlider.owlCarousel(
            {
                margin:30,
                autoplay:true,
                autoplayTimeout:6000,
                nav:false,
                dots:false,
            });

        if($('.brands_prev').length)
        {
            var prev = $('.brands_prev');
            prev.on('click', function()
            {
                brandsSlider.trigger('prev.owl.carousel');
            });
        }

        if($('.brands_next').length)
        {
            var next = $('.brands_next');
            next.on('click', function()
            {
                brandsSlider.trigger('next.owl.carousel');
            });
        }
    }


});
