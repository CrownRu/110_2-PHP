<?php

require("DBconnectProject.php");

?>

<h1>新增選手</h1></br>
<form action="addplayerconfirm.php" method="post">
系所：<input type="text" name="dep" require></br>
名字：<input type="text" name="name" require></br>
年級：<input type="text" name="level" require></br>
背號：<input type="text" name="pnumber" require></br>
位置：<input type="text" name="position" require></br>

<input type="submit" value="新增完成">
</form>
