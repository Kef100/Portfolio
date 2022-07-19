//Slider Variables
let sliderIndex = 1;
let testimonyIndex = 1;
const inner = $("#circle #inline");
const slides = $(".portfolio-slide");
const testimonials= $(".testimony");
const portfolio_bullets = $(".portfolio-bullet");
const testimonial_bullets = $(".testimony-bullet");
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
                    showSlide(sliderIndex);
                    showPortfolioBullet(sliderIndex - 1);
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
portfolio_bullets.each(function() {
    $(this).find("svg circle:nth-child(2)").css("stroke-dasharray", dasharray);
    $(this).find("svg circle:nth-child(2)").css("stroke-dashoffset", dasharray);
});

function showSlide(slide) {
    let slideElement = slides.get(slide - 1);
    slides.each(function() {
        $(this).removeClass("fade-active-slide");
        $(this).removeClass("active-portfolio-slide");
    });
    $(slideElement).addClass("active-portfolio-slide");
    startCounter(2500, slide);
}

function showPortfolioBullet(slide) {
    let nextBullet = portfolio_bullets.get(slide);
    portfolio_bullets.each(function() {
        $(this).removeClass("bullet-active");
    });
    $(nextBullet).addClass("bullet-active");
}

function nextSlide(slide) {
    showSlide(slide + 1);
    showPortfolioBullet(slide);
    sliderIndex++;
}

function previousSlide(slide) {
    if (slide >= 1) {
        sliderIndex--;
        showSlide(sliderIndex);
        showBullet(sliderIndex - 1);
    }
}

function goToSlide(slide) {
    if (slide !== sliderIndex) {
        clearInterval(interval);
        i = 0;
        fadeSlide(sliderIndex - 1);
        setTimeout(function () {
            showSlide(slide);
            showBullet(slide - 1);
        }, 1000);
        sliderIndex = slide;
    }
}

function fadeSlide(slide) {
    let currentElement = slides.get(slide);
    $(currentElement).removeClass("active-portfolio-slide");
    $(currentElement).addClass("fade-active-slide");
}


function startCounter(time, slide) {
    let bullet = portfolio_bullets.get(slide - 1);
    let isFading = false;

    interval = setInterval(function () {
        if (i == time) {
            clearInterval(interval);
            i = 0;

            if ((slide) >= slides.length) {
                //Restart slider, all slides were looped
                sliderIndex = 0;
                nextSlide(0);
            } else {
                //Go to next slide
                nextSlide(slide)
            }
            return;
        }

        if(i / time * 100 > 85 && !isFading) {
            isFading = true;
            fadeSlide(slide - 1);
        }
        $(bullet).find("svg circle:nth-child(2)").css('stroke-dashoffset', dasharray - ((i + 1) * (dasharray / time)));
        i++;
    }, 1);
}

$("#nextSlide").click(function () {
    if (slides.length >= (sliderIndex + 1)) {
        clearInterval(interval);
        i = 0;
        fadeSlide(sliderIndex - 1);
        setTimeout(function () {
            nextSlide(sliderIndex);
        }, 1000);
    }else{
        clearInterval(interval);
        i = 0;
        sliderIndex = 0;
        fadeSlide(slides.length - 1);
        setTimeout(function () {
            nextSlide(0);
        }, 1000);
    }
});

$("#previousSlide").click(function () {
    if ((sliderIndex - 1) >= 1) {
        clearInterval(interval);
        i = 0;
        fadeSlide(sliderIndex - 1);
        setTimeout(function () {
            previousSlide(sliderIndex);
        }, 1000);
    } else {
        clearInterval(interval);
        sliderIndex = slides.length + 1;
        i = 0;
        fadeSlide(0);
        setTimeout(function () {
            previousSlide(slides.length);
        }, 1000);
    }
});

function showTestimonyBullet(testimony) {
    let nextBullet = testimonial_bullets.get(testimony);
    testimonial_bullets.each(function() {
        $(this).removeClass("bullet-active");
    });
    $(nextBullet).addClass("bullet-active");
}

function nextTestimony(testimony) {
    showTestimony((testimony - 1) * 3);
    showTestimonyBullet(testimony - 1);
    sliderIndex++;
}

function showTestimony(testimony) {
    let slideElement = testimonials.get(testimony);
    testimonials.each(function() {
        $(this).removeClass("active-testimony");
    });
    scrollToTestimony(slideElement);
    $(slideElement).addClass("active-testimony");
}

function goToTestimony(testimony){
    testimonyIndex = testimony;
    showTestimony(testimony);
    showTestimonyBullet(Math.floor(testimony / 3));
}

function scrollToTestimony(testimony){
    console.log(testimony.offsetLeft);
    $("#testimonials").animate({scrollLeft: testimony.offsetLeft}, 500);
}


$("#nextTestimony").click(function (){
    if((testimonyIndex + 1) >= (testimonials.length)){
        testimonyIndex = 0;
        showTestimony(testimonyIndex);
        showTestimonyBullet(testimonyIndex);
    }else{
        testimonyIndex++;
        showTestimony(testimonyIndex);
        showTestimonyBullet(Math.floor(testimonyIndex / 3));
    }
});

$("#previousTestimony").click(function (){
    if((testimonyIndex - 1) < 0){
        testimonyIndex = testimonials.length - 1;
        showTestimony(testimonyIndex);
        showTestimonyBullet(Math.floor(testimonyIndex / 3));
    }else{
        testimonyIndex--;
        showTestimony(testimonyIndex);
        showTestimonyBullet(Math.floor(testimonyIndex / 3));
    }
});


// $("#pause").click(function () {
//     clearInterval(interval);
// });
//
// $("#play").click(function () {
//     showSlide(sliderIndex);
// });

