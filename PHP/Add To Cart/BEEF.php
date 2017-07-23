<?php
	include "SetQuantity.php";
?>

<link rel="stylesheet" type="text/css" href="../../CSS/ProTabStyle.css" />

<center>
<div>
<h3><?php if(isset($message)){ echo $message; } ?></h3>
<caption><font face="sans-serif" size="7" color="#FF0000">BEEF FOODS</font></caption>
<table cellspacing="0px" cellpadding="10px" border="0px" id="menu">
	<tr>
    	<th colspan="2" align="center" valign="top"><label>CHILLI BEEF</label></th>
        <th colspan="2" align="center" valign="top"><label>CRISPY BEEF SZECHUAN STYLE</label></th>
        <th colspan="2" align="center" valign="top"><label>KANGKUNG BEEF</label></th>
        <th colspan="2" align="center" valign="top"><label>OYSTER BEEF</label></th>
    </tr>
    
    <tr>
    	<td colspan="2"><img src="../../Images/BEEF/CHILLI BEEF/CHILLI BEEF 1.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/BEEF/CRISPY BEEF SZECHUAN STYLE/CRISPY BEEF SZECHUAN STYLE    2.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/BEEF/KANGKUNG BEEF/KANGKUNG BEEF2.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/BEEF/OYSTER BEEF/OYSTER BEEF 1.jpg" width="200px" height="150px"></td>
    </tr>
    
    <tr>
    	<td><label>Rs. 340.00/=</label></td>
        <td><a href="Basic.php?page=BEEF&action=add&id=16"><input type="button" name="b1" value="Add To Cart"></a></td>
        <td><label>Rs. 340.00/=</label></td>
        <td><a href="Basic.php?page=BEEF&action=add&id=17"><input type="button" name="b2" value="Add To Cart"></a></td>
        <td><label>Rs. 340.00/=</label></td>
        <td><a href="Basic.php?page=BEEF&action=add&id=18"><input type="button" name="b3" value="Add To Cart"></a></td>
        <td><label>Rs. 320.00/=</label></td>
        <td><a href="Basic.php?page=BEEF&action=add&id=19"><input type="button" name="b4" value="Add To Cart"></a></td>
    </tr>
    
    <tr>
    	<td><a href="Basic.php?page=RICE_NOODLES"><input type="button" name="RICE_NOODLES" value="RICE / NOODLES" /></a></td>
    	<td><a href="Basic.php?page=DESSERT"><input type="button" name="DESSERT" value="DESSERT" /></a></td>
    	<td><a href="Basic.php?page=CHICKEN"><input type="button" name="CHICKEN" value="CHICKEN" /></a></td>
    	<td><a href="Basic.php?page=PORK"><input type="button" name="PORK" value="PORK" /></a></td>
    	<td><a href="Basic.php?page=VEGETABLE"><input type="button" name="VEGETABLE" value="VEGETABLE" /></a></td>
    	<td><a href="Basic.php?page=FISH"><input type="button" name="FISH" value="FISH" /></a></td>
    	<td><a href="Basic.php?page=CUTTLE FISH"><input type="button" name="CUTTLE FISH" value="CUTTLE FISH" /></a></td>
    	<td><a href="Basic.php?page=PRAWNS"><input type="button" name="PRAWNS" value="PRAWNS" /></a></td>
    </tr>
</table>
</div>
</center>