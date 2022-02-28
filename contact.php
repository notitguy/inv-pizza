<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="utf-8" />
  <title>Contact</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <style type="text/css">
  .plate-slider__title{
    transform: translateY(200px);
    transition: transform ease-in-out 0.7s;
  }

  .title_show{
    transform: translateY(0px);
    transition: transform ease-in-out 0.7s;
  }
  
  .change_right{
    transform: translateX(120px) !important;
    transition: transform ease-in-out 0.7s;
  }

  .plate-slider__image-wrapper{
    transition: transform ease-in-out 0.7s;
  }
</style>
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="icon" type="image/x-icon" href="assets/img/logoicon.ico">
  <style type="text/css">
    .plate-slider__image{
      transform: rotate(0deg);
      position: relative;
    }
  </style>
</head>

<body class="body--dark">

  <?php 

  date_default_timezone_set('Europe/Prague');
  $today = date("F j, Y, g:i a");


    include 'blocks/header.php';
  ?>

  
    <main>

     <section class="section--plate-slider wf-section" style="background-color: #526774;">
        <div class="plate-slider">
          <div class="plate-slider__slider" >
            <div class="is--plate-slider" style="justify-content: center;">
              <div class="swiper-slide is--plate-slider">
                <a href="javascript:void(0);" class=" plate-slider__content-block is--plate-slider w-inline-block">
                  <div class="text--mask">
                  </div>
                  <div class="text--mask">
                    <h2 class="plate-slider__title is--slider-home">Contact</h2></div>
                  <div class="text--mask">
                    <div  class="plate-slider__btn-block">
                  </div>
                </a>
                <div class="plate-slider__image-wrapper">
                  <img style="margin-top: -9vh;" sizes="100vw" srcset="assets/img/611373bdc832dc0f1c380f47_rijks-p-500.png 500w, assets/img/611373bdc832dc0f1c380f47_rijks-p-800.png 800w, assets/img/611373bdc832dc0f1c380f47_rijks.png 1566w" src="assets/img/611373bdc832dc0f1c380f47_rijks.png" alt="" class="plate-slider__image" /></div>
              </div>

            </div>
          </div>
        </div>

      </section>

      <section class="section--three-elements-layout wf-section main_wrapper" style="background-color: #212121;">

        <div class="row">
          <div class="col-md-6 m-0-p-0">
            <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=INVITALY%20Pizza%20%D0%BF%D1%80%D0%B0%D0%B3%D0%B0%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>
          <div class="col-md-6 m-0-p-0 d_center flex_d_c">
            <h3 class="title_c_form">Contact form</h3>
            <form action="sendmail.php" method="POST" class="myform form row">
              <div class="col-md-12 d_center">
                <input type="text" id="name" required="" name="name" placeholder="Name">
              </div>
              <div class="col-md-12 d_center">
                <input type="email" id="email" required="" name="email" placeholder="Email">
              </div>
              <div class="col-md-12 d_center">
                <input type="number" id="phone" required="" name="phone" placeholder="Phone">
              </div>
              <div class="col-md-12 d_center ">
                <textarea rows="7" id="message" required="" name="message" placeholder="Message"></textarea>
              </div>
              <div class="col-md-12 d_center">
                <p class="error"></p>
              </div>
              
              <div class="col-md-12 d_center ">
                <button type="button" class="send_form" id="send_form" name="send_form">Send</button>
              </div>
            </form>
          </div>
        </div>

      </section>

    </main>

    <?php 
    include 'blocks/footer.php';
  ?>


    <div class="notify success">
      <img src="assets/img/icons/check-mark-circle-thin.svg" alt="icon" >
      <span>Thank you! Your message has been sent.</span>
      <button>
        <svg aria-hidden="true" viewBox="0 0 14 16"><path fill-rule="evenodd" d="M7.71 8.23l3.75 3.75-1.48 1.48-3.75-3.75-3.75 3.75L1 11.98l3.75-3.75L1 4.48 2.48 3l3.75 3.75L9.98 3l1.48 1.48-3.75 3.75z"></path></svg>
      </button>
    </div>



    <style type="text/css">
      .error{
        color: red;
        margin-bottom: 6px;
        display: none;
      }
      .notify {
        display: flex;
        align-items: center;
        min-width: 300px;
        min-height: 6rem;
        padding: 1.5rem;
        position: fixed;
        bottom: 2rem;
        right: 0;
        border-radius: 5px;
        /* for animations */
        visibility: hidden;
        opacity: 0;
        transform: translateY(2rem);
        transition: all 0.3s ease-in-out;
      }
        .notify.visible {
          visibility: visible;
          opacity:1;
          transform: translateY(0)
        }
        .notify.success {
          background-color: #E0EFCB;
        }

      .notify span {
        flex: 1 1 auto;
        color: #222;
        margin: 0 1rem;
      }
      .notify button {
        align-self: flex-start;
        margin: 0;
        padding: 0;
        width: auto;
        background-color: transparent;
        opacity: 0.4;
      }
      .notify button svg {
        width: 2rem;
        height: 2rem;
      }
    </style>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
      <script src="assets/js/main.js"></script>
      <script>

        $( document ).ready(function() {


          $("#send_form").click(function () {



            

            var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();
            var phone = $("#phone").val();

    
            if (name == "") {
              $(".error").text("Fill in all the fields");
              $(".error").fadeIn();
              return false
            }else if (email == "") {
              $(".error").text("Fill in all the fields");
              $(".error").fadeIn();
               return false
            }else if (phone == "") {
              $(".error").text("Fill in all the fields");
              $(".error").fadeIn();
               return false
            }else if (message == "") {
              $(".error").text("Fill in all the fields");
              $(".error").fadeIn();
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


            $.ajax({
              url: 'sendmail.php',
              type: 'POST',
              chache: false,
              data: $('.myform').serialize(),
              beforeSend: function () {
                $("#send_form").prop("disabled", true);
              },
              success: function (data) {
                if(data = "success"){
                    $(".notify").addClass("visible");
                      setTimeout(function () {
                        $(".notify").removeClass("visible");
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


          });





             
   

          $(".notify button").click(function(){
            $(".notify").removeClass("visible");
          });

       
    
        
       $("header").addClass("header_down");
      $(".plate-slider__title").addClass("title_show");

      setTimeout(function(){
        $(".plate-slider__image-wrapper").addClass("change_right");
      }, 700);


      $('.link ').click(function(e) {

      $("header").removeClass("header_down");
      $(".plate-slider__title").removeClass("title_show");
      $(".plate-slider__image-wrapper").removeClass("change_right");
        
          e.preventDefault();
           setTimeout(function(url) {
           
              window.location = url
          }, 1100, this.href);
      });
      
});
        
      </script>
      <script src="assets/js/animate.js"></script>
</body>

</html>
