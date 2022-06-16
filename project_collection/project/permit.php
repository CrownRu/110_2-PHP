<?php
require("DBconnectProject.php");
$originalDate=$_GET["originalDate"];
$originalPeriod=$_GET["originalPeriod"];
$newDate=$_GET["newDate"];
$newPeriod=$_GET["newPeriod"];
$reason=$_GET["reason"];

$SQL="UPDATE apply SET yes='1' WHERE originalDate='$originalDate' AND originalPeriod='$originalPeriod' AND newDate='$newDate' AND newPeriod='$newPeriod' AND reason='$reason'";
$SQL1="UPDATE schedule SET time='$newDate', period='$newPeriod' WHERE time='$originalDate' AND period='$originalPeriod'";
$SQL2="DELETE  FROM apply WHERE originalDate='$originalDate' AND originalPeriod='$originalPeriod' AND newDate='$newDate' AND newPeriod='$newPeriod' AND reason='$reason'";

if(mysqli_query($link, $SQL)&&mysqli_query($link, $SQL1)&&mysqli_query($link, $SQL2)){
    echo "<script type='text/javascript'>";
    echo "alert('更新成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=adminpage4_application.php'>";
}else{
    echo "<sscript type='text/javascript'>";
    echo "alert('更新失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=adminpage4_application.php'>";
}
?>