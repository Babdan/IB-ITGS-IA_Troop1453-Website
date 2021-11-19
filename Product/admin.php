<?php
    require "database.php";
    session_start();
    if ( !isset ($_SESSION['user_id'])){
        header('Location: login.php');
    }
    if ($_SESSION['admin']==0){
        header('Location: services.php');
    }
    if (isset($_POST['Verify'])){
        verifyAccount($_POST['emails']);
    }
    
    $result=getPending();

    if ($result==""){
        $result="<div style='background-color:green; color:white; padding:10px'>There are currently no pending accounts to verify </div>";
    }
    
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/bsa-logo.png" type="image/x-icon">
  <link rel='icon' href='favicon.png' type='image/x-icon'>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="loginstyle.css">
  
  
  
  
</head>
<body>

  <section class="menu cid-rWNcoAV66h" once="menu" id="menu1-6">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://www.scouting.org/" target="_blank">
                         <img src="assets/images/bsa-logo.png" alt="BSA Official Website" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white text-primary display-4" href="https://www.scouting.org/" target="_blank">BSA TROOP 1453</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
            <li class="nav-item">
                    <a class="nav-link link text-white text-primary display-4" href="logout.php">
                        <span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                        Sign Out
                    </a>
                    </li>
            <li class="nav-item">
                    <a class="nav-link link text-white text-primary display-4" href="services.php">
                        <span class="mbri-features mbr-iconfont mbr-iconfont-btn"></span>
                        Services
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link link text-white text-primary display-4" href="index.php">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Home
                    </a>
                </li>

            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="index.php#header15-3"><span class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>
                    
                    Send Message
                </a></div>
        </div>
    </nav>
</section>
<section class="engine"><a href="https://mobirise.info/e"></a></section>
<section class="features1 cid-rXzFXmeULy" id="features1-f">
    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <form method="post">
                        <? echo $result?>
                        <br><input type="submit" class="submit" align="center" name="Verify" value="Verify">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>