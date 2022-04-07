//Slider Variables
let slideIndex = 1;
const inner = $("#circle #inline");
const slides = $(".portfolio-slide");
const bullets = $(".portfolio-bullet");
let interval;
let i = 0;
const pi = 3.14;
const dasharray = 2 * inner.attr("r") * pi;

//Preloader Variables
const progressBar = $("#percentage");
let duration = 1000;

//Scroll to button
$(document).on('click', '#scrolldown', function () {
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
    }, {
        duration: duration
    });
}

function startFullpage() {
    if ($('html').hasClass('fp-enabled')) {
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
                    showBullet(slideIndex - 1);
                }
            },
            onLeave: function (origin, destination) {
                if (destination.index === 3) {}
                else {
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
    let slideElement = slides.get(slide - 1);
    startCounter($(slideElement).attr("data-slide-duration"), slide);
}

function showBullet(slide) {
    let nextBullet = bullets.get(slide);
    bullets.each(function() {
        $(this).removeClass("bullet-active");
    });
    $(nextBullet).addClass("bullet-active");
}

function nextSlide(slide) {
    showSlide(slide + 1);
    showBullet(slide);
    slideIndex++;
    //TODO: Change to next slide (Next bullet & content)
}

function previousSlide(slide) {
    if (slide >= 1) {
        showSlide(slide - 1);
        showBullet(slide);
        slideIndex--;
        //TODO: Change to previous slide (Previous bullet & content)
    }
}

function goToSlide(slide) {
    if (slide !== slideIndex) {
        clearInterval(interval);
        i = 0;
        showSlide(slide);
        showBullet(slide - 1);
        slideIndex = slide;
        //TODO: Change to chosen slide (content)
    }
}


function startCounter(time, slide) {
    interval = setInterval(function () {
        if (i == time) {
            clearInterval(interval);
            i = 0;

            if ((slide) >= slides.length) {
                //Restart slider, all slides were looped
                slideIndex = 0;
                nextSlide(0);
            } else {
                //Go to next slide
                nextSlide(slide)
            }
            return;
        }

        inner.css('stroke-dashoffset', dasharray - ((i + 1) * (dasharray / time)));
        i++;
    }, 1);
}

$("#nextSlide").click(function () {
    if (slides.length >= (slideIndex + 1)) {
        clearInterval(interval);
        i = 0;
        nextSlide(slideIndex - 1);
    }else{
        clearInterval(interval);
        i = 0;
        slideIndex = 1;
        nextSlide(0);
    }
});

$("#previousSlide").click(function () {
    if ((slideIndex - 1) >= 1) {
        clearInterval(interval);
        i = 0;
        previousSlide(slideIndex);
    } else {
        clearInterval(interval);
        slideIndex = slides.length + 1;
        i = 0;
        previousSlide(slides.length);
    }
});
