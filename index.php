<!DOCTYPE html>
<html lang="cs">

<head>
  <title>Pizzeria Invitaly Prague</title>
  <?php include 'blocks/base-head.php'; ?>
</head>


<body class="body--dark is--home">

  <?php include 'blocks/header.php'; ?>

  <!-- <div class="global">
    <div class="css w-embed"></div>
    <div class="page-transition"></div>
  </div> -->
    <main>
      <section class="slider">

        <div class="bg-slider">
          <div class="bg-slider__container">
            <div class="swiper-wrapper is--bg-slider">
              <div class="swiper-slide is--bg-slider">
                <div class="bg is--01"></div>
              </div>
              <div class="swiper-slide is--bg-slider">
                <div class="bg is--02"></div>
              </div>
              <div class="swiper-slide is--bg-slider">
                <div class="bg is--03"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="plate-slider">
          <div class="plate-slider__slider">
            <div class="swiper-wrapper is--plate-slider">

              <div class="swiper-slide is--plate-slider">
                <div class="plate-slider__image-wrapper">
                  <img src="assets/img/header/plate-pizza-dark.webp" alt="" class="plate-slider__image" />
                </div>
                <a href="menu" class="link plate-slider__content-block is--plate-slider">
                  <div class="text--mask"><i class="plate-slider__subtitle">Delicious pizzas</i></div>
                  <div class="text--mask">
                    <h2 class="plate-slider__title is--slider-home">Just like<br>in Italy</h2></div>
                  <div class="text--mask">
                    <div class="plate-slider__btn-block">
                      <span class="plate-slider__btn">See menu</span>
                      <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" /></div>
                  </div>
                </a>
              </div>

              <div class="swiper-slide is--plate-slider">
                <div class="plate-slider__image-wrapper">
                  <img src="assets/img/header/plate-pizza.webp" alt="" class="plate-slider__image is--rijks" />
                </div>
                <a href="about" class="link plate-slider__content-block is--plate-slider">
                  <div class="text--mask">
                    <h2 class="plate-slider__title is--slider-home">Why<br>Invitaly?</h2>
                  </div>
                  <div class="text--mask">
                    <div class="plate-slider__btn-block">
                      <span class="plate-slider__btn">About us</span>
                      <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" />
                    </div>
                  </div>
                </a>
              </div>

              <div class="swiper-slide is--plate-slider">
                <div class="plate-slider__image-wrapper">
                  <img src="assets/img/header/plate-seafood.webp" alt="" class="plate-slider__image" />
                </div>
                <a href="contact" class="link plate-slider__content-block is--plate-slider">
                  <div class="text--mask">
                    <h2 class="plate-slider__title is--slider-home">Contact</h2>
                  </div>
                  <div class="text--mask">
                    <div class="plate-slider__btn-block">
                      <span class="plate-slider__btn"></span>
                      <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" />
                    </div>
                  </div>
                </a>
              </div>

            </div>
          </div>
         
          <div class="slider_buttons_">
             <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>  
          <aside class="plate-slider-pagination">
            <div class="plate-slider-pagination__count-wrapper">
              <div id="numberSlides" class="plate-slider-pagination__number is--active">01</div>
              <div id="totalSlides" class="plate-slider-pagination__number is--secondary">03</div>
            </div>
            <div class="swiper-pagination"></div>
          </aside>
        </div>

      </section>

      <section class="main-wrapper">
        <div class="parallax center">
          <h2>Today's Lunch Menu</h2>
          <i>11:30-15:00</i>
          <ul class="daily-menu">
            <li><span>Creamy mushroom soup with crispy bacon</span><span class="price">70,- Kč</span></li>
            <li><span>Tagliatelle alla Bolognese</span><span class="price">170,- Kč</span></li>
            <li><span>Squid ink taglioni with tune, cherry tomatoes and fresh chili</span><span class="price">180,- Kč</span></li>
            <li><span>Beaf sirloan steak served with mixed salad, cherry tomatoes, Grana Padano and balsamic glaze</span><span class="price">180,- Kč</span></li>
            <li><span>Four Cheese Pizza with tomato base</span><span class="price">190,- Kč</span></li>
            <li><span>Orange flavored Tiramisu</span><span class="price">80,- Kč</span></li>
          </ul>
        </div>
      </section>

      <section class="main-wrapper">
        <div class="grid three-elements-layout__grid">
          <div class="three-elements-heading">
            <h1 class="heading--xlarge">Lorem ipsum dolor sit amet, consectetur</h1>
          </div>
          <div>
            <div class="small-divider"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="three-elements-layout__image-wrapper">
            <img src="assets/img/616fcd16cb902a14e81c1acf_rijks-diner-wit-bord-groen-sausje1-1.jpg" loading="lazy" alt="" />
          </div>
      </div>
      </section>

      <section class="main-wrapper">
        <div class="grid three-elements-layout__grid is--reversed">
          <div class="three-elements-heading">
            <h1 class="heading--xlarge">Lorem ipsum dolor sit 2019 amet, nostrud</h1>
          </div>
          <div class="three-elements-layout__image-wrapper">
            <img src="assets/img/616fcd1ead014f224b85d31b_rijks-diner-champignon-1-1.jpg" loading="lazy" alt="img" />
        </div>
          <div>
            <div class="small-divider"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </section>
    </main>

    <?php include 'blocks/footer.php'; ?>

  <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
  <!-- <script src="assets/js/main.js"></script> -->
  <script type="text/javascript">

    // $( document ).ready(function() {
        
    //   $("header").addClass("header_down");
    //   $("main").addClass("main_up");
    //   $(".plate-slider__content-block").addClass("title_show");

    // $('.link').click(function(e) {

    // $("header").removeClass("header_down");
    // $(".plate-slider__content-block").removeClass("title_show");
    // $(".swiper-slide-next, .swiper-slide-prev, .slider_buttons_, .plate-slider-pagination").addClass("fade_out");

    //     e.preventDefault();
    //      setTimeout(function(url) {
        
    //         window.location = url
    //     }, 1100, this.href);
    // });
        
    // });

  </script>

</body>

</html>
