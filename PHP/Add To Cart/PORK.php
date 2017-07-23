<?php
	include "SetQuantity.php";
?>


<link rel="stylesheet" type="text/css" href="../../CSS/ProTabStyle.css" />

<center>
<div>
<h3><?php if(isset($message)){ echo $message; } ?></h3>
<caption><font face="sans-serif" size="7" color="#FF0000">PORK FOODS</font></caption>
<table cellspacing="0px" cellpadding="10px" border="0px" id="menu">
	<tr>
    	<th colspan="2" align="center" valign="top"><label>SPARE RIBS SPECIAL</label></th>
        <th colspan="2" align="center" valign="top"><label>CHILLI PORK</label></th>
        <th colspan="2" align="center" valign="top"><label>SWEET AND SOUR PORK</label></th>
        <th colspan="2" align="center" valign="top"><label>BLACK BEAN PORK</label></th>
    </tr>
    
    <tr>
    	<td colspan="2"><img src="../../Images/PORK/SPARE RIBS SPECIAL/SPARE RIBS SPECIAL  3.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/PORK/CHILLI PORK/CHILLI PORK  4.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/PORK/SWEET AND SOUR PORK/SWEET AND SOUR PORK 3.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/PORK/BLACK BEAN PORK/BLACK BEAN PORK   4.jpg" width="200px" height="150px"></td>
    </tr>
    
    <tr>
    	<td><label>Rs. 340.00/=</label></td>
        <td><a href="Basic.php?page=PORK&action=add&id=20"><input type="button" name="b20" value="Add To Cart"></a></td>
        <td><label>Rs. 340.00/=</label></td>
        <td><a href="Basic.php?page=PORK&action=add&id=21"><input type="button" name="b21" value="Add To Cart"></a></td>
        <td><label>Rs. 340.00/=</label></td>
        <td><a href="Basic.php?page=PORK&action=add&id=22"><input type="button" name="b22" value="Add To Cart"></a></td>
        <td><label>Rs. 340.00/=</label></td>
        <td><a href="Basic.php?page=PORK&action=add&id=23"><input type="button" name="b23" value="Add To Cart"></a></td>
    </tr>
    
    <tr>
    	<td><a href="Basic.php?page=RICE_NOODLES"><input type="button" name="RICE_NOODLES" value="RICE / NOODLES" /></a></td>
    	<td><a href="Basic.php?page=DESSERT"><input type="button" name="DESSERT" value="DESSERT" /></a></td>
    	<td><a href="Basic.php?page=CHICKEN"><input type="button" name="CHICKEN" value="CHICKEN" /></a></td>
    	<td><a href="Basic.php?page=BEEF"><input type="button" name="BEEF" value="BEEF" /></a></td>
    	<td><a href="Basic.php?page=VEGETABLE"><input type="button" name="VEGETABLE" value="VEGETABLE" /></a></td>
    	<td><a href="Basic.php?page=FISH"><input type="button" name="FISH" value="FISH" /></a></td>
    	<td><a href="Basic.php?page=CUTTLE FISH"><input type="button" name="CUTTLE FISH" value="CUTTLE FISH" /></a></td>
    	<td><a href="Basic.php?page=PRAWNS"><input type="button" name="PRAWNS" value="PRAWNS" /></a></td>
    </tr>
</table>
</div>
</center>