
<?php
    require_once("helpDatabase.php");
    $user="";
    if($_SESSION["login"])
        $user=$_SESSION["login"];
    $email=$user[0];
    $quyen=$user[1];
    $ten=layten($email);
    $tenquyen="";
    if($quyen==="sinhvien"){
        $tenquyen="Sinh viên";  
    }
    if($quyen==="nhatuyendung"){
        $cty=laythongtinNTD($email);
        $tencty=$cty[0]["tencty"];
        $sdt=$cty[0]["sdt"];
        $diachiweb=$cty[0]["diachiweb"];
        $diachicty=$cty[0]["diachicty"];
        $gioithieucty=$cty[0]["gioithieucty"];
        $logocty=$cty[0]["logocty"];
        $hinh="../img/".$logocty;
        echo'
        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        
        <!-- job post company Start -->
        <div class="job-post-company pt-1 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50 boder">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="'.$hinh.'" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                        <h5 class="pt-25">'.$tencty.'</h5>
                                </div>
                            </div>
                        </div>
                        <h2 class="pb-25">Danh sách bài tuyển dụng của bạn</h2>
                          <!-- job single End -->
                       ';
                        $baidanglist=laythongtinBTD($email);
                        if($baidanglist!=0){
                            foreach ($baidanglist as $std2) {
                            echo' 
                            <div class="job-post-details boder nav-item dropdown">
                            <div class="nav-item dropdown">
                                <div class="post-details1">
                                    <!-- Small Section Tittle -->
                                    <div class="single-job-items mb-10">
                                        <div class="job-items">
                                            <div class="job-tittle job-tittle2">
                                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action" style="color:black;"">'.$std2["tieude"].'<b class="caret"></b></a>
                                            <div class="dropdown-menu">
                                                <a href="../view/view-job.php?idpost='.$std2["id"].'&emailcty='.$std2["emailcty"].'" class="dropdown-item"><i class="fa fa-user-o"></i><i class="bi bi-journal-code"></i>Xem bài tuyển dụng</a></a>
                                                <a href="../view/danhsach-ungvien.php?idpost='.$std2["id"].'" class="dropdown-item"><i class="fa fa-sliders"></i><i class="bi bi-person-lines-fill"></i> Xem danh sách ứng viên</a></a>
                                                <div class="dropdown-divider"></div>
                                                    <a href="../view/suabaituyendung.php?idpost='.$std2["id"].'" class="dropdown-item"><i class="bi bi-pencil-square"></i> Cập nhật bài tuyển dụng</a></a>
                                                <div class="dropdown-divider"></div>
                                                <a href="../function/xoabaituyendung.php?idpost='.$std2["id"].'" class="dropdown-item"><i class="bi bi-trash"></i>Xóa bài tuyển dụng</a></a>
                                            </div>
                                                <ul class="ml-20">
                                                    <li><i class="fas bi bi-calendar-check"></i>'.$std2["hinhthuclamviec"].'</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>'.$std2["diadiemlv"].'</li>
                                                    <li>'.$std2["mucluong"].'</li>
                                                </ul>
                                                <ul class="ml-20">
                                                    <li>Số lượng cần tuyển: '.$std2["soluongtuyen"].' </li>
                                                    <li>Số lượng CV ứng tuyển: '.laySoluongUngVienbyBaiDang($std2["id"]).' </li>
                                                    <li>Đã tuyển: '.laySoluongUngVienDaDuocDuyet($std2["id"]).' </li>
                                                    <li>Đã từ chối: '.laySoluongUngVienDaTuChoibyBaiDang($std2["id"]).' </li>';
                                                    $choxet=laySoluongUngVienbyBaiDang($std2["id"])-(laySoluongUngVienDaDuocDuyet($std2["id"])+laySoluongUngVienDaTuChoibyBaiDang($std2["id"]));
                                                echo'
                                                    <li>Chờ xét duyệt: '.$choxet.' </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            ';
                            }
                        }
                    echo'
                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4 pt-50">
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                               <div class="small-section-tittle">
                                   <h4>Thông tin công ty</h4>
                               </div>
                                  <span>Giới thiệu</span>
                                  <p>'.$gioithieucty.'</p>
                                  <span>Tên công ty </span>
                                  <li>'.$tencty.' </li>
                                  <span>Email </span>
                                  <li>'.$email.'</li>
                                  <span>SDT</span>
                                  <li>'.$sdt.'</li>
                                  <span>Website</span>
                                  <li>'.$diachiweb.'</li>
                                  <span>Địa chỉ </span>
                                  <li>'.$diachicty.'</li>
                         <div class="apply-btn2 pt-20">
                            <a href="../view/chinhsua-thongtin-ntd.php" class="bi bi-person-bounding-box btn2"> Chỉnh sửa thông tin</a>
                         </div>
                       </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->
        ';
    }
    elseif($quyen==="sinhvien"){
        $sv=getTTSinhVien($email);
        $mssv=$sv[0]["mssv"];
        $hoten=$sv[0]["hoten"];
        $nganhhoc=$sv[0]["nganhhoc"];
        $ngaysinh=$sv[0]["ngaysinh"];
        $noisinh=$sv[0]["noisinh"];
        $sdt=$sv[0]["sdt"];
        $cmnd=$sv[0]["cmnd"];
        $namnhaphoc=$sv[0]["namnhaphoc"];
        echo'
        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        
        <!-- job post company Start -->
        <div class="job-post-company pt-1 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->

                        <!-- Right Content -->
                        <div class="col-xl-4 col-lg-4 pt-50">
                            <div class="post-details4  mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Thông tin cá nhân</h4>
                                </div>
                                <ul>
                                    <li><span>Họ tên:</span> '.$hoten.'</li>
                                    <li><span>Số điện thoại:</span> '.$sdt.'</li>
                                    <li><span>Email:</span> '.$email.'</li>
                                    <li><span>SDT:</span> '.$sdt.'</li>
                                    <li><span>Ngành học:</span> '.$nganhhoc.'</li>
                                    <li><span>Ngày sinh:</span> '.$ngaysinh.'</li>
                                    <li><span>Nơi sinh:</span> '.$noisinh.'</li>
                                    <li><span>CMND/CCCD:</span> '.$cmnd.'</li>
                                    <li><span>Năm nhập học:</span> '.$namnhaphoc.'</li>
                                </ul>
                                <div class="apply-btn2 pt-20">
                                    <a href="../view/chinhsua-thongtin-sv.php" class="bi bi-person-bounding-box btn2"> Chỉnh sửa thông tin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- job post company End -->';
                
    }

?>