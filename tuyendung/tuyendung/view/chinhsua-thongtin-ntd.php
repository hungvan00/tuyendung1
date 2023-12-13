<?php require_once("../function/helpDatabase.php");
    $user="";
    if($_SESSION["login"])
        $user=$_SESSION["login"];
    $email=$user[0];
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Việc làm 24h | Home </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <script>
            tinymce.init({
            selector: 'textarea#editor',
            menubar: false
            });
    </script>
   </head>
   <style>
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
        body{
            background: #f7f7ff;
            margin-top:20px;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }
        .me-2 {
            margin-right: .5rem!important;
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
   <body>
       <?php
            $cty=laythongtinNTD($email);
            $tencty=$cty[0]["tencty"];
            $sdt=$cty[0]["sdt"];
            $diachiweb=$cty[0]["diachiweb"];
            $diachicty=$cty[0]["diachicty"];
            $gioithieucty=$cty[0]["gioithieucty"];
            $logocty=$cty[0]["logocty"];
       ?>
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
    <main>
    <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
                                <?php $hinh="../img/".$logocty; ?>
								<img src="<?php echo $hinh; ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?php echo $tencty; ?></h4>
									<a href="#" class="btn" data-toggle="modal" data-target="#myModal">Đổi ảnh đại diện</a>
                                     <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <!-- Thông tin cơ bản -->
                                        <div class="card">
                                            <div class="card-content">
                                                <h4>Cập nhật logo công ty</h4>
                                                <div class="card-body">
                                                    <form class="form form-vertical" action="../function/doianhdaidien.php" method="post" enctype="multipart/form-data">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="mobile-id-icon"><i class="bi bi-paperclip"></i> Chọn logo</label>
                                                                        <div class="form-group inputDnD">
                                                                            <input type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" onchange="readUrl(this)" data-title="Chọn Logo (kích thước 85x85 pixel)"  name="uploadFile">
                                                                        </div>
                                                                        <input type="text" name="email" value="<?php echo $email; ?>" style="display: none;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btnExit" data-dismiss="modal">Đóng lại</button>
                                                        <input type="submit" class="btnDone" value="Lưu" name="submit"></input>
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
							</div>
							<hr class="my-4">
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
                            <form action="../function/sua-nhatuyendungV2.php" method="post">
							<div class="row mb-3"> 
								<div class="col-sm-3">
									<h6 class="mb-0">Tên công ty</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $tencty; ?>" name="tencty">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $email; ?>" name="emailcty" readonly>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Số điện thoại</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $sdt; ?>" name="sdt">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Địa chỉ website</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $diachiweb; ?>" name="diachiweb">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Địa chỉ công ty</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $diachicty; ?>" name="diachicty">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Giới thiệu công ty</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                    <textarea id="editor" name="gioithieucty"> <?php echo $gioithieucty; ?></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-primary px-4" value="Cập nhật" name="submit">
								</div>
							</div>
                            </form>
						</div>
					</div>
					<div class="row">
						
					</div>
				</div>
			</div>
		</div>
	</div>
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
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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