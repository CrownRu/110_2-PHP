<?php
require("DBconnectProject.php");
$title=$_POST["title"];
$aNumber=$_POST["aNumber"];
$time=$_POST["time"];
$content=$_POST["content"];


$SQL="INSERT INTO announce (aNumber, title, time, content) VALUES ('$aNumber','$title','$time','$content')";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('新增成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=adminpage1_home.php'>";
}else{
    echo "<sscript type='text/javascript'>";
    echo "alert('新增失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=adminpage1_home.php'>";
}
?>