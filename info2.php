<?php
$account=$_POST["account"];
$password=$_POST["password"];
$email=$_POST["email"];
$phone=$_POST["phone"];

echo "你/妳的帳號：".$account;
echo "<br>";
echo "你/妳的密碼：".$password;
echo "<br>";
echo "你/妳的Email：".$email;
echo "<br>";
echo "你/妳的電話：".$phone;
echo "<br><br>";
?>
<input type="submit" name="enter" value="ENTER" onclick="javascript:location.href='login.php'"><Br>
