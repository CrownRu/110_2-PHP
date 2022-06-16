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
    table.main{
        height:90%;
    }
    button {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 12px 28px;
    border: 0px solid #097bc5;
    border-radius: 21px;
    background: #0ec8ff;
    background: -webkit-gradient(linear, left top, left bottom, from(#0ec8ff), to(#097bc5));
    background: -moz-linear-gradient(top, #0ec8ff, #097bc5);
    background: linear-gradient(to bottom, #0ec8ff, #097bc5);
    text-shadow: #064d7b 1px 1px 1px;
    font: normal normal bold 25px arial;
    color: #ffffff;
    text-decoration: none;
}
button:hover,
button:focus {
    border: 0px solid ##0b9af6;
    background: #11f0ff;
    background: -webkit-gradient(linear, left top, left bottom, from(#11f0ff), to(#0b94ec));
    background: -moz-linear-gradient(top, #11f0ff, #0b94ec);
    background: linear-gradient(to bottom, #11f0ff, #0b94ec);
    color: #ffffff;
    text-decoration: none;
}
button:active {
    background: #097bc5;
    background: -webkit-gradient(linear, left top, left bottom, from(#097bc5), to(#097bc5));
    background: -moz-linear-gradient(top, #097bc5, #097bc5);
    background: linear-gradient(to bottom, #097bc5, #097bc5);
}
button:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: 0px;
    left: 0px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEyUlEQVRIia2VWWxUVRjHf3eZdtpO22mBllLoxmJlqYQoYGgCQRQTECsEeYFEARMNlAhqDMENH/TBGE0gMUaECIlRHwgoS9WoUJo2NlBDF1onZeje6Uw7nX3mTu/c48O9YG3ApAlf8uXmnnvO//8t/3M/hWlazQIKquew6tFcZsgpYiMaieli/K9dfb3wlBi+JoT7oghc/VhrO/78tR92pO8usmN/KAS/HJjzvYgOCBHuFyIyIETMI8RQvXCfeKHz8/VUT90vT5tBGJAMgBaExDjEfJDmpHzrR5V73//gtzPbM3dP3q5On0CAFoKUAYi7iwBkLdyQtm2/8WUg/KGnto5LAMp08Xc9JrbPd0aWoI1Cei4YE6AnQI+DHsfmnCfPzY48/WfT3yf7o8SVqpk41hazoMPP2KSQHmhbyie2Z/lal0Q66pHddaTl54M9zyRIxUGPkT27JGt2oDH1bUvid+V4jXTgyOFd5/aunbXnpRXyyo0lodxkTES7/Izfj7C6lLU5dpbaVGyJhEbK3UxmUTGoGRaBpVrNO+/E5f4vpDPbOLrzwL73cJSaeMkAEz630d/f2xMaHmh0uwd/PtksGi9247Y48iWJssoZVL7yOC9vWsj6ueVFcmb1q2Ck7oWUHGlnY+3ZZWpcI8W4G2QHYABgyyuRK/LLKlhuVCxPBXdufrHPGBga6o74hhvaXb5fv2qg4UovLYfquNQf5N23czyHMrV+kDJMAkOQZldZMIsStd2HSwT6kLJLTAkKARIgC9MlSJsxR64oKF6EZCyqWh/avXWHx2i50Va35mho02dNHH12mVj3jDG2AinLjNEAxpqRFFS1cYCu6JgPR8G4maIEKMLUlxDWTbHylsx3u+yX08bClZgyD8m5GV0o2gr0pAnu7wStB0kGtcPDgNcfCjgSY04QoP5X22BlJARIAjHswts0QiiKDhjvPMXilasLt2AETckGu0HzgwQTExhqPEVgNJjoqwh0OsmaCZL8L6g0CVykSN3uwdMSY0gjdPomn5zYxfqazXmncgrtDjS3eavRIR1iXhgKM6oC+ngMN4mhKgwPZGRBRibINpClSeVJQaFE1nIbxojwH1ktvzW/PG2RrEzAhMvsXxpmaTXovUOgqR+3CuAJcwuFGhQDCIMeNmsvySDLoEiAhJItcDph1RJRhpgAkTT5JauxuvlMtEOrl/pQwsyA1hFumvqc6oblVjsVTGLZAhWWG0DK/K63wdAg+ulWjgGGCnD1Dq64Bhk5FogNSFqHHdaaOoVkKkES9Gbw3oYLvZy+dIt6rCO0DTHgjRAoLcKJCgTBfwMMA/LKQFkGFGDWWJ7kmPXmDkQaYFyDa16uHPyRw1aIJkEyRcAXpK9UxSmGwdcJgwYRRUKN9mDPvA2OYkh/BOTZgN2stz4KcRcE+yApMC70cPaN8xw0DLwW/b15oAfH6DY6qPL6wK3jefMyr/mjxGrXUPtkMesK/TiUZrDZQVFNBaNDJIlxw8+tr69z7Kc2vgNCTLJ7A2cwTvtIgK1/RWnfd449PaNcB4z9Z2nItrP4uaVsWFnCE7McFNgU1HCSgMuH63wbf3QN0wiMcvdndj/bUsXqT2v4JjOdigduMovjAHKATKY5EWXMNj5U+wcb0TIr9nRDzwAAAABJRU5ErkJggg==") no-repeat left center transparent;
    background-size: 100% 100%;
}

    </style>
    <body>
        <div id="container">
        <table width=100% >
        <tr><td align="left" style="padding-left:50px" width="600"><a href="page1_home.php"><img src="volley.png" width="100" height="100"></a></td>
        <td valign="bottom" width="200"><b><font size="5"><a href="page2_information.php">Information</a></b></td>
        <td valign="bottom" width="150"><b><font size="5"><a href="page3_apply.php">Apply</a></b></td>
        <td valign="bottom" width="200"><b><font size="5"><p style="text-shadow: 0.1em 3px 6px grey"><font size="5">Contact Us</b></td>
        <td align="right" style="padding-right:50px"><a href="page5_mypage.php"><img src="head.png" width="100" height="100"></a></td></tr>

        </table>
        <hr class="style-one">
        <CENTER>
        <BR><BR><BR><BR>
        <div style="border-width: 5px; border-style:solid ; width: 700px; height: 300px; border-color: rgb(128, 128, 128); padding: 5px; text-align: center;-webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 40px;">
        <Table class="main" align='CENTER' height="50px" >
            <tr>
            <td align='right' height="50px"><span style='font-family:Sans-serif; font-size:25px;'>Name</td><td width=15></td><td><span style='font-family:Sans-serif; font-size:20px;'>彭于晏</td>
            </tr> 
            <tr>
            <td align='right' height="50px"><span style='font-family:Sans-serif; font-size:25px;'>Tel</td><td width=15></td><td><span style='font-family:Sans-serif; font-size:20px;'>0979249220</td>
            </tr>   
            <tr>
            <td align='right' height="50px"><span style='font-family:Sans-serif; font-size:25px;'>Account</td><td width=15></td><td><span style='font-family:Sans-serif; font-size:20px;'>a1093356@mail.nuk.edu.tw</td>
            </tr> 
            <tr>
            <td align='right' height="50px"><span style='font-family:Sans-serif; font-size:25px;'>Address</td><td width=15></td><td><span style='font-family:Sans-serif; font-size:20px;'>高雄市楠梓區高雄大學路700號</td>
            </tr>
        </table>
        
        </div>
        <form class="form" action="page4_contactussend.php" method="POST">
            <H3>意見反應:</h3><textarea name="mytext" rows="10" cols="90" required input placeholder="What would you like to tell us.." style="-webkit-border-radius: 10px;
        -moz-border-radius:10px;
        border-radius: 10px;"></textarea></p>
            <BR>
            <button>Send Message</button>
        </form>
        </CENTER>
        </div>
    </body>
</html>