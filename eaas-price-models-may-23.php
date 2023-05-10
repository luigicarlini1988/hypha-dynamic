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
    <script src="js/eaas-price-model-may-23.js" type="text/javascript"></script>



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
                <div class="bread_crumb"><a href="index">Home ></a> Pricing > Ecosystem DAO </div>
                <div class="ps-center">
                    <h1><span class="up-title">Ecosystem</span><br />DAO Builder</h1>
                    <p class="small">
                        If you wish to create an ecosystem of interconnected DAOs, start by <strong>creating your
                            "Anchor
                            DAO"</strong>, and then <strong>activate more DAOs in your "DAO Ecosystem"</strong>. With
                        this
                        ecosystem pricing model, your initial funding in <strong>Hypha Tokens remains staked inside your
                            DAOs treasuries</strong>, and meaningfully follows your ecosystem expansion as more members
                        join. Isn't it awesome? Click the button below to join the Beta list!
                    </p>
                    <div class="price-plan-ctas">
                        <a href="#" class="button-dark-blu">Join the Beta list</a>
                        <a href="#" class="cta">Single DAO Builder</a>
                    </div>
                </div>

                <div class="up-small">Need more Members, more DAOS or a different model?<br />Contact us at <a
                        href="mailto:hello@hypha.earth">hello@hypha.earth</a>
                </div>


            </div>


            <div class="price-wizard">



                <div class="wiz-wrap ecosystem nu">
                    <div class="dao-slider">
                        <p class="optimise">Slide to select the amount of Additional DAOs</p>
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
                                    <p class="including"><b>Min. Hypha Token <br />Staked in DAO treasury</b></p>
                                </div>
                                <div class="plus">+</div>
                                <div>
                                    <p class="year_fee"><span id="anchor_year_fee"></span>/year</p>
                                    <p class="including"><b>DAO participation fee</b></p>
                                </div>
                                <div class="bringer">
                                    <div class="mcm">
                                        <span class="big-no">111</span>
                                        <br>Core Members
                                    </div>
                                    <div class="cmmt">1,000 Community Members</div>
                                </div>
                                <div>
                                    <ul>
                                        <li class="feat-list">
                                            <p class="ml-title">All DAO features</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                        <div id="additional-dao" class="model-card">
                            <h2>Each Additional <span>DAO</span></h2>
                            <div class="card-section">
                                <div>
                                    <p id="additional-price" class="ml-main-price"></p>
                                    <p class="including"><b>Min. Hypha Token <br />Staked in DAO treasury</b></p>
                                </div>
                                <div class="plus">+</div>
                                <div>
                                    <p class="year_fee"><span id="additional_year_fee"></span>/year</p>
                                    <p class="including"><b>DAO participation fee</b></p>
                                </div>
                                <div class="bringer">
                                    <div class="mcm">
                                        <span class="big-no">11</span>
                                        <br>Core Members
                                    </div>
                                    <div class="cmmt">100 Community Members</div>
                                </div>
                                <div>
                                    <ul>
                                        <li class="feat-list">
                                            <p class="ml-title">All DAO features</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                        <div id="totals-card" class="model-card update-2023">
                            <h2 class="update-2023"> Grand Total</h2>



                            <div class="great_tot_burn">
                                <span id="final_total_stake"></span>
                                <p class="including"><b>Min. Hypha Token <br />Staked in DAOs treasuries*</b></p>
                            </div>

                            <div class="plus">+</div>

                            <div class="great_tot_stake">
                                <p class="year_fee"><span id="final_year_fee"></span>/year</p>
                                <p class="including"><b>DAOs participation fees*</b></p>
                            </div>

                            <div class="divider"></div>
                            <div>
                                <div class="tot-notes">
                                    <p><i>*(1)Hypha Tokens needs to be staked in each DAO treasury in order to activate
                                            each DAO.</i>
                                    </p>
                                </div>

                                <div class="tot-notes">
                                    <p><i>*(2)This annual DAO participation fee supports ongoing maintenance and
                                            operating costs.</i></p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="web-3">
                        <span>If you wish to integrate with Hypha DAO or develop a dApp, contact us at </span> <a
                            href="mailto:hello@hypha.earth">hello@hypha.earth</a>
                    </div>
                </div>



            </div>
        </section>
    </main>

    <?php
         include 'incl/hypha-footer.html';
      ?>



</body>

</html>