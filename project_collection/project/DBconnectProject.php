<?php
$link=@mysqli_connect(
    'localhost',
    'root',
    '',
    'projectphp');

    $dbname="projectphp";
/*     if(!mysqli_select_db($link, $dbname)){
        die("無法開啟 $dbname 資料庫！<br/>");
    }else{
        echo "資料庫 $dbname 開啟成功！<br/>";
    }
$SQL="SELECT * FROM Account";
if($result=mysqli_query($link,$SQL)){
    echo "<table border='1'>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["uName"]."</td>
        <td>".$row["sNumber"]."</td>
        <td>".$row["account"]."</td>
        <td>".$row["password"]."</td>
        <td>".$row["department"]."</td>
        <td>".$row["role"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

 */

?>