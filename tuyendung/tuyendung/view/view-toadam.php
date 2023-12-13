<?php 
    include_once("../function/menu.php");
    
    ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Việc làm 24h | Buổi tọa đàm </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
       
		<!-- CSS here -->
        <!-- //WHERE id IN (4, 5, 9, 7) ORDER BY id DESC -->
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
        <style>
            .btn2 {
            background-color: rgb(158, 205, 252); /* Blue background */
            border: none; /* Remove borders */
            color: white; /* White text */
            padding: 12px 16px; /* Some padding */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
            border-radius: 5px;
            margin-top: 1px;
            }
            /* Darker background on mouse-over */
            .btn2:hover {
            background-color: rgb(153, 178, 250);
            }
            .boder{
                border: solid 1px rgb(228, 225, 225);
                border-radius: 2px;
            }
            .autosize {
                resize: none;
                overflow: hidden;
                width: 100%;
                border: none;
            }
            .inputDnD .form-control-file {
                position: relative;
                width: 100%;
                height: 100%;
                min-height: 6em;
                outline: none;
                visibility: hidden;
                cursor: pointer;
                background-color: #c61c23;
                box-shadow: 0 0 5px solid currentColor;
            }
            .inputDnD .form-control-file:before {
                content: attr(data-title);
                position: absolute;
                top: 0.5em;
                left: 0;
                width: 100%;
                min-height: 6em;
                line-height: 2em;
                padding-top: 1.5em;
                opacity: 1;
                visibility: visible;
                text-align: center;
                border: 0.25em dashed currentColor;
                transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                overflow: hidden;
            }
            .inputDnD .form-control-file:hover:before {
                border-style: solid;
                box-shadow: inset 0px 0px 0px 0.25em currentColor;
            }
            .btnExit{
                width: 100px;
                height: 35px;
                border: solid 1px rgb(228, 225, 225);
                border-radius: 2px;
                background-color: #0000;
                color: black;
                cursor: pointer;

            }
            .btnDone{
                width: 100px;
                height: 35px;
                border: solid 1px rgb(228, 225, 225);
                border-radius: 2px;
                background-color: rgb(218,36,97);
                color: white;
                cursor: pointer;
            }
        </style>
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
   
    <main>
    <div class="job-post-company pt-1 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <?php 
                    include("config.php");
                     $sql="select * from toadam where idlop=6";
                     $result=mysqli_query($connect,$sql);
                     while($row=mysqli_fetch_array($result))
                     { 
                        echo '<!-- Left Content -->
                        <div class="col-xl-7 col-lg-8">
                            <!-- job single -->
                            <div class="single-job-items mb-50 boder">
                                <div class="job-items">
                                    <div class="company-img company-img-details">
                                        <a href="#"><img src="'.$row["Img"].'" alt=""></a>
                                    </div>
                                    <div class="job-tittle">
                                        <a href="#">
                                            <p>Công ty cô cô cô</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                              <!-- job single End -->
                           
                            <div class="job-post-details">
                                <div class="post-details1 mb-50">
                                    <!-- Small Section Tittle -->
                                    <h2>'.$row["tenlop"].'</h2>
                                    <div class="small-section-tittle pt-30">
                                        <h4>Lớp tọa đàm </h4>
                                    </div>
                                    <textarea class="autosize" readonly>'.$row["chude"].'</textarea>
                                </div>
                               
                            </div>
    
                        </div>
                           <!-- Right Content -->
                           <div class="col-xl-4 col-lg-4">
                            <div class="post-details3  mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                   <h4>Tổng quan thông tin lớp tọa đàm</h4>
                                </div>
                                <ul>
                                  <li>Ngày đăng : <span>'.$row["ngaydang"].'</span></li>
                                  <li>Địa điểm : <span></span>'.$row["diadiem"].'</li>
                                  <li>Số lượng : <span>'.$row["soluong"].'</span></li>
                                  <li>Hạn đăng ký : <span>'.$row["handk"].'</span></li>
                                </ul>
                                <div class="apply-btn2">
                                    
                                </div>
                                    
                    
                                    <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Đăng ký <span style="color: rgb(218,36,97);"><?php echo $tenlop; ?></span> </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <!-- Thông tin cơ bản -->
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <form class="form form-vertical">
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group has-icon-left">
                                                                            <!-- <label for="mobile-id-icon"><i class="bi bi-paperclip"></i> Đính kèm CV</label> -->
                                                                            <!-- <div class="form-group inputDnD">
                                                                                <input type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" onchange="readUrl(this)" data-title="Chọn hoặc kéo thả CV vào đây"  name="uploadFile">
                                                                            </div> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-12">
                                                                        <div class="form-group has-icon-left">
                                                                            <label for="mobile-id-icon"><i class="bi bi-envelope"></i> Thư giới thiệu</label>
                                                                            <div class="form-group inputDnD">
                                                                                <textarea name="gioithieu" id="" cols="30" rows="5" class="form-control" placeholder="Viết giới thiệu ngắn gọn về bản thân (điểm mạnh, điểm yếu) và nêu rõ mong muốn, lý do làm việc tại công ty này. Đây là cách gây ấn tượng với nhà tuyển dụng nếu bạn có chưa có kinh nghiệm làm việc (hoặc CV không tốt)."></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
                                                                    <input type="text" style="display: none;" name="idbtd" value="6">
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btnExit" data-dismiss="modal">Đóng lại</button>
                                                            <input type="submit" class="btnDone" value="Đăng ký" name="submit"></input>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Kết thúc thông tin cơ bản -->
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            
                                        </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                            </div>
                            <div class="post-details4  mb-50">
                               <!-- Small Section Tittle -->
                               <div class="small-section-tittle">
                                   <h4>Thông tin nhà tuyển dụng</h4>
                               </div>
                                  <p><p>C&ocirc; c&ocirc;&nbsp;</p></p>
                                <ul>
                                    <li>Tên NTD: <span>Công ty cô cô cô</span></li>
                                    <li>Email: <span>'.$row["emailntd"].'</span></li>
                                    <li>SDT: <span>113115113</span></li>
                                    <li>Website: <span>https://mekong-connector.com/</span></li>
                                    <li>Địa chỉ: <span>20 Lê Duẩn TP VINH</span></li>
                                </ul>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Support Company End-->';
                     }
                    
                    ?>
            </div>
        </div>
        <!-- Support Company End-->

    </main>
    <?php include("../function/footer.php")?>


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
        <script>
            autosize();
            function autosize(){
                var text = $('.autosize');

                text.each(function(){
                    $(this).attr('rows',1);
                    resize($(this));
                });

                text.on('input', function(){
                    resize($(this));
                });
                
                function resize ($text) {
                    $text.css('height', 'auto');
                    $text.css('height', $text[0].scrollHeight+'px');
                }
            }
        </script>
        <script>
            function readUrl(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = (e) => {
                let imgData = e.target.result;
                let imgName = input.files[0].name;
                input.setAttribute("data-title", imgName);
                console.log(e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
        
    </body>
</html>