//Slider Variables
let slideIndex = 1;
const inner = $("#circle #inline");
const slides = $(".portfolio-slide");
let interval;
let i = 0;
const pi = 3.14;
const dasharray = 2 * inner.attr("r") * pi;

//Preloader Variables
const progressBar = $("#percentage");
let duration = 1000;

//Scroll to button
$(document).on('click', '#scrolldown', function(){
    fullpage_api.moveTo(2);
});


//Preloader
$('body').addClass("overflow-hidden");
$('header, main, #language-selector').addClass("hidden");

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
            paddingTop: '1.5em',
            paddingBottom: '1.5em',
            verticalCentered: true,
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,
            fitToSection: true,
            afterLoad: function (origin, destination) {

                if (destination.index === 3) {
                    //Portfolio section
                    showSlide(slideIndex);
                }
            },
            onLeave: function (origin, destination) {
                if (!destination.index === 3) {
                    //Portfolio section
                    clearInterval(interval);
                }
            }
        },
    );
}

//Slider & Circle
inner.css("stroke-dasharray", dasharray);
inner.css("stroke-dashoffset", dasharray);

function showSlide(slide) {
    let slideElement = slides.get(slideIndex - 1);
    startCounter($(slideElement).attr("data-slide-time"), slide);
}

function nextSlide(slide){
    showSlide(slide + 1);
    slideIndex++;
    //TODO: Change to next slide (Next bullet & content)
}

function previousSlide(slide){
    if(slide >= 1){
        showSlide(slide -1);
        slideIndex--;
        //TODO: Change to previous slide (Previous bullet & content)
    }
}

function goToSlide(slide){
    if(slide != slideIndex){
        clearInterval(interval);
        i = 0;
        showSlide(slide);
        slideIndex = slide;
        //TODO: Change to chosen slide (Go to bullet & content)
    }
}


function startCounter(time, slide) {
    let index = slide;
    interval = setInterval(function () {
        if (i == time) {
            clearInterval(interval);
            i = 0;

            if((index) >= slides.length){
                //Restart slider, all slides were looped
                console.log("Restarting: Slide #" + index + " Going to slide #" + 1);
                slideIndex = 1;
                nextSlide(0);
            }else{
                //Go to next slide
                console.log("Slide #" + index + " Going to slide #" + (index + 1));
                nextSlide(slide)
            }
            return;
        }

        inner.css('stroke-dashoffset', dasharray - ((i + 1) * (dasharray / time)));
        i++;
    }, 1);
}

$("#nextSlide").click(function () {
    if(slides.length >= (slideIndex + 1)){
        clearInterval(interval);
        i = 0;
        nextSlide(slideIndex);
    }
});

$("#previousSlide").click(function () {
    if((slideIndex - 1) >= 1){
        clearInterval(interval);
        i = 0;
        previousSlide(slideIndex);
    }else{
        clearInterval(interval);
        slideIndex = slides.length + 1;
        i = 0;
        previousSlide(slides.length);
    }
});
