<?php

session_start();

?>

<!DOCTYPE html>
<html  >
<head>
<title>Home</title>
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
  
  <section class="menu cid-rWNcoAV66h" once="menu" id="menu1-0">

    

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
            
            <?php if( isset ($_SESSION['user_id']) ): ?>
            <li class="nav-item">
                    <a class="nav-link link text-white text-primary display-4" href="services.php">
                    
                        <span class="mbri-features mbr-iconfont mbr-iconfont-btn"></span>
                        Services
                    </a>
                    <?php else: ?>

                    <?php endif; ?>
                </li>
                <?php if( isset ($_SESSION['user_id']) ): ?>
                <li class="nav-item">
                    <a class="nav-link link text-white text-primary display-4" href="logout.php">
                        <span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                        Sign Out
                    </a>
                    </li>
                    <?php else: ?>
                        <li class="nav-item">
                        <a class="nav-link link text-white text-primary display-4" href="login.php">
                        <span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>
                        Member Area
                    </a>
                    </li></ul>
                    <?php endif; ?>
                
            
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="index.html#header15-3"><span class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>
                    
                    Message Our Troop
                </a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/r"></a></section><section class="cid-rWNcrwtuGK mbr-fullscreen mbr-parallax-background" id="header2-1">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Why Join Scouting?&nbsp;</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Scouting's programs and outdoor adventures give young people the opportunity and freedom to explore a world beyond the boundaries of everyday life. It presents them with chances to try new things, provide service to others, build self-confidence and develop leadership skills.
                </p>
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="https://www.scouting.org/" target="_blank">About Scouting</a>
                    <a class="btn btn-md btn-white-outline display-4" href="index.html#header15-3">About Troop 1453</a></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="header15 cid-rWNdyIFHFT mbr-fullscreen mbr-parallax-background" id="header15-3">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    TROOP 1453</h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">The Boy Scouts of America - Troop 1453 in Istanbul, Turkey welcomes YOU to their website!
<br>
<br>Do you like rock climbing, camping and cooking over a fire? How about practicing first aid, or mastering the game of chess? We are a troop that likes to keep busy, learn new skills, and have fun..
                </p>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="form-container">
                    <div class="media-container-column" data-form-type="formoid">
                        <!---Formbuilder Form--->
                        <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="njUtWBxfm/7ltWKraBDC44yNGnF1rhQYiERUyYM/sQ6Kzrcs2SLaJNVDQ1X3eIWAA4Da1Q0OVB8lFSOOcBceJIxYUxgyzCAv7OaOiPEK3Z6JvoYE+PI+VaLt18ccCgAY">
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div>
                            <div class="dragArea row">
                                <div class="col-md-12 form-group " data-for="name">
                                    <input type="text" name="name" placeholder="Name" data-form-field="Name" required="required" class="form-control px-3 display-7" id="name-header15-3">
                                </div>
                                <div class="col-md-12 form-group " data-for="email">
                                    <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control px-3 display-7" id="email-header15-3">
                                </div>
                                <div data-for="phone" class="col-md-12 form-group ">
                                    <input type="tel" name="phone" placeholder="Phone" data-form-field="Phone" class="form-control px-3 display-7" id="phone-header15-3">
                                </div>
                                <div data-for="message" class="col-md-12 form-group ">
                                    <textarea name="message" placeholder="Message" data-form-field="Message" class="form-control px-3 display-7" id="message-header15-3"></textarea>
                                </div>
                                <div class="col-md-12 input-group-btn"><button type="submit" class="btn btn-secondary btn-form display-4">SEND FORM</button></div>
                            </div>
                        </form><!---Formbuilder Form--->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section once="footers" class="cid-s9ZR2LfJMs" id="footer6-i">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7"></p><p>
                    DO A GOOD TURN DAILY</p><p></p>
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
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
  
</body>
</html>