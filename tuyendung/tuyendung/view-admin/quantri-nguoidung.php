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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <!-- định dạng table database -->
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
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
                            <h3>Quản lý người dùng</h3>
                            <p class="text-subtitle text-muted">Xem thông tin người dùng</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">người dùng</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <div class="left">Database</div>
                            <div class="right">
                                <a href="themadmin.php?active=nguoidung">
                                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                    +Thêm tài khoản admin
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Tên đăng nhập</th>
                                        <th>Mật khẩu</th>
                                        <th>Quyền đăng nhập</th>
                                        <th>Trạng thái đăng nhập</th>
                                        <th>Reset</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql='SELECT * FROM dangnhapsinhvien'; 
                                    $dangnhapsvList=executeResult($sql);
                                    foreach ($dangnhapsvList as $std) {
                                        $emailsv=$std['emailsv'];
                                        $matkhau=$std['matkhau'];
                                        $quyen=$std['quyen'];
                                        $quyendn="";
                                        if($quyen==="sinhvien"){
                                            $quyendn="Sinh viên";
                                        }
                                        else if($quyen==="nhatuyendung"){
                                            $quyendn="Nhà tuyển dụng";
                                        }
                                        else if($quyen==="admin"){
                                            $quyendn="Quản trị viên";
                                        }
                                        $active=$std['active'];
                                        if($active=="1"){
                                            $trangthai="Được phép truy cập";
                                        }
                                        else{
                                            $trangthai="Không được truy cập";
                                        }
                                        echo '
                                        <tr>
                                            <td>'.$emailsv.'</td>
                                            <td>'.$matkhau.'</td>
                                            <td>'. $quyendn.'</td>
                                            <td>'.$trangthai.'</td>
                                            <td>
                                                <a href="../function/resetmk.php?quyen=sinhvien&id='.$emailsv.'" title="Reset mật khẩu">
                                                    <span class="">Đặt lại mật khẩu</span>
                                                </a>
                                            </td>
                                            <td>';
                                        if($active=="1"){
                                            echo'
                                            <a href="../function/channguoidung.php?quyen=sinhvien&id='.$emailsv.'" title="Chặn người dùng">
                                                <span class="">Chặn</span>
                                            </a>';
                                        }
                                        else if($active=="0"){
                                            echo'
                                            <a href="../function/bochan.php?quyen=sinhvien&id='.$emailsv.'" title="Chặn người dùng">
                                                <span class="">Bỏ chặn</span>
                                            </a>';
                                        }
                                        echo'
                                            </td>
                                            <td>
                                                <a href="quantri-xemsinhvien.php?active=sinhvien&id='.$emailsv.'" title="Xem thông tin chi tiết">
                                                    <span class="">Xem thông tin</span>
                                                </a>
                                            </td>
                                        </tr>
                                        ';
                                    }
                                ?> 
                                <?php
                                    $sql='SELECT * FROM dangnhapnhatuyendung'; 
                                    $dangnhapsvList=executeResult($sql);
                                    foreach ($dangnhapsvList as $std) {
                                        $emailcty=$std['emailcty'];
                                        $matkhau=$std['matkhau'];
                                        $quyen=$std['quyen'];
                                        $quyendn="";
                                        if($quyen==="sinhvien"){
                                            $quyendn="Sinh viên";
                                        }
                                        else if($quyen==="nhatuyendung"){
                                            $quyendn="Nhà tuyển dụng";
                                        }
                                        else if($quyen==="admin"){
                                            $quyendn="Quản trị viên";
                                        }
                                        $active=$std['active'];
                                        if($active=="1"){
                                            $trangthai="Được phép truy cập";
                                        }
                                        else{
                                            $trangthai="Không được truy cập";
                                        }
                                        echo '
                                        <tr>
                                            <td>'.$emailcty.'</td>
                                            <td>'.$matkhau.'</td>
                                            <td>'. $quyendn.'</td>
                                            <td>'.$trangthai.'</td>
                                            <td>
                                                <a href="../function/resetmk.php?quyen=nhatuyendung&id='.$emailcty.'" title="Reset mật khẩu">
                                                    <span class="">Đặt lại mật khẩu</span>
                                                </a>
                                            </td>
                                            <td>';
                                            if($active=="1"){
                                                echo'
                                                <a href="../function/channguoidung.php?quyen=nhatuyendung&id='.$emailcty.'" title="Chặn người dùng">
                                                    <span class="">Chặn</span>
                                                </a>';
                                            }
                                            else if($active=="0"){
                                                echo'
                                                <a href="../function/bochan.php?quyen=nhatuyendung&id='.$emailcty.'" title="Chặn người dùng">
                                                    <span class="">Bỏ chặn</span>
                                                </a>';
                                            }
                                            echo'
                                            </td>
                                            <td>
                                                <a href="quantri-xemnhatuyendung.php?id='.$emailcty.'&active=nhatuyendung" title="Xem thông tin chi tiết">
                                                    <span class="">Xem thông tin</span>
                                                </a>
                                            </td>
                                        </tr>
                                        ';
                                    }
                                ?> 
                                <?php
                                    $sql='SELECT * FROM admin'; 
                                    $dangnhapsvList=executeResult($sql);
                                    foreach ($dangnhapsvList as $std) {
                                        $email=$std['email'];
                                        $matkhau=$std['matkhau'];
                                        $quyen=$std['quyen'];
                                        $quyendn="";
                                        if($quyen==="sinhvien"){
                                            $quyendn="Sinh viên";
                                        }
                                        else if($quyen==="nhatuyendung"){
                                            $quyendn="Nhà tuyển dụng";
                                        }
                                        else if($quyen==="admin"){
                                            $quyendn="Quản trị viên";
                                        }
                                        $active=$std['active'];
                                        if($active=="1"){
                                            $trangthai="Được phép truy cập";
                                        }
                                        else{
                                            $trangthai="Không được truy cập";
                                        }
                                        echo '
                                        <tr>
                                            <td>'.$email.'</td>
                                            <td>'.$matkhau.'</td>
                                            <td>'. $quyendn.'</td>
                                            <td>'.$trangthai.'</td>
                                            <td>
                                                <a href="../function/resetmk.php?quyen=admin&id='.$email.'" title="Reset mật khẩu">
                                                    <span class="">Đặt lại mật khẩu</span>
                                                </a>
                                            </td>
                                            <td>';
                                            if($active=="1"){
                                                echo'
                                                <a href="../function/channguoidung.php?quyen=admin&id='.$email.'" title="Chặn người dùng">
                                                    <span class="">Chặn</span>
                                                </a>';
                                            }
                                            else if($active=="0"){
                                                echo'
                                                <a href="../function/bochan.php?quyen=admin&id='.$email.'" title="Chặn người dùng">
                                                    <span class="">Bỏ chặn</span>
                                                </a>';
                                            }
                                            echo'
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        ';
                                    }
                                ?>  
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 © 4056Studio</p>
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
    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <!-- Định dạng Datatable -->
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    
</body>

</html>