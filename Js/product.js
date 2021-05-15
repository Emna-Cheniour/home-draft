$(window).resize(function(){

    $('.product').css({
        position:'absolute',
        left: ($(window).width() - $('.product').outerWidth())/2,
        top: ($(window).height() - $('.product').outerHeight())/2
    });

});

// To initially run the function:
$(window).resize();