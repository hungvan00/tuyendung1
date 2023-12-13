<?php 
    require_once('helpDatabase.php');
    $matkhau=$_GET["matkhau"];
    $email=$_GET["id"];
    $insertDangNhap="insert into dangnhapnhatuyendung values('$email','$matkhau','nhatuyendung','1')";
    execute($insertDangNhap);
    $updateDangNhap="update xetduyet set trangthaixd='1' where email='$email'";
    execute($updateDangNhap);
    header("location: ../view-admin/quantri-pheduyetnguoidung.php?active=nguoidung");
?>