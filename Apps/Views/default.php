<?php?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= Config::get('site_name')?> Offical Website</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keyword" content="<?= Config::get('keywords') ?>">
        <meta name="description" content="<?= Config::get('description') ?>">
        <meta name="author" content="<?= Config::get('author') ?>">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <link rel="stylesheet" href="/Css/animat_fades.css">
        <link rel="stylesheet" href="/Css/animate.min.css">
        <link rel="stylesheet" href="/Css/slider.css">
        <link rel="stylesheet" href="/Css/font-awesome.css">
        <link rel="stylesheet" href="/Css/font-awesome.min.css">
        <link rel="stylesheet" href="/Css/main.css">
        <link rel="stylesheet" href="/Css/side-bars.css">
        <link rel="stylesheet" href="/Css/grid.css">
        <link rel="stylesheet" href="/Css/stylemobile.css">
        <link rel="stylesheet" href="/Css/tablet.css">
        <link rel="stylesheet" href="/Css/store.css">
        
        
        <link rel="stylesheet" href="/Css/tutorial.css">
        <!--[if lt IE 9]>
        <script src="/Js/respond.js"></script>
        <script src="/Js/html5shiv.js"></script>
        <script src="/Js/html5shiv-printshiv.js"></script>
        <![endif]-->
        <script src="/Js/jquery-1.10.2.min.js"></script>
        <script src="/Js/jquery-ui.min.js"></script>
        <script src="/Js/jquery.flip.min.js"></script>
        <script src="/Js/main.js"></script>
        <script src="/Js/functions.js"></script>
        <script src="/Js/slider.js"></script>
        <script src="/Js/sliderJs.js"></script>
        <script src="/Js/sliderJsEngine.js"></script>
        
    </head>
    <body class="animated fadeInDown" id="activeState">
        <?php  fileIncludes('PHP', 'HEADER'); ?>
        <?php //fileIncludes('PHP', 'LEFTSIDEBAR'); ?>
        <div class="container">
            <?php if (Session::hasFlash()) { ?><div class="Msgalert"><?php Session::flash(); ?></div><?php } ?>

            <?= $data['content'] ?>


        </div>
        <?php //fileIncludes('PHP', 'RIGHTSIDEBAR'); ?>
        <?php fileIncludes('PHP', 'FOOTER'); ?>
    </body>
</html>