<?php
    require_once("helpDatabase.php")
?>  
<?php
    $id=$_GET["id"];
    if($id!=""){
        $sql="delete from sinhvien WHERE emailsv = '$id'";
        execute($sql);
        header("location: ../view-admin/quantri-sinhvien.php?active=sinhvien");
    }
?>

