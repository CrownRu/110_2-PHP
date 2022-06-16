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
    .myinfo{
        position:absolute;
        top:30%;
        left:35%;
    }
    a.update{
        position:absolute;
        top:30%;
        left:35%;
    }
    </style>
    <body>
        <div id="container">
        <table width=100% >
        <tr><td align="left" style="padding-left:50px" width="600"><a href="adminpage1_home.php"><img src="volley.png" width="100" height="100"></a></td>
        <td valign="bottom" width="200"><b><font size="5"><a href="adminpage2_account.php">Account</a></b></td>
        <td valign="bottom" width="200"><b><font size="5"><a href="adminpage3_schedule.php">Schedule</a></b></td>
        <td valign="bottom" width="200"><b><font size="5"><a href="adminpage4_application.php">Application</a></b></td>
        <td align="right" style="padding-right:50px"><img src="adminhead.png" width="100" height="100"></td></tr>

        </table>
        <hr class="style-one">
        <CENTER>
        <BR><BR><BR><BR>
        <div style="border-width: 5px; border-style:solid ; width: 700px; height: 300px; border-color: rgb(128, 128, 128); padding: 5px; text-align: center; -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 40px;">
        </div>
        <div class="myinfo">
            <?php
                require("DBconnectProject.php");

                $account=$_COOKIE["account"];
                $SQL="SELECT * FROM Account WHERE account='$account'";
                if($result=mysqli_query($link, $SQL)){
                    $row=mysqli_fetch_assoc($result);
                    echo "<table style='line-height:50px;'>";
                        echo "<tr>";
                        echo "<td align='right'><span style='font-family:Sans-serif; font-size:25px;'>Name</td><td width=15></td><td><span style='font-family:Sans-serif; font-size:20px;'>".$row["uName"]."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td align='right'><span style='font-family:Sans-serif; font-size:25px;'>Student Number</td><td> </td><td><span style='font-family:Sans-serif; font-size:20px;'>".$row["sNumber"]."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td align='right'><span style='font-family:Sans-serif; font-size:25px;'>Account</td><td> </td><td><span style='font-family:Sans-serif; font-size:20px;'>".$row["account"]."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td align='right'><span style='font-family:Sans-serif; font-size:25px;'>Department</td><td> </td><td><span style='font-family:Sans-serif; font-size:20px;'>".$row["department"]."</td>";
                        echo "</tr>";
                    echo "</table>";
                    ?>
                    <html>
                        <head>
                        <style>
                        .buttonOne {
                            position:absolute;
                            top:300;
                            left:10%;
                            background-color: #1c87c9;
                            border: none;
                            color: white;
                            padding: 20px 34px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 20px;
                            margin: 4px 2px;
                            cursor: pointer;
                            -webkit-border-radius: 10px;
                            -moz-border-radius: 10px;
                            border-radius: 40px;
                        }
                        .buttonTwo {
                            position:absolute;
                            top:300;
                            left:60%;
                            background-color: #1c87c9;
                            border: none;
                            color: white;
                            padding: 20px 34px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 20px;
                            margin: 4px 2px;
                            cursor: pointer;
                            -webkit-border-radius: 10px;
                            -moz-border-radius: 10px;
                            border-radius: 40px;
                        }
                        </style>
                        </head>
                        <body>
                            <form method="get" action="updateAccount.php">
                                <input type="hidden" name="account" value='<?php echo $account;?>'></br>
                                <button type="submit" class="buttonOne">修改</button>
                            </form>
                            <a href="logoutProject.php" class="buttonTwo">登出</a>
                        </body>
                        </html>
                    <?php
                }
                
            ?>
        </div>
    </body>
</html>