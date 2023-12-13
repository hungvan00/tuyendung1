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
        if ($_FILES['uploadFile']['name'] != NULL) {
        // Kiểm tra file up lên có phải là ảnh không
            if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
                // Nếu là ảnh tiến hành code upload
                $path = "../img/"; // Ảnh sẽ lưu vào thư mục images
                $tmp_name = $_FILES['uploadFile']['tmp_name'];
                $name = $_FILES['uploadFile']['name'];
                // Upload ảnh vào thư mục images
                move_uploaded_file($tmp_name, $path . $name);
                $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
                $hinh=$name;
            }
            $sql="UPDATE nhatuyendung SET tencty='$tencty',sdt='$sdt',diachiweb='$diachiweb',diachicty='$diachicty',gioithieucty='$gioithieucty' WHERE emailcty='$emailcty'";
            execute($sql);
            header("location: ../view-admin/quantri-nhatuyendung.php?active=nhatuyendung");
        }
        else{
            $sql="UPDATE nhatuyendung SET tencty='$tencty',sdt='$sdt',diachiweb='$diachiweb',diachicty='$diachicty',gioithieucty='$gioithieucty' WHERE emailcty='$emailcty'";
            execute($sql);
            header("location: ../view-admin/quantri-nhatuyendung.php?active=nhatuyendung");
        }
        
    }
?>