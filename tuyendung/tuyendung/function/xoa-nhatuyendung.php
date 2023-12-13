<?php
    require_once("helpDatabase.php")
?>  
<?php
    $id=$_GET["id"];
    if($id!=""){
        $sql="delete from nhatuyendung WHERE emailcty = '$id'";
        execute($sql);
        header("location: ../view-admin/quantri-nhatuyendung.php?active=nhatuyendung");
    }
?>

