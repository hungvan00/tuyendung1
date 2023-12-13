<?php
require_once("../function/helpDatabase.php");
$user = "";
if ($_SESSION["login"])
    $user = $_SESSION["login"];
$email = $user[0];
?>
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

    <!-- End Modal -->
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
                                    <h3>Danh sách ứng viên</h3>
                                </div>
                                <div class="col-12 col-md-6 order-md-2 order-first">
                                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                            <li class="breadcrumb-item"><a href="taikhoancanhan.php">Tài khoản</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Danh sách ứng viên</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>



                        <?php
                        include("config.php");

                        $sql = "SELECT * FROM nopcv";
                        $result = mysqli_query($connect, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div>
                                    <h5>Danh sách ứng viên</h5>
                                    <div class="mb-30"></div>
                                </div>
                                
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Tên ứng viên: ' . $row["emailsinhvien"] . '</h5>
                                            <small>' . $row["naynopcv"] . '</small>
                                        </div>
                                        <p class="mb-1">Thư giới thiệu: ' . $row["gioithieu"] . '</p>
                                        <p class="mb-1">Trạng thái xét duyệt: <span style="color:blue;">' . $row["trangthaixetduyet"] . '</span></p>
                                    </a>
                                    <div class="list-group-item list-group-item-action">
                                        <small class="d-flex w-100 justify-content-between">
                                            <a href="../file-cv/' . $row["filecv"] . '" download>File CV: ' . $row["filecv"] . '</a>';

                            if (strcmp($row["trangthaixetduyet"], "Chờ duyệt") == 0) {
                                echo '
            <div>
                <a href="../function/xacnhandat-yc.php?id=' . $row["id"] . '" class="btn btn-light float-right">Xác nhận đạt yêu cầu</a>
                <a href="../function/xacnhanchuadat-yc.php?id=' . $row["id"] . '" class="btn btn-dark float-right text-white">Xác nhận chưa đạt yêu cầu</a>
            </div>';
                            }

                            echo '
                                        </small>
                                    </div>
                                </div>
                                <div class="mb-10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>';
                        }
                        ?>




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
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>

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