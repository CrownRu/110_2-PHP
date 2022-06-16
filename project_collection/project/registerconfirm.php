<?php

require("DBconnectProject.php");

$Name=$_POST["name"];
$account=$_POST["account"];
$password=$_POST["password"];
$check_password=$_POST["check_password"];
$snumber=$_POST["student_number"];
$department=$_POST["department"];
$role=$_POST["role"];

/* echo $Name.$account.$password.$snumber.$department.$role; */
if($password==$check_password && $role!=null){
    $SQL="INSERT INTO Account (uName, sNumber, account, password, department, role) VALUES ('$Name','$snumber','$account','$password','$department','$role')";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('註冊失敗，請確認密碼')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=Register.php'>";
}

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('註冊成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('註冊失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=Register.php'>";
}

?>