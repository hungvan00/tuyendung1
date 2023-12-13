<?php 
    if(isset($_GET['id'])) {
        include('../view/config.php');
          $id=$_GET["id"];

        $sql = "Select * from nopcv where id = '$id'"; 

        $result = mysqli_query($connect, $sql);

            $row = mysqli_fetch_assoc($result);
     $emailsv=$row["emailsinhvien"];
    $sql="update nopcv set trangthaixetduyet=N'Chưa đạt yêu cầu tuyển dụng' where id='$id'";
   if( mysqli_query($connect, $sql) ) {

  
    $sqltbao="INSERT INTO thongbao(emailsv, noidung, ngaytb) VALUES ('$emailsv'  ,'Qua quá trình xét duyệt hồ sơ, chúng tôi nhận thấy bạn chưa phù hợp với yêu cầu tuyển dụng của công ty, mong sẽ được hợp tác với bạn trong tương lai. Xin cảm ơn...',DATE(NOW()))";
     #execute($sqltbao);
          if(  mysqli_query($connect, $sqltbao)) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          } else {
            header('Location:../view/index.php');
    }
}
    }
?>
