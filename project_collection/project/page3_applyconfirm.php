<?php

require("DBconnectProject.php");

$originalDate=$_POST["originalDate"];
$originalPeriod=$_POST["originalPeriod"];
$newDate=$_POST["newDate"];
$newPeriod=$_POST["newPeriod"];
$reason=$_POST["reason"];
if($originalDate!=$newDate){
    $SQL="INSERT INTO apply (originalDate, originalPeriod, newDate, newPeriod, reason) VALUES ('$originalDate','$originalPeriod','$newDate','$newPeriod','$reason')";
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('申請成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=page3_apply.php'>";
    }
}else{
        echo "<sscript type='text/javascript'>";
        echo "alert('申請失敗')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=page3_apply.php'>";
    }

?>