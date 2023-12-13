<?php
    require_once('../function/helpDatabase.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="app">
    <!-- import menu  -->
    <?php require_once("../function/leftmenu.php"); ?>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Sinh viên</h3>
                            <!-- <p class="text-subtitle text-muted">Multiple form layout you can use</p> -->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sinh viên</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <?php
                    $email=$_GET["id"];
                    $sql="SELECT * FROM sinhvien where emailsv='$email'"; 
                    $sinvienlist=executeResult($sql);
                    $mssv=$sinvienlist[0]["mssv"];
                    $hoten=$sinvienlist[0]["hoten"];
                    $nganhhoc=$sinvienlist[0]["nganhhoc"];
                    $ngaysinh=$sinvienlist[0]["ngaysinh"];
                    $noisinh=$sinvienlist[0]["noisinh"];
                    $sdt=$sinvienlist[0]["sdt"];
                    $cmnd=$sinvienlist[0]["cmnd"];
                    $namnhaphoc=$sinvienlist[0]["namnhaphoc"];
                ?>
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form xem/sửa thông tin sinh viên</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="../function/sua-sinhvien.php" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Họ tên</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="first-name-icon" name="hoten" value="<?php echo $hoten; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="mssv-icon">Mã số sinh viên</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="mssv-icon" name="mssv" value="<?php echo $mssv; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-key"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="khoa">Chuyên ngành</label>
                                                        <select class="form-select" id="khoa" name="nganh">
                                                            <option value="CÔNG NGHỆ THÔNG TIN">CÔNG NGHỆ THÔNG TIN</option>
                                                            <option value="AN TOÀN THÔNG TIN">AN TOÀN THÔNG TIN</option>
                                                            <option value="KỸ THUẬT HÓA HỌC">KỸ THUẬT HÓA HỌC</option>
                                                            <option value="CÔNG NGHỆ KỸ THUẬT CƠ ĐIỆN TỬ">CÔNG NGHỆ KỸ THUẬT CƠ ĐIỆN TỬ</option>
                                                            <option value="CÔNG NGHỆ KỸ THUẬT CƠ KHÍ">CÔNG NGHỆ KỸ THUẬT CƠ KHÍ</option>
                                                            <option value="CÔNG TÁC XÃ HỘI">CÔNG TÁC XÃ HỘI</option>
                                                            <option value="DU LỊCH">DU LỊCH</option>
                                                            <option value="SƯ PHẠM KỸ THUẬT CÔNG NGHIỆP">SƯ PHẠM KỸ THUẬT CÔNG NGHIỆP</option>
                                                            <option value="SƯ PHẠM CÔNG NGHỆ">SƯ PHẠM CÔNG NGHỆ</option>
                                                            <option value="THÚ Y">THÚ Y</option>
                                                            <option value="CÔNG NGHỆ THỰC PHẨM">CÔNG NGHỆ THỰC PHẨM</option>
                                                            <option value="KỸ THUẬT ĐIỆN">KỸ THUẬT ĐIỆN</option>
                                                            <option value="CNKT ĐIÊU KHIỂN VÀ TỰ ĐỘNG HÓA">CNKT ĐIÊU KHIỂN VÀ TỰ ĐỘNG HÓA</option>
                                                            <option value="CNKT ĐIỆN - ĐIỆN TỬ">CNKT ĐIỆN - ĐIỆN TỬ</option>
                                                            <option value="CÔNG NGHỆ KỸ THUẬT NHIỆT">CÔNG NGHỆ KỸ THUẬT NHIỆT</option>
                                                            <option value="CÔNG NGHỆ KỸ THUẬT ĐIỆN TỬ - VIỄN THÔNG">CÔNG NGHỆ KỸ THUẬT ĐIỆN TỬ - VIỄN THÔNG</option>
                                                            <option value="CÔNG NGHỆ KỸ THUẬT Ô TÔ">CÔNG NGHỆ KỸ THUẬT Ô TÔ</option>
                                                            <option value="CÔNG NGHỆ KỸ THUẬT GIAO THÔNG">CÔNG NGHỆ KỸ THUẬT GIAO THÔNG</option>
                                                            <option value="KINH TẾ">KINH TẾ</option>
                                                            <option value="LUẬT">LUẬT</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Email</label>
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control" id="email-id-icon" name="email" value="<?php echo $email; ?>" readonly>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="datepicker">Ngày sinh</label>
                                                        <input id="datepicker" width="" name="ngaysinh" value="<?php echo $ngaysinh; ?>"/>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="noisinh">Nơi sinh</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="noisinh" name="noisinh" value="<?php echo $noisinh; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-geo-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="mobile-id-icon">Số điện thoại</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="mobile-id-icon" name="sdt" value="<?php echo $sdt; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-phone"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="cmnd">CMND</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="cmnd" name="cmnd" value="<?php echo $cmnd; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-credit-card-2-front"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="namnh">Năm nhập học</label>
                                                            <div class="position-relative">
                                                                <input type="number" class="form-control" id="namnh" name="namnhaphoc" value="<?php echo $namnhaphoc; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-calendar-date"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" name="submit">Lưu lại</button>
                                                        <a href="quantri-sinhvien.php"><span class="btn btn-light-secondary me-1 mb-1">Trở về</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- import bootstrap, js -->
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        function selectElement(id, valueToSelect) {    
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }
        selectElement('khoa', '<?php echo $nganhhoc; ?>')
    </script>
</body>

</html>