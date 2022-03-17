<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

  <!-- Meta Tags Generic-->
  <title>Hypha | Token Sale</title>
  <meta name="description"
    content="Building decentralised apps to empower communities with the tools of decentralised and autonomous governance.">
  <meta name="og:image" content="http://hypha.earth/img/og-image.jpg">
  <link rel="icon" type="image/png" href="img/favicon.png" />


  <!--  Non-Essential, But Recommended -->
  <meta property="og:site_name" content="Hypha | Token Sale">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Raleway:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="css/general-style.css">
  <link rel="stylesheet" href="css/token-sale.css">
  <link rel="stylesheet" href="css/loader-style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/burger-menu.css">

  <link rel="stylesheet" href="css/hypha-token-sale.css">

  <!-- Javascript / jQuery libraries -->
  <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>

  <!--luigi's global custom animations-->
  <script src="js/general-animations.js" type="text/javascript"></script>


<body>

  <!--page loader very basic, waits the load of the header background image and disappears-->
  <div class="obscurer">

    <div class="vertical-centered-box">
      <div class="contentt">
        <div class="loader-circle"></div>
        <div class="loader-line-mask">
          <div class="loader-line"></div>
        </div>
        <img src="img/round-logo.svg" height="70" width="70" />
      </div>
    </div>

  </div>

  <?php
      include 'incl/hypha-menu.html';

   ?>

  <main>
    <section class="multistep">
      <div class="foglio">
        <div id="buyhypha-wizard" data-widget-host="habitat" class="preview">
        </div>
      </div>
    </section>

  </main>

  <?php
      include 'incl/hypha-footer.html';

   ?>
  <!-- START: LOAD HYPHA TOKEN SALE WIDGET -->
  <script src="lib/hypha-token-sale-widget/index.umd.js" type="text/javascript"></script>
  <link rel="stylesheet" href="lib/hypha-token-sale-widget/index.css">
</body>

</html>
