<?php 
    require_once('helpDatabase.php');
    if(isset($_POST['submit'])){
        $email=$_POST["email"];
        $mssv=$_POST["mssv"];
        $nganh=$_POST["nganh"];
        $hoten=$_POST["hoten"];
        $ngaysinh=$_POST["ngaysinh"];
        $noisinh=$_POST["noisinh"];
        $sdt=$_POST["sdt"];
        $cmnd=$_POST["cmnd"];
        $namnhaphoc=$_POST["namnhaphoc"];
        $sql="insert into sinhvien values('$email','$mssv','$hoten','$nganh','$ngaysinh','$noisinh','$sdt','$cmnd','$namnhaphoc','null')";
        execute($sql);
        //matkhau matdinh 12345
        $insertDangNhap="insert into dangnhapsinhvien values('$email','12345','sinhvien','1')";
        execute($insertDangNhap);
        header("location: ../view-admin/quantri-sinhvien.php?active=sinhvien");
    }
?>