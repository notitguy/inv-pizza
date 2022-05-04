<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;600;700&display=swap" rel="stylesheet">
<?php 
  if (stripos($_SERVER['PHP_SELF'], 'index.php')) {
    echo '<link rel="stylesheet"href="assets/css/swiper-bundle.min.css"/>';
  }
  elseif (stripos($_SERVER['PHP_SELF'], 'reservation.php')) {
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" />';
  }
?>
<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<link rel="icon" type="image/x-icon" href="assets/img/logoicon.ico">
<link rel="stylesheet" href="assets/cookie/cookieconsent.css" media="print" onload="this.media='all'">