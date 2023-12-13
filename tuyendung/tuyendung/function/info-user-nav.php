
<?php 
    require_once("helpDatabase.php");
    $user="";
    if($_SESSION["login"])
        $user=$_SESSION["login"];
    $email=$user[0];
    $quyen=$user[1];
    $ten=layten($email);
    $explode_fullname = explode(" ", $ten);
    $last_name = $explode_fullname[count($explode_fullname) - 1];
    $tenquyen="";
?>    
<?php
    if($quyen==="sinhvien"){
        $tenquyen="Sinh viên";
        echo'
        <header class="mb-3" style="background-color: white; border: 1px solid; box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);">
        <nav class="navbar navbar-expand navbar-light ">
            <div class="container-fluid">
                <a href="index.php" class="burger-btn d-block">
                    <i class="bi bi-house-door fs-3"></i>
                    <!-- <img src="../img/logo.png" alt=""> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item dropdown me-0">
                            <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-bell bi-sub fs-4 text-gray-600"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <h6 class="dropdown-header">Thông báo</h6>
                                </li>
                                <li><a class="dropdown-item">Không có thông báo</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-menu d-flex">
                                <div class="user-name text-end me-3">
                                    <h6 class="mb-0 text-gray-600">'.$last_name.'</h6>
                                    <p class="mb-0 text-sm text-gray-600">Sinh viên</p>
                                </div>
                                <div class="user-img d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="assetss/images/faces/9.png">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <h6 class="dropdown-header">Xin chào, '.$last_name.'!</h6>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                    Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                    Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                    Wallet</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../function/xulydangnhap.php?action=logout"><i
                                        class="icon-mid bi bi-box-arrow-left me-2"></i> Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        </header>
        ';
    }
    if($quyen==="nhatuyendung"){
        $tenquyen="Nhà tuyển dụng";
        echo'
        <header class="mb-3" style="background-color: white; border: 1px solid; box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);">
        <nav class="navbar navbar-expand navbar-light ">
            <div class="container-fluid">
                <a href="index.php" class="burger-btn d-block">
                    <i class="bi bi-house-door fs-3"></i>
                    <!-- <img src="../img/logo.png" alt=""> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item me-0">
                            <a class="nav-link active " href="../view/taobaituyendung.php">
                                <i class="bi bi-clipboard-plus bi-sub fs-4 text-gray-600"></i>
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown me-0">
                            <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-bell bi-sub fs-4 text-gray-600"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <h6 class="dropdown-header">Thông báo</h6>
                                </li>
                                <li><a class="dropdown-item">Không có thông báo</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-menu d-flex">
                                <div class="user-name text-end me-3">
                                    <h6 class="mb-0 text-gray-600">Nhà tuyển dụng</h6>
                                </div>
                                <div class="user-img d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="assetss/images/faces/9.png">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <h6 class="dropdown-header">Xin chào !</h6>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                    Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                    Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                    Wallet</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../function/xulydangnhap.php?action=logout"><i
                                        class="icon-mid bi bi-box-arrow-left me-2"></i> Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        </header>
        ';
    }
?>