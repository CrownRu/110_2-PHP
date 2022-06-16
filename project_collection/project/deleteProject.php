<?php

require("DBconnectProject.php");

$account=$_GET["account"];
$SQL="DELETE  FROM Account WHERE account='$account'";
if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=adminpage2_account.php'>";
}else{
    echo "<sscript type='text/javascript'>";
    echo "alert('刪除失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=adminpage2_account.php'>";
}

?>
