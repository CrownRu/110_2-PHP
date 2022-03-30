<?php
session_start();

if(isset($_SESSION['login'])){
  if($_SESSION['login']=="Yes"){
    echo "<a href='Logout.php'>登出系統</a>";
  }else{
    echo "非法登陸系統";
    exit();
  }
}
?>
<!DOCTYPE HTML>


<html>
<head>
<title>Register</title>
</head>
<body>
<CENTER>
<H2>REGISTER</H2>

<form name="registration" action="info2.php" method="post">
<TABLE BORDER>
  <tr>
    <th>Account:</th>
    <th><input name="account" size="20"></th>
  </tr>
  <tr>
    <td><CENTER><B>Password:</B></CENTER></td>
    <td><center><input type="password" name="password" size="10" maxlength=10></center></td>
  </tr>
  <tr>
    <td><CENTER><B>Email:</B></CENTER></td>
    <td><input type="text" name="email" size="30"></td>
  </tr>
  <tr>
    <th>Phone Number:</th>
    <th><input type="text" name="phone" size="10" maxlength=10></th>
  </tr>
  <Br>
  <input type="submit" name="submit" value="SUBMIT"><Br>
</table><br>
</CENTER>

</form>



</body>
</html>