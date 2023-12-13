<?php 
    require_once('helpDatabase.php');
    if(isset($_POST['submit'])){
        $matkhau=$_POST["matkhau"];
        $emailcty=$_POST["emailcty"];
        $tencty=$_POST["tencty"];
        $sdt=$_POST["sdt"];
        $diachiweb=$_POST["diachiweb"];
        $diachicty=$_POST["diachicty"];
        $gioithieucty="";
        $hinh="";
        $sql="insert into nhatuyendung values('$emailcty','$tencty','$sdt','$diachiweb','$diachicty','$gioithieucty','$hinh','null')";
        execute($sql);
        $insertDangNhap="insert into xetduyet values('$emailcty','$matkhau',DATE(NOW()),'0')";
        execute($insertDangNhap);
        echo "Đăng kí tài khoản thành công !. Tài khoản của bạn sẽ được xét duyệt trong thời gian sớm nhất... "."\n";
        echo '<a href="../view/index.php">Về trang chủ</a>';
    }
?>