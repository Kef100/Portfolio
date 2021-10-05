$('body').addClass("overflow-hidden");

var progressBar = $("#percentage");
var duration = 5000;

$(window).on("load", function () {
    start();
    setInterval(function () {
        $('#preloader').fadeOut(1000);
    }, duration);
});

function start() {
    progressBar.stop().css("width", 0).animate({
            width: 100 + '%'
        },{duration: duration});
}
