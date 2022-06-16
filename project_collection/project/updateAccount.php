<?php

require("DBconnectProject.php");
$account=$_GET["account"];

$SQL="SELECT * FROM Account WHERE account='$account'";
if($result=mysqli_query($link, $SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $name=$row["uName"];
        $sNumber=$row["sNumber"];
        $password=$row["password"];
        $dep=$row["department"];
        $role=$row["role"];
    }
}
?>

<h1>使用者更新</h1></br>
<form action="updateAccountConfirm.php" method="post">
<input type="hidden" name="account" value='<?php echo $account;?>'></br>
系所：<input type="text" name="dep" value='<?php echo $dep;?>'></br>
名字：<input type="text" name="name" value='<?php echo $name;?>'></br>
學號：<input type="text" name="sNumber" value='<?php echo $sNumber;?>'></br>
密碼：<input type="text" name="password" value='<?php echo $password;?>'></br>


<!-- 電話：<input type="text" name="te"></br>
信箱：<input type="text" name="na"></br>
使用者身份：user<input type="radio" name="role" value="user">admin<input type="radio" name="role" value="admin"> -->
<input type="submit" name="更新完成">
</form>
