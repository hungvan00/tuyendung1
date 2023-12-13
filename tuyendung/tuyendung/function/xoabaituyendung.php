<?php
    require_once('helpDatabase.php');
    $user="";
    if($_SESSION["login"])
        $user=$_SESSION["login"];
    $email=$user[0];
    $id=$_GET["id"];
    $btd=checkBTDCuaNTD($id);
    if($btd){
        $sql="delete from baidang where id='$id'";
        execute($sql);
        echo '
            <script>
                alert("Xóa bài tuyển dụng thành công");
                window.location.href="'. $_SERVER['HTTP_REFERER'].'";
            </script>
        ';
    }
    else{
        echo '
            <script>
                alert("Bạn không có quyền xóa bài đăng này");
                window.location.href="'. $_SERVER['HTTP_REFERER'].'";
            </script>
        ';
    }
?>