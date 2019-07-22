<?php
session_start();
include 'dbconfig.php';
include 'function.php';
include 'src/confguration.php';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title><?php echo SITE_TITLE; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.ico">

    <!--Google Fonts link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="index.php"><?php echo SITE_NAME; ?> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <?php if (is_logged_in() == false) : ?>
                    <li> <a class="btn btn-success" href="signup.php">ຝາກປະຫວັດ</a></li>
                    <li> <a class="nav-item nav-link" href="login.php">ເຂົ້າສູ່ລະບົບ</a></li>
                <?php endif; ?>

                <?php if (is_logged_in()) : ?>
                    <li><a class="nav-item nav-link" href="profile.php">ໂປຣຟາຍ</a></li>
                    <li><a class="nav-item nav-link" href="logout.php">ອອກຈາກລະບົບ</a></li>
                <?php endif; ?>
            </ul>
            <span class="navbar-text">
                ໂທ: <?php echo SITE_TEL; ?>
            </span>
        </div>
    </nav>
    <div class="wrap">&nbsp;</div>
    <div class="container">