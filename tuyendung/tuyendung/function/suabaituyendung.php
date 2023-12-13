<?php 
    require_once('helpDatabase.php');
    if(isset($_POST['submit'])){
        $user="";
        if($_SESSION["login"])
            $user=$_SESSION["login"];
        $id=$_POST["id"];
        $email=$user[0];
        $quyen=$user[1];
        $tieude=$_POST["tieude"];
        $hannopcv=$_POST["hannopcv"];
        $diadiemlv=$_POST["diadiemlv"];
        $mucluong=$_POST["mucluong"];
        $soluongtuyen=$_POST["soluongtuyen"];
        $hinhthuclamviec=$_POST["hinhthuclamviec"];
        $gioitinh=$_POST["gioitinh"];
        $kinhnghiem=$_POST["kinhnghiem"];
        $mota=$_POST["mota"];
        $yeucau=$_POST["yeucau"];
        $quyenloi=$_POST["quyenloi"];
        $sql="update baidang set tieude='$tieude',hannopcv='$hannopcv',diadiemlv='$diadiemlv',mucluong='$mucluong',soluongtuyen='$soluongtuyen',hinhthuclamviec='$hinhthuclamviec',gioitinh='$gioitinh',kinhnghiem='$kinhnghiem',mota=N'$mota',yeucau=N'$yeucau',quyenloi=N'$quyenloi' where id='$id'";
        execute($sql);
        echo '
            <script>
                alert("Sửa bài tuyển dụng thành công");
                window.location.href="'. $_SERVER['HTTP_REFERER'].'";
            </script>
        ';
        // header("location: ../view-admin/quantri-nguoidung.php?active=nguoidung");
    }
?>