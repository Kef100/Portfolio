$('body').addClass("overflow-hidden");
$('header, main, #language-selector').addClass("hidden");

var progressBar = $("#percentage");
var duration = 1000;
$(window).on("load", function () {
    setInterval(function () {
        $('#preloader').fadeOut();
        $('header, main, #language-selector').removeClass("hidden");
        $('body').removeClass("overflow-hidden");
        start();
    }, duration);
});

function start() {
    progressBar.stop().css("width", 0).animate({
        width: 100 + '%'
    },
    new fullpage('#fullpage', {
        //options here
        navigation: true,
        autoScrolling:true,
        scrollingSpeed: 700,
        verticalCentered: true,
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,
        fitToSection: true,
        responsiveSlides: true,
    })
    , {
        duration: duration
    });
}
