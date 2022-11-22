<!DOCTYPE html>
<html lang="cs">

<head>
  <title>Pizzerie Invitaly - pravá italská pizza v Praze</title>
  <meta name="description" content="Pizzerie & restaurace Invitaly se nachází v srdci Prahy, před rotující hlavou Franze Kafky. Podáváme pravé tradiční italské jídlo.">
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
                <img src="assets/img/header/plate-pizza.webp" alt="Invitaly Pizza" class="plate-slider__image" width="1224" height="935" />
              </div>
              <div class="plate-slider__content-block is--plate-slider">
                <div class="text--mask"><i class="plate-slider__subtitle">Lahodné pizzy</i></div>
                <div class="text--mask">
                  <h2 class="plate-slider__title is--slider-home">Stejně jako<br>v Itálii</h2></div>
                <div class="two-buttons text--mask">
                  <a href="#menu" class="plate-slider__btn-block">
                    <span class="plate-slider__btn">Menu</span>
                    <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" width="34" height="24" />
                  </a>
                  <a href="#lunch" class="plate-slider__btn-block" style="background-color: rgb(0 0 0 / 50%);">
                    <span class="plate-slider__btn">Denní menu</span>
                    <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" width="34" height="24" />
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide is--plate-slider">
              <div class="plate-slider__image-wrapper">
                <img src="assets/img/header/plate-meat.webp" alt="Invitaly Pizza" class="plate-slider__image"  width="1224" height="935" />
              </div>
              <a href="#about" class="plate-slider__content-block is--plate-slider">
                <div class="text--mask">
                  <h2 class="plate-slider__title is--slider-home">Proč<br>Invitaly?</h2>
                </div>
                <div class="text--mask">
                  <div class="plate-slider__btn-block">
                    <span class="plate-slider__btn">O nás</span>
                    <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" width="34" height="24" />
                  </div>
                </div>
              </a>
            </div>

            <div class="swiper-slide is--plate-slider">
              <div class="plate-slider__image-wrapper">
                <img src="assets/img/header/plate-seafood.webp" alt="Invitaly Pizza" class="plate-slider__image"  width="1224" height="935" style="min-width: 66vw;" />
              </div>
              <a href="#contact" class="plate-slider__content-block is--plate-slider">
                <div class="text--mask">
                  <h2 class="plate-slider__title is--slider-home">Rezervace</h2>
                </div>
                <div class="text--mask">
                  <div class="plate-slider__btn-block">
                    <span class="plate-slider__btn">Kontaktujte nás</span>
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

    <section id="lunch" class="main-wrapper daily-menu parallax is--centered">
      <img src="/assets/img/patterns/pizza1.svg" alt="" width="300" class="pattern pizzas one">
      <img src="/assets/img/patterns/pizza2.svg" alt="" width="300" class="pattern pizzas two">
      <img src="/assets/img/patterns/pizza3.svg" alt="" width="300" class="pattern pizzas three">
      <span class="daily-menu__label">Každý den nové!</span>
      <h2>Denní menu</h2>
      <?php $menu = json_decode(file_get_contents("https://opensheet.elk.sh/1XW32FBLBLWsKdcg6fK6C0PB5-kNJXbGytTWnSNNaSmA/Czech"));?>
        <?php if (isset($menu)) { foreach ($menu as $item) { ?>
          <span><?php if (isset($item->date)) {echo $item->date;} ?></span>
        <?php break; }} ?>
        <i>11:30 - 15:00 (Po-Pá)</i>
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
            Pizzeria & Restaurace Invitaly
            <span>Autentická italská kuchyně v Praze</span>
          </h1>
        </div>
        <div>
          <div class="small-divider"></div>
          <p>Pizzerie a restaurace Invitaly se nachází v srdci Prahy hned naproti soše otáčející se hlavy Franze Kafky. Pokud si chcete užít skvělé Italské jídlo od našich kuchařů, naše restaurace je perfektní místo pro setkání s vaší rodinou a přáteli!</p>
          <p>V našich žilách proudí vášeň pro skvělé jídlo a víno a naše kuchyně je inspirována tradiční kuchyní, která má tradici po generace.</p>
          <p>Naše restaurace Invitaly spoléhá zejména na dovezených produktech z Itálie, abychom dosáhli nejlepší autentičnosti italské kuchyně.</p>
          <p>Naši kuchyni si samozřejmě nejvíc vychutnáte s dobrým vínem!</p>
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
        <h2>Jak to u nás vypadá</h2>
        <p>Podívejte se na naše jídlo a na to, jak to u nás v Invitaly pizzerii vypadá.</p>
        <p>Nezapomeňte nás sledovat na <a href="https://www.instagram.com/invitaly_pizza/" target="_blank" class="bottomline">Instagramu</a>  pro více novinek.</p>
      </div>
      <div class="gallery__list grid">
        <div class="food">
          <img src="assets/img/food/140422/21-03Invitaly_10.jpg" class="m-b" alt="Invitaly" loading="lazy" width="320" height="480" >
          <h3>Jídlo</h3>
        </div>
        <div class="interior">
          <img src="assets/img/interior/invitaly-praha-11.jpg" class="m-b" alt="Invitaly" loading="lazy" width="320" height="480" >
          <h3>Interiér</h3>
        </div>
        <div class="ugc">
          <img src="assets/img/food/140422/InV3-DSCF8146.jpg" class="m-b" alt="Invitaly" loading="lazy" width="320" height="480" >
          <h3>Od vás 😍</h3>
        </div>
      </div>
    </section>

    <section class="reviews grid main-wrapper">

        <div class="reviews__header">
          <h2>Co říkají naši hosté</h2>
          <p>Jsme velmi pyšní na to, že jsme schopni naplnit Vaše představy. Každá recenze, kterou nám zanecháte, nás motivuje k tomu, abychom byli lepší.</p>
          <p>Děkujeme!</p>
          <a href="https://g.page/r/CWQq2MAFawinEB0/review" target="_blank" class="bottomline">Zanechte svou recenzi</a>
        </div>
        <div class="reviews__slider swiper">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <figure class="swiper-slide">
              <figcaption class="m-b">
                <img src="assets/img/avatars/gr-cs-pic1.png" alt="Invitaly reviews" width="41" height="41" >
                <span>Amália Počarovská</span>
              </figcaption>
              <blockquote>
                <p>Skvělá autentická italská restaurace a pizzerie s velmi milým personálem. Příznivé ceny za nadstandardní kvalitu, podle mého názoru na oběd nejlepší polední menu v okolí.</p>
              </blockquote>
            </figure>
            <figure class="swiper-slide">
              <figcaption class="m-b">
                <img src="assets/img/avatars/gr-cs-pic2.png" alt="Invitaly reviews" width="41" height="41" >
                <span>Tomáš Hampl (Místní průvodce)</span>
              </figcaption>
              <blockquote>
                <p>Pravidelně sem docházím na obědy. Ač menu na internet neuveřejňují, vždy si vyberu a na překvapení v podobě denního menu se vyloženě těším. Zamne jedna z nejlepších italských restaurací v Praze, kde středoevropan zcela zapomene na zimní počasí. Doporučuji jak pizzu s těštem tak tenkým, že jen v krku pohladí, tak veškeré těstoviny.</p>
                <p>Příjemným bonusem je špičkový servis a předkrm v podobě ciabatty s olivovým olejem a mořskou solí.</p>
                <p>To vše do 200,-Kč!?!</p>
              </blockquote>
            </figure>
            <figure class="swiper-slide">
              <figcaption class="m-b">
                <img src="assets/img/avatars/gr-cs-pic3.png" alt="Invitaly reviews" width="41" height="41" >
                <span>Marek Fiala</span>
              </figcaption>
              <blockquote>
                <p>Dnes jsme měly v tyhle restauraci oběd. Mini kuřátka byli excelentni a mořské plody delikatesou. ☺️</p>
                <p>Servírky usměvavé a zdvořilé.</p>
                <p>Poměr cena kvalita naprosto ideální.</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination-dots"></div>
        </div>

    </section>

    <section id="menu" class="main-wrapper two-blocks grid">
    <h2 class="is--centered">Chcete ochutnat?</h2>
      <div class="two-blocks__card">
        <img src="/assets/img/food/photo_2022-02-19_10-16-17.jpg" alt="Invitaly" loading="lazy" width="687" height="300" >
        <h3>Podívejte se na naši nabídku</h3>
        <p class="m-b">Přijďte si pochutnat na italském jídle do naší restaurace.</p>
        <a href="https://www.invitaly.cz/files/menu_vladislavova.pdf" target="_blank" class="primary">Otěvřít menu <img src="assets/img/icons/pdf.svg" width="25px" style="margin: -0.4rem 0 0 1rem;" alt="Menu Invitaly"></a>
      </div>
      <div class="two-blocks__card">
        <img src="/assets/img/food/photo_2022-02-19_10-16-20.jpg" alt="Invitaly" loading="lazy" width="687" height="300" >
        <h3>Chcete to doma?</h3>
        <p class="m-b">Nechte si to doručit. Dokud je ještě čerstvé.</p>
        <a href="https://wolt.com/cs/cze/prague/restaurant/invitaly" target="_blank" class="primary" rel="nofollow">Objednat teď <img src="assets/img/icons/wolt.png" width="55px" height="20px" style="margin: -0.4rem 0 0 1rem;" alt="Order Invitaly"></a>
      </div>
    </section>
  </main>
  <?php include 'blocks/footer.php'; ?>
</body>

</html>
