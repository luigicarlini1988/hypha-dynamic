<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>Hypha</title>
    <meta name="description"
        content="Building decentralised apps to empower communities with the tools of decentralised and autonomous governance.">
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
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/burger-menu.css">

    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
    <script src="js/apparallax-home.js" type="text/javascript"></script>
    <script src="js/lax.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.js" type="text/javascript"></script>
    <script src="js/owl.navigation.js" type="text/javascript"></script>

    <!-- js smooth mouse wheel -->
    <script src="js/smooth.js" type="text/javascript"></script>

    <!-- jquery functions & animations -->
    <script src="js/animations-home.js" type="text/javascript"></script>


    <!-- mautic form NEW --->


    <script type="text/javascript">
        /** This section is only needed once per page if manually copying **/
        if (typeof MauticSDKLoaded == 'undefined') {
            var MauticSDKLoaded = true;
            var head = document.getElementsByTagName('head')[0];
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://mautic.hypha.earth/media/js/mautic-form.js?v24222b77';
            script.onload = function () {
                MauticSDK.onLoad();
            };
            head.appendChild(script);
            var MauticDomain = 'https://mautic.hypha.earth';
            var MauticLang = {
                'submittingMessage': "Please wait..."
            }
        } else if (typeof MauticSDK != 'undefined') {
            MauticSDK.onLoad();
        }
    </script>

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function () {
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
        include ('incl/hypha-menu.html');
    ?>

    <main>

        <div id="pop-up">

            <p>Want to stay in the loop?</p>
            <a href="#" class="button-dark-blu">Newsletter Sign-up</a>
            <span onclick="fcnx1(),setTimeout(fcnx2, 700)" class="fas fa-times fa-2x">close</span>
        </div>

        <section class="home-top">
            <div class="header-back">
                <div class="fifty"></div>
                <div class="fifty lax" data-lax-translate-y="(vh) 1, (-vh) 200" data-lax-anchor="self">
                    <div class="pin p1"></div>
                    <div class="pin p2"></div>
                    <div class="pin p3"></div>
                    <div class="pin p4"></div>
                    <div class="pin p5"></div>
                    <div class="pin p6"></div>
                    <div class="pin p7"></div>
                    <img src="img/header-background-1.png" />
                </div>
            </div>
            <div class="foglio">
                <div class="title-content">
                    <div class="resp-logo">
                        <img src="img/hypha-logo-light.svg" alt="hypha" />
                    </div>
                    <h2>Accelerate<br>Decentralised Organisation</h2>
                    <p>Corporations were built for the industrial age, DAOs are built for the information age</p>
                    <div class="home-top-buttons">
                        <a class="button-blu" href="#tools">Build your DAO</a>
                        <a class="button-blu" href="what-is-a-dao">What is a DAO?</a>
                    </div>
                </div>

                <div id="open-intro-vid" class="bottom-head-video">
                    <div class="vider">
                        <img src="img/video-snap.jpg" />
                        <div class="play-icon">
                            <img src="img/play-video.svg" />
                        </div>
                    </div>
                    <div class="video-texter">Play "intro to Hypha"</div>
                </div>

            </div>


            <div class="bottom-hypha-expl">
                <p><strong>Hypha:</strong> /Noun /ˈhīfə/ each of the branching filaments that make up the mycelium
                    network that coordinates thriving ecosystems.</p>
            </div>



        </section>

        <section id="tools">
            <div class="foglio">
                <div class="yellowdots lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
                    <img src="img/bludots.svg" />
                </div>

                <div class="tool-home-wrap">

                    <div class="tool-left">
                        <div>
                            <h2 class="titoletto">Dao Features</h2>
                            <p class="fake-title">The best tools <br> to build your DAO</p>
                            <p class="semi-b">Our ‘Organization-in-a-box’ solution provides fraud resistant and
                                democratic tools for groups to organize, govern, recognize, and coordinate like never
                                before.</p>
                            <p class="sma">Whether you are a business, non-profit, village, city, farm, cooperative,
                                movement, community, or altogether a new type of economic system, Hypha has a range of
                                flexible and easy tools to help you create your own decentralized organization to fit
                                your style of governance and to achieve your goals.</p>
                            <a class="button-dark-blu" href="dao-features">Discover all the features</a>
                        </div>
                    </div>

                    <div class="tool-right">
                        <div class="dao-feature-thumbs">
                            <div class="thumb lax" data-lax-translate-y="(vh) 1, (-vh) -180" data-lax-anchor="self"><img
                                    src="img/dao-features/role2.png" /></div>
                            <div class="thumb lax" data-lax-translate-y="(vh) 1, (-vh) -10" data-lax-anchor="self"><img
                                    src="img/dao-features/period1.png" /></div>
                        </div>

                        <div class="dao-feature-thumbs">
                            <div class="thumb lax" data-lax-translate-y="(vh) 1, (-vh) -180" data-lax-anchor="self"><img
                                    src="img/dao-features/token2.png" /></div>
                            <div class="thumb lax" data-lax-translate-y="(vh) 1, (-vh) -10" data-lax-anchor="self"><img
                                    src="img/dao-features/token1.png" /></div>
                        </div>

                    </div>

                </div>



                <div class="tool-home-wrap second">
                    <div class="tool-right">
                        <div class="dao-feature-thumbs">
                            <div class="thumb thr lax" data-lax-translate-y="(vh) 1, (-vh) -20" data-lax-anchor="self">
                                <img src="img/dao-features/voting1.png" />
                            </div>
                            <div class="thumb thr lax" data-lax-translate-y="(vh) 1, (-vh) -100" data-lax-anchor="self">
                                <img src="img/dao-features/voting2.png" />
                            </div>
                            <div class="thumb thr lax" data-lax-translate-y="(vh) 1, (-vh) -180" data-lax-anchor="self">
                                <img src="img/dao-features/voting3.png" />
                            </div>
                        </div>

                        <div class="dao-feature-thumbs">
                            <div class="thumb thr lax" data-lax-translate-y="(vh) 1, (-vh) -20" data-lax-anchor="self">
                                <img src="img/dao-features/profile-card1.png" />
                            </div>
                            <div class="thumb thr lax" data-lax-translate-y="(vh) 1, (-vh) -100" data-lax-anchor="self">
                                <img src="img/dao-features/profile-card2.png" />
                            </div>
                            <div class="thumb thr lax" data-lax-translate-y="(vh) 1, (-vh) -180" data-lax-anchor="self">
                                <img src="img/dao-features/profile-card3.png" />
                            </div>
                        </div>

                        <div class="dao-feature-thumbs">
                            <div class="thumb thr lax" data-lax-translate-y="(vh) 1, (-vh) -20" data-lax-anchor="self">
                                <img src="img/dao-features/template1.png" />
                            </div>
                            <div class="thumb thr lax" data-lax-translate-y="(vh) 1, (-vh) -100" data-lax-anchor="self">
                                <img src="img/dao-features/template2.png" />
                            </div>
                            <div class="thumb thr lax" data-lax-translate-y="(vh) 1, (-vh) -180" data-lax-anchor="self">
                                <img src="img/dao-features/template3.png" />
                            </div>
                        </div>
                    </div>


                    <div class="tool-left">
                        <div>
                            <h2 class="titoletto">Dao Features</h2>
                            <p class="semi-b">Beyond launching individual DAOs, Hypha enables the creation of large
                                interconnected ecosystems of DAOs to bring to life a new form of human coordination for
                                large-scale impact around the globe.</p>
                            <p class="sma">Over the past 4 years this ‘Organization -in-a-box’ solution has been built
                                and tested by the Hypha team for its own organization to develop and coordinate all of
                                the decentralized tools and frameworks. Those features are now available for you to
                                start your DAO, and we have an exciting roadmap of new features on their way.</p>
                            <a class="button-dark-blu" href="dao-features">Discover all the features</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="key-benefits">
            <div class="bludots lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
                <img src="img/bludots.svg" />
            </div>

            <div class="foglio">


                <div class="yellowdots lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
                    <img src="img/yellowdots.svg" />
                </div>

                <div class="flexi-cont">
                    <div class="space5">
                        <h2 class="titoletto">Key Benefits</h2>
                        <p class="fake-title">Interoperability with<br> multiple blockchains</p>
                        <img class="resp-img-token" src="img/multi-chain-resp.jpg" />
                        <p>Hypha believes in building inclusive ecosystems rather than isolated solutions. Hence we are
                            ensuring that our platform will provide <strong>compatibility with multiple
                                blockchains/crypto currencies</strong> and that we provide a wide variety of guides and
                            templates to meet the needs of a large range of DAO’s such as Cities, Co-ops, Businesses,
                            Communities, Farms, Villages etc..</p>
                    </div>
                    <div class="space5 token-space">
                        <div class="token-back">
                            <img src="img/currency-back.png" class="lax" data-lax-translate-y="(vh) 1, (-vh) 220"
                                data-lax-anchor="self" />
                        </div>
                        <div class="hypha-logo-big">
                            <img src="img/round-logo.svg" class="lax" data-lax-translate-y="(vh) 1, (-vh) 100"
                                data-lax-anchor="self" />
                        </div>
                        <div class="tok eos lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
                            <img src="img/eos-token.jpg" />
                        </div>

                        <div class="tok tlos lax" data-lax-translate-y="(vh) 1, (-vh) -250" data-lax-anchor="self">
                            <img src="img/tlos-token.jpg" />
                        </div>
                        <div class="tok cosmos lax" data-lax-translate-y="(vh) 1, (-vh) 20" data-lax-anchor="self">
                            <img src="img/cosmos-token.jpg" />
                        </div>
                        <div class="tok dai lax" data-lax-translate-y="(vh) 1, (-vh) -50" data-lax-anchor="self">
                            <img src="img/dai-token.jpg" />
                        </div>
                        <div class="tok celo lax" data-lax-translate-y="(vh) 1, (-vh) 150" data-lax-anchor="self">
                            <img src="img/celo-token.jpg" />
                        </div>
                        <div class="tok holo lax" data-lax-translate-y="(vh) 1, (-vh) 250" data-lax-anchor="self">
                            <img src="img/holo-token.jpg" />
                        </div>
                    </div>
                </div>
                <div class="flexi-cont">
                    <div class="space3">
                        <h3>Fee-free, on-chain<br> governance</h3>
                        <p>Unlike other DAO’s, Hypha does not charge every time your organisation uses the blockchain to
                            record decisions, transactions etc…</p>
                    </div>

                    <div class="space3">
                        <h3>Transparent treasury <br>management </h3>
                        <p>Through public on-chain records, your investors, partners and employees are provided with
                            transparent & fraud resistant treasury related information.</p>
                    </div>

                    <div class="space3">
                        <h3>Diverse <br>compensation tools</h3>
                        <p>Member recognition via badges and compensation for contract / full / part-time roles through
                            a mix of USD’s, various Cryptos and voting rights.</p>
                    </div>

                    <div class="space3">
                        <h3>Flexible DAO <br>building blocks</h3>
                        <p>Create a multitude of organisation, compensation and governance styles using open
                            architecture with the potential to add legal, accounting & trading modules.</p>
                    </div>

                    <div class="space3">
                        <h3>Quick start<br>your DAO</h3>
                        <p>An open-source library of templates, roles, policies, quests and more to help groups get
                            going quicker and to learn from other successful groups</p>
                    </div>

                    <div class="space3">
                        <h3>Human centric<br>design</h3>
                        <p>DAO software platform designed & built based on years of live use. Simple definition of
                            organisational assets such as circles, policies and expenses.</p>
                    </div>
                </div>

            </div>
            <div class="feat-img-bottom">
                <img src="img/features-trasp-back.png" class="lax" data-lax-translate-y="(vh) 1, (-vh) 200"
                    data-lax-anchor="self" />
            </div>
        </section>


        <section id="templates">
            <div class="bludots lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
                <img src="img/bludots.svg" />
            </div>
            <div class="foglio">
                <h2 class="titoletto">Templates</h2>
                <div class="flexi-cont">
                    <div class="space3">
                        <p class="fake-title">Helping you build your DAO</p>
                    </div>
                    <div class="space6">
                        <p>Hypha provides an open-source library of DAO templates to help groups get going quicker and
                            learn from other successful groups, so we can evolve better together. Pick your template and
                            get started!</p>
                    </div>
                </div>

                <div class="flexi-cont templ">
                    <div class="space3">
                        <a>
                            <div class="templ-card">
                                <img class="templs-icon" src="img/templ-start.svg" />
                                <h3>Startup<br>template</h3>
                                <p>Lean template for business oriented teams looking to get started today</p>
                                <!--  <a class="simple-button-blu"  href="https://explore.joinseeds.earth/libraries-and-templates/" target="_blank">Discover more</a> -->
                                <a class="simple-button-blu">Coming soon</a>
                            </div>
                        </a>
                    </div>
                    <div class="space3">
                        <a>
                            <div class="templ-card">
                                <img class="templs-icon" src="img/templ-coop.svg" />
                                <h3>Co-op<br>template</h3>
                                <p>Template for teams that want the principles of a cooperative (one person one vote)
                                </p>
                                <a class="simple-button-blu">Coming soon</a>
                            </div>
                        </a>
                    </div>
                    <div class="space3">
                        <a>
                            <div class="templ-card">
                                <img class="templs-icon" src="img/templ-village.svg" />
                                <h3>Villages<br>template</h3>
                                <p>For life oriented teams looking to set up local and circular economies</p>
                                <a class="simple-button-blu">Coming soon</a>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section id="examples">
            <div class="foglio">
                <div class="bludots lax" data-lax-translate-y="(vh) 1, (-vh) -500" data-lax-anchor="self">
                    <img src="img/bludots.svg" />
                </div>
                <div class="flexi-cont">
                    <div class="space5">
                        <h2 class="titoletto">Real life Examples</h2>
                        <p class="fake-title">Seeds</p>
                        <p><strong>SEEDS is a regenerative economic system originally built by Hypha using its
                                tools.</strong><br><br>SEEDS exists to help address several crises facing humanity today
                            by building tools that help systemically regenerate our environment and communities by
                            creating alternatives to the economic systems that are currently incentivizing and rewarding
                            environmentally and socially destructive behaviors.</p>
                        <a class="simple-button-blu" href="https://joinseeds.earth" target="_blank">Discover more</a>
                    </div>
                    <div class="space5">
                        <div class="seeds-parall">
                            <div id="s-p" class="exemp-img"></div>
                        </div>
                    </div>
                </div>


                <div class="flexi-cont">
                    <div class="space5">
                        <div class="hypha-parall">
                            <div id="h-p" class="exemp-img"></div>
                        </div>
                    </div>

                    <div class="space5">
                        <p class="fake-title">Hypha</p>
                        <p><strong>Hypha set out in 2019 to build tools for creating new economic systems, such as
                                SEEDS. </strong><br><br>As a global team working on open-source tools, we needed to be
                            decentralised ourselves and started building tools to coordinate, govern, and compensate our
                            own organization members. Over the years we saw that these tools could provide a foundation
                            to help any group seeking to coordinate</p>
                        <a id="video2-play" class="simple-button-blu">Discover more</a>
                    </div>

                </div>
            </div>
        </section>

        <section id="benefits">
            <div class="foglio">
                <div class="bene-wrap">
                    <h2 class="titoletto">Benefits</h2>
                    <p class="fake-title">Who can benefit</p>

                    <div class="flexi-cont">
                        <div class="space3">
                            <p class="semi-b">Any group of humans who want to acknowledge contributions to a common
                                cause and / or govern a shared pool of resources can benefit from our tools.</p>
                        </div>

                        <div class="space6">
                            <p>Hypha’s tools help communities and organisations democratically and securely record
                                collective decisions for all to see. They can incentivize participation and work to
                                achieve the common goals. They can use a secure and fee-free currency to help nurture
                                exchange & trading between a large variety of local, regional and global teams,
                                communities and businesses.</p>
                        </div>
                    </div>

                    <div class="scheda-benefit">
                        <ul class="sb-nav">
                            <li class="f tabs active">Coop</li>
                            <li class="s tabs">Farmers</li>
                            <li class="t tabs">Cities</li>
                            <li class="q tabs">Businesses</li>
                            <li class="quin tabs">Start-up</li>
                            <li class="ses tabs">Communities</li>
                            <li class="set tabs">Non-for-profit</li>
                            <li class="ott tabs">Villages</li>
                        </ul>

                        <div class="custom-slider-cont">

                            <div class="custom-slider">

                                <div class="custom-slider-wrapper">
                                    <div class="custom-slide">
                                        <div class="flexi-cont">
                                            <div class="sb-l">
                                                <p class="eighteen">Cooperatives needs</p>
                                                <p>Cooperatives rely on fluid and reliable collaboration between a
                                                    number of decentralised organisations. Amongst other aspects, they
                                                    need to align on their goals , undertake joint hiring, undertake
                                                    collaborative projects, and securely manage the treasury of this
                                                    highly decentralised organisation. Not an easy task.</p>
                                            </div>
                                            <div class="sb-r">
                                                <p class="eighteen">Hypha DAO enables:</p>
                                                <ul>
                                                    <li>Joint voting on key new hires and other operational decisions
                                                    </li>
                                                    <li>Maintaining secure & decentralised treasury management</li>
                                                    <li>Reduced start-up and new membership costs</li>
                                                    <li>Transparent and more-equitable distribution of governance rights
                                                    </li>
                                                    <li>Programmable and automated outcomes & incentives </li>
                                                    <li>Tokenising voice and equity, customizable governance and
                                                        economic structures</li>
                                                    <li>Reducing friction and coordination costs amongst organisations
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-slide">
                                        <div class="flexi-cont">
                                            <div class="sb-l">
                                                <p class="eighteen">Farmer needs</p>
                                                <p>Farmers work together on key initiatives which need an efficient
                                                    organisational structure enabling transparent and collaborative
                                                    decision making between them. Farmers must also contend with an
                                                    increasing consumer demand for more transparency on the origins of
                                                    farm produce, including whether it is organic.</p>
                                            </div>
                                            <div class="sb-r">
                                                <p class="eighteen">Hypha DAO enables:</p>
                                                <ul>
                                                    <li>Transparent organisational governance</li>
                                                    <li>Equity/revenue sharing</li>
                                                    <li>Fee-free payments</li>
                                                    <li>Trusted certificates via the blockchain to guarantee farm
                                                        produce origins, organic status etc.</li>
                                                    <li>Shipment tracking </li>
                                                    <li>Escrow services, and more </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-slide">
                                        <div class="flexi-cont">
                                            <div class="sb-l">
                                                <p class="eighteen">Cities needs</p>
                                                <p>Mayors and local councils can have complex challenges to manage, such
                                                    as the need to enhance their level of coordination, to be more
                                                    transparent and to engage more effectively with their citizens on
                                                    city governance, policies and budgeting.</p>
                                            </div>
                                            <div class="sb-r">
                                                <p class="eighteen">Hypha DAO enables:</p>
                                                <ul>
                                                    <li>Transparent organisational governance</li>
                                                    <li>Maintaining secure & decentralised treasury management</li>
                                                    <li>Secure & transparent voting by citizens on key issues of
                                                        interest</li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="custom-slide">
                                        <div class="flexi-cont">
                                            <div class="sb-l">
                                                <p class="eighteen">Business needs</p>
                                                <p>Businesses can benefit from using DAO tools in many ways, for
                                                    example:<br><br>Businesses that have a vision of a more inclusive,
                                                    equitable and regenerative economy can use DAO tools to accelerate
                                                    that move.</p>
                                                <p id="mb-open" class="simple-button-blu">Read more</p>
                                            </div>
                                            <div class="sb-r">
                                                <p class="eighteen">Hypha DAO enables:</p>
                                                <ul>
                                                    <li>Transparent organisational governance, through joint voting on
                                                        key new initiatives, hires and other operational decisions.</li>
                                                    <li>Maintaining secure & decentralized treasury management</li>
                                                    <li>Reduced start-up and new membership costs</li>
                                                    <li>Transparent and more-equitable distribution of governance rights
                                                    </li>
                                                    <li>Programmable and automated outcomes & incentives</li>
                                                    <li>Tokenising voice and equity</li>
                                                    <li>Customizable governance and economic structures</li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div id="pop-up_business">
                                            <div id="close-pop_business">X</div>
                                            <p>Businesses suffering from poor growth may gain a much needed boost by
                                                decentralizing decision making and budget usage, to give more autonomy
                                                and power to the teams that can truly drive transformational
                                                change.<br><br>Businesses who have a poor image due to their actions or
                                                lack of transparency, could look to DAO tools to help heal this through
                                                increased transparency and inclusiveness. <br><br>Start-ups who want to
                                                move to a ‘stakeholder structure’ rather than the traditional
                                                ‘shareholder structure’, will benefit greatly from these DAO tools.</p>

                                        </div>
                                    </div>


                                    <div class="custom-slide">
                                        <div class="flexi-cont">
                                            <div class="sb-l">
                                                <p class="eighteen">Start-up needs</p>
                                                <p>For start-ups, raising funding and setting up shareholder agreements
                                                    are key but can be costly and time consuming. Onboarding new talent
                                                    can be a slow contractual process, when speed is actually needed.
                                                    Also potential investors will be more inclined to invest if there is
                                                    more transparency in how the start-up is governed and funds are
                                                    spent.</p>
                                            </div>
                                            <div class="sb-r">
                                                <p class="eighteen">Hypha DAO enables:</p>
                                                <ul>
                                                    <li>Transparent organizational governance, through democratic voting
                                                        on key new initiatives, hires and other operational decisions.
                                                    </li>
                                                    <li>Easily set-up & maintain secure & decentralized treasury
                                                        management & payroll.</li>
                                                    <li>Reduced start-up and new membership costs</li>
                                                    <li>No need for shareholder agreements - contributions are accounted
                                                        for over time, based on real involvement.</li>
                                                    <li>Onboard new talent in minutes instead of via the usual time
                                                        consuming employment contracts.</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-slide">
                                        <div class="flexi-cont">
                                            <div class="sb-l">
                                                <p class="eighteen">Communities Needs:</p>
                                                <p>Communities coming together around a common cause will need to
                                                    develop a democratic, reliable & transparent way to take decisions &
                                                    govern. They will also need to find a secure and transparent way to
                                                    manage their pooled resources.</p>
                                            </div>
                                            <div class="sb-r">
                                                <p class="eighteen">Hypha DAO enables:</p>
                                                <ul>
                                                    <li>Transparent voting on key community decisions</li>
                                                    <li>Maintaining secure & decentralized treasury management</li>
                                                    <li>Reduced start-up and new membership costs</li>
                                                    <li>Transparent and equitable distribution of governance rights</li>
                                                    <li>Programmable and automated outcomes & incentives</li>
                                                    <li>Tokenising voice and equity, customizable governance and
                                                        economic structures</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-slide">
                                        <div class="flexi-cont">
                                            <div class="sb-l">
                                                <p class="eighteen">Non-for-profit Needs:</p>
                                                <p>For charities for example, providing transparency for those who
                                                    generously give money is key to building a long term and trusting
                                                    relationship.</p>
                                            </div>
                                            <div class="sb-r">
                                                <p class="eighteen">Hypha DAO enables:</p>
                                                <ul>
                                                    <li>Transparent voting on key operational decisions including the
                                                        allocation of funds to different charitable projects/needs</li>
                                                    <li>Maintaining secure & decentralized treasury management</li>
                                                    <li>Transparent and more-equitable distribution of governance rights
                                                    </li>
                                                    <li>Programmable and automated outcomes & incentives to drive
                                                        increased efficiencies</li>
                                                    <li>Tokenizing voice and equity, customizable governance and
                                                        economic structures</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="custom-slide">
                                        <div class="flexi-cont">
                                            <div class="sb-l">
                                                <p class="eighteen">Villages Needs:</p>
                                                <p>Villages need the ability to efficiently organize their activities
                                                    and manage their resources in a transparent, democratic and secure
                                                    way. They might also want to ensure that the economic benefits of
                                                    the services and products they generate remains within the local
                                                    economy.</p>

                                            </div>
                                            <div class="sb-r">
                                                <p class="eighteen">Hypha DAO enables:</p>
                                                <ul>
                                                    <li>Transparent & democratic voting on key operational decisions
                                                        including the allocation of funds to different village projects
                                                    </li>
                                                    <li>Maintaining secure & decentralized treasury management</li>
                                                    <li>A stable & low cost means of exchange (tokens)</li>
                                                    <li>Programmable and automated outcomes & incentives to drive
                                                        increased efficiencies</li>
                                                    <li>Tokenization of resources in the village that were not
                                                        acknowledged before, from knowledge to land, natural resources,
                                                        materials that can be shared, etc..</li>
                                                </ul>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <!--wrapper -->
                            </div><!-- viewport-->

                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section id="price-plans-cta" class="home-pp">
            <div class="foglio">
                <div>
                    <h2 id="gs-anchor" class="titoletto">Price Plans</h2>
                    <div class="flex-wrap">
                        <p class="fake-title">From your first single DAO <br />to an Ecosystem of interconnected DAOs
                            for impact</p>
                        <p class="subsub">We offer several flexible paths for organizations. You could join an existing
                            DAO or build your own, inviting partners and communities into the ecosystem. Or launch an
                            organizational DAO. Lead your community in later to create an interconnected DAO ecosystem,
                            driving impact in your focus area.</p>
                    </div>
                </div>

                <div class="actual-plans">
                    <div class="saas">
                        <div class="freepla">Free plan available!</div>
                        <h3><strong>Single DAO</strong> builder</h3>
                        <img src="img/price-plans/saas-skeme.png" />
                        <p>If you wish to build your own single DAO and <strong>let your organization grow using Hypha’s
                                tools</strong>, these are the price models for you! We provide 3 attractive price plans
                            with increasing feature inclusions, PLUS a free plan to help you try out the power of our
                            DAO solution!</p>
                        <a href="singledao-price-models" class="button-yellow">Single DAO plans</a>
                    </div>

                    <div class="eaas">
                        <h3><strong>Ecosystem DAO</strong> builder</h3>
                        <img src="img/price-plans/eaas-skeme.png" />
                        <p>Is your dream to <strong>build an impactful ecosystem of like-minded communities locally or
                                worldwide?</strong> Then you could create or join an ecosystem of interconnected DAOs.
                            Use our price plans to offer working capital for your DAO launch. You can even choose the
                            number of DAOs to include. Alternatively we could connect you to potential working capital
                            providers to support your DAO. </p>
                        <a href="price-models" class="button-yellow">Ecosystem DAO plans</a>
                    </div>

                </div>
            </div>
        </section>

        <section id="team">
            <div class="foglio">
                <div class="team-wrap">
                    <div class="team-content">
                        <h2 class="titoletto">HYPHA TEAM</h2>
                        <p class="fake-title">Meet the Team</p>
                        <div class="slider-team">
                            <div id="slider-team" class="owl-carousel owl-theme">


                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/rieki-cordon777/" target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/rieki.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Council</p>
                                            <p class="ts-name">Rieki Cordon</p>
                                            <p class="work">Ecosystem facilitator <span class="yellow">3+ years</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Rieki also worked on SEEDS as a Map Maker & Citizen. His experience & focus
                                            is ‘Tokenomics, Decentralized Governance, Facilitation, Holding Space,
                                            Co-Creating through Inspiration.</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/joachim-stroh/" target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/joachim.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Council</p>
                                            <p class="ts-name">Joachim Stroh</p>
                                            <p class="work">Business development <span class="yellow">2+ years</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Joachim is a key strategist and architect of complex and large-scale
                                            enterprise platform technologies and operations, incl. content management,
                                            IC/content process & taxonomy, search & discovery, social business software,
                                            and metrics & measurements.</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/alexandreprate/" target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/alex.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Council</p>
                                            <p class="ts-name">Alex Prate</p>
                                            <p class="work">Growth Strategist <span class="yellow">3+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Alex is a global innovator, passionate about Regenerative Finance and
                                            Financial Wellbeing, with a strong background in the CRM industry. Alex
                                            already received five global design awards for his digital innovations; a
                                            Webby Award and four AIVA Design Awards.</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/nikolausheger/" target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/nik.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Council</p>
                                            <p class="ts-name">Nikolaus Heger</p>
                                            <p class="work">Wizard of integrity <span class="yellow">2+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Software designer & architect with Apple & Silicon Valley roots, now a
                                            digital nomad. Blockchain enthusiast focused on usability, human
                                            interaction, consciousness. Civilization upgrader.</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/ronnie-potel-387a4411/"
                                            target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/ronnie.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Council</p>
                                            <p class="ts-name">Ronnie Potel</p>
                                            <p class="work">Council member <span class="yellow">2+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>History of co-founding, investing and working at senior levels of the finance
                                            industry. Skilled in traditional and new financial products focusing on
                                            environmental awareness. A trained barrister in the United Kingdom.</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/danniequilitzsch/" target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/dannie.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Council</p>
                                            <p class="ts-name">Dannie Quilitzsch</p>
                                            <p class="work">Stretegic anchor role <span class="yellow">2+ years</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Dannie consults /coaches corporations and startups to develop strategies,
                                            concepts and a project management to operate these. Her core skills are the
                                            development and implementation of sustainable, regenerative, social and
                                            innovative services/products.</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/dr-stephen-gomes-030b314/"
                                            target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/stephen.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Council</p>
                                            <p class="ts-name">Stephen Gomes</p>
                                            <p class="work">Council member <span class="yellow">1+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Stephen is an entrepreneur, start-up manager/investor, MBA professor, a
                                            consultant in international joint venture & strategic alliances, and a
                                            Non-Profit Sustainable/Equitable Capitalism Activist. He has worked in over
                                            100 countries (Bechtel, Airways Eng.Corp.)</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.flow.farm/" target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/mark.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Council</p>
                                            <p class="ts-name">Mark Epstein</p>
                                            <p class="work">Council Member <span class="yellow">3+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Mark is leading the 'Financial Flows' of Hypha. He is also the owner of a
                                            Vegan farm, who's mission is to grow intensely healthy food, sustainably,
                                            organically, and veganically.</p>
                                    </div>
                                </div>



                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/franz-josef-allmayer/"
                                            target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/franz.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Council</p>
                                            <p class="ts-name">Franz Joseph Allmeyer</p>
                                            <p class="work">Whole systems integrator<span class="yellow">3+ years</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Franz Josef is dedicated to the fields of innovation and global development,
                                            which has enabled him to gather transdisciplinary experience working with
                                            international organizations, governments, the private sector, NGOs, and
                                            academia.</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/anneloes-smitsman/ " target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/anneloes.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Council</p>
                                            <p class="ts-name">Anneloes Smitsman</p>
                                            <p class="work">Council member <span class="yellow">3+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Dr. Anneloes Smitsman (Ph.D., LLM), is a visionary scientist, published
                                            author, futurist, system architect, and leadership catalyst for the
                                            transition to a thrivable civilization. She is the Founder and CEO of
                                            EARTHwise Centre.</p>
                                    </div>
                                </div>


                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/leonie-herma/ " target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/leonieherma.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Building</p>
                                            <p class="ts-name">Leonie Herma</p>
                                            <p class="work">Product Designer <span class="yellow">1+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p> Always focused on the product vision, also excellent in saying “no” and
                                            still getting invited for lunch.</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/luigi-carlini/ " target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/avatar1.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha DEV</p>
                                            <p class="ts-name">Luigi Carlini</p>
                                            <p class="work">Web Designer <span class="yellow">2+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p> Hi! I'm an Art Director & webdesigner, highly fascinated by the world of
                                            coding... but also a developer highly fascinated by the world of design!
                                            Roughly 15 years working in this fields :-)</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/justindeeley/ " target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/justindeeley.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Building</p>
                                            <p class="ts-name">Justin Deeley</p>
                                            <p class="work">Marketing Strategy <span class="yellow">1+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>20 years+ experience in international marketing in large corporates &
                                            SME's/Start-ups in the tech, TV, telecom and financial sectors. Justin has a
                                            proven track record in driving transformation and delivering great outcomes
                                            for customers and stakeholders.</p>
                                    </div>
                                </div>


                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/massimo-bergero-0711a218a/ "
                                            target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/massimobergero.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha DEV</p>
                                            <p class="ts-name">Massimo Bergero</p>
                                            <p class="work">UX/UI Designer<span class="yellow">1+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Hello! I’m Massimo. I’m an art director, UX/UI designer, graphic designer,
                                            and illustrator, committed to producing the highest quality of work.</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/ArsenijeSavic.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha DEV</p>
                                            <p class="ts-name">Arsenije Savic</p>
                                            <p class="work">Frontend Dev. <span class="yellow">1+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>I am Arsenija Savić, a facilitator and developer with 7 years of experience
                                            in creating mobile and web applications.</p>
                                    </div>
                                </div>


                                <div class="team-sli">
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/jasondoh.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Building</p>
                                            <p class="ts-name">Jason Dho</p>
                                            <p class="work">Product Designer<span class="yellow">2+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Jason is a true systems hacker and catalyst. He has 10+ years of experience
                                            in operations and project management leading hyperlean teams to build out
                                            digital platforms and communities.</p>
                                    </div>
                                </div>


                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/moscosopedro/ " target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/pedromoscoso.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Build</p>
                                            <p class="ts-name">Pedro Moscoso</p>
                                            <p class="work">User Support<span class="yellow">1+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Pedro is an IT Pro and Tech Enthusiast with almost two decades of experience
                                            in many tech fields. In recent years, his focus has been on Project
                                            Management, Scrum Master, Q&A, and User Support.</p>
                                    </div>
                                </div>

                                <div class="team-sli">

                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/Aleksandardokic.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha DEV</p>
                                            <p class="ts-name">Aleksandar Đokić</p>
                                            <p class="work">Full Stack Dev.<span class="yellow">1+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/PiyushThapa.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha DEV</p>
                                            <p class="ts-name">Piyush Thapa</p>
                                            <p class="work">Backend Dev.<span class="yellow">2+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Piyush is Software Engineer working mostly in Backend & Blockchain
                                            Technology. Loves working Functional Programming. Writes mostly Haskell &
                                            Elixir</p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="linkedin">
                                        <a href="https://www.linkedin.com/in/gguij002/ " target="_blank">in</a>
                                    </div>
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/GerardoGuijarro.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha DEV</p>
                                            <p class="ts-name">Gerardo Guijarro</p>
                                            <p class="work">Full Stack Dev.<span class="yellow">2+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="team-sli">
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/evgeni.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha DEV</p>
                                            <p class="ts-name">Evgeni</p>
                                            <p class="work">Frontend Dev.<span class="yellow">1+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Hi! I’m Evgeni, and I’m working on the front end of the Global Passport</p>
                                    </div>
                                </div>


                                <div class="team-sli">
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/sorin.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha Building</p>
                                            <p class="ts-name">Sorin</p>
                                            <p class="work">Catalyzing <span class="yellow">2+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p>Sorin is a mysterious shadow weaver always everywhere at once, rarely seen,
                                            sometimes emerging in other account names and zoom names - never to confuse
                                            or manipulate, always in service.</p>
                                    </div>
                                </div>



                                <div class="team-sli">
                                    <div class="ts-head">
                                        <div class="ts-avat">
                                            <img src="img/hypha-members/IrvingUlises.jpg" />
                                        </div>
                                        <div class="ts-titles">
                                            <p class="level yellow">Hypha DEV</p>
                                            <p class="ts-name">Irving Ulises</p>
                                            <p class="work">Frontend Dev. <span class="yellow">1+ years</span></p>
                                        </div>
                                    </div>
                                    <div class="ts-text">
                                        <p></p>
                                    </div>
                                </div>




                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ctas">
            <div class="foglio">
                <div class="flexi-cont">
                    <div class="space5">
                        <div class="cta1">
                            <p class="fake-title">Want to stay in the loop?</p>
                            <p>Sign-up to Hypha’s newsletter for key updates, events, information and more.</p>
                            <p id="nl-but" class="button-blu">Newsletter Sign-up</p>
                        </div>
                    </div>
                    <div class="space5">
                        <div class="cta2">
                            <p class="fake-title">Join the Beta program</p>
                            <p>Want to have first access to Hypha’s tools? <br>Sign up below!</p>
                            <a href="https://www.cognitoforms.com/Hypha1/HyphaDAOBetaProgram " class="button-blu"
                                target="_blank">Beta test Sign-up</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="news">
            <div class="bludots lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
                <img src="img/bludots.svg" />
            </div>
            <div class="foglio">
                <div class="gt-titles">
                    <h2 class="titoletto">News</h2>
                    <p class="fake-title">Hypha news</p>
                    <a href="https://medium.com/hyphadao" target="_blank" class="trasp-button-dark">Visit the Blog</a>
                </div>

                <div class="flexi-cont">
                    <div class="space3">

                        <a href="https://medium.com/hyphadao/hypha-communication-on-the-respond-program-3bd4e4a5c7d1"
                            target="_blank" rel="nofollow">
                            <div class="article">
                                <div class="img-wrap">
                                    <img src="img/news/respond-news.jpg" />
                                </div>
                                <div class="art-cont">
                                    <h4>Hypha DAO selected by the RESPOND Accelerator Program</h4>
                                    <div class="avat-read">
                                        <div class="avatar">
                                            <div class="rounder">
                                                <img src="img/hypha-members/joachim.jpg" />
                                            </div>
                                            <p>Joachim Stroh</p>
                                        </div>

                                        <div class="button-read-art"><img src="img/blog-more.svg" /></div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="space3">
                        <a href="https://medium.com/hyphadao/and-others-join-hypha-going-long-on-civilization-3a3af27e220"
                            target="_blank">
                            <div class="article">
                                <div class="img-wrap">
                                    <img src="img/news-mock-sm.jpg" />
                                </div>
                                <div class="art-cont">
                                    <h4>Hypha’s Going Long on Civilization </h4>
                                    <div class="avat-read">
                                        <div class="avatar">
                                            <div class="rounder">
                                                <img src="img/hypha-members/rieki.jpg" />
                                            </div>
                                            <p>Rieki Cordon</p>
                                        </div>

                                        <div class="button-read-art"><img src="img/blog-more.svg" /></div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="space3">
                        <a href="https://www.weforum.org/agenda/2022/02/re-envisioning-corporations-how-daos-and-blockchain-can-improve-the-way-we-organize/"
                            target="_blank" rel="nofollow">
                            <div class="article">
                                <div class="img-wrap">
                                    <img src="img/news/how-daos-can.jpg" />
                                </div>
                                <div class="art-cont">
                                    <h4>How DAOs and blockchain can improve the way we organize </h4>
                                    <div class="avat-read">
                                        <div class="avatar">
                                            <!--  <div class="rounder">
                              <img src="img/avatar1.jpg"/>
                            </div> -->
                                            <p>World Economic Forum</p>
                                        </div>

                                        <div class="button-read-art"><img src="img/blog-more.svg" /></div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="foglio">
            <ul class="footer-menu">
                <li><a href="index">Home</a>
                    <ul>
                        <li><a href="index#solutions">Solutions</a></li>
                        <li><a href="index#features">Features</a></li>
                        <li><a href="index#templates">Templates</a></li>
                        <li><a href="index#benefits">Benefits</a></li>
                        <li><a href="index#gs-anchor">Get Started</a></li>
                    </ul>
                </li>

                <li>
                    <p>About Us</p>
                    <ul>
                        <li><a href="about-us">Overview</a></li>
                        <li><a href="work-with-us">Work with us</a></li>
                        <li><a href="#team">Meet the team</a></li>
                        <li><a href="https://medium.com/hyphadao" target="_blank" rel="nofollow">Blog</a></li>
                    </ul>
                </li>

                <li><a href="#templates">Templates</a>
                    <ul>
                        <li><a href="#templates">Startup</a></li>
                        <li><a href="#templates">Co-op</a></li>
                        <li><a href="#templates">Villages</a></li>
                    </ul>
                </li>

                <li>
                    <p>Resources</p>
                    <ul>
                        <li><a href="what-is-a-dao">What is a DAO</a></li>
                        <li><a href="https://assets.hypha.earth/decks/hypha_pitch_deck.pdf" target="_blank">Investors
                                Deck</a></li>
                        <li><a href="https://drive.google.com/drive/folders/1IJqcq4KIpbkKjdi0Ro_b330ZIDsCuTE6?usp=sharing"
                                target="_blank">Brand assets</a></li>
                    </ul>
                </li>

                <li>
                    <p>Legal</p>
                    <ul>
                        <li><a href="privacy-policy">Privacy policy</a></li>
                        <li><a href="terms-of-services">Terms of services</a></li>
                    </ul>
                </li>
            </ul>

            <div class="bottom-foot">
                <div class="foot-log"><img src="img/hypha-logo-dark.svg" /></div>
                <p class="credits">All content is licensed under a creative commons attribution sharealike 4.0 Hypha</p>
                <a href="https://discord.gg/Gx3rmYfjaV " target="_blank">
                    <div class="discord-footer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.08 14.44">
                            <defs></defs>
                            <title>Path 23</title>
                            <g id="Livello_2" data-name="Livello 2">
                                <g id="Livello_1-2" data-name="Livello 1">
                                    <path id="Path_23" data-name="Path 23" class="cls-1"
                                        d="M12.77,0l-.24.28a11.44,11.44,0,0,1,4.28,2.18A14.1,14.1,0,0,0,11.63.81a14.39,14.39,0,0,0-3.47,0,1.45,1.45,0,0,0-.29,0A12.86,12.86,0,0,0,4,2c-.64.29-1,.5-1,.5A11.59,11.59,0,0,1,7.48.21L7.3,0A8.55,8.55,0,0,0,2.48,1.8,23,23,0,0,0,0,11.82a6.21,6.21,0,0,0,5.24,2.61S5.88,13.66,6.4,13a5.34,5.34,0,0,1-3-2,5.51,5.51,0,0,0,.48.29.18.18,0,0,0,.07.05l.15.09A10.21,10.21,0,0,0,5.35,12a14,14,0,0,0,2.52.74,11.94,11.94,0,0,0,4.46,0A11.49,11.49,0,0,0,14.82,12a10,10,0,0,0,2-1,5.47,5.47,0,0,1-3.12,2c.52.65,1.14,1.39,1.14,1.39a6.25,6.25,0,0,0,5.26-2.61,23,23,0,0,0-2.48-10A8.41,8.41,0,0,0,12.77,0ZM6.82,10.23A1.84,1.84,0,0,1,5.07,8.32,1.83,1.83,0,0,1,6.82,6.41h0A1.82,1.82,0,0,1,8.58,8.29v0a1.82,1.82,0,0,1-1.74,1.91Zm6.28,0a1.85,1.85,0,0,1-1.76-1.91,1.83,1.83,0,0,1,1.75-1.91h0a1.83,1.83,0,0,1,1.75,1.91h0a1.84,1.84,0,0,1-1.75,1.91Z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
            </div>
        </div>

        <script type="text/javascript">
            if (sessionStorage.getItem('hidepopup') == "true") {
                document.getElementById("pop-up").classList.toggle("gone")
            }

            function fcnx1() {
                document.getElementById("pop-up").classList.toggle("hide");
                sessionStorage.setItem('hidepopup', "true");
            }

            function fcnx2() {
                document.getElementById("pop-up").classList.toggle("gone");
            }
        </script>

    </footer>


    <?php
        include 'incl/newsletter.html';
     ?>

    <?php
        include 'incl/video1.html';
     ?>

</body>

</html>