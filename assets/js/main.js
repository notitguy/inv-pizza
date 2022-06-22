"use strict";

// setTimeout(function() { 
//    $('.banner_content h2').slideDown('slow');
// }, 300);

// Reloads page, when it's served from cache. E.g. hitting "back" button
    window.addEventListener(
        "pageshow",
        function (e) {
            e.persisted &&
                setTimeout(function () {
                    window.location.reload();
                }, 10);
        },
        !1
    )

 // Burger toggle   
 $("#burger").click(function(){
    $(this).toggleClass("change");
    $( ".mobile-menu" ).toggleClass( "mobile-menu--visible");
    $( ".overlay" ).toggleClass( "overlay--visible");
    // $(".menu").toggleClass("show");
    // $( "header" ).toggleClass( "br_bottom");
    // $(".menu ul li a:visible").hide(300);
    // $(".menu ul li a:hidden").show(300);;
    // $(".overlay:visible").hide(1000);
    // $(".overlay:hidden").show(1000);
});

 // Close overlay on click  
$(".overlay, .mobile-menu a").click(function(){
    $("#burger").toggleClass("change");
    $( ".mobile-menu" ).toggleClass( "mobile-menu--visible");
    $( ".overlay" ).toggleClass( "overlay--visible");
    // $(".menu").toggleClass("show");
    // $( "header" ).toggleClass( "br_bottom");
    // $(".menu ul li a:visible").hide(300);
    // $(".menu ul li a:hidden").show(300);;
    // $(".overlay:visible").hide(100);
    // $(".overlay:hidden").show(100);
});


// Add class to header on scroll
$(window).scroll(function() {
    var menutTop = 100;

    if ($(document).scrollTop() >= menutTop)
    {
        $("header").addClass("sticky_top").delay(300);
    }
    else if ($(document).scrollTop() < menutTop)
    {
        $("header").removeClass("sticky_top");
    }
});


// if (
//     ($(".plate-slider__content-block.is--plate-slider").click(function (e) {
//         // e.preventDefault();
//         // var i = $(this).attr("href");
//         // setTimeout(
//         //     function (e) {
//         //         window.location = e;
//         //     },
//         //     1100,
//         //     i
//         // );
//     }),
//     // $(window).on("beforeunload", function () {
//     //     $(window).scrollTop(0);
//     // }),
//     window.addEventListener(
//         "pageshow",
//         function (e) {
//             e.persisted &&
//                 setTimeout(function () {
//                     window.location.reload();
//                 }, 10);
//         },
//         !1
//     ),
//     !$("body").hasClass("is--home"))
// ) {
//     // function internalLink(e) {
//     //     return e.host == window.location.host;
//     // }
//     // $("a").each(function () {
//     //     internalLink(this) &&
//     //         -1 === this.href.indexOf("#") &&
//     //         $(this).click(function (e) {
//     //             e.preventDefault();
//     //             var i = jQuery(this).attr("href");
//     //             setTimeout(function () {
//     //                 window.location = i;
//     //             }, 700),
//     //                 $(".page-transition").click();
//     //         });
//     // });
// }

// Homepage slider
if ($("body").hasClass("is--home")) {
// const fullWidthSlider = new Swiper(".full-width-slider", { slidesPerView: 1, speed: 1200, loop: !0, breakpoints: { 0: { shortSwipes: !1, speed: 500 }, 991: { shortSwipes: !1, speed: 1200 } } });
// var slides_count = document.getElementsByClassName("plate-slider__link-block");
const plateSlider = new Swiper(".plate-slider__slider", {
        centeredSlides: true,
        slidesPerView: "auto",
        speed: 1200,
        simulateTouch: false,
        breakpoints: { 0: { shortSwipes: true, speed: 800 }, 991: { shortSwipes: false, speed: 1200 } },
       navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: { el: ".swiper-pagination", type: "progressbar", clickable: false },
        on: {
            slideChange: function () {
                document.querySelector("#numberSlides").innerHTML = "0" + (this.activeIndex + 1);
            },
        },
    }),
    bgSlider = new Swiper(".bg-slider__container", { centeredSlides: !0, slidesPerView: "auto", breakpoints: { 0: { speed: 500 }, 991: { speed: 1200 } } });
    plateSlider.controller.control = bgSlider;

    const reviewsSlider = new Swiper(".reviews__slider", {
      centeredSlides: true,
      autoplay: {
        delay: 5000,
      },
      speed: 800,
      // effect: 'fade', 
      pagination: {
        el: '.swiper-pagination-dots',
        clickable: true, 
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: { 0: { shortSwipes: true}, 991: { shortSwipes: false } },
    });
}


$( document ).ready(function() {

    $("header").addClass("header_down");
    $(".plate-slider__content-block").addClass("title_show");

    // For homepage
    if ($("body").hasClass("is--home")) {
        $(".slider").addClass("--fade-in");
        $('a:not([href^="\#"]):not([target="_blank"])').click(function(e) {
  
        $("header").removeClass("header_down");
        $(".plate-slider__content-block").removeClass("title_show");
        $(".swiper-slide-next, .swiper-slide-prev, .slider_buttons_, .plate-slider-pagination").addClass("fade_out");
        
            e.preventDefault();
              setTimeout(function(url) {
              
                window.location = url
            }, 1100, this.href);
        });
    }
    // For every page with a plate header
    // if ($("body").hasClass("has--plate-header")) {

        $(".plate-slider__title").addClass("title_show");
        $(".main-wrapper").addClass("--fade-in");


        setTimeout(function(){
            $(".plate-slider__image-wrapper").addClass("change_right");
        }, 200);

        $('a:not([href^="\#"]):not([target="_blank"])').click(function(e) {
  
            $("header").removeClass("header_down");
            $(".plate-slider__title").removeClass("title_show");
            $(".plate-slider__image-wrapper").removeClass("change_right");
            $(".main-wrapper").removeClass("--fade-in");
            
                e.preventDefault();
                 setTimeout(function(url) {
                 
                    window.location = url
                }, 1100, this.href);
            });
    // }
    
    if ($("body").hasClass("contact")) {

        // Disable "send" button on start
        $("#send_form").prop( "disabled", true );

        // Validate name
        $('#name').on("input blur", function(e) {
            validateName(e);
        });

        function validateName() {
          const name = $("#name").val();
          if (name.length < 1 ) {
            $("#name").addClass("error-field").removeClass("valid")
            return false;
          } else {
            $("#name").removeClass("error-field").addClass("valid")
          }
        }

        // Validate email
        $('#email').on("input blur", function(e) {
            validateEmail(e);
        });

        function validateEmail() {
          const email = $("#email").val();
          if ( email.length > 0 && email.match(/^\S+@\S+\.\S+$/) ) {
              $("#email").removeClass("error-field").addClass("valid")
            return false;
          } else {
            $("#email").addClass("error-field").removeClass("valid")
          }
        }
        
        // Validate phone
        $('#phone').on("input blur", function(e) {
            validatePhone(e);
        });

        function validatePhone() {
          const phone = $("#phone").val();
          if ( !(phone.length == 0 || /^[0-9 ()+-]{9,12}$/.test(phone)) ) {
              $("#phone").addClass("error-field")
            return false;
          } else {
            $("#phone").removeClass("error-field")
          }
        }

        // Validate textarea
        $('#message').on("input blur", function(e) {
            validateMessage(e);
        });
        function validateMessage() {
          const message = $("#message").val();
          if ( message.length > 10 ) {
            $("#send_form").prop( "disabled", false );
            $("#message").removeClass("error-field")
            return false;
          } else {
            $("#message").addClass("error-field")
          }
        }

        // Validation on submit
        $("#send_form").click(function () {

          let name = $("#name").val();
          let email = $("#email").val();
          let phone = $("#phone").val();
          let message = $("#message").val();

          if (name == "") {
            $(".error").text("Missing name");
            $(".error").fadeIn();
            $("#name").addClass("error-field").removeClass("valid")
            return false
          } else if (email == "") {
            $(".error").text("Missing email");
            $(".error").fadeIn();
            $("#email").addClass("error-field").removeClass("valid")
             return false
          } else if ( !(phone.length == 0 || /^[0-9 ()+-]{9,12}$/.test(phone)) ) {
            $(".error").text("Incorrect phone format");
            $(".error").fadeIn();
            $("#phone").addClass("error-field").removeClass("valid")
             return false
          } else if (message == "") {
            $(".error").text("Please, write your message.");
            $(".error").fadeIn();
            $("#message").addClass("error-field").removeClass("valid")
             return false
          }

          if (email.length > 0
          && (email.match(/.+?\@.+/g) || []).length !== 1) {
          console.log('invalid');
          $(".error").text("You entered incorrect email");
          $(".error").fadeIn();
          return false;
          } else {
            
          }

          // Send with Ajax
          $.ajax({
            url: 'contact_form.php',
            type: 'POST',
            chache: false,
            data: $('#contact-form').serialize(),
            beforeSend: function () {
              $("#send_form").prop("disabled", true);
            },
            success: function (data) {
              if(data = "success"){
                  $(".notify").addClass("--visible");
                    setTimeout(function () {
                      $(".notify").removeClass("--visible");
                    }, 5000);
                  $(".error").slideUp(300);
                  $("#send_form").prop("disabled", false);
                  $("#name").val("");
                  $("#email").val("");
                  $("#phone").val("");
                  $("#message").val("");
              }else{
                  alert("errpr");
              }
              
            }
          });


        })

    }
    
    if ($("body").hasClass("reservation")) {
        // move the code here
    }

    // Form notification
    $(".notify button").click(function(){
    $(".notify").removeClass("--visible");
    });

  // end document ready  
  });

  // Simple parallax

  const patterns = document.querySelectorAll('.pizzas');
  new simpleParallax(patterns, {
    overflow: true,
  });
  const framed = document.querySelectorAll('.three-elements-layout__image-wrapper img');
  new simpleParallax(framed, {
    scale: 1.2
  });
