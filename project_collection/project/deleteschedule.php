<?php

require("DBconnectProject.php");

$time=$_GET["time"];
$period=$_GET["period"];
$court=$_GET["court"];
$SQL="DELETE  FROM schedule WHERE time='$time' AND period='$period' AND court='$court'";
if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=adminpage3_schedule.php'>";
}else{
    echo "<sscript type='text/javascript'>";
    echo "alert('刪除失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=adminpage3_schedule.php'>";
}

?>