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
        
        $sql="UPDATE nhatuyendung SET tencty='$tencty',sdt='$sdt',diachiweb='$diachiweb',diachicty='$diachicty',gioithieucty='$gioithieucty' WHERE emailcty='$emailcty'";
        execute($sql);
        echo '
        <script>
            alert("Cập nhật thông tin thành công");
            window.location.href="'. $_SERVER['HTTP_REFERER'].'";
        </script>
        ';
        
    }
?>