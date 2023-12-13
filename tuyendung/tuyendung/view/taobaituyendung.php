<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Đăng bài tuyển dụng </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="assetss/vendors/perfect-scrollbar/perfect-scrollbar.css">
   	    <link rel="stylesheet" href="assetss/vendors/bootstrap-icons/bootstrap-icons.css">
    	<link rel="stylesheet" href="assetss/css/app.css">
    	<link rel="shortcut icon" href="assetss/images/favicon.svg" type="image/x-icon">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- header menu -->
    <?php require_once("../function/menu.php"); ?>
    <div id="trangchu" class='layout-navbar'>
            <div class="container">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="page-heading">
                            <div class="page-title">
                                <div class="row">
                                    <div class="col-12 col-md-6 order-md-1 order-last">
                                        <h3>Đăng bài tuyển dụng</h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                                <li class="breadcrumb-item"><a href="taikhoancanhan.php">Tài khoản</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Đăng bài tuyển dụng</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- // Basic multiple Column Form section start -->
                            <section id="multiple-column-form">
                                <div class="row match-height">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <form class="form" method="post" action="../function/dangbaituyendung.php">
                                                        <div>
                                                            <h5>Tổng quan</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group has-icon-left">
                                                                    <label >Tiêu đề</label>
                                                                    <div class="position-relative">
                                                                        <input type="text" class="form-control" name="tieude">
                                                                        <div class="form-control-icon">
                                                                            <i class="bi bi-flag"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group has-icon-left">
                                                                    <label>Hạn nộp CV</label>
                                                                    <div class="position-relative">
                                                                        <input type="date" class="form-control" name="hannopcv">
                                                                        <div class="form-control-icon">
                                                                            <i class="bi bi-hourglass-split"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group has-icon-left">
                                                                    <label>Địa điểm thực tập</label>
                                                                    <div class="position-relative">
                                                                        <input type="text" class="form-control" name="diadiemlv">
                                                                        <div class="form-control-icon">
                                                                            <i class="bi bi-cursor"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group has-icon-left">
                                                                    <label>Mức lương</label>
                                                                    <div class="position-relative">
                                                                        <input type="text" class="form-control" name="mucluong">
                                                                        <div class="form-control-icon">
                                                                            <i class="bi bi-cash"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group has-icon-left">
                                                                    <label>Số lượng cần tuyển</label>
                                                                    <div class="position-relative">
                                                                        <input type="number" class="form-control" name="soluongtuyen" min="0">
                                                                        <div class="form-control-icon">
                                                                            <i class="bi bi-list-ol"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label>Hình thức Thực tập</label>
                                                                    <div class="position-relative">
                                                                        <select name="hinhthuclamviec" id="" class="form-control">
                                                                            <option value="Part time">Ngắn hạn</option>
                                                                            <option value="Full time">Dài hạn</option>
                                                                        </select>
                                                                        <!-- <div class="form-control-icon">
                                                                            <i class="bi bi-card-checklist"></i>
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label>Giới tính</label>
                                                                    <div class="position-relative">
                                                                        <select name="gioitinh" id="" class="form-control">
                                                                            <option value="Nam">Nam</option>
                                                                            <option value="Nữ">Nữ</option>
                                                                            <option value="Không yêu cầu giới tính">Không yêu cầu giới tính</option>
                                                                        </select>
                                                                        <!-- <div class="form-control-icon">
                                                                            <i class="bi bi-people"></i>
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label>Kinh nghiệm</label>
                                                                    <div class="position-relative">
                                                                        <select name="kinhnghiem" id="" class="form-control">
                                                                        <option value="không yêu cầu kinh nghiệm">Không yêu cầu kinh nghiệm</option>
                                                                            <option value="1 năm">1 năm</option>
                                                                            <option value="2 năm">2 năm</option>
                                                                            <option value="3 năm">3 năm</option>
                                                                            <option value="Trên 3 năm">Trên 3 năm</option>
                                                                        </select>
                                                                        <!-- <div class="form-control-icon">
                                                                            <i class="bi bi-wrench"></i>
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div><h5 class="pl-20 pt-10">Mô tả chi tiết</h5></div>
                                                            <div class="col col-12">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <label for="cmnd">Mô tả công việc</label>
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="mota" rows="5"> </textarea>
                                                                        </div>
                                                                        <div class="form-control-icon">
                                                                            <i class="bi bi-exclamation-circle"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col col-12">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <label for="cmnd">Yêu cầu ứng viên</label>
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="yeucau" rows="5"> </textarea>
                                                                        </div>
                                                                        <div class="form-control-icon">
                                                                            <i class="bi bi-asterisk"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col col-12">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <label for="cmnd">Quyền lợi</label>
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="quyenloi" rows="5"> </textarea>
                                                                        </div>
                                                                        <div class="form-control-icon">
                                                                            <i class="bi bi-award"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 d-flex justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1" name="submit">Đăng</button>
                                                                <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1">Làm mới</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- // Basic multiple Column Form section end -->
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    <main>
        <!-- Support Company End-->
       <?php require_once("../function/footer.php"); ?>

    </main>


  <!-- JS here -->
	
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
	    <script src="assetss/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    	<script src="assetss/js/bootstrap.bundle.min.js"></script>
    	<script src="assetss/js/main.js"></script>
        
    </body>
</html>