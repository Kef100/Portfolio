$('body').addClass("overflow-hidden");
$('header, main, #language-selector').addClass("hidden");

var progressBar = $("#percentage");
var duration = 1000;
$(window).on("load", function () {
    start();
    setInterval(function () {
        $('#preloader').fadeOut();
        $('body').removeClass("overflow-hidden");
        $('header, main, #language-selector').removeClass("hidden");
    }, duration);
});

function start() {
    progressBar.stop().css("width", 0).animate({
        width: 100 + '%'
    }, {
        duration: duration
    });
}
