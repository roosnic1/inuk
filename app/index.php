<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js ie ie6 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie ie8 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9 lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title></title>
    <meta name="description" content="">
    <?php require("_/inc/head.php"); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <?php require('_/inc/header.php'); ?>
                <div id="PageBody">
                    <h1>www.test.com</h1>        Your site is already wired up with:
                    <ul>
                        <li>blabla</li>
                        <li>Jquery (1.10)</li>
                        <li>HTML 5 Boilerplate</li>
                        <li>Twitter Bootstrap (v 3.0.3)</li>
                    </ul>
                    <p>Don't forget to setup your site-wide variables for DEV and LIVE in /_/inc/init.php</p>


                </div>


            </div>
        </div>

    </div>


    <!--[if lt IE 9]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser.
        Please <a href="http://browsehappy.com/">upgrade your browser</a>
        or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <?php require('_/inc/footer.php'); ?>

    <!-- JAVASCRIPT -->
    <?php require('_/inc/analytics.php'); ?>

    <?php require('_/inc/tail.php'); ?>
</body>
</html>
