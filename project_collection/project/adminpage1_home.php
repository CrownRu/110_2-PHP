<!-- <html>


<table width=100% >
    <tr><td align="left" style="padding-left:50px" width="600"><img src="volley.png" width="100" height="100"></td>
    <td valign="bottom" width="200"><b><font size="5">Information</b></td>
    <td valign="bottom" width="150"><b><font size="5">Apply</b></td>
    <td valign="bottom" width="200"><b><font size="5">Contact&nbspUs</b></td>
    <td align="right" style="padding-right:50px"><img src="head.png" width="100" height="100"></td></tr>

</table>
<hr/>

</html>
 -->
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
    #IMG_1{
        position:absolute;
        top:32%;
        left:29%;
        width:600px;
        height:500px;
        background-color:#336699;
        z-index:1;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 40px;
    }
    hr.style-one {
    height: 12px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(0,0,0,0.5);
    }
    #text{
        position:absolute;
        top:37%;
        left:38%;
        font-size:25px;
        z-index:1;
        color:#FFFFFF;
    }
    .line1{
        position:absolute;
        top:39%;
        left:31%;
        z-index:1;
    }
    .line2{
        position:absolute;
        top:39%;
        left:43%;
        z-index:1;
    }
    .post{
        position:absolute;
        top:46%;
        left:31%;
        z-index:1;
    }
    .buttonTwo {
        position:absolute;
        top:41%;
        left:66%;
        font-size: 20px;
        color:#FFFFFF;
        cursor: pointer;
        z-index:1;
    }
    .buttonThree {
        position:absolute;
        top:41%;
        left:60%;
        font-size: 20px;
        color:#FFFFFF;
        cursor: pointer;
        z-index:1;
    }
    tr.news:nth-child(even) {
     background: #D2E9FF;
    }
    tr.news:nth-child(odd) {
    background-color: #FAFAFA;
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
</style>
    <body>
        <div id="container">
            <table width=100% >
                <tr><td align="left" style="padding-left:50px" width="600"><img src="volley.png" width="100" height="100"></td>
                <td valign="bottom" width="200"><b><font size="5"><a href="adminpage2_account.php">Account</a></b></td>
                <td valign="bottom" width="200"><b><font size="5"><a href="adminpage3_schedule.php">Schedule</a></b></td>
                <td valign="bottom" width="200"><b><font size="5"><a href="adminpage4_application.php">Application</a></b></td>
                <td align="right" style="padding-right:50px"><a href="adminpage5_mypage.php"><img src="adminhead.png" width="100" height="100"></a></td></tr>

            </table>
            <hr class="style-one">
            <p align="center"><img src="nukvolleyballleague.png" width="800" height="80"></p>
            
            <img scr="IMG_1" id="IMG_1" width="170" height="89" alt="">
            <div class="line1">
                <img src="line1.png">
            </div>
            <div class="line2">
                <img src="line2.png">
            </div>
            <span scr="text" id="text" color="WHITE">NEWS</span>
            <span><a href="updateAnnounce.php" class="buttonThree">update</a></span>
            <span><a href="more.php" class="buttonTwo">more</a></span>

            <div class="post">
            <?php
            require("DBconnectProject.php");

            $SQL="SELECT * FROM announce";
            $i=0;
            if($result=mysqli_query($link, $SQL)){
                echo "<table class='main' width=550px height=260px style='background-color:white; border-collapse:collapse; border='2'>";
                echo "<thead><td align='center'>Time</td><td align='center'>Title</td><td align='center'>Content</td></thead>";
                while($row=mysqli_fetch_assoc($result)){
                    $i++;
                    echo "<tr align='center' class='news'>";
                    echo "<td align='center'>".$row["time"]."</td><td align='center'>".$row["title"]."</td><td align='center'>".$row["content"]."</td>";
                    echo "</tr>";
                    if($i==4){
                        break;
                    }
                }
                echo "</table>";
            }

            ?>
            </div>
        </div>
    </body>
</html>