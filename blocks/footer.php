  <footer id="contact" class="footer main-wrapper">
      <div class="row col-md-12">
          <!-- <a href="/">
            <img class="footer_logo_img" src="/assets/img/logo.png" alt="Logo">
          </a> -->
          <div class="col-md-6">
            <h3 style="color: var(--accent-color);">Reservations:</h3>
              <ul class="m-b" style="--mb: 3.4rem">
                <li>
                  Call: <a href="tel:+420773069490" target="_blank">+420 773 069 490</a>
                </li>
                <li>
                  Email: <a href="mailto:hello@invitaly.cz" target="_blank">hello@invitaly.cz</a>
                </li>
              </ul>
            <h3>Otevírací doba</h3>
            <div class="opening-hours">
              <p>Ponděli - Pátek:<br>
              Sobota - Neděle:</p>
              <p>11:00 - 22:00<br>
              Závřeno</p>
            </div>
            <!-- <a href="/reservation" class="primary">Make a reservation</a> -->
          </div>
          <div class="col-md-6">
            <h3>Invitaly Pizza</h3>
            <address>
              <ul>
                <li>Vladislavova 26, 110 00 Praha, Czechia <br>
                (<a href="https://goo.gl/maps/Hyk2hotsKMwWe1EL9" target="_blank"> Open map 📍</a>)
                </li>
                <li>
                  <a href="tel:+420773069490">+420 773 069 490</a>
                </li>
                <li>
                  <a href="mailto:hello@invitaly.cz">hello@invitaly.cz</a>
                </li>
              </ul>
              <a href="https://www.instagram.com/invitaly_pizza/" target="_blank" class="social-link">
                <img src="/assets/img/icons/instagram.svg" alt="Invitaly instagram" width="28" height="28" > Fresh and tasty updates on our Instagram
              </a>
            </address>
          </div>

        <!-- <div class="col-md-3">
          <h3>Pages</h3>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div> -->

        <!-- <div class="col-md-3 chain">
          <img class="backdrop" src="/assets/img/food/photo_2022-02-19_10-16-20.jpg" loading="lazy" alt="Pizzeria">
          <h2>Pizzeria e Cucina Italiana</h2>
          <p class="m-b">Try delicious pizzas just like you are in Italy!</p>
          <a href="#" class="primary">Visit Pizzeria</a>
        </div> -->
      </div>
  </footer>

  <script defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <?php
    if (stripos($_SERVER['PHP_SELF'], 'index.php')) {
        echo '<script defer src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>';
    }
    elseif (stripos($_SERVER['PHP_SELF'], 'reservation.php')) {
        echo '<script defer src="https://cdn.jsdelivr.net/npm/litepicker@2.0.12/dist/nocss/litepicker.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/litepicker/dist/plugins/mobilefriendly.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/luxon@2.3.1/build/global/luxon.min.js"></script>';
    }
  ?>
  <script defer src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
  <!-- <script defer src="/assets/cookie/cookieconsent.js"></script>
  <script defer src="/assets/cookie/cookieconsent-init.js"></script> -->
  <script type="module" src="/assets/js/gallery.js"></script>
  <script defer src="/assets/js/main.js"></script>