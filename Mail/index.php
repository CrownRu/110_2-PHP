<?php
session_start();

if(isset($_SESSION["login"])){
    if($_SESSION["login"]=="Yes"){
        echo "已成功登入";
    }else{
        echo "非法登入";
        exit();
    }
}else{
    echo "非法登入系統";
    exit();
}
?>

<html>
<head>
<meta character = "utf-8"/>
<title>index</title>
</head>
<body>

<?php
if (!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip = $_SERVER["HTTP_CLIENT_IP"];
}elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}else{
    $ip = $_SERVER["REMOTE_ADDR"];
}
echo "歡迎光臨新聞投票網站, 您的IP位址是 ".$ip;
?>
<form name='index_vote' action='result.php' method='post'>
<BR>
你覺得這則新聞:<BR><BR>
<label><input type="radio" name="vote" value="新奇"> 新奇</label><BR>
<label><input type="radio" name="vote" value="溫馨"> 溫馨</label><BR>
<label><input type="radio" name="vote" value="誇張"> 誇張</label><BR>
<label><input type="radio" name="vote" value="難過"> 難過</label><BR>
<label><input type="radio" name="vote" value="實用"> 實用</label><BR>
<label><input type="radio" name="vote" value="高興"> 高興</label><BR>
<label><input type="radio" name="vote" value="無聊"> 無聊</label><BR>
<label><input type="radio" name="vote" value="生氣"> 生氣</label><BR>
<BR>
其他意見: <input type="text" name="comment" size="30"><br><br>

<input type="submit" name="submit" value="送出投票"><Br>
</form>

</body>
<?php

?>