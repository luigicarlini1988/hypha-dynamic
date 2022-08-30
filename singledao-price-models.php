<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

  <!-- Meta Tags Generic-->
  <title>Hypha | Price Models :: Single DAO BUilder</title>
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
  <script src="js/single-price-model.js" type="text/javascript"></script>


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

     <main id="pricing-models" class="single_dao_offers">
       <section id="price-area">

          <div class="price-sidebar">
            <div class="bread_crumb"><a href="index">Home ></a> Pricing > Single DAO </div>
            <div class="ps-center">
              <h1><span class="up-title">Single</span><br />DAO Builder</h1>
              <p>If you simply want to <strong>build your own DAO</strong> and let your organisation grow using hypha tools, these are the price models for you! If you want to create a DAO Ecosystem instead (ie more than one DAO and interconnected as an Ecosystem), please click the link below'</p>
              <a href="#" class="cta">Ecosystem DAO Builder</a>
            </div>
          </div>

          <div class="price-wizard">
            <div id="flag">
              <p>
              <span class="flag-top">14 days FREE trial</span><br />
              <span class="flag-bottom">Available on all plans</span>
              </p>
            </div>
            <div class="wiz-wrap ">
              <div id="dao-toggle" class="dao-toggle">
                    <div class="save_20">Save 20%</div>
                    <div class="fake_toggle"></div>
                    <div class="tog_month">Monthly</div>
                    <div class="tog_year">Year Upfront</div>
              </div>

            <div class="models-list">

              <div id="ml-freemium" class="model-card">
                <h2>Free <span>Plan</span></h2>
                <div class="card-section">
                  <div class="single_prices">
                    <div class="big_top_price">
                      <span></span><span id="freemium_price">Free</span><span></span>
                    </div>
                    <div class="year_price">
                      $0/Mo forever
                    </div>
                  </div>
                  <div class="ml-divider"></div>
                  <div>
                    <p class="ml-list"><a href="#">Main Dashboard</a></p>
                    <p class="ml-list"><a href="#">Token Creation</a></p>
                    <p class="ml-list"><a href="#">Token Balance</a></p>
                    <p class="ml-list"><a href="#">Profile Page</a></p>
                    <p class="ml-list"><a href="#">Basic Governance</a></p>
                    <p class="ml-list"><a href="#">Admin Roles/Badges</a></p>
                    <p class="ml-list"><a href="#">Logo Customisation</a></p>
                    <p class="ml-list"><a href="#">Basic "how to" wiki</a></p>
                    <p class="ml-list"><a href="#">Mobile Ready</a></p>
                  </div>
                  <div class="ml-divider"></div>
                  <!--<div class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                  <div class="ml-divider"></div>-->
                  <div class="capacity">
                    Max 3 users <img src="img/cap.svg"/>
                  </div>

                </div>
              </div>

                <div id="ml-starter" class="model-card">
                  <h2>Starter <span>Plan</span></h2>
                  <div class="card-section">
                    <div class="single_prices">
                      <div class="big_top_price">
                        <span>$</span><span id="single_starter_price"></span><span>/mo</span>
                      </div>
                      <div class="year_price">
                        $950/yr
                      </div>
                    </div>
                    <div class="ml-divider"></div>
                    <div>
                      <div class="bringer">
                        Everything in Free Plan +
                      </div>
                      <p class="ml-list"><a href="#">Member Assignments</a></p>
                      <p class="ml-list"><a href="#">1 Salary Band</a></p>
                      <p class="ml-list"><a href="#">Roles and Templates</a></p>
                      <p class="ml-list"><a href="#">Assignment Proposals</a></p>
                      <p class="ml-list"><a href="#">Policy Proposals</a></p>
                      <p class="ml-list"><a href="#">Starter "How to" WIKI</a></p>
                    </div>
                    <div class="ml-divider"></div>
                    <div class="capacity">
                      Max 10 users <img src="img/cap.svg"/>
                    </div>

                  </div>

                  <div class="card-section second">
                    <div class="fast-set">
                      <div>
                        <div class="rounder"></div>
                        <div>
                          <p class="minus_top"><span>Optional</span><br />Fast Set-up</p>
                        </div>
                      </div>
                      $299
                    </div>
                    </div>
                </div>


                <div id="ml-growth" class="model-card">
                  <h2>Growth <span>Plan</span></h2>
                  <div class="card-section">
                    <div class="single_prices">
                      <div class="big_top_price">
                        <span>$</span><span id="single_growth_price"></span><span>/mo</span>
                      </div>
                      <div class="year_price">
                        $3,850/yr
                      </div>
                    </div>
                    <div class="ml-divider"></div>
                    <div>
                      <div class="bringer">
                        Everything in Starter Plan+
                      </div>
                      <p class="ml-list"><a href="#">Basic Payroll</a></p>
                      <p class="ml-list"><a href="#">3 Salary Bands</a></p>
                      <p class="ml-list"><a href="#">Treasury Management</a></p>
                      <p class="ml-list"><a href="#">Quest proposals</a></p>
                      <p class="ml-list"><a href="#">Advanced Governance</a></p>
                      <p class="ml-list"><a href="#">DAO Branding</a></p>
                      <p class="ml-list"><a href="#">Notifications</a></p>
                      <p class="ml-list"><a href="#">Growth "How to" WIKI</a></p>
                    </div>
                    <div class="ml-divider"></div>
                    <div class="capacity">
                      Max 25 users <img src="img/cap.svg"/>
                    </div>

                  </div>

                  <div class="card-section second">
                    <div class="fast-set">
                      <div>
                        <div class="rounder"></div>
                        <div>
                          <p class="minus_top"><span>Optional</span><br />Fast Set-up</p>
                        </div>
                      </div>
                      $399
                    </div>
                    </div>
                </div>

                <div id="ml-thrive" class="model-card">
                  <h2>Thrive <span>Plan</span></h2>
                  <div class="card-section">
                    <div class="single_prices">
                      <div class="big_top_price">
                        <span>$</span><span id="single_thrive_price"></span><span>/mo</span>
                      </div>
                      <div class="year_price">
                        $7,670/yr
                      </div>
                    </div>
                    <div class="ml-divider"></div>
                    <div>
                      <div class="bringer">
                        Everything in Growth plan +
                      </div>
                      <p class="ml-list"><a href="#">Advanced Payroll</a></p>
                      <p class="ml-list"><a href="#">Unlimited Salary bands</a></p>
                      <p class="ml-list"><a href="#">Circle Proposals</a></p>
                      <p class="ml-list"><a href="#">Circle Budgets</a></p>
                      <p class="ml-list"><a href="#">DAO Governance</a></p>
                      <p class="ml-list"><a href="#">Circle Governance</a></p>
                      <p class="ml-list"><a href="#">Smart Badges</a></p>
                      <p class="ml-list"><a href="#">Thrive "How to" WIKI</a></p>
                    </div>
                    <div class="ml-divider"></div>
                    <div class="capacity">
                      Unlimited users <img src="img/cap.svg"/>
                    </div>

                  </div>

                  <div class="card-section second">
                    <div class="fast-set">
                      <div>
                        <div class="rounder"></div>
                        <div>
                          <p class="minus_top"><span>Optional</span><br />Fast Set-up</p>
                        </div>
                      </div>
                      $499
                    </div>
                    </div>
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
