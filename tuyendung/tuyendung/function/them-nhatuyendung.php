<?php 
    require_once('helpDatabase.php');
    if(isset($_POST['submit'])){
        $emailcty=$_POST["emailcty"];
        $tencty=$_POST["tencty"];
        $sdt=$_POST["sdt"];
        $diachiweb=$_POST["diachiweb"];
        $diachicty=$_POST["diachicty"];
        $gioithieucty=$_POST["gioithieucty"];
        $hinh="";
        $sql="insert into nhatuyendung values('$emailcty','$tencty','$sdt','$diachiweb','$diachicty','$gioithieucty','$hinh','$hinh')";
        execute($sql);
        $insertDangNhap="insert into dangnhapnhatuyendung values('$emailcty','12345','nhatuyendung','1')";
        execute($insertDangNhap);
        header("location: ../view-admin/quantri-nhatuyendung.php?active=nhatuyendung");
    }
?>