<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="utf-8" />
  <title>Menu</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="icon" type="image/x-icon" href="assets/img/logoicon.ico">
  <style type="text/css">
    .plate-slider__image{
      transform: rotate(0deg);
    }

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
</head>

<body class="body--dark">

  <?php include 'blocks/header.php'; ?>

    <main>

      <section class="section--plate-slider">
        <div class="plate-slider">
          <div class="plate-slider__slider" >
            <div class="is--plate-slider" style="justify-content: center;">
              <div class="swiper-slide is--plate-slider">
                <div class="plate-slider__content-block is--plate-slider">
                  <div class="text--mask">
                    <h2 class="plate-slider__title">Menu</h2></div>
                </div>
                <div style="top: -9px;" class="plate-slider__image-wrapper">
                  <img sizes="100vw" srcset="assets/img/611373bc45c6e61e374c543b_joris-bijdendijk-p-500.png 500w, assets/img/611373bc45c6e61e374c543b_joris-bijdendijk-p-800.png 800w, assets/img/611373bc45c6e61e374c543b_joris-bijdendijk-p-1080.png 1080w, assets/img/611373bc45c6e61e374c543b_joris-bijdendijk.png 1566w" src="assets/img/611373bc45c6e61e374c543b_joris-bijdendijk.png" alt="" class="plate-slider__image" />
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>


      <section class="main_wrapper">
        <div class="grid three-elements-layout__grid">
            <div class="three-elements-heading">
              <h1 class="heading--xlarge">Lorem ipsum dolor sit amet, consectetur</h1>
            </div>
            <div>
              <div class="small-divider"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="three-elements-layout__image-wrapper">
              <img src="assets/img/food/photo_2022-02-19_10-16-17.jpg" loading="lazy" alt="" />
            </div>
        </div>
      </section>
      <section class="main_wrapper">
        <div class="grid three-elements-layout__grid is--reversed">
          <div class="three-elements-heading">
            <h1 class="heading--xlarge">Lorem ipsum dolor sit 2019 amet, nostrud</h1>
          </div>
          <div class="three-elements-layout__image-wrapper">
              <img src="assets/img/food/photo_2022-02-19_10-16-20.jpg" loading="lazy" alt="img" />
              </div>
          <div>
            <div class="small-divider"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </section>

    </main>

    <?php include 'blocks/footer.php'; ?>
      <style type="text/css">

      </style>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
      <script src="assets/js/main.js"></script>
      <script type="text/javascript">

        $( document ).ready(function() {



      $("header").addClass("header_down");
      $(".plate-slider__title").addClass("title_show");

      setTimeout(function(){
        $(".plate-slider__image-wrapper").addClass("change_right");
      }, 200);


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
