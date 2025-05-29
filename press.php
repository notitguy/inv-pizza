<!DOCTYPE html>
<html lang="cs">

<head>
  <title>Napsali o nás ~ Invitaly Piazetta Prague</title>
  <?php include 'blocks/base-head.php'; ?>
</head>

<body class="press body--dark">

  <?php 

  date_default_timezone_set('Europe/Prague');
  $today = date("F j, Y, g:i a");

  include 'blocks/header.php';
  ?>
  <main style="margin-top: 6rem;">

    <section class="main-wrapper">
          <h1 class="heading--xlarge" style="margin-bottom: 4rem">Napsali o nás</h1>
          <div class="press__row">
            <div class="press__item">
              <a href="../assets/press/LuxuryGuide.pdf" target="_blank">
                <img src="../assets/press/LuxuryGuide.jpg" alt="">
              </a>
              <h3>Luxury Guide</h3>
            </div>
            <div class="press__item">
              <a href="../assets/press/BedekerPrague2.pdf" target="_blank">
                <img src="../assets/press/BedekerPrague2.jpg" alt="">
              </a>
              <h3>Bedeker Prague</h3>
            </div>
            <div class="press__item">
              <a href="../assets/press/PragMoon.pdf" target="_blank">
                <img src="../assets/press/PragMoon.jpg" alt="">
              </a>
              <h3>Prag Moon</h3>
            </div>
            <div class="press__item">
              <a href="../assets/press/BedekerPrague.pdf" target="_blank">
                <img src="../assets/press/BedekerPrague.jpg" alt="">
              </a>
              <h3>Bedeker Prague</h3>
            </div>
          </div>

      </section>

    </main>

    <?php include 'blocks/footer.php'; ?>
</body>

</html>
