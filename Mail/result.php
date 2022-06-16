<?php
session_start();

?>

<?php
require("DBconn.php");
$vote=$_POST["vote"];
$comment=$_POST["comment"];
if (!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip = $_SERVER["HTTP_CLIENT_IP"];
}elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}else{
    $ip = $_SERVER["REMOTE_ADDR"];
}
$date=date("Y,m,d");

if($vote==null){
    echo "錯誤!!!<BR>";
    echo "您沒有選取任何選項<BR>";
    echo "<a href='index.php'>回上一頁重選</a><BR>";
}
else if($ip==$SQL="SELECT IP FROM vote "){
    echo "錯誤<BR>";
    echo "您的IP位址已經投過票<BR>";
    echo "將於三後重新引導至 http://im/nuk.edu.tw";
    

}else{
    echo "恭喜您投票成功<BR>";
    echo "您的投票是:" .$vote;
    echo "<BR>";
    echo "您的其他意見是:" .$comment;
    echo "<BR>";
    echo "<a href='view.php'>觀看目前投票結果</a>";
}

?>
