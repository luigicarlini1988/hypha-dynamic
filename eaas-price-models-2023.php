<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>Hypha | EaaS Price Models :: Ecosystem DAO BUilder</title>
    <meta name="description"
        content="Hypha set out in 2019 to build tools for creating new economic systems to start to address humanity’s crises, such as SEEDS a regenerative economic system">
    <meta name="og:image" content="https://hypha.earth/img/og-image.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!--  Non-Essential, But Recommended -->

    <meta property="og:site_name" content="Hypha">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Raleway:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

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
    <script src="js/aleks-demo.js" type="text/javascript"></script>
    <script src="js/eaas-price-model-BACKUP.js" type="text/javascript"></script>



    <!-- Matomo -->
    <script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u = "https://track.hypha.earth/";
        _paq.push(['setTrackerUrl', u + 'matomo.php']);
        _paq.push(['setSiteId', '9']);
        var d = document,
            g = d.createElement('script'),
            s = d.getElementsByTagName('script')[0];
        g.async = true;
        g.src = u + 'matomo.js';
        s.parentNode.insertBefore(g, s);
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

            <div class="price-sidebar ecosystem">
                <div class="bread_crumb"><a href="index">Home ></a> Pricing > Single DAO </div>
                <div class="ps-center">
                    <h1><span class="up-title">Ecosystem</span><br />DAO Builder</h1>
                    <p class="small">
                        Is a single DAO too small for your Regenerative Impact ambition? Let's create an
                        <strong>Ecosystem of interconnected DAOs instead!</strong> This means you can first create an
                        "Anchor DAO", through which you will then be able to generate and activate more DAOs, sharing
                        the same token, and being part of the same "DAO Ecosystem". For this price model we developed a
                        refined burn / stake activation mechanism, so that <strong>most of your investment remains
                            staked inside the Ecosystem and Hypha.</strong> Isn't it awesome? Click here for further
                        details
                    </p>
                    <div class="price-plan-ctas">
                        <a href="#" class="button-dark-blu inact">Activate your Ecosystem</a>
                        <a href="#" class="cta">Single DAO Builder</a>
                    </div>
                </div>

                <div class="up-small">Need more Members, more DAOS or a different model?<br />Contact us at <a
                        href="mailto:hello@hypha.earth">hello@hypha.earth</a></div>
            </div>

            <div class="price-wizard">

                <div class="price-toggle">
                    <div id="toggle-usd" class="active">
                        <div class="icon-usd">$</div>USD
                    </div>
                    <div id="toggle-hypha">
                        <div class="icon-hypha"></div>HYPHA
                    </div>
                </div>

                <div class="wiz-wrap ecosystem nu">
                    <div class="dao-slider">
                        <p class="optimise">Slide to select amount of Additional DAOs</p>
                        <div class="range-aligner">
                            <input id="range" type="range" value="0" min="0" max="100" class="slider">
                            <div id="daosnumber">
                                <div id="daosnumber-inside"></div> DAO<span id="plural"></span>
                            </div>

                        </div>
                    </div>

                    <div class="models-list">

                        <div id="anchor-dao" class="model-card">
                            <h2>Anchor <span>DAO</span></h2>
                            <div class="card-section">
                                <div>
                                    <p id="anchor-price" class="ml-main-price"></p>
                                    <p class="including"><strong>One time payment</strong></p>
                                </div>
                                <div class="bringer">
                                    <span class="big-no">150</span>
                                    <br />Max Core Members
                                </div>
                                <div class="commun">
                                    <span class="big-no">Unlimited</span>
                                    <br />Community Members
                                </div>
                                <div class="ml-divider"></div>
                                <div>
                                    <ul>
                                        <li class="feat-list">
                                            <p class="ml-title">All DAO features</p>
                                            <ul>
                                                <li>
                                                    <p class="ml-list"><a href="#">Token</a></p>
                                                </li>
                                                <li>
                                                    <p class="ml-list"><a href="#">Profile and Wallet</a></p>
                                                </li>
                                                <li>
                                                    <p class="ml-list"><a href="#">Admin Roles/Badges</a></p>
                                                </li>
                                                <li>
                                                    <p class="ml-list"><a href="#">Logo Personalisation</a></p>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ml-divider"></div>
                                <div>
                                    <p class="including"><strong>includes <span id="anchor_stake"></span></strong>
                                        <br />added to your DAO stake in Hypha
                                    </p>
                                </div>

                            </div>
                        </div>


                        <div id="additional-dao" class="model-card">
                            <h2>Each Additional <span>DAO</span></h2>
                            <div class="card-section">
                                <div>
                                    <p id="additional-price" class="ml-main-price"></p>
                                    <p class="including"><strong>One time payment</strong></p>
                                </div>
                                <div class="bringer">
                                    <span class="big-no">150</span>
                                    <br />Max Core Members
                                </div>
                                <div class="commun">
                                    <span class="big-no">Unlimited</span>
                                    <br />Community Members
                                </div>
                                <div class="ml-divider"></div>
                                <div>
                                    <ul>
                                        <li class="feat-list">
                                            <p class="ml-title">All DAO features</p>
                                            <ul>
                                                <li>
                                                    <p class="ml-list"><a href="#">Token</a></p>
                                                </li>
                                                <li>
                                                    <p class="ml-list"><a href="#">Profile and Wallet</a></p>
                                                </li>
                                                <li>
                                                    <p class="ml-list"><a href="#">Admin Roles/Badges</a></p>
                                                </li>
                                                <li>
                                                    <p class="ml-list"><a href="#">Logo Personalisation</a></p>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ml-divider"></div>
                                <div>
                                    <p class="including"><strong>includes <span id="additional_stake"></span></strong>
                                        <br />added to your DAO stake in Hypha
                                    </p>
                                </div>

                            </div>
                        </div>


                        <div id="totals-card" class="model-card update-2023">
                            <h2 class="update-2023">Totals</h2>

                            <div class="tot-anch-dao">
                                <div>Anchor DAO</div>
                                <div id="total-anchor-dao"></div>
                            </div>

                            <div class="tot-additional-dao">
                                <div id="tot-additonal-field"></div>
                                <div>Additional DAOs</div>
                                <div id="total-additional-dao"></div>
                            </div>

                            <div class="great_tot_burn">
                                <div class="ttst">Total Burned</div>
                                <span id="final_total_burn"></span>
                            </div>

                            <div class="plu">+</div>

                            <div class="great_tot_stake">
                                <div class="ttst">Total Staked</div>
                                <span id="final_total_stake"></span>
                            </div>


                            <div class="great-total">
                                <div>Total</div>
                                <div id="great-final-total"></div>

                            </div>

                        </div>


                    </div>
                </div>

                <!--<div class="disc-explainer">
              <p>
                *Discounts are applied starting from the 5th Additional DAO.<br/><span class="opop"> From the 5th to the 40th additional DAO you will receive a 30% discount. From the 41st on, you will receive a 55%  discount.</span>
              </p>
            </div>-->

            </div>
        </section>
    </main>

    <?php
         include 'incl/hypha-footer.html';
      ?>



</body>

</html>