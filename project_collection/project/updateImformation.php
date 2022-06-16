<?php

require("DBconnectProject.php");
$pNumber=$_GET["pNumber"];
$dep=$_GET["dep"];
$Name=$_GET["name"];

$SQL="SELECT * FROM player WHERE playerNumber='$pNumber' AND department='$dep' AND uName='$Name'";
if($result=mysqli_query($link, $SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $level=$row["level"];
        $position=$row["position"];
    }
}
?>

<h1>使用者更新</h1></br>
<form action="updateImformationConfirm.php" method="post">
<input type="hidden" name="old" value='<?php echo $pNumber;?>'></br>
系所：<input type="text" name="dep" value='<?php echo $dep;?>'></br>
名字：<input type="text" name="name" value='<?php echo $Name;?>'></br>
系級：<input type="text" name="level" value='<?php echo $level;?>'></br>
背號：<input type="text" name="pNumber" value='<?php echo $pNumber;?>'></br>
位置：<input type="text" name="position" value='<?php echo $position;?>'></br>


<!-- 電話：<input type="text" name="te"></br>
信箱：<input type="text" name="na"></br>
使用者身份：user<input type="radio" name="role" value="user">admin<input type="radio" name="role" value="admin"> -->
<input type="submit" name="更新完成">
</form>
