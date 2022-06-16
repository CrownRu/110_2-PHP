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
    /*@import url(https://fonts.googleapis.com/css?family=Lato:100,300,400);*/

    input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
    color: #aca49c;
    font-size: 0.875em;
    }

    input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
    color: #bbb5af;
    }

    input::-moz-placeholder, textarea::-moz-placeholder {
    color: #aca49c;
    font-size: 0.875em;
    }

    input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
    color: #bbb5af;
    }

    input::placeholder, textarea::placeholder {
    color: #aca49c;
    font-size: 0.875em;
    }

    input:focus::placeholder, textarea::focus:placeholder {
    color: #bbb5af;
    }

    input::-ms-placeholder, textarea::-ms-placeholder {
    color: #aca49c;
    font-size: 0.875em;
    }

    input:focus::-ms-placeholder, textarea:focus::-ms-placeholder {
    color: #bbb5af;
    }

    /* on hover placeholder */

    input:hover::-webkit-input-placeholder, textarea:hover::-webkit-input-placeholder {
    color: #e2dedb;
    font-size: 0.875em;
    }

    input:hover:focus::-webkit-input-placeholder, textarea:hover:focus::-webkit-input-placeholder {
    color: #cbc6c1;
    }

    input:hover::-moz-placeholder, textarea:hover::-moz-placeholder {
    color: #e2dedb;
    font-size: 0.875em;
    }

    input:hover:focus::-moz-placeholder, textarea:hover:focus::-moz-placeholder {
    color: #cbc6c1;
    }

    input:hover::placeholder, textarea:hover::placeholder {
    color: #e2dedb;
    font-size: 0.875em;
    }

    input:hover:focus::placeholder, textarea:hover:focus::placeholder {
    color: #cbc6c1;
    }

    input:hover::placeholder, textarea:hover::placeholder {
    color: #e2dedb;
    font-size: 0.875em;
    }

    input:hover:focus::-ms-placeholder, textarea:hover::focus:-ms-placeholder {
    color: #cbc6c1;
    }

    /*body {
    font-family: 'Lato', sans-serif;
    background: #e2dedb;
    color: #b3aca7;
    }*/

    header {
    position: relative;
    margin: 100px 0 25px 0;
    font-size: 2.3em;
    text-align: center;
    letter-spacing: 7px;
    }

    #form {
    position: absolute;
    top:30%;
        left:30%;
    width:800px;
    /*margin: 30px auto 300px auto;*/
    }

    input {
    font-family: 'Lato', sans-serif;
    font-size: 0.875em;
    width: 650px;
    height: 80px;
    padding: 0px 15px 0px 15px;
    
    background: transparent;
    outline: none;
    color: #726659;
    
    border: solid 1px #b3aca7;
    border-bottom: none;
    
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    }

    input:hover {
    background: #b3aca7;
    color: #e2dedb;
    }

    textarea {
    width: 650px;
    max-width: 650px;
    height: 150px;
    max-height: 150px;
    padding: 15px;
    
    background: transparent;
    outline: none;
    
    color: #726659;
    font-family: 'Lato', sans-serif;
    font-size: 0.875em;
    
    border: solid 1px #b3aca7;
    border-bottom: none;
    
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    }

    textarea:hover {
    background: #b3aca7;
    color: #e2dedb;
    }

    #submit {
    width: 471px;
    
    padding: 0;
    margin: -5px 0px 0px 0px;
    
    font-family: 'Lato', sans-serif;
    font-size: 0.875em;
    color: #b3aca7;
    
    outline:none;
    cursor: pointer;
    
    border: solid 1px #b3aca7;
    border-top: none;
    border-bottom: solid;
    }

    #submit:hover {
    color: #e2dedb;
    }
    select.selectOne{
        position:absolute;
        top:8%;
        left: 69%;
    }select.selectTwo{
        position:absolute;
        top:28.5%;
        left: 69%;
    }
</style>
    <body>
        <div id="container">
            <table width=100% >
                <tr><td align="left" style="padding-left:50px" width="600"><a href="page1_home.php"><img src="volley.png" width="100" height="100"></a></td>
                <td valign="bottom" width="200"><b><font class="text1" size="5"><a href="page2_information.php">Information</a></b></td>
                <td valign="bottom" width="150"><b><p style="text-shadow: 0.1em 3px 6px grey"><font size="5">Apply</b></td>
                <td valign="bottom" width="200"><b><font size="5"><a href="page4_contactus.php">Contact&nbspUs</a></b></td>
                <td align="right" style="padding-right:50px"><a href="page5_mypage.php"><img src="head.png" width="100" height="100"></a></td>
                </tr>

            </table>
            <hr class="style-one">
            
            <form id="form" action="page3_applyconfirm.php" class="topBefore" method="POST">
  
                <input type="text" name="originalDate" placeholder="ORIGINAL DATE(111/1/1 B)" onfocus="(this.type='date')" require>
                <select class="selectOne" name="originalPeriod">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select> <br>
                <input type="text" name="newDate" placeholder="NEW DATE(111/1/2 C)" onfocus="(this.type='date')" require>
                <select class="selectTwo" name="newPeriod">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select> <br>
                <textarea type="text" name="reason" placeholder="REASONS" require></textarea>
                <input type="submit" value="submit">
                        
            </form>
        </div>
    </body>
</html>