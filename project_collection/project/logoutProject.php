<?php
session_start();
session_destroy();
// setcookie("UID",$uId,time()+3600);
header("Location:index.php");
?>