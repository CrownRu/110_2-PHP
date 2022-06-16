<?php
session_start();

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'vote');  // 預設使用的資料庫名稱
?>

<?php
if(isset($_COOKIE["account"])){
    $cookieID=$_COOKIE["account"];
    echo "welcome".$cookieID."再度光臨";
}else{
    echo "<CENTER>歡迎光臨<CENTER>";
}
?>

<html>
<head>
<title>Login</title>
</head>
<body>
    <CENTER>
<H2>Login</H2>
<form name="login" action="index.php" method="post" enctype="multipart/form-data">
<TABLE BORDER>
  <tr>
    <th>Account:</th>
    <th><input name="account" size="20"></th>
  </tr>
  <tr>
    <td><CENTER><B>Password:</B></CENTER></td>
    <td><center><input type="password" name="password" size="10" maxlength=10></center></td>
  </tr>
  
  <input type="submit" name="submit" value="SUBMIT"><Br>
</table><br>
</CENTER>
</form>

<?php

if(isset($_POST["account"])){
    if($_POST["account"]==null){
        $uId=$_POST["account"];
        $uPwd=$_POST["password"];

        $SQL="SELECT * FROM user WHERE uName='$uId' AND uPwd='$uPwd'";

        $result=mysqli_query($link,$SQL);

        if(mysqli_num_rows($result)==1){
                $_SESSION["login"]="Yes";
                setcookie("account", $uId, time()+3600);
                header('Location: /index.php');                
            }else{
                echo "帳號密碼錯誤";
            }
        }
        else{
            echo "你未輸入帳號密碼";
        }
    }
    else{
        echo "請輸入帳號密碼";
    }
?>
</body>
</html>