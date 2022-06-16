<?php

require("DBconnectProject.php");

?>

<h1>管理者新增公告</h1></br>
<form action="updateAnnounceConfirm.php" method="post">
<input type="hidden" name="account" value='<?php echo $account;?>'></br>
公告編號：<input type="text" name="aNumber" require></br>
標題：<input type="text" name="title" require></br>
日期：<input type="date" name="time" require></br>
內容：<textarea name="content" rows="10" cols="90" required input placeholder="Enter admin announce"></textarea></br>

<input type="submit" value="新增完成">
</form>
