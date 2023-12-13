<?php
    if(isset($_GET["active"]))
        $active= $_GET["active"];
    else
        $active="";
    $activeDashboard="";
    $activeSinhVien="";
    $activeNhaTuyenDung="";
    $activeNguoiDung="";
    $activeBaiDang="";
    if($active==="dashboard"||$active=="")
    {
        $activeDashboard="active";
    }
    if($active==="nhatuyendung"){
        $activeNhaTuyenDung="active";
    }
    if($active==="sinhvien"){
        $activeSinhVien="active";
    }
    if($active==="nguoidung"){
        $activeNguoiDung="active";
    }
    if($active==="baidang"){
        $activeBaiDang="active";
    }
    echo "
        <div id='sidebar' class='active'>
            <div class='sidebar-wrapper active'>
                <div class='sidebar-header'>
                    <div class='d-flex justify-content-between'>
                        <div>
                            <a href='index.php'>VIEC LAM 24H</a>
                        </div>
                        <div class='toggler'>
                            <a href='#' class='sidebar-hide d-xl-none d-block'><i class='bi bi-x bi-middle'></i></a>
                        </div>
                    </div>
                </div>
                <div class='sidebar-menu'>
                    <ul class='menu'>
                        <li class='sidebar-title'>Menu</li>
                        
                        <li class='sidebar-item  $activeDashboard'>
                            <a href='index.php' class='sidebar-link'>
                                <i class='bi bi-grid-fill'></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class='sidebar-item $activeSinhVien '>
                            <a href='../view-admin/quantri-sinhvien.php?active=sinhvien' class='sidebar-link'>
                                <i class='bi bi-person-plus-fill'></i>
                                <span>Sinh viên</span>
                            </a>
                        </li>

                        <li class='sidebar-item $activeNhaTuyenDung'>
                            <a href='../view-admin/quantri-nhatuyendung.php?active=nhatuyendung' class='sidebar-link'>
                                <i class='bi bi-person-lines-fill'></i>
                                <span>Nhà tuyển dụng</span>
                            </a>
                        </li>

                        <li class='sidebar-item $activeNguoiDung has-sub'>
                            <a href='#' class='sidebar-link'>
                                <i class='bi bi-person-badge-fill'></i>
                                <span>Quản lý người dùng</span>
                            </a>
                            <ul class='submenu'>
                                <li class='submenu-item '>
                                    <a href='../view-admin/quantri-nguoidung.php?active=nguoidung'>Người dùng hệ thống</a>
                                </li>
                                <li class='submenu-item '>
                                    <a href='../view-admin/quantri-pheduyetnguoidung.php?active=nguoidung'>Phê duyệt người dùng</a>
                                </li>
                            </ul>
                        </li>

                     

                        <li class='sidebar-item '>
                            <a href='#' class='sidebar-link'>
                                <i class='bi bi-question-square'></i>
                                <span>Khảo sát hệ thống</span>
                            </a>
                        </li>

                        <li class='sidebar-item '>
                            <a href='../view/index.php' class='sidebar-link'>
                                <i class='bi bi-box-arrow-left'></i>
                                <span>Về trang chủ</span>
                            </a>
                        </li>

                        <li class='sidebar-item '>
                            <a href='../function/xulydangnhap.php?action=logout' class='sidebar-link'>
                                <i class='bi bi-box-arrow-left'></i>
                                <span>Đăng xuất</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class='sidebar-toggler btn x'><i data-feather='x'></i></button>
            </div>
        </div>
    ";
?>