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
  <script src="js/single-dao-jquery.js" type="text/javascript"></script>


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
              <p>If you simply want to <strong>build your own DAO</strong> and let your organisation grow using hypha tools, these are the price models for you!</p>
              <p class="small">If you want to create a DAO Ecosystem instead, visit the Ecosystem price plans by clicking the white button</p>
              <div class="price-plan-ctas">
                <a href="#" class="button-dark-blu">Activate your DAO</a>
                <a href="#" class="cta">Ecosystem DAO Builder</a>
              </div>
            </div>
            <div class="up-small">
              Hypha tokens are used to access and activate DAOs. For convenience, our prices are expressed in USD.
            </div>

          </div>

          <div class="price-wizard">

            <div class="wiz-wrap">

              <div class="price-toggle">
                <div id="toggle-usd" class="active">
                  <div class="icon-usd">$</div>USD
                </div>
                <div id="toggle-hypha">
                  <div class="icon-hypha"></div>HYPHA
                </div>
              </div>

              <div id="dao-toggle" class="dao-toggle">
                    <div class="save_20">Save 20%</div>
                    <div class="fake_toggle"></div>
                    <div class="tog_month">Monthly</div>
                    <div class="tog_year">Year Upfront</div>
              </div>

              <div class="models-list">

                  <div id="ml-freemium" class="model-card">
                  <h2>Founder <span>Plan</span></h2>
                  <div class="card-section">
                    <div class="single_prices">
                      <div class="big_top_price">
                        <span></span><span id="freemium_price">Free</span><span></span>
                      </div>
                      <div class="year_price">
                        <span id="dol_0">$</span>0/Mo forever
                      </div>
                    </div>
                    <div class="ml-divider"></div>

                    <div class="bringer">
                      max <span class="big-no">5</span> members
                    </div>

                    <div>
                      <ul>
                        <li class="feat-list"><p class="ml-title">Essentials</p>
                          <ul>
                            <li><p class="ml-list"><a href="#">Token</a></p></li>
                            <li><p class="ml-list"><a href="#">Profile and Wallet</a></p></li>
                            <li><p class="ml-list"><a href="#">Admin Roles/Badges</a></p></li>
                            <li><p class="ml-list"><a href="#">Logo Personalisation</a></p></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="ml-divider"></div>
                    <div>
                      <ul>
                        <li class="feat-list"><p class="ml-title">Contributions</p>
                          <ul>
                            <li><p class="ml-list"><a href="#">Proposals Dashboard</a></p></li>
                            <li><p class="ml-list"><a href="#">Contribution Proposals</a></p></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="ml-divider"></div>
                    <div>
                      <ul>
                        <li class="feat-list"><p class="ml-title"><p class="ml-title">Compensation</p>
                          <ul>
                            <li><p class="ml-list"><a href="#">Salary Bands</a></p></li>
                            <li><p class="ml-list"><a href="#">Roles Archetypes</a></p></li>
                            <li><p class="ml-list"><a href="#">Role Assignments</a></p></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="ml-divider"></div>
                    <div>
                      <ul>
                        <li class="feat-list"><p class="ml-title"><p class="ml-title">Basic Governance</p>
                          <ul>
                            <li><p class="ml-list coming-soo"><a href="#">Agreements and Policies</a></p></li>
                          </ul>
                        </li>
                      </ul>
                    </div>

                  </div>

                </div>

                  <div id="ml-starter" class="model-card">
                    <h2>Starter <span>Plan</span></h2>
                    <div class="card-section">
                      <div class="single_prices">
                        <div class="big_top_price">
                          <span id="dol_1">$</span><span id="single_starter_price"></span><span>/mo</span>
                        </div>
                        <div class="year_price">
                          <span id="dol_4">$</span><span id="starter_year_tot"></span><span>/yr</span>
                        </div>
                      </div>

                      <div class="ml-divider"></div>

                      <div class="bringer">
                        max <span class="big-no">15</span> members
                      </div>

                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title">Essentials</p>
                            <ul>
                              <li><p class="ml-list"><a href="#">Token</a></p></li>
                              <li><p class="ml-list"><a href="#">Profile and Wallet</a></p></li>
                              <li><p class="ml-list"><a href="#">Admin Roles/Badges</a></p></li>
                              <li><p class="ml-list"><a href="#">Logo Personalisation</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title">Contributions</p>
                            <ul>
                              <li><p class="ml-list"><a href="#">Proposals Dashboard</a></p></li>
                              <li><p class="ml-list"><a href="#">Contribution Proposals</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title"><p class="ml-title">Compensation</p>
                            <ul>
                              <li><p class="ml-list"><a href="#">Salary Bands</a></p></li>
                              <li><p class="ml-list"><a href="#">Roles Archetypes</a></p></li>
                              <li><p class="ml-list"><a href="#">Role Assignments</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title"><p class="ml-title">Basic Governance</p>
                            <ul>
                              <li><p class="ml-list coming-soo"><a href="#">Agreements and Policies</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>

                    </div>

                  </div>


                  <div id="ml-growth" class="model-card">
                    <h2>Growth <span>Plan</span></h2>
                    <div class="card-section">
                      <div class="single_prices">
                        <div class="big_top_price">
                          <span id="dol_2">$</span><span id="single_growth_price"></span><span>/mo</span>
                        </div>
                        <div class="year_price">
                          <span id="dol_5">$</span><span id="growth_year_tot"></span><span>/yr</span>
                        </div>
                      </div>

                      <div class="ml-divider"></div>

                        <div class="bringer">
                        max <span class="big-no">50</span> members
                        </div>
                        <div>
                          <ul>
                            <li class="feat-list"><p class="ml-title">Essentials</p>
                              <ul>
                                <li><p class="ml-list"><a href="#">Token</a></p></li>
                                <li><p class="ml-list"><a href="#">Profile and Wallet</a></p></li>
                                <li><p class="ml-list"><a href="#">Admin Roles/Badges</a></p></li>
                                <li><p class="ml-list"><a href="#">Logo Personalisation</a></p></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                        <div class="ml-divider"></div>
                        <div>
                          <ul>
                            <li class="feat-list"><p class="ml-title">Contributions</p>
                              <ul>
                                <li><p class="ml-list"><a href="#">Proposals Dashboard</a></p></li>
                                <li><p class="ml-list"><a href="#">Contribution Proposals</a></p></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                        <div class="ml-divider"></div>
                        <div>
                          <ul>
                            <li class="feat-list"><p class="ml-title"><p class="ml-title">Compensation</p>
                              <ul>
                                <li><p class="ml-list"><a href="#">Salary Bands</a></p></li>
                                <li><p class="ml-list"><a href="#">Roles Archetypes</a></p></li>
                                <li><p class="ml-list"><a href="#">Role Assignments</a></p></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                        <div class="ml-divider"></div>
                        <div>
                          <ul>
                            <li class="feat-list"><p class="ml-title"><p class="ml-title">Governance</p>
                              <ul>
                                <li><p class="ml-list coming-soo"><a href="#">Agreements and Policies</a></p></li>
                                <li><p class="ml-list coming-soo"><a href="#">Configurable Governance</a></p></li>
                                <li><p class="ml-list coming-soo"><a href="#">Organisation Templates</a></p></li>
                              </ul>
                            </li>
                          </ul>
                        </div>

                        <div class="ml-divider"></div>
                        <div>
                          <ul>
                            <li class="feat-list"><p class="ml-title"><p class="ml-title">Treasury</p>
                              <ul>
                                <li><p class="ml-list shortner coming-soo"><a href="#">Treasury Management</a></p></li>
                                <li><p class="ml-list coming-soo"><a href="#">Token Sale</a></p></li>
                                <li><p class="ml-list"><a href="#">Payouts</a></p></li>
                              </ul>
                            </li>
                          </ul>
                        </div>

                        <div class="ml-divider"></div>
                        <div>
                          <ul>
                            <li class="feat-list"><p class="ml-title"><p class="ml-title">Branding</p>
                              <ul>
                                <li><p class="ml-list shortner"><a href="#">Design and Branding</a></p></li>
                              </ul>
                            </li>
                          </ul>
                        </div>

                    </div>
                  </div>

                  <div id="ml-thrive" class="model-card">
                    <h2>Thrive <span>Plan</span></h2>
                    <div class="card-section">
                      <div class="single_prices">
                        <div class="big_top_price">
                          <span id="dol_3">$</span><span id="single_thrive_price"></span><span>/mo</span>
                        </div>
                        <div class="year_price">
                          <span id="dol_6">$</span><span id="thrive_year_tot"></span><span>/yr</span>
                        </div>
                      </div>

                      <div class="ml-divider"></div>

                      <div class="bringer">
                        max <span class="big-no">150</span> members
                      </div>

                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title">Essentials</p>
                            <ul>
                              <li><p class="ml-list"><a href="#">Token</a></p></li>
                              <li><p class="ml-list"><a href="#">Profile and Wallet</a></p></li>
                              <li><p class="ml-list"><a href="#">Admin Roles/Badges</a></p></li>
                              <li><p class="ml-list"><a href="#">Logo Personalisation</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title">Contributions</p>
                            <ul>
                              <li><p class="ml-list"><a href="#">Proposals Dashboard</a></p></li>
                              <li><p class="ml-list"><a href="#">Contribution Proposals</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title"><p class="ml-title">Compensation</p>
                            <ul>
                              <li><p class="ml-list"><a href="#">Salary Bands</a></p></li>
                              <li><p class="ml-list"><a href="#">Roles Archetypes</a></p></li>
                              <li><p class="ml-list"><a href="#">Role Assignments</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title"><p class="ml-title">Governance</p>
                            <ul>
                              <li><p class="ml-list coming-soo"><a href="#">Agreements and Policies</a></p></li>
                              <li><p class="ml-list coming-soo"><a href="#">Configurable Governance</a></p></li>
                              <li><p class="ml-list coming-soo"><a href="#">Organisation Templates</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>

                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title"><p class="ml-title">Treasury</p>
                            <ul>
                              <li><p class="ml-list shortner coming-soo"><a href="#">Treasury Management</a></p></li>
                              <li><p class="ml-list coming-soo"><a href="#">Token Sale</a></p></li>
                              <li><p class="ml-list"><a href="#">Payouts</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>

                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title"><p class="ml-title">Branding</p>
                            <ul>
                              <li><p class="ml-list shortner"><a href="#">Design and Branding</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>

                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title"><p class="ml-title">Circles</p>
                            <ul>
                              <li><p class="ml-list coming-soo shortner"><a href="#">Circle Dashboard</a></p></li>
                              <li><p class="ml-list coming-soo shortner"><a href="#">Circle Budgets</a></p></li>
                              <li><p class="ml-list coming-soo shortner"><a href="#">Circle Proposals</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>

                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title"><p class="ml-title">Accounting</p>
                            <ul>
                              <li><p class="ml-list coming-soo shortner"><a href="#">Accounting Dashboard</a></p></li>
                              <li><p class="ml-list coming-soo shortner"><a href="#">Accounting Management</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>

                      <div class="ml-divider"></div>
                      <div>
                        <ul>
                          <li class="feat-list"><p class="ml-title"><p class="ml-title">Perks</p>
                            <ul>
                              <li><p class="ml-list coming-soo shortner"><a href="#">Smart Badges</a></p></li>
                            </ul>
                          </li>
                        </ul>
                      </div>

                    </div>
                  </div>

              </div>

              <!--<div class="optional">
                <h4>Optional Offers</h4>
                <div class="card-section second">
                  <div class="fast-set">
                    <div>

                      <div>
                        <p class="minus_top">Guidance <span>Workshop (90’)</span></p>
                      </div>
                    </div>
                    $199
                  </div>
                </div>
              </div>-->

            </div>

            <div class="notice">
              <p class="coming-soo">Feature coming soon</p>
            </div>

          </div>
        </section>
     </main>

     <?php
         include 'incl/hypha-footer.html';
      ?>


   </body>

 </html>
