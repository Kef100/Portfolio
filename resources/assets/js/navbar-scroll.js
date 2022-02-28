$(window).scroll(function(){
    if ($(window).scrollTop() > 0) {
        $('header').addClass('fixed-header');
        return;
    }

    $('header').removeClass('fixed-header');
})
