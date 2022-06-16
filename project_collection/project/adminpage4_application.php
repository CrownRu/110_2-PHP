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
    button{border:0;
    background-color:#46A3FF;
    color:#ffffff;
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
        <tr><td align="left" style="padding-left:50px" width="600"><a href="adminpage1_home.php"><img src="volley.png" width="100" height="100"></a></td>
        <td valign="bottom" width="200"><b><font size="5"><a href="adminpage2_account.php">Account</a></b></td>
        <td valign="bottom" width="200"><b><font size="5"><a href="adminpage3_schedule.php">Schedule</a></b></td>
        <td valign="bottom" width="200"><b><font size="5">Application</b></td>
        <td align="right" style="padding-right:50px"><a href="adminpage5_mypage.php"><img src="adminhead.png" width="100" height="100"></a></td></tr>

        </table>
        <hr class="style-one">
        <CENTER>
        <BR><BR><BR><BR>
        <?php
            require("DBconnectProject.php");

            $SQL="SELECT * FROM apply";
            if($result=mysqli_query($link, $SQL)){
                echo "<table class='main'>";
                echo "<thead><th>Original Date</th><th>Original Period</th><th>New Date</th><th>New Period</th><th>Reason</th><th>yes/no</th></thead>";
                
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td class='main'>".$row["originalDate"]."</td>
                    <td height='50px'>".$row["originalPeriod"]."</td>
                    <td height='50px'>".$row["newDate"]."</td>
                    <td height='50px'>".$row["newPeriod"]."</td>
                    <td height='50px'>".$row["reason"]."</td>
                    <td class='main'><button><a href='permit.php?&originalDate=".$row["originalDate"]."&originalPeriod=".$row["originalPeriod"]."&newDate=".$row["newDate"]."&newPeriod=".$row["newPeriod"]."&reason=".$row["reason"]."'>Permit</a></button></td>";
                    echo "</tr>";
                    echo "</tbody>";
                }  
                echo "</table>";
            
            }

        ?>
        </div>
    </body>
</html>