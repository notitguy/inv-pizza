<!DOCTYPE html>
<html lang="cs">

<head>
  <title>Menu ~ Pizzeria Invitaly Prague</title>
  <?php include 'blocks/base-head.php'; ?>
</head>

<body class="has--plate-header body--dark">

  <?php include 'blocks/header.php'; ?>

    <main>

      <section class="section--plate-slider">
        <div class="plate-slider">
          <div class="plate-slider__slider" >
            <div class="is--plate-slider">
              <div class="swiper-slide is--plate-slider">
                <div class="plate-slider__image-wrapper">
                  <img src="assets/img/header/plate-pizza-dark.webp" alt="" class="plate-slider__image" />
                </div>
                <div class="plate-slider__content-block is--plate-slider">
                  <div class="text--mask">
                    <h2 class="plate-slider__title">Menu</h2>
                  </div>
                </div>
              </div>

            </div>
          </div>
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
              <img src="assets/img/food/photo_2022-02-19_10-16-17.jpg" loading="lazy" alt="" />
            </div>
        </div>
      </section>
      <section class="main-wrapper">
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

      <section class="d_center main-wrapper">
        <!-- En -->
        <h2 class="text-center">Daily menu En</h2>
         <?php $menu = json_decode(file_get_contents("https://opensheet.elk.sh/1NAzk3LL_Co-AyhUvog7hz0uNLo-eJzR3LkilEtzu03w/english"));?>
            <ul class="daily_menu_list">
            <?php foreach ($menu as $item) { ?>
              <li>
                <?php echo $item->name; ?>
                <?php echo $item->size; ?>
                <?php echo $item->price; ?>
              </li>
          <?php } ?>
      </section>

       <section class="d_center main-wrapper">
        <!-- En -->
        <h2 class="text-center">Daily menu It</h2>
         <?php $menu = json_decode(file_get_contents("https://opensheet.elk.sh/1NAzk3LL_Co-AyhUvog7hz0uNLo-eJzR3LkilEtzu03w/italian"));?>
                <ul class="daily_menu_list">
                <?php foreach ($menu as $item) { ?>
                    <li>
                        <?php echo $item->name; ?>
                        <?php echo $item->size; ?>
                        <?php echo $item->price; ?>
                    </li>
          <?php } ?>
      </section>

    </main>

    <?php include 'blocks/footer.php'; ?>
      <style type="text/css">
        .daily_menu_list{
          border: 1px  dashed #fff;
          width: 420px;
          margin: 0px auto;
          padding: 17px;
        }

        .daily_menu_list li{
          text-align: center;
        }
      </style>
      <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
   
      <!-- <script src="assets/js/main.js"></script> -->
      <script type="text/javascript">

      //   $( document ).ready(function() {



      // $("header").addClass("header_down");
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
</body>

</html>
