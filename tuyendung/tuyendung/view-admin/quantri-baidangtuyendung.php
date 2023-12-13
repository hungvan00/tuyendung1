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
                            <h3>Quản lý bài tuyển dụng</h3>
                            <p class="text-subtitle text-muted">Xem thông tin bài tuyển dụng</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">bài tuyển dụng</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <div class="left">Database</div>
                            
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <th>Ngày đăng</th>
                                        <th>Hết hạn</th>
                                        <th>Công ty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql='SELECT * FROM baidang'; 
                                    $baidanglist=executeResult($sql);
                                    foreach ($baidanglist as $std) {
                                        $id=$std['id'];
                                        $tieude=$std['tieude'];
                                        $ngaydang=$std['ngaydang'];
                                        $hannopcv=$std['hannopcv'];
                                        $congty=laytenNhaTuyenDung($std['emailcty']);
                                        $diadiemlv=$std["diadiemlv"];
                                        $mucluong=$std["mucluong"];
                                        $soluongtuyen=$std["soluongtuyen"];
                                        $hinhthuclamviec=$std["hinhthuclamviec"];
                                        $gioitinh=$std["gioitinh"];
                                        $kinhnghiem=$std["kinhnghiem"];
                                        $mota=$std["mota"];
                                        $yeucau=$std["yeucau"];
                                        $quyenloi=$std["quyenloi"];
                                        $listCV=getListCv($id);
                                        echo '
                                        <tr>
                                            <td>'.$tieude.'</td>
                                            <td>'.$ngaydang.'</td>
                                            <td>'.$hannopcv.'</td>
                                            <td>'.$congty.'</td>
                                            <td>
                                                <a href="#" title="Xem thông tin chi tiết" data-bs-toggle="modal" data-bs-target="#xlarge'.$id.'">
                                                    <span class="bi bi-eye"></span>
                                                </a>
                                                <!--Extra Large Modal -->
                                                <div class="modal fade text-left w-100" id="xlarge'.$id.'" tabindex="-1"
                                                    role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel16">Xem chi tiết bài đăng</h4>
                                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <!-- // Basic multiple Column Form section start -->
                                                            <section id="multiple-column-form">
                                                                <div class="row match-height">
                                                                    <div class="col-12">
                                                                        <div class="card">
                                                                            <div class="card-content">
                                                                                <div class="card-body">
                                                                                    <form class="form" method="post" action="#">
                                                                                        <div>
                                                                                            <h5>Tổng quan</h5>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 col-12">
                                                                                                <div class="form-group has-icon-left">
                                                                                                    <label >Tiêu đề</label>
                                                                                                    <div class="position-relative">
                                                                                                        <input type="text" class="form-control" name="tieude" value="'.$tieude.'">
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
                                                                                                        <input type="date" class="form-control" name="hannopcv" value="'.$hannopcv.'">
                                                                                                        <div class="form-control-icon">
                                                                                                            <i class="bi bi-hourglass-split"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 col-12">
                                                                                                <div class="form-group has-icon-left">
                                                                                                    <label>Địa điểm làm việc</label>
                                                                                                    <div class="position-relative">
                                                                                                        <input type="text" class="form-control" name="diadiemlv" value="'.$diadiemlv.'">
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
                                                                                                        <input type="text" class="form-control" name="mucluong" value="'.$mucluong.'">
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
                                                                                                        <input type="number" class="form-control" name="soluongtuyen" min="0" value="'.$soluongtuyen.'">
                                                                                                        <div class="form-control-icon">
                                                                                                            <i class="bi bi-list-ol"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 col-12">
                                                                                                <div class="form-group">
                                                                                                    <label>Hình thức làm việc</label>
                                                                                                    <div class="position-relative">
                                                                                                        <input type="text" class="form-control" name="mucluong" value="'.$hinhthuclamviec.'">
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
                                                                                                        <input type="text" class="form-control" name="mucluong" value="'.$gioitinh.'">
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
                                                                                                        <input type="text" class="form-control" name="mucluong" value="'.$kinhnghiem.'">
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
                                                                                                            <textarea class="form-control" name="mota" rows="5">'.$mota.'</textarea>
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
                                                                                                            <textarea class="form-control" name="yeucau" rows="5">'.$yeucau.'</textarea>
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
                                                                                                            <textarea class="form-control" name="quyenloi" rows="5">'.$quyenloi.'</textarea>
                                                                                                        </div>
                                                                                                        <div class="form-control-icon">
                                                                                                            <i class="bi bi-award"></i>
                                                                                                        </div>
                                                                                                    </div>
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
                                                            <!-- // Basic multiple Column Form section end -->
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Đóng</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- // Kết thúc xem modal chi tiết bài đăng -->
                                            </td>
                                            <td>
                                                <a href="#" title="Xem danh sách sinh viên" data-bs-toggle="modal" data-bs-target="#xlarge1'.$id.'">
                                                    <span class="bi bi-person-lines-fill"></span>
                                                </a>
                                                <div class="modal fade text-left w-100" id="xlarge1'.$id.'" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel16">Xem danh sách sinh viên</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <!-- // Basic multiple Column Form section start -->
                                                        <section id="multiple-column-form">
                                                            <div class="row match-height">
                                                                <div class="col-12">
                                                                    <div class="card">
                                                                        <div class="card-content">
                                                                            <div class="card-body">';
                                                                                    if($listCV!=0){
                                                                                        foreach($listCV as $std8){
                                                                                            $file="../file-cv/".$std8["filecv"];
                                                                                            $ten=layten($std8["emailsinhvien"]);
                                                                                            echo'
                                                                                            <div class="list-group">
                                                                                                <a href="#" class="list-group-item list-group-item-action">
                                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                                        <h5 class="mb-1">'.$ten.'</h5>
                                                                                                        <small>'.$std8["naynopcv"].'</small>
                                                                                                    </div>
                                                                                                    <p class="mb-1">
                                                                                                        '.$std8["gioithieu"].'
                                                                                                    </p>
                                                                                                    <small><a href="'.$file.'" class="list-group-item" download>File CV '.$std8["filecv"].'</a></small>
                                                                                                </a>
                                                                                            </div>
                                                                                            ';
                                                                                        }
                                                                                    }
                                                                                    else
                                                                                    echo'<h5 class="mb-1">Chưa có ứng viên nào ứng tuyển</h5>';
                                                                                    echo'
                                                                                    </div>
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
                                            </td>
                                            <td>
                                                <a href="../function/xoabaituyendung.php?id='.$id.'" title="Xóa bài đăng">
                                                    <span class="bi bi-calendar2-x"></span>
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