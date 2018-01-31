<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= Config::get('site_name') ?> Admin Panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keyword" content="<?= Config::get('keywords') ?>">
        <meta name="description" content="<?= Config::get('description') ?>">
        <meta name="author" content="<?= Config::get('author') ?>">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <link rel="stylesheet" href="/Css/main.css">
        <link rel="stylesheet" href="/Css/admin.css">
        <link rel="stylesheet" href="/Css/grid.css">
        <link rel="stylesheet" href="/Css/mobile.css">
        <link rel="stylesheet" href="/Css/tablet.css">
        <link rel="stylesheet" href="/Css/animat_fades.css">
        <link rel="stylesheet" href="/Css/animate.min.css">
        <link rel="stylesheet" href="/Css/font-awesome.css">
        <link rel="stylesheet" href="/Css/font-awesome.min.css">
        <!--[if lt IE 9]>
<script src="/Js/respond.js"></script>
<script src="/Js/html5shiv.js"></script>
<script src="/Js/html5shiv-printshiv.js"></script>
<![endif]-->
        <script src="/Js/main.js"></script>
        <script src="/Js/functions.js"></script>
        <script src="/Js/jquery-1.10.2.min.js"></script>
        <script src="/Js/jquery-ui.min.js"></script>
        <script src="/Js/jquery.flip.min.js"></script>
    </head>
    <body class="animated fadeInDown">
        <?php fileIncludes('PHP', 'ADMIN_HEADER'); ?>
        <?php if (isset($_SESSION['admin_username']) && isset($_SESSION['admin_pass'])) { ?>
        <div class="k-col-2 adminSideBar">
               sidebar
            </div>
             <div class="k-col-8 adminContentWrap">
            <div class="container">


                <?php echo $data['content']; ?>


            </div>
             </div>
            <div class="k-col-1"></div>
            <?php } else { fileIncludes("PHP", "LOGIN");} ?>
        <?php fileIncludes('PHP', 'FOOTER'); ?>
    </body>
</html>