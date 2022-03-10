"use strict";

setTimeout(function() { 
   $('.banner_content h2').slideDown('slow');
}, 300);

 $("#burger").click(function(){
    $(this).toggleClass("change");
    $( ".mobile-menu" ).toggleClass( "mobile-menu-show");
    $( ".overlay" ).toggleClass( "overlay-show");
    // $(".menu").toggleClass("show");
    // $( "header" ).toggleClass( "br_bottom");
    // $(".menu ul li a:visible").hide(300);
    // $(".menu ul li a:hidden").show(300);;
    // $(".overlay:visible").hide(1000);
    // $(".overlay:hidden").show(1000);
});


  $(".overlay, .m_link__").click(function(){
     $("#burger").toggleClass("change");
    $( ".mobile-menu" ).toggleClass( "mobile-menu-show");
    $( ".overlay" ).toggleClass( "overlay-show");
    // $(".menu").toggleClass("show");
    // $( "header" ).toggleClass( "br_bottom");
    // $(".menu ul li a:visible").hide(300);
    // $(".menu ul li a:hidden").show(300);;
    // $(".overlay:visible").hide(100);
    // $(".overlay:hidden").show(100);
});





$(window).scroll(function() {
    var menutTop = 3;

    if ($(document).scrollTop() >= menutTop)
    {
        $("header").addClass("sticky_top").delay(300);
    }
    else if ($(document).scrollTop() < menutTop)
    {
        $("header").removeClass("sticky_top");
    }
});


if (
    ($(".plate-slider__content-block.is--plate-slider").click(function (e) {
        // e.preventDefault();
        // var i = $(this).attr("href");
        // setTimeout(
        //     function (e) {
        //         window.location = e;
        //     },
        //     1100,
        //     i
        // );
    }),
    // $(window).on("beforeunload", function () {
    //     $(window).scrollTop(0);
    // }),
    window.addEventListener(
        "pageshow",
        function (e) {
            e.persisted &&
                setTimeout(function () {
                    window.location.reload();
                }, 10);
        },
        !1
    ),
    !$("body").hasClass("is--home"))
) {
    function internalLink(e) {
        return e.host == window.location.host;
    }
    $("a").each(function () {
        internalLink(this) &&
            -1 === this.href.indexOf("#") &&
            $(this).click(function (e) {
                e.preventDefault();
                var i = jQuery(this).attr("href");
                setTimeout(function () {
                    window.location = i;
                }, 700),
                    $(".page-transition").click();
            });
    });
}

if ($("body").hasClass("is--home")) {
const fullWidthSlider = new Swiper(".full-width-slider", { slidesPerView: 1, speed: 1200, loop: !0, breakpoints: { 0: { shortSwipes: !1, speed: 500 }, 991: { shortSwipes: !1, speed: 1200 } } });
var slides_count = document.getElementsByClassName("plate-slider__link-block");
const plateSlider = new Swiper(".plate-slider__slider", {
        centeredSlides: !0,
        slidesPerView: "auto",
        speed: 1200,
        simulateTouch: false,
        breakpoints: { 0: { shortSwipes: !0, speed: 500 }, 991: { shortSwipes: !1, speed: 1200 } },
       navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: { el: ".swiper-pagination", type: "progressbar", clickable: !0 },
        on: {
            slideChange: function () {
                document.querySelector("#numberSlides").innerHTML = "0" + (this.activeIndex + 1);
            },
        },
    }),
    bgSlider = new Swiper(".bg-slider__container", { centeredSlides: !0, slidesPerView: "auto", breakpoints: { 0: { speed: 500 }, 991: { speed: 1200 } } });
plateSlider.controller.control = bgSlider;
}



