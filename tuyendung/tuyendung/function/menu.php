<?php
    require_once ("helpDatabase.php");
    echo '
    <header>
        <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="../img/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php">Trang chủ</a></li>
                                            <li><a href="list_job.php">Thực tập </a></li>
                                            <li><a href="toadam.php">Tọa đàm </a></li>
                                            <li><a href="cv-template.php">Mẫu CV</a></li>
                                            <li><a href="danhsach-congty.php">Công ty</a></li>
                                        </ul>
                                    </nav>
                                </div> ';
                                xulydangnhap();
                            echo'   
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </header>
    ';
   
?>