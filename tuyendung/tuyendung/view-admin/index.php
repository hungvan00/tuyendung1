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
</head>
<style>
    body {

        font-family: "Muli", sans-serif !important;
    }
</style>

<body>
    <div id="app">
        <!-- import menu  -->
        <?php
        require_once("../function/helpDatabase.php");
        $nhucautuyen = nhucautuyendung();
        $ungtuyen = ungtuyen();
        $duocduyet = duocduyet();
        $hieuxuat = number_format(($duocduyet / $nhucautuyen) * 100, 2, '.', ',');
        $tuchoi = tuchoi();
        $choduyet = $ungtuyen - ($duocduyet + $tuchoi);
        ?>
        <?php require_once("../function/leftmenu.php"); ?>
        <!-- code nội dung trang ở đây -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Thống kê hệ thống</h3>
            </div>

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Nhu cầu</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $nhucautuyen; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Ứng tuyển</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $ungtuyen; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Được duyệt</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $duocduyet; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Hiệu xuất</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo  $hieuxuat; ?> %</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Biểu đồ thống kê tuyển dụng</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="bar"></div>
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
    <script>
        var barOptions = {
            series: [{
                    name: "Nhu cầu tuyển dụng",
                    data: [<?php echo $nhucautuyen; ?>],
                },
                {
                    name: "Hồ sơ ứng tuyển",
                    data: [<?php echo $ungtuyen; ?>],
                },
                {
                    name: "Hồ sơ được duyệt",
                    data: [<?php echo $duocduyet; ?>],
                },
                {
                    name: "Hồ sơ bị từ chối",
                    data: [<?php echo $tuchoi; ?>],
                },
                {
                    name: "Hồ sơ chờ duyệt",
                    data: [<?php echo $choduyet; ?>],
                },
            ],
            chart: {
                type: "bar",
                height: 350,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "20%",
                    endingShape: "rounded",
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                show: true,
                width: 2,
                colors: ["transparent"],
            },
            xaxis: {
                categories: ["Ứng viên"],
            },
            yaxis: {
                title: {
                    text: "SL (CV)",
                },
            },
            fill: {
                opacity: 1,
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "" + val + " ứng viên";
                    },
                },
            },
        };
        var bar = new ApexCharts(document.querySelector("#bar"), barOptions);
        bar.render();
    </script>
</body>

</html>