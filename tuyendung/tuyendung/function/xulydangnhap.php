<?php
    require_once("helpDatabase.php");
?>
<?php
//kiểm tra thông đăng nhập bằng tên đăng nhập và mật khẩu và trạng thái active (0=ko thể đn, 1= có thể đăng nhập)
function kiemtradangnhap($email,$password){
    $sqlsv="select *from dangnhapsinhvien where emailsv='$email' and matkhau='$password'";
    $check=executeResult($sqlsv);
    if(count($check)>=1){
        return true;
    }
    $sqlcty="select *from dangnhapnhatuyendung where emailcty='$email' and matkhau='$password'";
    $check=executeResult($sqlcty);
    if(count($check)>=1){
        return true;
    }
    $sqladmin="select *from admin where email='$email' and matkhau='$password'";
    $check=executeResult($sqladmin);
    if(count($check)>=1){
        return true;
    }
    return false;
}
//lấy quyền đăng nhập
function getQuyen($email){
    $sql="select *from dangnhapsinhvien where emailsv='$email'";
    $check=executeResult($sql);
    if(count($check)>=1){
        if($check[0]['quyen']==="sinhvien")
            return "sinhvien";
    }
    $sql="select *from dangnhapnhatuyendung where emailcty='$email'";
    $check=executeResult($sql);
    if(count($check)>=1){
        if($check[0]['quyen']==="nhatuyendung")
            return "nhatuyendung";
    }
    $sql="select *from admin where email='$email'";
    $check=executeResult($sql);
    if(count($check)>=1){
        if($check[0]['quyen']==="admin")
            return "admin";
    }
    return "Lỗi: không có quyền";
}
//lấy trạng thái active
function getActive($email){
    $sql="select *from dangnhapsinhvien where emailsv='$email'";
    $check=executeResult($sql);
    if(count($check)>=1){
        if($check[0]['active']==1)
            return true;
    }
    $sql="select *from dangnhapnhatuyendung where emailcty='$email'";
    $check=executeResult($sql);
    if(count($check)>=1){
        if($check[0]['active']==1)
            return true;
    }
    $sql="select *from admin where email='$email'";
    $check=executeResult($sql);
    if(count($check)>=1){
        if($check[0]['active']==1)
            return true;
    }
    return false;
}
//
?>
<?php
    if(isset($_POST["btn-login"]))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
        if($email==""||$password==""){
            echo "Vui lòng nhập đầy đủ thông tin...";
        }
        elseif(!kiemtradangnhap($email,$password)){
            echo "Sai tên đăng nhập hoặc mật khẩu";
            echo '<a href="../view/dangnhap.php">Đăng nhập lại</a>';
        }
        elseif(kiemtradangnhap($email,$password)){
            echo "Đúng tên đăng nhập và mật khẩu ";
            if(getActive($email)){                          //được phép truy cập
                $_SESSION['login']= array($email,getQuyen($email));
                header("location: ../view/index.php");
            }
            else {
                echo "Xin lỗi ! Hiện tại bạn chưa thể truy cập tài khoản lúc này";
                echo '<a href="../view/index.php">Về trang chủ</a>';
            }
            // $_SESSION['login']= getInforUser($email);
            // $user=getQuyen($email);
            // if($user[0]['quyen']!=0)
            //     header("location: ../quantrihethong.php");
            // else 
            //     header("location: ../index.php");
        }
        
    }
    if(isset($_GET["action"]))
    {
        if($_GET["action"]==="logout")
            session_destroy();
        header("location: ../view/index.php");
    }
?>
