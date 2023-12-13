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
        $sql="UPDATE sinhvien SET mssv='$mssv',hoten=N'$hoten',nganhhoc=N'$nganh',ngaysinh='$ngaysinh',noisinh=N'$noisinh',sdt='$sdt',cmnd='$cmnd',namnhaphoc='$namnhaphoc' WHERE emailsv='$email'";
        execute($sql);
        header("location: ../view-admin/quantri-sinhvien.php?active=sinhvien");
    }
?>