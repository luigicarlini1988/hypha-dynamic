<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

  <!-- Meta Tags Generic-->
  <title>Hypha | About us</title>
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
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/burger-menu.css">

  <!-- Javascript / jQuery libraries -->
  <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
  <script src="js/lax.min.js" type="text/javascript"></script>
  <script src="js/parallax.js" type="text/javascript"></script>


  <!-- jquery functions & animations -->
  <script src="js/general-animations.js" type="text/javascript"></script>

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


    <main>
      <div class="about-parall parallax" data-image-src="img/3-steps-back.jpg">
      </div>

      <section class="about-header">
        <div class="foglio">
          <a class="backlink" href="javascript:history.back()">Go back</a>
          <h1>About us</h1>
          <p class="hero-text">Hypha set out in 2019 to build tools for creating new economic systems to start to address humanity’s crises, such as <a href="https://joinseeds.earth">SEEDS</a> a regenerative economic system</p>
        </div>
      </section>


      <section class="about-body">
        <div class="yellowdots lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
          <img src="img/yellowdots.svg"/>
        </div>
        <div class="foglio">
          <div class="text-body">
            <p>As a global team working on open-source tools, we needed to be decentralised ourselves, and started building tools to coordinate, govern, and compensate our own global organisation’s members.
            <br><br>Over the years we saw that these tools could provide a foundation to help any group seeking to coordinate.
            <br><br>We also grew to believe that while corporations were built for the industrial age, DAOs are built for the information age. Further, we believe humanity needs to mirror nature and “organize as organisms” if we’re to actually solve the various crises caused by humanity’s dominant organisation and economic models.
            <br><br>As a result, we are on a mission to accelerate the spread of decentralised organisations around the globe with the help of our full suite of tried and tested DAO tools.
            <br><br><strong>Hypha builds decentralized tools that help the world to work 100% for humanity, in the shortest possible time, through spontaneous cooperation, ecological regeneration and equal advantage for all.</strong>
            </p>

            <p class="hero-h3">What have we achieved so far?<p>
            <ul>
              <li>We have the most advanced feature set in the burgeoning DAO industry —from fee-free on-chain payroll and governance to new primitives like quests, roles, badges, circles and more.</li>
              <li>We developed a highly innovative UI/UX for notoriously difficult blockchain applications.</li>
              <li>On-chain actions occur instantly (well, 1 second) providing the same UX as Web2.</li>
              <li>We built the DAO using the DAO in 2019 and have made hundreds of key decisions and distributed millions of tokens and system value to our members. </li>
              <li>We embedded an ecosystemic approach to launch new DAOs from within DAOs and transfer the DNA to the next generation.</li>
              <li>We put the human at the center of the DAO, and not solely mechanistic algorithms or clever decision methods devoid of higher purpose.</li>
            </ul>
          </div>

          <div class="about-portlet lax" data-lax-translate-y="(vh) 1, (-vh) -250" data-lax-anchor="self">
            HYPHA refers to the original Earth internet. It’s the branching filaments that make up the network of the mycelium (fungal) organism, which unites healthy ecosystems helping plants and animals share information and nutrition. We strive to mirror natural systems for how we design DAO tools to coordinate and support thriving organisational ecosystems.
          </div>


        <div class="foglio">

      </section>
    </main>

    <?php
        include 'incl/hypha-footer.html';
     ?>

     <?php
         include 'incl/video2.html';
      ?>



  </body>
</html>
