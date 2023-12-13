<?php 
    require_once('helpDatabase.php');
    $email=$_POST["email"];
    if(isset($_POST['submit'])){
        $path = "../img/"; 
        $tmp_name = $_FILES['uploadFile']['tmp_name'];
        $name = $_FILES['uploadFile']['name'];
        move_uploaded_file($tmp_name, $path . $name);
        $image_url = $path . $name; 
        $sql="update nhatuyendung set logocty='$name' where emailcty='$email'";
        execute($sql);
        echo '
            <script>
                alert("Đổi ảnh đại diện thành công");
                window.location.href="'. $_SERVER['HTTP_REFERER'].'";
            </script>
        ';
        // header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>