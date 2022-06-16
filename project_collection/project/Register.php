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
    /*opacity: .5;*/
    }
    input[type=text]{
        width: 179%;
        height: 35px;
        padding: 12px 20px;
        margin: 5px 0;
        box-sizing: border-box;
    }
    input[type=password]{
        width: 179%;
        height: 35px;
        padding: 12px 20px;
        margin: 5px 0;
        box-sizing: border-box;
    }
    .buttom_register{
        position:absolute;
        top: 85%;
        left:35.2%;
    }
    .buttom_back{
        position:absolute;
        top: 85%;
        left:58.5%;
    }
    table{
        width: 30%;
    }
    </style>
    <body>
        <div id="container">
            <CENTER>
            <BR><BR><BR>
            <p align="center"><img src="volley.png" width="100" height="100"></p>
            <font face="monospace" color="WHITE" size="6"><H2>Register</H2></font>

            <form name="registration" action="registerconfirm.php" method="post">
                <TABLE>
                    <tr>
                        <td align="left"><span style="font-family:Sans-serif; font-size:10px;">Name</td>
                    </tr>
                    <tr>
                        <td align="LEFT"><input type="text" name="name" size="20" placeholder="Enter yuor Name" require></td>
                    </tr>
                    <tr>
                        <td align="left"><span style="font-family:Sans-serif; font-size:10px;">Account</td>
                    </tr>
                    <tr>
                        <td align="LEFT"><input type="text" name="account" size="20" placeholder="Enter your Account" require></td>
                    </tr>
                    <tr>
                        <td align="left"><span style="font-family:Sans-serif; font-size:10px;">Password</td><td align="left"><span style="font-family:Sans-serif; font-size:10px;">Check password</td>
                    </tr>
                    <tr>
                        <td align="LEFT"><input type="password" name="password" size="20" maxlength=20 style="width:98%" placeholder="Enter your Password" require></td>
                        <td align="LEFT"><input type="password" name="check_password" size="20" maxlength=20 style="width:102%" placeholder="Enter the Password again" require></td>
                    </tr>
                    <tr>
                        <td align="left"><span style="font-family:Sans-serif; font-size:10px;">Student number</td>
                    </tr>
                    <tr>
                        <td align="LEFT"><input type="text" name="student_number" size="30" placeholder="Enter your Student number" require></td>
                    </tr>
                    <tr>
                        <td align="left"><span style="font-family:Sans-serif; font-size:10px;">Department</td>
                    </tr>
                    <tr>
                        <td align="LEFT"><input type="text" name="department" size="10" maxlength=10 placeholder="Enter your Department" require></td>
                    </tr>
                    <tr>
                        <td align="left"><span style="font-family:Sans-serif; font-size:10px;">Role</td>
                        <td align="right"><span style="font-family:Sans-serif; font-size:10px;">user<input type="radio" name="role" value="user"><span style="font-family:Sans-serif; font-size:10px;">admin<input type="radio" name="role" value="admin"></td>
                    </tr>
                    
                </table>
                <div class="buttom_register">
                    <input type="submit" name="register" value="REGISTER" style="color:white;background-color:#66B3FF;border:#2894FF;width: 100px;height:30px;font-size:5px">
                </div>
            </CENTER>

            </form>
            <div class="buttom_back">
                <input type="submit" name="back" value="BACK" style="color:white;background-color:#66B3FF;border:#2894FF;width: 100px;height:30px;font-size:5px" onclick="location.href='index.php' ">
            </div>
        </div>
    </body>
</html>