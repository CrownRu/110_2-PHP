<?php
session_start();

$link=@mysqli_connect(
    'localhost',
    'root',
    '',
    'projectphp');

/* if(isset($_COOKIE["account"])){
    $cookieID=$_COOKIE["account"];
    echo "welcome".$cookieID."再度光臨my縫";
}else{
    echo "歡迎光臨my縫";
} */
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
        background: #46A3FF; 
        background: -webkit-linear-gradient(to right, #46A3FF, #FF5151); 
        background: linear-gradient(to right,#46A3FF, #FF5151); 
    }
    input[type=text]{
        width: 100%;
        height: 40px;
        padding: 12px 20px;
        margin: 5px 0;
        box-sizing: border-box;
    }
    input[type=password]{
        width: 100%;
        height: 40px;
        padding: 12px 20px;
        margin: 5px 0;
        box-sizing: border-box;
    }
    table{
        width: 30%;
    }
    .register{
        position:absolute;
        top:65%;
        left:35.2%;
    }
    .forget_pass{
        position:absolute;
        top:65%;
        left:57.8%;
    }
    </style>
    <body>
        <div id="container">
            <CENTER>
            <BR><BR><BR>
            <p align="center"><img src="volley.png" width="100" height="100"></p>
            <H2><font color="WHITE" size="5px"><span style="font-family:Sans-serif; font-size:30px;">Member Login</span></font></H2>
            <form name="login" action="" method="post">
            <TABLE>
                <tr><td align="center" valign="center">
                    <tr>
                        <th align="left"><font color="wHITE"><span style="font-family:Sans-serif; font-size:10px;">Account*</font></th>
                    </tr>
                    <tr>
                        <th><input type="text" name="account" size="20" placeholder="Enter your account"></th>
                    </tr>
                    <tr>
                        <th align="left"><font color="wHITE"><span style="font-family:Sans-serif; font-size:10px;">Password*</font></th>
                    </tr>
                    <tr>
                        <th><input type="password" name="password" size="20" maxlength=20 placeholder="Enter your password"></center></th>
                    </tr>
                
                </td></tr>
            </table><br>
            <input type="submit" name="login" value="LOGIN" style="color:white;font-size:18px;width:30%;height:43px;background-color:	#00CACA;border:	#00CACA"><Br>
            </CENTER>
            <div class="register">
                <font color="white"><a href="register.php">Don't have an account?</a></font>
            </div>
            <div class="forget_pass">
                <font color="white"><a href="forget.php">Forget pasword?</a></font>
            </div>
        </form>
        </div>

    <?php
    if(isset($_POST["account"])){
        if($_POST["account"]!=null){
            $account=$_POST["account"];
            $password=$_POST["password"];


            $SQL="SELECT * FROM Account WHERE account='$account' AND password='$password'";

            $result=mysqli_query($link,$SQL);
            $row=mysqli_fetch_assoc($result);
            $role=$row['role'];
            if(mysqli_num_rows($result)==1){
                $_SESSION["login"]="Yes";
                setcookie("account", $account, time()+3600);
                if($role=='admin'){
                    header('Location: adminpage1_home.php'); 
                }else{
                    header('Location: page1_home.php'); 
                }           
            }else{
                echo "<script type='text/javascript'>";
                echo "alert('帳號密碼錯誤')";
                echo "</script>";
            }
            //echo $uId."<br/>";
            //echo $uPwd;
            //if($aID==$uId && $aPWD==$uPwd){
            //    $_SESSION["login"]="Yes";
            //    setcookie("account", $uId, time()+3600);
            //    header('Location: /index.php');
            //}
            //else{
            //    echo "帳號密碼錯誤";
            //}
        }
        else{
            echo "你未輸入帳號密碼";
        }
    }
    else{
        echo "welcome 請輸入帳號密碼";
    }
    ?>
    </body>
</html>