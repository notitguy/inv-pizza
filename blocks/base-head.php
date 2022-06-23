<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="alternate" href="https://pizza.invitaly.cz" hreflang="cs" />
<link rel="alternate" href="https://pizza.invitaly.cz/en" hreflang="en" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;600;700&display=swap" rel="stylesheet">
<link
  rel="preload"
  href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;600;700&display=swap"
  as="style"
  onload="this.onload=null;this.rel='stylesheet'"
/>
<noscript>
  <link
    href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;600;700&display=swap"
    rel="stylesheet"
    type="text/css"
  />
</noscript>
<?php 
  if (stripos($_SERVER['PHP_SELF'], 'index.php')) {
    echo '<link rel="stylesheet" href="/assets/css/swiper-bundle.min.css"/>';
  }
  elseif (stripos($_SERVER['PHP_SELF'], 'reservation.php')) {
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" />';
  }
?>
<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
<link rel="icon" type="image/x-icon" href="/assets/img/logoicon.ico">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NGWLSCH');</script>
<!-- End Google Tag Manager -->
<!-- <link rel="stylesheet" href="assets/cookie/cookieconsent.css" media="print" onload="this.media='all'"> -->