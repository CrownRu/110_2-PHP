<?php
require("DBconnectProject.php");
$account=$_POST["account"];
$name=$_POST["name"];
$sNumber=$_POST["sNumber"];
$password=$_POST["password"];
$dep=$_POST["dep"];


$SQL="UPDATE Account SET sNumber='$sNumber', department='$dep', uName='$name', password='$password' WHERE account='$account'";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('更新成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=page5_mypage.php'>";
}else{
    echo "<sscript type='text/javascript'>";
    echo "alert('更新失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=page5_mypage.php'>";
}
?>