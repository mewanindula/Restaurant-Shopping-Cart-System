<?php
	include "SetQuantity.php";
?>


<link rel="stylesheet" type="text/css" href="../../CSS/ProTabStyle.css" />

<center>
<div>
<h3><?php if(isset($message)){ echo $message; } ?></h3>
<caption><font face="sans-serif" size="7" color="#FF0000">FISH FOODS</font></caption>
<table cellspacing="0px" cellpadding="10px" border="0px" id="menu">
	<tr>
    	<th colspan="2" align="center" valign="top"><label>SPICY CHILLI FISH</label></th>
        <th colspan="2" align="center" valign="top"><label>FRIED POMFRET</label></th>
        <th colspan="2" align="center" valign="top"><label>SWEET AND SOUR FISH</label></th>
        <th colspan="2" align="center" valign="top"><label>GINGER FISH</label></th>
    </tr>
    
    <tr>
    	<td colspan="2"><img src="../../Images/FISH/SPICY CHILLI FISH/SPICY CHILLI FISH       3.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/FISH/FRIED POMFRET/FRIED POMFRET  3.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/FISH/SWEET AND SOUR FISH/SWEET AND SOUR FISH  1.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/FISH/GINGER FISH/GINGER FISH1.jpg" width="200px" height="150px"></td>
    </tr>
    
    <tr>
    	<td><label>Rs. 330.00/=</label></td>
        <td><a href="Basic.php?page=FISH&action=add&id=28"><input type="button" name="b28" value="Add To Cart"></a></td>
        <td><label>Rs. 330.00/=</label></td>
        <td><a href="Basic.php?page=FISH&action=add&id=29"><input type="button" name="b29" value="Add To Cart"></a></td>
        <td><label>Rs. 330.00/=</label></td>
        <td><a href="Basic.php?page=FISH&action=add&id=30"><input type="button" name="b30" value="Add To Cart"></a></td>
        <td><label>Rs. 330.00/=</label></td>
        <td><a href="Basic.php?page=FISH&action=add&id=31"><input type="button" name="b31" value="Add To Cart"></a></td>
    </tr>
    
    <tr>
    	<td><a href="Basic.php?page=RICE_NOODLES"><input type="button" name="RICE_NOODLES" value="RICE / NOODLES" /></a></td>
    	<td><a href="Basic.php?page=DESSERT"><input type="button" name="DESSERT" value="DESSERT" /></a></td>
    	<td><a href="Basic.php?page=CHICKEN"><input type="button" name="CHICKEN" value="CHICKEN" /></a></td>
    	<td><a href="Basic.php?page=PORK"><input type="button" name="PORK" value="PORK" /></a></td>
    	<td><a href="Basic.php?page=VEGETABLE"><input type="button" name="VEGETABLE" value="VEGETABLE" /></a></td>
    	<td><a href="Basic.php?page=BEEF"><input type="button" name="BEEF" value="BEEF" /></a></td>
    	<td><a href="Basic.php?page=CUTTLE FISH"><input type="button" name="CUTTLE FISH" value="CUTTLE FISH" /></a></td>
    	<td><a href="Basic.php?page=PRAWNS"><input type="button" name="PRAWNS" value="PRAWNS" /></a></td>
    </tr>
</table>
</div>
</center>