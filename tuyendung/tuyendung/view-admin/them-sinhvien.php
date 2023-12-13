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
    <!-- code nội dung trang ở đây -->
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
                            <h3>Thêm sinh viên</h3>
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

                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form thêm sinh viên</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="../function/them-sinhvien.php" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Họ tên</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="first-name-icon" name="hoten">
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
                                                                <input type="text" class="form-control" id="mssv-icon" name="mssv">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-key"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="khoa">Chuyên ngành</label>
                                                        <select class="form-select" id="khoa" name="nganh">
                                                            <option>CÔNG NGHỆ THÔNG TIN</option>
                                                            <option>AN TOÀN THÔNG TIN</option>
                                                            <option>KỸ THUẬT HÓA HỌC</option>
                                                            <option>CÔNG NGHỆ KỸ THUẬT CƠ ĐIỆN TỬ</option>
                                                            <option>CÔNG NGHỆ KỸ THUẬT CƠ KHÍ</option>
                                                            <option>CÔNG TÁC XÃ HỘI</option>
                                                            <option>DU LỊCH</option>
                                                            <option>CÔNG NGHỆ KỸ THUẬT CƠ ĐIỆN TỬ</option>
                                                            <option>SƯ PHẠM KỸ THUẬT CÔNG NGHIỆP</option>
                                                            <option>SƯ PHẠM CÔNG NGHỆ</option>
                                                            <option>THÚ Y</option>
                                                            <option>CÔNG NGHỆ THỰC PHẨM</option>
                                                            <option>KỸ THUẬT ĐIỆN</option>
                                                            <option>CNKT ĐIÊU KHIỂN VÀ TỰ ĐỘNG HÓA</option>
                                                            <option>CNKT ĐIỆN - ĐIỆN TỬ</option>
                                                            <option>CÔNG NGHỆ KỸ THUẬT NHIỆT</option>
                                                            <option>CÔNG NGHỆ KỸ THUẬT ĐIỆN TỬ - VIỄN THÔNG</option>
                                                            <option>CÔNG NGHỆ KỸ THUẬT Ô TÔ</option>
                                                            <option>CÔNG NGHỆ KỸ THUẬT GIAO THÔNG</option>
                                                            <option>KINH TẾ</option>
                                                            <option>LUẬT</option>
                                                            <option>ÔNG NGHỆ SINH HỌC </option>
                                                            <option>KỸ THUẬT CƠ KHÍ ĐỘNG LỰC</option>
                                                            <option>CÔNG NGHỆ SAU THU HOẠCH</option>
                                                            <option>QUẢN TRỊ DỊCH VỤ DU LỊCH VÀ LỮ HÀNH</option>
                                                            <option>CÔNG NGHỆ KỸ THUẬT CÔNG TRÌNH XÂY DỰNG</option>
                                                            <option>KHOA HỌC MÁY TÍNH</option>
                                                            <option>QUẢN LÝ GIÁO DỤC</option>
                                                            <option>GIÁO DỤC HỌC</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Email</label>
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control" id="email-id-icon" name="email">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="datepicker">Ngày sinh</label>
                                                        <input id="datepicker" width="" name="ngaysinh" />
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="noisinh">Nơi sinh</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" id="noisinh" name="noisinh">
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
                                                                <input type="text" class="form-control" id="mobile-id-icon" name="sdt">
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
                                                                <input type="text" class="form-control" id="cmnd" name="cmnd">
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
                                                                <input type="number" class="form-control" id="namnh" name="namnhaphoc">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-calendar-date"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" name="submit">Lưu lại</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Đặt lại</button>
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
    </script>
</body>

</html>