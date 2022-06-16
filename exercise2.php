<html>
<head>
<meta character = "utf-8"/>
<title>~墾丁三日遊~</title>
</head>
<body bgcolor="FFF5EE">
<H1><CENTER>墾丁三日遊<CENTER></H1>
<CENTER>
<marquee direction="right" height="30" scrollamount="5" behavior="alternate" bgcolor="ORANGE">!!!!!早鳥優惠 $2888 只到4/1!!!!!</marquee>
<image src="https://image.kkday.com/v2/image/get/w_960%2Cc_fit%2Cq_55%2Ct_webp/s1.kkday.com/product_6597/20191210105401_6zngz/jpg">

<H2>行程內容</H2>
<?php
    echo "<B>第一天</B><BR>";
    echo "<I>早上：由高雄火車站或小港機場到墾丁。→ 午餐。 (請參考高雄往墾丁的客運)<BR>
          中午：小灣戲水→ 青年活動中心→ 情人灘拾貝、觀落日→ 晚餐至恆春覓食。<BR>
          晚上：墾丁大街踩街→ 找店預約第二天水上活動→ 小灣觀星→ 回民宿裡睡覺。</I><BR>";

    echo "<B>第二天</B><BR>";
    echo "<I>早上：早餐→ 水上活動 (浮潛、乘坐香蕉船、水上摩托車…等)→ 午餐。<BR>
          中午：找店承租一天的摩托車(至明天中午)
                往西半島出發→ 南灣→ 瓊麻館→ 後壁湖碼頭→ 貓鼻頭→ 白砂→ 關山飛來石→ 關山日落→ 晚餐至恆春覓食。<BR>
          晚上：恆春→ 出火→ 回墾丁大街補踩街→ 鵝鑾鼻燈塔夜遊→ 龍磐觀星→ 回民宿做好夢…</I><BR>";
          
    echo "<B>第三天</B><BR>";
    echo "<I>早上：早餐→ 東半島之旅→ 船帆石→ 貝殼砂展示館→ 路過燈塔→ 聯勤→ 龍磐草原→ 風吹砂→ 港口吊橋→ 路過出火→ 恆春→ 墾丁<BR>
          中午：歸還摩托車→ 午餐 吃過飯，打包行李趕路回家</I><BR>";
    echo "<HR></HR>";

?>

<form name="registration" action="info.php" method="post">
Name: <input name="name" size="10"><br>
Birthday(ex:2000/02/12): <input type="text" name="birthday" size="10" maxlength=10><br>
Email: <input type="text" name="email" size="30"><br>
Phone Number: <input type="text" name="phone" size="10" maxlength=10><br>
Gender: <input type="radio" name="sex" value="male">Male
        <input type="radio" name="sex" value="female">Female
        <input type="radio" name="sex" value="unknown">Unknown<br><br>
T-shirt color: <input type="radio" name="color" value="white">White
               <input type="radio" name="color" value="blue">Blue
               <input type="radio" name="color" value="black">Black<br>

T-shirt size:
<select name="size" size="1">
<option value="XS">XS
<option value="S">S
<option value="M">M
<option value="L">L
<option value="XL">XL
</select><br>
<B>SIZE:</B>
<TABLE BORDER>
  <tr>
    <th>尺寸</th>
    <th>XS</th>
    <th>S</th>
    <th>M</th>
    <th>L</th>
    <th>XL</th>
  </tr>
  <tr>
    <td>胸寬</td>
    <td>44</td>
    <td>47</td>
    <td>50</td>
    <td>53</td>
    <td>56</td>
  </tr>
  <tr>
    <td>衣長</td>
    <td>64</td>
    <td>67</td>
    <td>70</td>
    <td>73</td>
    <td>75</td>
  </tr>
</table><br>
Tickets number(ex:3): <input name="ticket" size="10"><br><br>
<input type="submit" name="submit" value="SUBMIT"><Br>
</form>
</CENTER>

</body>
</html>