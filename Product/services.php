<?php
    
    session_start();
    if ( !isset ($_SESSION['user_id'])) {
    header('Location: login.php');
    }
    if ($_SESSION['admin']==1){
        $adminlink = '<li class="nav-item">
                  <a class="nav-link link text-white text-primary display-4" href="admin.php">
                    <span class="mbri-setting mbr-iconfont mbr-iconfont-btn"></span>
                Admin
            </a>
        </li>';

    } else {
        $adminlink='';
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Services</title>
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
                    <a class="nav-link link text-white text-primary display-4" href="index.php">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Home
                    </a>
                </li>
            <?
            echo $adminlink
            ?>

            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="index.php#header15-3"><span class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>
                    
                    Send Message
                </a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/e"></a></section><section class="features1 cid-rXzFXmeULy" id="features1-f">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                <a href="https://drive.google.com/drive/folders/1IiyX5b_6TZqbyh6ioOTVqbiLopWXibTC?usp=sharing" target="_blank"><span class="mbr-iconfont mbri-calendar"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Schedule</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Upcoming campouts, meetings & other events.
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                <a href="https://drive.google.com/drive/folders/1bDzFx8KUy26v3M09Y6LqTH0FH3KQQmbc?usp=sharing" target="_blank"><span class="mbr-iconfont mbri-users"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Contact Info</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Troop Leaders &amp; Parents Contact Info.
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                <a href="https://drive.google.com/drive/folders/1jBGzw2CSA9DrI-xAC_AGPnI5LnYJzh3Y?usp=sharing" target="_blank"><span class="mbr-iconfont mbri-edit"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Resource Requests</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Request any badge workbooks, or any other material neccesary here.
                    </p>
                </div>
            </div>

            

        </div>

    </div>

</section>

<section class="features1 cid-rXzG0LYFCw" id="features1-g">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                <a href="https://drive.google.com/drive/folders/1G8uAHeEyp2Xumu0Kl1Md8vq3X7MWiCq2?usp=sharing" target="_blank"><span class="mbr-iconfont mbri-bulleted-list"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Duty Roster</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Duty rosters for upcoming or current events.
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                <a href="https://drive.google.com/drive/folders/19grCFOsqTu-cNzM6_qr19WpXMqLSUkd6?usp=sharing" target="_blank"><span class="mbr-iconfont mbri-map-pin"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Resource Tracker</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Wondering where a material you need is? Check here.
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                <a href="https://drive.google.com/drive/folders/1Bz-8DJlos9QxCpmdPFY211-hwwh7zqd9?usp=sharing" target="_blank"><span class="mbr-iconfont mbri-camera"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Media</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Images &amp; Videos from events.
                    </p>
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