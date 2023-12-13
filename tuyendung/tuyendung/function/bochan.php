<?php 
    require_once('helpDatabase.php');
    $quyendangnhap=$_GET["quyen"];
    $email=$_GET["id"];
    if($quyendangnhap==="sinhvien"){
        $sql="UPDATE dangnhapsinhvien SET active='1' WHERE emailsv='$email'";
        execute($sql);
        header("location: ../view-admin/quantri-nguoidung.php?active=nguoidung");
    }
    if($quyendangnhap==="nhatuyendung"){
        $sql="UPDATE dangnhapnhatuyendung SET active='1' WHERE emailcty='$email'";
        execute($sql);
        header("location: ../view-admin/quantri-nguoidung.php?active=nguoidung");
    }
    if($quyendangnhap==="admin"){
        $sql="UPDATE admin SET active='1' WHERE email='$email'";
        execute($sql);
        header("location: ../view-admin/quantri-nguoidung.php?active=nguoidung");
    }
?>