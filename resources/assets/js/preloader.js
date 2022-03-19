$('body').addClass("overflow-hidden");
$('header, main, #language-selector').addClass("hidden");

console.log = function(){};

var progressBar = $("#percentage");
var duration = 1000;
$(window).on("load", function () {
    start();
    setTimeout(function () {
        $('#preloader').fadeOut();
        $('header, main, #language-selector').removeClass("hidden");
        $('body').removeClass("overflow-hidden");
        startFullpage();
    }, duration);
});

function start() {
    progressBar.stop().css("width", 0).animate({
        width: 100 + '%'
    },{
        duration: duration
    });
}

function startFullpage() {
    if($('html').hasClass('fp-enabled')){
        $.fn.fullpage.destroy('all');
    }

    $('#fullpage').fullpage(
        {
            licenseKey: "E7E07604-CFAE4C0D-80D5EADB-A1BCAF71",
            navigation: true,
            autoScrolling: true,
            scrollingSpeed: 700,
            verticalCentered: true,
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,
            fitToSection: true,
            responsiveSlides: true,
        }
    );
}
