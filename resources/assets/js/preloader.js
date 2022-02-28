$('body').addClass("overflow-hidden");
$('header, main').addClass("hidden");

var progressBar = $("#percentage");
var duration = 1000;
$(window).on("load", function () {
    start();
    setInterval(function () {
        $('#preloader').fadeOut();
        $('header, main').removeClass("hidden");
        $('header, header').fadeIn(2500);
        $('body').removeClass("overflow-hidden");
    }, duration);
});

function start() {
    progressBar.stop().css("width", 0).animate({
        width: 100 + '%'
    }, {
        duration: duration
    });
}
