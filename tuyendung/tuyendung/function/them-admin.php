<?php 
    require_once('helpDatabase.php');
    if(isset($_POST['submit'])){
        $email=$_POST["email"];
        $hoten=$_POST["hoten"];
        $matkhau=$_POST["matkhau"];
        $sql="insert into admin values('$email','$matkhau','$hoten','admin','1')";
        execute($sql);
        header("location: ../view-admin/quantri-nguoidung.php?active=nguoidung");
    }
?>