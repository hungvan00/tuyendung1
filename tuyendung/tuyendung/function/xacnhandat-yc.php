

<?php
if (isset($_GET['id'])) {
  include('../view/config.php');
  $id = $_GET["id"];
  $sql = "Select * from nopcv where id = '$id'";
  $result = mysqli_query($connect, $sql);
   $row = mysqli_fetch_assoc($result);

  $emailsv = $row["emailsinhvien"];
  $sql = "update nopcv set trangthaixetduyet=N'đạt yêu cầu tuyển dụng' where id='$id'";
  if (mysqli_query($connect, $sql)) {


    $sqltbao = "INSERT INTO thongbao(emailsv, noidung, ngaytb) VALUES ('$emailsv'  ,'Chúc mừng bạn đã vượt qua vòng xét duyệt hồ sơ của chúng tôi, chúng tôi sẽ liên hệ hướng dẫn phỏng vấn trong thời gian sớm nhất...',DATE(NOW()))";
    # execute($sqltbao);
    if (mysqli_query($connect, $sqltbao)) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
      header('Location:../view/index.php');
    }
  }
}
?>