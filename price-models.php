<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

  <!-- Meta Tags Generic-->
  <title>Hypha | Price Models :: Ecosystem DAO BUilder</title>
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
  <link rel="stylesheet" href="css/price-models.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/burger-menu.css">
  <link rel="stylesheet" href="css/new-header.css">

  <!-- Javascript / jQuery libraries -->
  <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>

  <!-- js smooth mouse wheel -->
  <script src="js/smooth.js" type="text/javascript"></script>

  <!-- jquery functions & animations -->
  <script src="js/general-animations.js" type="text/javascript"></script>
  <script src="js/price-model.js" type="text/javascript"></script>


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
        include 'incl/new-hypha-menu.html';
     ?>

     <main id="pricing-models">
       <section id="price-area">

          <div class="price-sidebar">
            <div class="bread_crumb"><a href="index">Home ></a> Pricing > Single DAO </div>
            <div class="ps-center">
              <h1><span class="up-title">Ecosystem</span><br />DAO Builder</h1>
              <p>Do you aim to <strong>create a Regenerative Ecosystem and facilitate the creation and evolution of several DAOs?</strong> If so, these are the pricing models that will better suit your vision. If you simply want to set-up a single DAO click the link below</p>
              <a href="#" class="cta">Single DAO Builder</a>
            </div>
          </div>

          <div class="price-wizard">
            <div id="flag">
              <p>
              <span class="flag-top">Easy Upgrade</span><br />
              <span class="flag-bottom">Upgrade as your Ecosystem grows!</span>
              </p>
            </div>
            <div class="wiz-wrap">
              <div class="dao-slider">
                    <p class="optimise">Slide & Optimise prices per N° of DAOs!</p>
                    <div class="range-aligner">
                      <input id="range" type="range" value="2" min="1" max="60" class="slider">
                      <div id="daosnumber">
                        <div id="daosnumber-inside"></div> DAO<span id="plural"></span>
                      </div>
                    </div>
              </div>

            <div class="models-list">

                <div id="ml-starter" class="model-card">
                  <h2>Starter <span>Plan</span></h2>
                  <div class="card-section">
                    <p class="ml-subtitle">Your First DAO (Anchor)</p>
                    <p id="starter-achor" class="ml-main-price"></p>
                    <p class="including"><strong>includes $5,000</strong><br />added to your DAO stake in Hypha</p>
                    <div class="ml-divider"></div>
                    <div>
                      <p class="ml-list"><a href="#">All DAO features</a></p>
                      <p class="ml-list">Unlimited DAO users</p>
                      <p class="ml-list"><a href="#">1 Ecosystem tool incl.</a></p>
                    </div>

                  </div>

                  <div class="card-section second">
                    <p class="ml-subtitle">Each additional DAO</p>
                    <p id="starter-additional" class="additional-price"></p>
                    <p class="including-small"><strong>includes $3,750</strong><br />added to your DAO stake in Hypha</p>
                    <div class="ml-divider"></div>
                    <p class="ml-subtitle">First DAO + <span class="daos-n-bottom" class="onTotal"></span> DAO<span class="plural-bottom"></span></p>
                    <p class="additional-price" id="starter-result"></p>
                    <p class="ml-subtitle">Total</p>
                  </div>
                  <div class="recomm"> Recommended </div>
                </div>


                <div id="ml-growth" class="model-card">
                  <h2>Growth <span>Plan</span></h2>
                  <div class="card-section">
                    <p class="ml-subtitle">Your First DAO (Anchor)</p>
                    <p id="growth-achor" class="ml-main-price"></p>
                    <p class="including"><strong>includes $10,000</strong><br />added to your DAO stake in Hypha</p>
                    <div class="ml-divider"></div>
                    <div>
                      <p class="ml-list"><a href="#">All DAO features</a></p>
                      <p class="ml-list">Unlimited DAO users</p>
                      <p class="ml-list"><a href="#">3 Ecosystem tool incl.</a></p>
                    </div>

                  </div>

                  <div class="card-section second">
                    <p class="ml-subtitle">Each additional DAO</p>
                    <p id="growth-additional" class="additional-price"></p>
                    <p class="including-small"><strong>includes $2,750</strong><br />added to your DAO stake in Hypha</p>
                    <div class="ml-divider"></div>
                    <p class="ml-subtitle">First DAO + <span class="daos-n-bottom" class="onTotal"></span> DAO<span class="plural-bottom"></span></p>
                    <p class="additional-price" id="growth-result"></p>
                    <p class="ml-subtitle">Total</p>
                  </div>
                  <div class="recomm"> Recommended </div>
                </div>

                <div id="ml-thrive" class="model-card">
                  <h2>Growth <span>Plan</span></h2>
                  <div class="card-section">
                    <p class="ml-subtitle">Your First DAO (Anchor)</p>
                    <p id="thrive-achor" class="ml-main-price"></p>
                    <p class="including"><strong>includes $60,000</strong><br />added to your DAO stake in Hypha</p>
                    <div class="ml-divider"></div>
                    <div>
                      <p class="ml-list"><a href="#">All DAO features</a></p>
                      <p class="ml-list">Unlimited DAO users</p>
                      <p class="ml-list"><a href="#">3 Ecosystem tool incl.</a></p>
                    </div>

                  </div>

                  <div class="card-section second">
                    <p class="ml-subtitle">Each additional DAO</p>
                    <p id="thrive-additional" class="additional-price"></p>
                    <p class="including-small"><strong>includes $1,750</strong><br />added to your DAO stake in Hypha</p>
                    <div class="ml-divider"></div>
                    <p class="ml-subtitle">First DAO + <span class="daos-n-bottom" class="onTotal"></span> DAO<span class="plural-bottom"></span></p>
                    <p class="additional-price" id="thrive-result"></p>
                    <p class="ml-subtitle">Total</p>
                  </div>
                  <div class="recomm"> Recommended </div>
                </div>
              </div>
            </div>
          </div>
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
