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
                            <h3>Quản lý nhà tuyển dụng</h3>
                            <p class="text-subtitle text-muted">Xem thông tin nhà tuyển dụng</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">nhà tuyển dụng</li>
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
                                <a href="them-nhatuyendung.php?active=nhatuyendung">
                                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                    +Thêm nhà tuyển dụng
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Tên công ty</th>
                                        <th>Email</th>
                                        <th>SDT</th>
                                        <th>Địa chỉ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql='SELECT * FROM nhatuyendung'; 
                                    $nhatuyendungList=executeResult($sql);
                                    foreach ($nhatuyendungList as $std) {
                                        $tencty=$std['tencty'];
                                        $emailcty=$std['emailcty'];
                                        $sdt=$std['sdt'];
                                        $diachicty=$std['diachicty'];
                                        echo '
                                        <tr>
                                            <td>'.$tencty.'</td>
                                            <td>'.$emailcty.'</td>
                                            <td>'.$sdt.'</td>
                                            <td>'.$diachicty.'</td>
                                            <td>
                                                <a href="quantri-xemnhatuyendung.php?active=nhatuyendung&id='.$emailcty.'" title="Xem thông tin chi tiết">
                                                    <span class="bi bi-eye"></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="quantri-xemnhatuyendung.php?active=nhatuyendung&id='.$emailcty.'" title="Sửa thông tin chi tiết">
                                                    <span class="bi bi-pencil-square"></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="../function/xoa-nhatuyendung.php?id='.$emailcty.'" title="Xóa nhà tuyển dụng">
                                                    <span class="bi bi-person-x"></span>
                                                </a>
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