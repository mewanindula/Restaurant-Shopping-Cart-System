<?php
	include "SetQuantity.php";
?>


<link rel="stylesheet" type="text/css" href="../../CSS/ProTabStyle.css" />

<center>
<div>
<h3><?php if(isset($message)){ echo $message; } ?></h3>
<caption><font face="sans-serif" size="7" color="#FF0000">CHICKEN FOODS</font></caption>
<table cellspacing="0px" cellpadding="10px" border="0px" id="menu">
	<tr>
    	<th colspan="2" align="center" valign="top"><label>CHICKEN WITH CASHEW NUTS</label></th>
        <th colspan="2" align="center" valign="top"><label>SPICY CHICKEN</label></th>
        <th colspan="2" align="center" valign="top"><label>LEMON CHICKEN</label></th>
        <th colspan="2" align="center" valign="top"><label>CHILLI CHICKEN</label></th>
    </tr>
    
    <tr>
    	<td colspan="2"><img src="../../Images/CHICKEN/CHICKEN WITH CASHEW NUTS/CHICKEN WITH CASHEW NUTS 1.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/CHICKEN/SPICY CHICKEN/SPICY CHICKEN     3.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/CHICKEN/LEMON CHICKEN/LEMON CHICKEN 1.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/CHICKEN/CHILLI CHICKEN/CHILLI CHICKEN 3.jpg" width="200px" height="150px"></td>
    </tr>
    
    <tr>
    	<td><label>Rs. 440.00/=</label></td>
        <td><a href="Basic.php?page=CHICKEN&action=add&id=12"><input type="button" name="b12" value="Add To Cart"></a></td>
        <td><label>Rs. 380.00/=</label></td>
        <td><a href="Basic.php?page=CHICKEN&action=add&id=13"><input type="button" name="b13" value="Add To Cart"></a></td>
        <td><label>Rs. 380.00/=</label></td>
        <td><a href="Basic.php?page=CHICKEN&action=add&id=14"><input type="button" name="b14" value="Add To Cart"></a></td>
        <td><label>Rs. 380.00/=</label></td>
        <td><a href="Basic.php?page=CHICKEN&action=add&id=15"><input type="button" name="b15" value="Add To Cart"></a></td>
    </tr>
    
    <tr>
    	<td><a href="Basic.php?page=RICE_NOODLES"><input type="button" name="RICE_NOODLES" value="RICE / NOODLES" /></a></td>
    	<td><a href="Basic.php?page=DESSERT"><input type="button" name="DESSERT" value="DESSERT" /></a></td>
    	<td><a href="Basic.php?page=BEEF"><input type="button" name="BEEF" value="BEEF" /></a></td>
    	<td><a href="Basic.php?page=PORK"><input type="button" name="PORK" value="PORK" /></a></td>
    	<td><a href="Basic.php?page=VEGETABLE"><input type="button" name="VEGETABLE" value="VEGETABLE" /></a></td>
    	<td><a href="Basic.php?page=FISH"><input type="button" name="FISH" value="FISH" /></a></td>
    	<td><a href="Basic.php?page=CUTTLE FISH"><input type="button" name="CUTTLE FISH" value="CUTTLE FISH" /></a></td>
    	<td><a href="Basic.php?page=PRAWNS"><input type="button" name="PRAWNS" value="PRAWNS" /></a></td>
    </tr>
</table>
</div>
</center>