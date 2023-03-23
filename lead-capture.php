<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>Hypha | Lead Capture</title>
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
    <link rel="stylesheet" href="css/lead-capture.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/burger-menu.css">
    <link rel="stylesheet" href="css/new-header.css">

    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>

    <!-- js smooth mouse wheel -->
    <script src="js/smooth.js" type="text/javascript"></script>

    <!-- jquery functions & animations -->
    <script src="js/general-animations.js" type="text/javascript"></script>



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

    <main id="lead-capture">
        <section id="lead-area">

            <div class="lead-sidebar">
                <div class="bread_crumb"><a href="index">Home > </a> Conversion page title </div>
                <div class="ps-center">
                    <h1>Sign up for your Hypha DAO</h1>
                    <p>We look forward to getting to know you and sharing the new and exciting features released during
                        Hypha's upcoming beta program launch. Register now to be the first to activate your new DAO by
                        completing this form. We'll be in touch shortly!</p>
                </div>

            </div>

            <div class="form-area">
                <div class="form-wrapper">
                    <iframe src="https://hypha.site/forms/wtl/2cfc45cb5cf9032da731cf36a4357839" frameborder="0"
                        sandbox="allow-top-navigation allow-scripts allow-forms allow-same-origin"
                        allowfullscreen></iframe>
                </div>
            </div>

        </section>
    </main>

    <?php
         include 'incl/hypha-footer.html';
      ?>



</body>

</html>