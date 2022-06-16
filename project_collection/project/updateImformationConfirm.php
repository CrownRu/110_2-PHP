<?php
require("DBconnectProject.php");
$old=$_POST["old"];
$pNumber=$_POST["pNumber"];
$dep=$_POST["dep"];
$Name=$_POST["name"];
$level=$_POST["level"];
$position=$_POST["position"];


$SQL="UPDATE player SET playerNumber='$pNumber', department='$dep', uName='$Name', level='$level', position='$position' WHERE playerNumber='$old' AND department='$dep' AND uName='$Name'";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('更新成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=page2_information.php'>";
}else{
    echo "<sscript type='text/javascript'>";
    echo "alert('更新失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=page2_information.php'>";
}
?>