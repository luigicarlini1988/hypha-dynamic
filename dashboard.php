<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

  <!-- Meta Tags Generic-->
  <title>Hypha | Dashboard</title>
  <meta name="description" content="Hypha set out in 2019 to build tools for creating new economic systems to start to address humanity’s crises, such as SEEDS a regenerative economic system">
  <meta name="og:image" content="https://hypha.earth/img/og-image.jpg">
  <link rel="icon" type="image/png" href="img/favicon.png" />


  <!--  Non-Essential, But Recommended -->

  <meta property="og:site_name" content="Hypha">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Raleway:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="css/loader-style.css">
  <link rel="stylesheet" href="css/general-style.css">
  <link rel="stylesheet" href="css/inside-blu-pages.css">
  <link rel="stylesheet" href="css/in-loco-dashboard.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/burger-menu.css">

  <!-- Javascript / jQuery libraries -->
  <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
  <script src="js/lax.min.js" type="text/javascript"></script>
  <script src="js/parallax.js" type="text/javascript"></script>


  <!-- jquery functions & animations -->
  <script src="js/general-animations.js" type="text/javascript"></script>
  <script src="js/scroll-top.js" type="text/javascript"></script>

  <!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://track.hypha.earth/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '9']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->


</head>
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


     <main class="dashboard-page">

            <div id="dash-framer">
               <iframe id="dash-grafana" style="height: 100%;width: 100%;position: absolute;" src="https://dashboard.hypha.earth/d/70LWZHDGz/hypha-dao?orgId=1&from=1641013200000&to=1652151764409" width="100%" height="auto" frameborder="0"></iframe>
            </div>

      </main>

      <div id="scroll_top"></div>

     <?php
         include 'incl/hypha-footer.html';

      ?>





   </body>
 </html>
