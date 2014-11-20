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
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row">
                    <div class="col-xs-12">
                        <?php require('_/inc/header.php'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-5 koMouseOver">
                        <a href="/vittoria.php">
                            <img src="/_/img/preview_vittoria.png" class="koProdImg" />
                            <div class="koProdInfo">
                                <h1>Vittoria</h1>
                                <h3>espresso Tasse</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 visible-xs-block">
                        <div class="koProdBreak"></div>

                    </div>
                    <div class="col-xs-12 col-sm-7 koMouseOver">
                        <a href="/zeugen.php">
                            <img src="/_/img/preview_zeugen.png" class="koProdImg" />
                            <div class="koProdInfo"></div>
                        </a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="koProdBreak"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-7 koMouseOver">
                        <a href="/avalu.php">
                            <img src="/_/img/preview_avalu.png" class="koProdImg" />
                            <div class="koProdInfo"></div>
                        </a>
                    </div>
                    <div class="col-xs-12 visible-xs-block">
                        <div class="koProdBreak"></div>

                    </div>
                    <div class="col-xs-12 col-sm-5 koMouseOver">
                        <a href="/waldtiere.php">
                            <img src="/_/img/preview_waldtiere.png" class="koProdImg" />
                            <div class="koProdInfo"></div>
                        </a>
                    </div>

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
