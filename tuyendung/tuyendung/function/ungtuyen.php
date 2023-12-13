<?php

if (isset($_POST['submit'])) {
    $gioithieu = $_POST['gioithieu'];
    $allowedFiles =  array('pdf');
    $path = "../file-cv/";
    $tmp_name = $_FILES['cv']['tmp_name'];
    $name = $_FILES['cv']['name'];
    $filecv = $path . $name;
    $check = pathinfo($filecv, PATHINFO_EXTENSION);

    if (!in_array($check, $allowedFiles)) {
        unlink($tmp_name);
        echo 'Please upload a PDF file. <a href="../view/nopcv.php">Go back</a> and try again.';
    } else {
        move_uploaded_file($tmp_name, $filecv);

        $emailsv = $_POST['emailsv'];
        $trangthaixetduyet = "Chờ duyệt";
        $sql = "INSERT INTO nopcv (gioithieu, filecv, emailsinhvien, naynopcv, trangthaixetduyet) 
            VALUES ('$gioithieu', '$filecv', '$emailsv', CURDATE(), '$trangthaixetduyet')";
        include("../view/config.php");

        if (mysqli_query($connect, $sql)) {
            setcookie('success_message', 'Nộp CV thành công', time() + 3600, '/');
            header('Location:../view/index.php');
            exit();
        } else {
            echo 'Lỗi MySQL: ' . mysqli_error($connect);
        }
    }
}
?>
