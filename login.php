<?php
session_start();
?>

<?php

if(isset($_COOKIE["account"])){
    $cookieID=$_COOKIE["account"];
    echo "歡迎".$cookieID."再度光臨";
}else{
    echo "恭喜您發現本網站";
}

?>



<html>
<head>
<title>Login</title>
</head>
<body>
    <CENTER>
<H2>Login</H2>
<form name="login"  method="post">
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

$aID="hackme";
$aPWD="1234567989";

//時間
//echo time();
date_default_timezone_set('Asia/Taipei');
echo date("m, d, Y H:i:s", time());
//header("Refresh:1");

if(isset($_POST["account"])){
    if($_POST["account"]==null){
        $account=$_POST["account"];
        $psd=$_POST["password"];
    
        //echo $account."<br>";
        //echo $psd;
        if($aID==$account && $aPWD==$psd){
            //echo "登入成功!!";
            $_SESSION["login"]="Yes";
            setcookie("account",$account,time()+17280);//12小時過期
            header('Location: exercise2.php');
        }else{
            echo "!帳號或密碼錯誤!";
        }
    }else{
        echo "您尚未輸入帳號或密碼!!";
    }
}else{
    echo "<CENTER><H2>歡迎登入，請輸入帳號密碼<H2><CENTER>";
}

?>
</body>
</html>