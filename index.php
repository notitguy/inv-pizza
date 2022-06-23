<!DOCTYPE html>
<html lang="cs">

<head>
  <title>Pizzeria Invitaly - Real Italian Pizza in Prague</title>
  <meta name="description" content="Invitaly restaurant & pizzeria is located in the heart of Prague, in front of rotating Franz Kafka head. We serve real traditional Italian food.">
  <?php include 'blocks/base-head.php'; ?>
</head>


<body class="body--dark is--home" id="top">

  <?php include 'blocks/header.php'; ?>

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
                <img src="assets/img/header/plate-pizza-dark.webp" alt="Invitaly Pizza" class="plate-slider__image" width="1224" height="935" />
              </div>
              <a href="#menu" class="link plate-slider__content-block is--plate-slider">
                <div class="text--mask"><i class="plate-slider__subtitle">Delicious pizzas</i></div>
                <div class="text--mask">
                  <h2 class="plate-slider__title is--slider-home">Just like<br>in Italy</h2></div>
                <div class="text--mask">
                  <div class="plate-slider__btn-block">
                    <span class="plate-slider__btn">See menu</span>
                    <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" width="34" height="24" /></div>
                </div>
              </a>
            </div>

            <div class="swiper-slide is--plate-slider">
              <div class="plate-slider__image-wrapper">
                <img src="assets/img/header/plate-pizza.webp" alt="Invitaly Pizza" class="plate-slider__image"  width="1224" height="935" />
              </div>
              <a href="#about" class="link plate-slider__content-block is--plate-slider">
                <div class="text--mask">
                  <h2 class="plate-slider__title is--slider-home">Why<br>Invitaly?</h2>
                </div>
                <div class="text--mask">
                  <div class="plate-slider__btn-block">
                    <span class="plate-slider__btn">About us</span>
                    <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" width="34" height="24" />
                  </div>
                </div>
              </a>
            </div>

            <div class="swiper-slide is--plate-slider">
              <div class="plate-slider__image-wrapper">
                <img src="assets/img/header/plate-seafood.webp" alt="Invitaly Pizza" class="plate-slider__image"  width="1224" height="935" style="min-width: 66vw;" />
              </div>
              <a href="#contact" class="link plate-slider__content-block is--plate-slider">
                <div class="text--mask">
                  <h2 class="plate-slider__title is--slider-home">Reservations</h2>
                </div>
                <div class="text--mask">
                  <div class="plate-slider__btn-block">
                    <span class="plate-slider__btn">Contact us</span>
                    <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" width="34" height="24" />
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

    <section class="main-wrapper daily-menu parallax is--centered">
      <img src="/assets/img/patterns/pizza1.svg" alt="" width="300" class="pattern pizzas one">
      <img src="/assets/img/patterns/pizza2.svg" alt="" width="300" class="pattern pizzas two">
      <img src="/assets/img/patterns/pizza3.svg" alt="" width="300" class="pattern pizzas three">
      <span class="daily-menu__label">Každý den nové!</span>
      <h2>Denní menu</h2>
      <?php $menu = json_decode(file_get_contents("https://opensheet.elk.sh/1XW32FBLBLWsKdcg6fK6C0PB5-kNJXbGytTWnSNNaSmA/Czech"));?>
        <?php if (isset($menu)) { foreach ($menu as $item) { ?>
          <span><?php if (isset($item->date)) {echo $item->date;} ?></span>
        <?php }} ?>
        <i>11:30 - 15:00</i>
        <ul class="daily-menu__list">
          <?php if (isset($menu)) {
            foreach ($menu as $item) { ?>
            <li>
              <span><?php if (isset($item->name)) {echo $item->name;} ?></span>
              <span class="price"><?php if (isset($item->price)) {echo $item->price;} ?>,- Kč</span>                
            </li>
          <?php }} ?>
        </ul>
    </section>

    <section id="about" class="main-wrapper">
      <div class="grid three-elements-layout__grid">
        <div class="three-elements-heading">
          <h1 class="heading--xlarge">
            Invitaly Pizzeria & Restaurant
            <span>Authentic Italian cuisine in Prague</span>
          </h1>
        </div>
        <div>
          <div class="small-divider"></div>
          <p>Invitaly pizzeria & restaurant is located in the heart of Prague - right in front of rotating Franz Kafka head. It is a perfect spot to gather your friends & family to enjoy delicious Italian meals from our chefs.</p>
          <p>Passion for good food and wine runs deep in our veins and our  kitchen is fully inspired by italian tradition  passed down through the generations. The Invitaly kitchen relies mostly on imported products from Italy to meet the authenticity of Italian  cuisine.</p>
          <p>As always, best enjoyed with wine!</p>
        </div>
        <div class="three-elements-layout__image-wrapper">
          <img src="assets/img/food/about-invitaly.webp" alt="" loading="lazy" width="975" height="650"/>
        </div>
      </div>
    </section>

    <section class="gallery grid parallax main-wrapper">
      <img src="/assets/img/patterns/pizza4.svg" alt="" width="300" class="pattern pizzas four">
      <img src="/assets/img/patterns/pizza5.svg" alt="" width="300" class="pattern pizzas five">
      <img src="/assets/img/patterns/pizza6.svg" alt="" width="300" class="pattern pizzas six">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/photoswipe@5.2.7/dist/photoswipe.css" >
      <div class="gallery__header">
        <h2>How it looks</h2>
        <p>Taka a look at the food and interior pictures of Invitaly Pizza.</p>
        <p>Make sure to follow us on <a href="https://www.instagram.com/invitaly_pizza/" target="_blank" class="bottomline">Instagram</a> for more.</p>
      </div>
      <div class="gallery__list grid">
        <div class="food">
          <img src="assets/img/food/140422/21-03Invitaly_10.jpg" class="m-b" alt="Invitaly" loading="lazy" width="320" height="480" >
          <h3>Food</h3>
        </div>
        <div class="interior">
          <img src="assets/img/interior/invitaly-praha-11.jpg" class="m-b" alt="Invitaly" loading="lazy" width="320" height="480" >
          <h3>Interior</h3>
        </div>
        <div class="ugc">
          <img src="assets/img/food/140422/InV3-DSCF8146.jpg" class="m-b" alt="Invitaly" loading="lazy" width="320" height="480" >
          <h3>From you 😍</h3>
        </div>
      </div>
    </section>

    <section class="reviews grid main-wrapper">

        <div class="reviews__header">
          <h2>Our guests say</h2>
          <p>We are very proud to meet your expectations. Every review you leave motivates us to become better.</p>
          <p>Thank you!</p>
          <a href="https://g.page/r/CWQq2MAFawinEB0/review" target="_blank" class="bottomline">Leave your review</a>
        </div>
        <div class="reviews__slider swiper">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <figure class="swiper-slide">
              <figcaption class="m-b">
                <img src="assets/img/avatars/gr-pic1.png" alt="Invitaly reviews" width="41" height="41" >
                <span>Bourgeoise Curdlesnoot (Local Guide)</span>
              </figcaption>
              <blockquote>
                <p>I wish I could give 6 stars!
                  This place is beyond amazing. I'm Italian, but I had the best pizza of my whole life here in Prague. Seriously. It's the best pizza in Prague and beyond. I've been here 3 times already in about 2 weeks!</p>
              </blockquote>
              </figure>
            <figure class="swiper-slide">
              <figcaption class="m-b">
                <img src="assets/img/avatars/gr-pic2.png" alt="Invitaly reviews" width="41" height="41" >
                <span>Taisa Kanapleva</span>
              </figcaption>
              <blockquote>
                <p>My favourite Italian restaurant in Prague. Like it so much. Staff is very friendly. The atmosphere is cozy. Food is tasty and delicious. A lot of variants in the menu. And every day a different lunch menu is a must try :)</p>
              </blockquote>
            </figure>
            <figure class="swiper-slide">
              <figcaption class="m-b">
                <img src="assets/img/avatars/gr-pic3.png" alt="Invitaly reviews" width="41" height="41" >
                <span>Kristina Kunz (Local Guide)</span>
              </figcaption>
              <blockquote>
                <p>Really really good pizza with thin crust and the right amount of topping. I added blue cheese to my funghi pizza and the kids shared a pizza and we ended with leftovers which we bring home. Great service and ambiance.</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination-dots"></div>
        </div>

    </section>

    <!-- <section class="main-wrapper">
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
    </section> -->
    <section id="menu" class="main-wrapper two-blocks grid">
    <h2 class="is--centered">Are you ready to try?</h2>
      <div class="two-blocks__card">
        <img src="/assets/img/food/photo_2022-02-19_10-16-17.jpg" alt="Invitaly" loading="lazy" width="687" height="300" >
        <h3>See our menu</h3>
        <p class="m-b">Come and enjoy food in our restaurant.</p>
        <a href="https://www.invitaly.cz/files/menu_vladislavova.pdf" target="_blank" class="primary">See menu <img src="assets/img/icons/pdf.svg" width="25px" style="margin: -0.4rem 0 0 1rem;" alt="Menu Invitaly"></a>
      </div>
      <div class="two-blocks__card">
        <img src="/assets/img/food/photo_2022-02-19_10-16-20.jpg" alt="Invitaly" loading="lazy" width="687" height="300" >
        <h3>Want it at home?</h3>
        <p class="m-b">Get it delivered. While it is hot.</p>
        <a href="https://wolt.com/en/cze/prague/restaurant/invitaly" target="_blank" class="primary" rel="nofollow">Order now <img src="assets/img/icons/wolt.png" width="55px" height="20px" style="margin: -0.4rem 0 0 1rem;" alt="Order Invitaly"></a>
      </div>
    </section>
  </main>

  <?php include 'blocks/footer.php'; ?>
</body>

</html>
