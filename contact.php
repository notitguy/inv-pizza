<!DOCTYPE html>
<html lang="cs">

<head>
  <title>Contact us ~ Pizzeria Invitaly Prague</title>
  <?php include 'blocks/base-head.php'; ?>
</head>

<body class="contact has--plate-header body--dark">

  <?php 

  date_default_timezone_set('Europe/Prague');
  $today = date("F j, Y, g:i a");

  include 'blocks/header.php';
  ?>

  
    <main>

     <section class="section--plate-slider" style="background-color: #526774;">
        <div class="plate-slider">
          <div class="plate-slider__slider" >
            <div class="swiper-wrapper is--plate-slider" style="justify-content: center;">
              <div class="swiper-slide is--plate-slider">
                <div style="margin-top: -9px;" class="plate-slider__image-wrapper">
                  <img sizes="100vw" srcset="assets/img/611373bdc832dc0f1c380f47_rijks-p-500.png 500w, assets/img/611373bdc832dc0f1c380f47_rijks-p-800.png 800w, assets/img/611373bdc832dc0f1c380f47_rijks.png 1566w" src="assets/img/611373bdc832dc0f1c380f47_rijks.png" alt="" class="plate-slider__image" />
                </div>
                <div class="plate-slider__content-block is--plate-slider">
                  <div class="text--mask">
                    <h2 class="plate-slider__title is--slider-home">Contact</h2>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

      <section class="main_wrapper">
        <div class="row">
          <div class="col-md-6">
            <h1 class="heading--xlarge">Come and enjoy true Italian Food</h1>
          </div>
          <div class="col-md-6 row p-0">
            <div class="col-md-6">
              <h3>Invitaly EnoTrattoria<br></h3>
              <address>
                <div>Vězeňská 4, 110 00 Praha</div>
                <div>Otevírací doba: 11:00 - 22:00 (Út-So)</div>
                <div>Tel: +420 222 313 185</div>
                <a href="https://goo.gl/maps/QFHo98UqRi7Puspj6" target="_blank" class="bottomline">View on Google Maps</a>
              </address>
            </div>
            <div class="col-md-6">
            <h3>Invitaly Pizzeria</h3>
              <address>
                <div>Vladislavova 26, 110 00 Praha</div>
                <div>Otevírací doba: 11:00 - 22:00 (Po-Pá)</div>
                <div>Tel: +420 773 060 490</div>
                <a href="https://goo.gl/maps/Hyk2hotsKMwWe1EL9" target="_blank" class="bottomline">View on Google Maps</a>
              </address>
            </div>
          </div>
        </div>
      </section>

      <section class="main_wrapper">
        <div class="row">
          <div class="col-md-6">
            <!-- <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=INVITALY%20Pizza%20%D0%BF%D1%80%D0%B0%D0%B3%D0%B0%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> -->
          </div>
          <div class="col-md-6">
            <h3>Send us a message</h3>
            <form action="sendmail.php" method="POST" id="contact-form" class="row no-labels">
              <input type="text" id="name" required name="name" placeholder="Name">
              <input type="email" id="email" required name="email" placeholder="Email">
              <input type="tel" id="phone" name="phone" placeholder="Phone">
              <textarea rows="3" id="message" required name="message" placeholder="Message"></textarea>
              <p class="error"></p>
              <button type="submit" id="send_form" name="send_form">Send</button>
            </form>
          </div>
        </div>
      </section>

    </main>

    <?php include 'blocks/footer.php'; ?>


    <div class="notify success">
      <img src="assets/img/icons/gg-check-o.svg" alt="icon" >
      <div>Thank you! Your message has been sent.</div>
      <button>
        <svg aria-hidden="true" viewBox="0 0 14 16"><path fill-rule="evenodd" d="M7.71 8.23l3.75 3.75-1.48 1.48-3.75-3.75-3.75 3.75L1 11.98l3.75-3.75L1 4.48 2.48 3l3.75 3.75L9.98 3l1.48 1.48-3.75 3.75z"></path></svg>
      </button>
    </div>

      <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
      <!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script> -->
      <!-- <script src="assets/js/main.js"></script> -->
      <script>

        // $( document ).ready(function() {


        //   // Disable "send" button on start
        //   $("#send_form").prop( "disabled", true );

        //   // Validate name
        //   $('#name').on("input blur", function(e) {
        //       validateName(e);
        //   });

        //   function validateName() {
        //     const name = $("#name").val();
        //     if (name.length < 1 ) {
        //       $("#name").addClass("error-field").removeClass("valid")
        //       return false;
        //     } else {
        //       $("#name").removeClass("error-field").addClass("valid")
        //     }
        //   }

        //   // Validate email
        //   $('#email').on("input blur", function(e) {
        //       validateEmail(e);
        //   });

        //   function validateEmail() {
        //     const email = $("#email").val();
        //     if ( email.length > 0 && email.match(/^\S+@\S+\.\S+$/) ) {
        //         $("#email").removeClass("error-field").addClass("valid")
        //       return false;
        //     } else {
        //       $("#email").addClass("error-field").removeClass("valid")
        //     }
        //   }
          
        //   // Validate phone
        //   $('#phone').on("input blur", function(e) {
        //       validatePhone(e);
        //   });

        //   function validatePhone() {
        //     const phone = $("#phone").val();
        //     if ( !(phone.length == 0 || /^[0-9 ()+-]{9,12}$/.test(phone)) ) {
        //         $("#phone").addClass("error-field")
        //       return false;
        //     } else {
        //       $("#phone").removeClass("error-field")
        //     }
        //   }

        //   // Validate textarea
        //   $('#message').on("input blur", function(e) {
        //       validateMessage(e);
        //   });
        //   function validateMessage() {
        //     const message = $("#message").val();
        //     if ( message.length > 10 ) {
        //       $("#send_form").prop( "disabled", false );
        //       $("#message").removeClass("error-field")
        //       return false;
        //     } else {
        //       $("#message").addClass("error-field")
        //     }
        //   }

        //   // Validation on submit
        //   $("#send_form").click(function () {

        //     let name = $("#name").val();
        //     let email = $("#email").val();
        //     let phone = $("#phone").val();
        //     let message = $("#message").val();

        //     if (name == "") {
        //       $(".error").text("Missing name");
        //       $(".error").fadeIn();
        //       $("#name").addClass("error-field").removeClass("valid")
        //       return false
        //     } else if (email == "") {
        //       $(".error").text("Missing email");
        //       $(".error").fadeIn();
        //       $("#email").addClass("error-field").removeClass("valid")
        //        return false
        //     } else if ( !(phone.length == 0 || /^[0-9 ()+-]{9,12}$/.test(phone)) ) {
        //       $(".error").text("Incorrect phone format");
        //       $(".error").fadeIn();
        //       $("#phone").addClass("error-field").removeClass("valid")
        //        return false
        //     } else if (message == "") {
        //       $(".error").text("Please, write your message.");
        //       $(".error").fadeIn();
        //       $("#message").addClass("error-field").removeClass("valid")
        //        return false
        //     }

        //     if (email.length > 0
        //     && (email.match(/.+?\@.+/g) || []).length !== 1) {
        //     console.log('invalid');
        //     $(".error").text("You entered incorrect email");
        //     $(".error").fadeIn();
        //     return false;
        //     } else {
              
        //     }

        //     // Send with Ajax
        //     $.ajax({
        //       url: 'sendmail.php',
        //       type: 'POST',
        //       chache: false,
        //       data: $('#contact-form').serialize(),
        //       beforeSend: function () {
        //         $("#send_form").prop("disabled", true);
        //       },
        //       success: function (data) {
        //         if(data = "success"){
        //             $(".notify").addClass("visible");
        //               setTimeout(function () {
        //                 $(".notify").removeClass("visible");
        //               }, 5000);
        //             $(".error").slideUp(300);
        //             $("#send_form").prop("disabled", false);
        //             $("#name").val("");
        //             $("#email").val("");
        //             $("#phone").val("");
        //             $("#message").val("");
        //         }else{
        //             alert("errpr");
        //         }
                
        //       }
        //     });


        //   })

        // // Notification
        //   $(".notify button").click(function(){
        //     $(".notify").removeClass("visible");
        //   });

       
    
        
      //  $("header").addClass("header_down");
      // $(".plate-slider__title").addClass("title_show");

      // setTimeout(function(){
      //   $(".plate-slider__image-wrapper").addClass("change_right");
      // }, 200);


      // $('.link ').click(function(e) {

      // $("header").removeClass("header_down");
      // $(".plate-slider__title").removeClass("title_show");
      // $(".plate-slider__image-wrapper").removeClass("change_right");
        
      //     e.preventDefault();
      //      setTimeout(function(url) {
           
      //         window.location = url
      //     }, 1100, this.href);
      // });
      
// });
        
      </script>
      <!-- <script src="assets/js/animate.js"></script> -->
</body>

</html>
