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
                <a href="menu" class="link plate-slider__content-block is--plate-slider w-inline-block">
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

              <div class="col-md-12 d_center ">
                <textarea rows="7" id="message" required="" name="message" placeholder="Message"></textarea>
              </div>
              <div class="col-md-12 d_center">
                <p class="error">Fill in all the fields</p>
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

     

    <div class="S_massage">
      <div class="close">
        <p id="close_mass">x</p>
      </div>
      <h6>We will soon contact you.</h6>
    </div>

  <!--   <div class="E_massage">
      <div class="close">
        <p>x</p>
      </div>
      <h6>We will soon contact you.</h6>
    </div> -->


    <style type="text/css">
      .error{
        color: red;
        margin-bottom: 6px;
        display: none;
      }
      .S_massage{
        width: 300px;
        position: fixed;
        z-index: 9999 !important;
        height: 75px;
        background: #E0EFCB;
        top: 90%;
        right: 15px;
        border-radius: 4px;
        display: none;
      }

      .close{
        width: 100%;
        height: 30px  !important;
        display: flex;
        justify-content: flex-end;
        align-items: center;
      }

      .close p{
        margin-right: 10px;
        color: #008080;
        height: inherit !important;
        cursor: pointer;
        margin-bottom: 0px;
        font-weight: 200;
        font-size: 20px;
      }

      .S_massage h6{
        width: 100%;
        text-align: left;
        color: #008080;
        margin: 0px 0px 0px 10px;
        font-size: 16px;
        padding: 0px;
      }
    </style>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="assets/js/main.js"></script>
      <script>

        $( document ).ready(function() {


          $("#send_form").click(function () {
            
            var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();

            if (name == "") {
              (".error").slideDown(300);
              return false;
            }else if(email == ""){
              (".error").slideDown(300);
              return false;
            }else if(message == ""){
              $(".error").slideDown(300);
              return false;
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
                    $(".S_massage").fadeIn("slow");
                    $(".error").slideUp(300);
                    $("#send_form").prop("disabled", false);
                    $("#name").val("");
                    $("#email").val("");
                    $("#message").val("");
                }else{
                    alert("errpr");
                }
                
              }
            });
          });





             
   

          $("#close_mass").click(function(){
            $(".S_massage").fadeOut("slow");
          });

            $("#name").val("");
            $("#email").val("");
            $("#date").val("");
            $("#massage").val("");
    
        
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