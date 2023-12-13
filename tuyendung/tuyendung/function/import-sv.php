<?php
    require_once('helpDatabase.php');
    require_once('../Classes/PHPExcel.php');
    include '../Classes/PHPExcel/IOFactory.php';
?>
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<?php
    $file="";
    if(isset($_POST["submit"]))
    {
        $inputFileName=$_FILES['file']['tmp_name'];
        if($inputFileName==""){
            echo '
            <script>
                alert("Import thất bại");
                window.location.href="'. $_SERVER['HTTP_REFERER'].'";
            </script>
            ';
        }
        else{
            try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
                $sheetData= $objPHPExcel->getActiveSheet()->toArray('null',true,true,true);
                //  Lấy thông tin cơ bản của file excel

                // Lấy sheet hiện tại
                $sheet = $objPHPExcel->getSheet(0); 

                // Lấy tổng số dòng của file
                $highestRow = $sheet->getHighestRow(); 

                // Lấy tổng số cột của file
                $highestColumn = $sheet->getHighestColumn();

                for ($row = 2; $row <=$highestRow ; $row++){ 
                    $mssv=$sheetData[$row]['A'];
                    $email=$sheetData[$row]['B'];
                    $hoten=$sheetData[$row]['C'];
                    $nganh=$sheetData[$row]['D'];
                    $ngaysinh=$sheetData[$row]['E'];
                    $noisinh=$sheetData[$row]['F'];
                    $sdt=$sheetData[$row]['G'];
                    $cmnd=$sheetData[$row]['H'];
                    $namnhaphoc=$sheetData[$row]['I'];
                    $sql="insert into sinhvien values('$email','$mssv','$hoten','$nganh','$ngaysinh','$noisinh','$sdt','$cmnd','$namnhaphoc','null')";
                    execute($sql);
                    //matkhau matdinh 12345
                    $insertDangNhap="insert into dangnhapsinhvien values('$email','12345','sinhvien','1')";
                    execute($insertDangNhap);
                }
                echo '
                <script>
                    alert("Import thành công");
                    window.location.href="'. $_SERVER['HTTP_REFERER'].'";
                </script>
                ';
            } catch(Exception $e) {
                die('Lỗi không thể đọc file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
        }
        
    }
?>
