<?php
session_start();

if(isset($_SESSION["login"])){
    if($_SESSION["login"]=="Yes"){
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
<style type="text/css">
    body {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    }
    #container{
    height:1000px;
    margin-top:0px;
    background: #D2E9FF; 
    background: -webkit-linear-gradient(to right, #D2E9FF, #FFD2D2); 
    background: linear-gradient(to right,#D2E9FF, #FFD2D2); 
    }
    hr.style-one {
    height: 12px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(0,0,0,0.5);
    }
    table.main {
    border-spacing: 0;
    width: 65%;
    }
    tr {
    text-align: center;
    }
    th {
    padding: 10px;
    }
    table.main tbody tr:nth-child(odd){
    background-color: #eee
    }
    
    td.main:hover {
    background-color: #E6FBFF;
    }
    table.main thead {
    background-color: #66B3FF;
    color: white;
    }
    table.main thead th:first-child {
    border-radius: 5px 0 0 0;
    border: 1px solid blue;
    }
    table.main thead th:last-child {
    border-radius: 0 5px 0 0;
    border-right: 1px solid blue;
    }
    table.main tbody tr:last-child td:first-child {
    border-radius: 0 0 0 5px;
    }

    table.main tbody tr:last-child td:last-child {
    border-radius: 0 0 5px 0;
    }
    button{
        border:0;
    background-color:#46A3FF;
    color:#CAFFFF;
    border-radius:10px;
    cursor:pointer;}

    button:hover{
    color:#46A3FF;
    background-color:#ffffff;
    border:2px #46A3FF solid;
    }

    </style>
    <body>
        <div id="container">
        <table width=100% >
        <tr><td align="left" style="padding-left:50px" width="600"><a href="page1_home.php"><img src="volley.png" width="100" height="100"></a></td>
        <td valign="bottom" width="200"><b><p style="text-shadow: 0.1em 3px 6px grey"><font size="5">Information</b></td>
        <td valign="bottom" width="150"><b><font size="5"><a href="page3_apply.php">Apply</a></b></td>
        <td valign="bottom" width="200"><b><font size="5"><a href="page4_contactus.php">Contact Us</a></b></td>
        <td align="right" style="padding-right:50px"><a href="page5_mypage.php"><img src="head.png" width="100" height="100"></a></td></tr>

        </table>
        <hr class="style-one">
        <CENTER>
        <BR><BR><BR><BR>

        <button><a href="addplayer.php">新增選手</a></button>
        <BR><BR>
        <?php
            require("DBconnectProject.php");

            /*$SQL="SELECT * FROM account";
            echo "select team";
            if($result=mysqli_query($link, $SQL)){
                echo "<select>";
                while($row=mysqli_fetch_assoc($result)){
                    if($row["role"]=="user"){
                        echo "<option value=".$row["department"].">".$row["department"]."</option>";
                    }
                }
                echo "</select>";
            }*/
      
            $SQL="SELECT * FROM player ORDER BY department ";
            if($result=mysqli_query($link, $SQL)){
                echo "<table class='main'>";
                echo "<thead><td>Department</td><td>Name</td><td>Level</td><td>Number</td><td>Position</td><td></td></thead>";
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>".$row["department"]."</td>
                    <td>".$row["uName"]."</td>
                    <td>".$row["level"]."</td>
                    <td>".$row["playerNumber"]."</td>
                    <td>".$row["position"]."</td>
                    <td class='main'><a href='updateImformation.php?pNumber=".$row["playerNumber"]."&dep=".$row["department"]."&name=".$row["uName"]."'>修改</a></td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
                echo "</table>";
            }

        ?>
        </div>
    </body>
</html>