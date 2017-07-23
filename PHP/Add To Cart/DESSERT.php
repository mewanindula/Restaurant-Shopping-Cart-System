<?php
	include "SetQuantity.php";
?>


<link rel="stylesheet" type="text/css" href="../../CSS/ProTabStyle.css" />

<center>
<div>
<h3><?php if(isset($message)){ echo $message; } ?></h3>
<caption><font face="sans-serif" size="7" color="#FF0000">DESSERTS</font></caption>
<table cellspacing="0px" cellpadding="10px" border="0px" id="menu">
	<tr>
    	<th colspan="2" align="center" valign="top"><label>WATTALAPPAM</label></th>
        <th colspan="2" align="center" valign="top"><label>CREAM CARAMEL</label></th>
        <th colspan="2" align="center" valign="top"><label>CHOCOLATE MOUSSE</label></th>
        <th colspan="2" align="center" valign="top"><label>BISCUIT PUDDIND</label></th>
    </tr>
    
    <tr>
    	<td colspan="2"><img src="../../Images/DESSERT/WATTALAPPAM/WATALAPPAM 2.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/DESSERT/CREAM CARAMEL/CREAM CARAMEL 2.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/DESSERT/CHOCOLATE MOUSSE/CHOCOLATE MOUSSE 1.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/DESSERT/BISCUIT PUDDIND/BISCUIT PUDDIND 3.jpg" width="200px" height="150px"></td>
    </tr>
    
    <tr>
    	<td><label>Rs. 100.00/=</label></td>
        <td><a href="Basic.php?page=DESSERT&action=add&id=8"><input type="button" name="b8" value="Add To Cart"></a></td>
        <td><label>Rs. 100.00/=</label></td>
        <td><a href="Basic.php?page=DESSERT&action=add&id=9"><input type="button" name="b9" value="Add To Cart"></a></td>
        <td><label>Rs. 85.00/=</label></td>
        <td><a href="Basic.php?page=DESSERT&action=add&id=10"><input type="button" name="b10" value="Add To Cart"></a></td>
        <td><label>Rs. 85.00/=</label></td>
        <td><a href="Basic.php?page=DESSERT&action=add&id=11"><input type="button" name="b11" value="Add To Cart"></a></td>
    </tr>
    
    <tr>
    	<td><a href="Basic.php?page=RICE_NOODLES"><input type="button" name="RICE_NOODLES" value="RICE / NOODLES" /></a></td>
    	<td><a href="Basic.php?page=BEEF"><input type="button" name="BEEF" value="BEEF" /></a></td>
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