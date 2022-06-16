<?php
require("DBconnectProject.php");
$dep=$_POST["dep"];
$name=$_POST["name"];
$level=$_POST["level"];
$position=$_POST["position"];
$pnumber=$_POST["pnumber"];


$SQL="INSERT INTO player (uName, playerNumber, level, department, position) VALUES ('$name','$pnumber','$level','$dep','$position')";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('新增成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=page2_information.php'>";
}else{
    echo "<sscript type='text/javascript'>";
    echo "alert('新增失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=page2_information.php'>";
}
?>