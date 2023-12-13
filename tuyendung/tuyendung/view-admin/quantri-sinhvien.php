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
                            <h3>Quản lý sinh viên</h3>
                            <p class="text-subtitle text-muted">Xem thông tin sinh viên</p>
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
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <div class="left">Database</div>
                            <div class="right">
                                <a href="them-sinhvien.php?active=sinhvien">
                                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                    +Thêm sinh viên
                                    </button>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#default">
                                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                    Import sinh viên
                                    </button>
                                </a>
                                    <!--Basic Modal -->
                                <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Import sinh viên</h5>
                                                <button type="button" class="close rounded-pill"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form form-vertical" action="../function/import-sv.php" method="post" enctype="multipart/form-data">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group has-icon-left">
                                                                    <label for="mobile-id-icon"><i class="bi bi-paperclip"></i> Chọn hoặc kéo thả file</label>
                                                                    <div class="form-group inputDnD">
                                                                        <input type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" onchange="readUrl(this)" data-title="Chọn file"  name="file">
                                                                    </div>
                                                                    <label for="">Nếu chưa có file mẫu</label>
                                                                    <a href="../file-cv/importfile.xlsx">
                                                                        <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                                        Tải tại đây
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Thoát</span>
                                                </button>
                                                <input type="submit" value="Xác nhận" name="submit" class="btn btn-primary ml-1">
                                                
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Họ tên</th>
                                        <th>MSSV</th>
                                        <th>Chuyên ngành</th>
                                        <th>Email</th>
                                        <th>SDT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql='SELECT * FROM sinhvien'; 
                                    $sinvienlist=executeResult($sql);
                                    foreach ($sinvienlist as $std) {
                                        $hoten=$std['hoten'];
                                        $mssv=$std['mssv'];
                                        $nganhhoc=$std['nganhhoc'];
                                        $emailsv=$std['emailsv'];
                                        $sdt=$std['sdt'];
                                        echo '
                                        <tr>
                                            <td>'.$hoten.'</td>
                                            <td>'.$mssv.'</td>
                                            <td>'.$nganhhoc.'</td>
                                            <td>'.$emailsv.'</td>
                                            <td>'.$sdt.'</td>
                                            <td>
                                                <a href="quantri-xemsinhvien.php?active=sinhvien&id='.$emailsv.'" title="Xem thông tin chi tiết">
                                                    <span class="bi bi-eye"></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="quantri-xemsinhvien.php?active=sinhvien&id='.$emailsv.'" title="Sửa thông tin chi tiết">
                                                    <span class="bi bi-pencil-square"></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="../function/xoa-sinhvien.php?id='.$emailsv.'" title="Xóa sinh viên">
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
                        <p>2022 © 4056Studio</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
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