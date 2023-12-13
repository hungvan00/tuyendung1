<?php
    require_once ('config.php');
    session_start();
    function execute($sql) {
        $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
        mysqli_query($conn, $sql);
          mysqli_close($conn);
    }
  
    function executeResult($sql) {
        $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
        $resultset = mysqli_query($conn, $sql);
        $list      = [];
        while ($row = mysqli_fetch_array($resultset, 1)) {
            $list[] = $row;
        }
        //dong connection
        mysqli_close($conn);
        return $list;
    }
    function xulydangnhap(){
        $user="";
        if(isset($_SESSION['login'])){
            $user=$_SESSION['login'];
        }
        if(isset($_SESSION['login'])&&$user[1]==="admin"){
            echo'
            <div class="header-btn d-none f-right d-lg-block nav-item dropdown">
                <div class="nav-item dropdown">
				    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action" style="color:black;"> Xin chào: Admin !<b class="caret"></b></a>
				    <div class="dropdown-menu">
                        <a href="../view-admin/" class="dropdown-item"><i class="fa fa-user-o"></i> Vào trang quản trị</a></a></a>
					<div class="dropdown-divider"></div>
					    <a href="../function/dangxuat.php" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a></a>
				    </div>
			    </div>
            </div>
            ';
        }
        else if(isset($_SESSION['login'])&&$user[1]==="nhatuyendung"){
            echo'
            <div class="header-btn d-none f-right d-lg-block nav-item dropdown">
                <div class="nav-item dropdown">
				    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action" style="color:black;"> Xin chào: Nhà tuyển dụng !<b class="caret"></b></a>
				    <div class="dropdown-menu">
                        <a href="../view/taikhoancanhan.php" class="dropdown-item"><i class="fa fa-user-o"></i> Tài khoản</a></a>
                        <a href="../view/taobaituyendung.php" class="dropdown-item"><i class="fa fa-calendar-o"></i> Đăng bài tuyển dụng</a></a></a>
                        <a href="../view/danhsach-ungvien.php" class="dropdown-item"><i class="fa fa-calendar-o"></i> Danh sách ứng viên</a></a></a>
					<div class="dropdown-divider"></div>
					    <a href="../function/dangxuat.php" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a></a>
				    </div>
			    </div>
            </div>
            ';
        }
        else if(isset($_SESSION['login'])&&$user[1]==="sinhvien"){
            $hoten= explode(" ", layten($user[0]));
            $ten= $hoten[count($hoten)-1];
            echo'
            <div class="header-btn d-none f-right d-lg-block nav-item dropdown">
                <div class="nav-item dropdown">
				    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action" style="color:black;"> Xin chào: '.$ten.'! <b class="caret"></b></a>
				    <div class="dropdown-menu">
                        <a href="../view/taikhoancanhan.php" class="dropdown-item"><i class="fa fa-user-o"></i> Tài khoản</a></a></a>
					<div class="dropdown-divider"></div>
					    <a href="../function/dangxuat.php" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a></a>
				    </div>
			    </div>
            </div>
            <div class="header-btn d-none f-right d-lg-block nav-item dropdown">
                <div class="nav-item dropdown">
				    <a href="#" class="nav-link dropdown-toggle user-action" style="color:black;" data-toggle="modal" data-target="#myModal1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                    </svg> <sup>('.laysoluongtbao($user[0]).')</sup></a>
				<div class="modal" id="myModal1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5>Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        ';
                        $listtttt=getlistthongbao($user[0]);
                        if($listtttt!=0){
                        foreach($listtttt as $listtbao){
                        echo'
                        <!-- Modal body -->
                        <div class="modal-body">
                            <!-- Thông tin cơ bản -->
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" method="post" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                           <a>thông báo kết quả</a>
                                                            <p>'.$listtbao["noidung"].'<P>
                                                            <p>'.$listtbao["ngaytb"].'<P>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc thông tin cơ bản -->
                        </div>
                        ';
                        }
                        }
                        echo'
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            
                        </div>
                        
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
                    
			    </div>
            </div>
            ';
        }
        else{
            echo'
            <div class="header-btn d-none f-right d-lg-block">
                <a href="../view/dangkitaikhoan.php" class="btn head-btn1">Đăng kí</a>
                <a href="../view/dangnhap.php" class="btn head-btn2">Đăng nhập</a>
            </div>
            ';
        }
    }
    function getlistthongbao($emailsv){
        $sql="select *from thongbao where emailsv='$emailsv' ORDER BY ngaytb DESC;";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check;
        }
        else {
            return 0;
        }
    }
    function laysoluongtbao($emailsv){
        $sql="select *from thongbao where emailsv='$emailsv'";
        $check=executeResult($sql);
        return count($check);
    }
    function layten($email){
        $sql="select *from sinhvien where emailsv='$email'";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check[0]['hoten'];
        }
        return "Lỗi!";
    }
    function laytenNhaTuyenDung($email){
        $sql="select *from nhatuyendung where emailcty='$email'";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check[0]['tencty'];
        }
        return "Lỗi!";
    }
    function laythongtinNTD($email){
        $sql="select *from nhatuyendung where emailcty='$email'";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check;
        }
    }


    function laythongtinBTD($email){
        $sql="select *from baidang where emailcty='$email'";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check;
        }
        else {
            return 0;
        }
    }

    function getBTD($id){
        $sql="select *from baidang where id='$id'";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check;
        }
        else {
            return 0;
        }
    }
    function getTTSinhVien($id){
        $sql="select *from sinhvien where emailsv='$id'";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check;
        }
        else {
            return 0;
        }
    }
    function checkBTDCuaNTD($id){
        $sql="select *from baidang where id='$id'";
        $check=executeResult($sql);
        if(count($check)>=1){
            return true;
        }
        else {
            return false;
        }
    }
    function getListCv($id){
        $sql="select *from nopcv where idbaidang='$id'";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check;
        }
        else {
            return 0;
        }
    }
    function getAllNhaTuyenDung(){
        $sql="select *from nhatuyendung";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check;
        }
        else {
            return 0;
        }
    }
    function laySoluongUngVienDaDuocDuyet($id){
        $sql="select *from nopcv WHERE idbaidang='$id' and trangthaixetduyet ='Đạt yêu cầu tuyển dụng'";
        $check=executeResult($sql);
        return count($check);
    }
    function laySoluongUngVienbyBaiDang($id){
        $sql="select *from nopcv WHERE idbaidang='$id'";
        $check=executeResult($sql);
        return count($check);
    }
    function laySoluongUngVienDaTuChoibyBaiDang($id){
        $sql="select *from nopcv WHERE idbaidang='$id' and trangthaixetduyet ='Chưa đạt yêu cầu tuyển dụng'";
        $check=executeResult($sql);
        return count($check);
    }


    function nhucautuyendung(){
        $sql="SELECT SUM(soluongtuyen) as nhucautuyen FROM baidang";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check[0]["nhucautuyen"];
        }
        else {
            return 0;
        }
        
    }
    function ungtuyen(){
        $sql="SELECT count(*) as ungtuyen FROM nopcv";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check[0]["ungtuyen"];
        }
        else {
            return 0;
        }
    }
    function duocduyet(){
        $sql="SELECT count(id) as duocduyet FROM nopcv where trangthaixetduyet='Đạt yêu cầu tuyển dụng'";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check[0]["duocduyet"];
        }
        else {
            return 0;
        }
    }
    function tuchoi(){
        $sql="SELECT count(id) as tuchoi FROM nopcv where trangthaixetduyet='Chưa đạt yêu cầu tuyển dụng'";
        $check=executeResult($sql);
        if(count($check)>=1){
            return $check[0]["tuchoi"];
        }
        else {
            return 0;
        }
    }
?>