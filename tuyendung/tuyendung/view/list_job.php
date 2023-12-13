<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job board HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <?php 
    include_once("../function/menu.php");
    
    ?>
 <!-- job post company Start -->
 <?php 
 include_once("config.php");
 $sql="SELECT * FROM `baidang` WHERE baidang.id='4'";
 $result=mysqli_query($connect,$sql);
 while($row=mysqli_fetch_array($result)){
    echo '<div class="job-post-company pt-1 pb-120">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Left Content -->
            <div class="col-xl-7 col-lg-8">
                <!-- job single -->
                <div class="single-job-items mb-50">
                    <div class="job-items">
                        <div class="company-img company-img-details">
                            <a href="#"><img src="../img/pngtree-b-logo-png-image_3604523.jpg" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="#">
                                <h4>Công ty TNHH cầu nối Mekong</h4>
                            </a>
                        </div>
                    </div>
                </div>
                  <!-- job single End -->
               
                <div class="job-post-details">
                    <div class="post-details1 mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h2>'.$row['tieude'].'</h2>
                        </div> </br>
                        <p>'.$row['mota'].'</p>
                    </div>
                    <div class="post-details2  mb-50">
                         <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Yêu cầu </h4>
                        </div>
                       
                         <p>'.$row['yeucau'].'</p>
                    </div>
                    <div class="post-details2  mb-50">
                         <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Quyền lợi</h4>
                        </div>
                     <p>'.$row['quyenloi'].'</p>
                    </div>
                </div>

            </div>
            <!-- Right Content -->
            <div class="col-xl-4 col-lg-4">
                <div class="post-details3  mb-50">
                    <!-- Small Section Tittle -->
                   <div class="small-section-tittle">
                       <h4>Job Overview</h4>
                   </div>
                  <ul>
                      <li>Ngày đăng : <span>'.$row['ngaydang'].'</span></li>
                      <li>Địa điểm : <span>'.$row['diadiemlv'].'</span></li>
                      <li>Số lượng : <span>'.$row['soluongtuyen'].'</span></li>
                      <li>Hình thức : <span>'.$row['hinhthuclamviec'].'</span></li>
                      <li>Trợ cấp :  <span>'.$row['mucluong'].'</span></li>
                      <li>Giới tính  : <span>'.$row['gioitinh'].'</span></li>
                      Hạn nộp cv :  <span>'.$row['hannopcv'].'</span></li>

                  </ul>
                 <div class="apply-btn2">
                    <a href=" ../view/nopcv.php" class="btn">Ứng tuyển</a>
                 </div>
               </div>
                <div class="post-details4  mb-50">
                    <!-- Small Section Tittle -->
                   <div class="small-section-tittle">
                       <h4>Company Information</h4>
                   </div>
                      <span>Colorlib</span>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <ul>
                        <li>Name: <span>Colorlib </span></li>
                        <li>Web : <span> colorlib.com</span></li>
                        <li>Email: <span>'.$row['emailcty'].'</span></li>
                    </ul>
               </div>
            </div>
        </div>
    </div>
</div>';
 }
 ?>
 
        <!-- job post company End --
        <?php include("../function/footer.php");?>
     JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
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