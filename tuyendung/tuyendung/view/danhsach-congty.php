<?php
    require_once("../function/helpDatabase.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Việc làm 24h | Bài tuyển dụng </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
		<!-- CSS here -->
        <!-- desc giảm dần asc t dần -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/price_rangs.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link   rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="../css/style.css" />

        
   </head>

   <body>
    <?php    
        require_once("../function/menu.php"); 
    ?>
    <main>
        <div class="container">
            <div class="row">
            <?php 
                $list=getAllNhaTuyenDung();
                foreach ($list as $std2) {
                    $tencty=$std2["tencty"];
                    $emailcty=$std2["emailcty"];
                    $logocty=$std2["logocty"];
                    $logo="../img/";
                    $logo.=$logocty;
                    $gioithieucty=$std2["gioithieucty"];
                    echo'
                    <div class="col-md-4 col-sm-6">
                        <div class="box-company">
                            <div class="company-banner">
                            <a href="#">
                                <div class="cover-wraper">
                                    <img src="../img/business-job-interview-concept.jpg" class="img-fluid">
                                </div>
                            </a>
                            <div class="company-logo">
                                <a href="#">
                                <img class="img-fluid" src="'.$logo.'" alt="logo" >
                                </a>
                            </div>
                            </div>
                            <div class="company-info">
                            <h6>
                                <a href="#" class="company-name">'.$tencty.'</a>
                            </h6>
                            <div class="company-description">
                                <p>'.$gioithieucty.'</p>
                            </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            ?>    
                
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12"></div>
            </div>
        </div>
    </main>
    <?php require_once("../function/footer.php"); ?>

	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Range -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>