<?php

require("DBconnectProject.php");

$SQL="SELECT * FROM announce";
if($result=mysqli_query($link, $SQL)){
    echo "<table border='1' width=80% style='background-color:white; border-collapse:collapse; border='2' align='center'>";
    echo "<tr><td align='center'>Time</td><td align='center'>Title</td><td align='center'>Content</td>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr align='center'>";
        echo "<td align='center'>".$row["time"]."</td><td align='center'>".$row["title"]."</td><td align='center'>".$row["content"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>