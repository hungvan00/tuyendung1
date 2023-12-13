<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from localhost/tuyendung/tuyendung/view/toadam.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 00:19:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Việc làm 24h | Tọa đàm </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.3.0/font/bootstrap-icons.css">
		<!-- CSS here -->
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
   </head>


   <?php 
    include_once("../function/menu.php");
    
    ?>
   <div class="job-listing-area pt-20 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                    <div class="small-section-tittle2 mb-45">
                                    <div class="ion"> <svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="12px">
                                    <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                        d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                    </svg>
                                    </div>
                                    <h4>Tìm kiếm </h4>
                                </div>
                            </div>
                        </div>
                        <!-- Job Category Listing start -->
                        <div class="job-category-listing mb-50">
                            <!-- single one -->
                            <div class="single-listing">
                               <div class="small-section-tittle2">
                               </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="select">
                                        <option value="">Công ty</option>
                                        <option value="">Công ty 1</option>
                                        <option value="">Công ty 2</option>
                                        <option value="">Công ty 3</option>
                                        <option value="">Công ty 4</option>
                                    </select>
                                </div>
                                <!--  Select job items End-->
                                <!-- select-Categories start -->
                                <div class="select-Categories pt-80 pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Thời gian</h4>
                                    </div>
                                    <label class="container">Tháng 1
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Tháng 2
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Tháng 3
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Tháng 4
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Tháng 5
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label><label class="container">Tháng 6
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label><label class="container">Tháng 7
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label><label class="container">Tháng 8
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label><label class="container">Tháng 9
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label><label class="container">Tháng 10
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label><label class="container">Tháng 11
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label><label class="container">Tháng 12
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            
                            
                            
                        </div>
                        <!-- Job Category Listing End -->
                    </div>
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <!-- <span>Tìm thấy: 3 buổi tọa đàm</span> -->
                                        </div>
                                    </div>
                                </div>

                                <?php 
                                include("config.php");
                      
                      $sql="select * from toadam ";
                      $result=mysqli_query($connect,$sql);
                      while($row=mysqli_fetch_array($result,1))
                      { 
                        echo' 
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <!-- logo công ty -->
                                <div class="company-img">
                                    <a href="viewtoadam2.php"><img src="'.$row["Img"].'" alt=""></a>
                                </div>
                                <div class="job-tittle job-tittle2">
                                    <!-- tiêu đề bài tuyển dụng -->
                                    <a href="view-toadam.php";emailntd='.$row["emailntd"].'">
                                        <p>'.$row["tenlop"].'</p>
                                    </a>
                                    <ul>
                                        <li><i class="fas bi bi-calendar-check">Ngày đăng: </i>'.$row["ngaydang"].'</li>
                                        <li><i class="fas bi bi-calendar-check">Hạn đăng ký: </i>'.$row["handk"].'</li>
                                        <li><i class="fas fa-map-marker-alt"></i>'.$row["diadiem"].'</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link items-link2 f-right">
                            </div>
                        </div>';

                      }
                        ?>
    
                              </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->
        <!--Pagination Start  -->
        <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pagination End  -->
        
    
      <?php include("../function/footer.php");?>
        
 