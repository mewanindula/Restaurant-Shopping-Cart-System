<?php
	include "SetQuantity.php";
?>


<link rel="stylesheet" type="text/css" href="../../CSS/ProTabStyle.css" />

<center>
<div>
<h3><?php if(isset($message)){ echo $message; } ?></h3>
<caption><font face="sans-serif" size="7" color="#FF0000">CUTTLE FISH FOODS</font></caption>
<table cellspacing="0px" cellpadding="10px" border="0px" id="menu">
	<tr>
    	<th colspan="2" align="center" valign="top"><label>BLACK BEAN CUTTLE FISH</label></th>
        <th colspan="2" align="center" valign="top"><label>HOT BUTTER CUTTLE FISH</label></th>
        <th colspan="2" align="center" valign="top"><label>CUTTLE FISH WITH SALAD</label></th>
        <th colspan="2" align="center" valign="top"><label>CUTTLE FISH VEGETABLE</label></th>
    </tr>
    
    <tr>
    	<td colspan="2"><img src="../../Images/CUTTLE FISH/BLACK BEAN CUTTLE FISH/BLACK BEAN CUTTLE FISH  1.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/CUTTLE FISH/HOT BUTTER CUTTLE FISH/HOT BUTTER CUTTLE FISH   1.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/CUTTLE FISH/CUTTLE FISH WITH SALAD/CUTTLE FISH WITH SALAD   1.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/CUTTLE FISH/CUTTLE FISH VEGETABLE/CUTTLE FISH VEGETABLE   1.jpg" width="200px" height="150px"></td>
    </tr>
    
    <tr>
    	<td><label>Rs. 390.00/=</label></td>
        <td><a href="Basic.php?page=CUTTLE FISH&action=add&id=32"><input type="button" name="b32" value="Add To Cart"></a></td>
        <td><label>Rs. 390.00/=</label></td>
        <td><a href="Basic.php?page=CUTTLE FISH&action=add&id=33"><input type="button" name="b33" value="Add To Cart"></a></td>
        <td><label>Rs. 390.00/=</label></td>
        <td><a href="Basic.php?page=CUTTLE FISH&action=add&id=34"><input type="button" name="b34" value="Add To Cart"></a></td>
        <td><label>Rs. 390.00/=</label></td>
        <td><a href="Basic.php?page=CUTTLE FISH&action=add&id=35"><input type="button" name="b35" value="Add To Cart"></a></td>
    </tr>
    
    <tr>
    	<td><a href="Basic.php?page=RICE_NOODLES"><input type="button" name="RICE_NOODLES" value="RICE / NOODLES" /></a></td>
    	<td><a href="Basic.php?page=DESSERT"><input type="button" name="DESSERT" value="DESSERT" /></a></td>
    	<td><a href="Basic.php?page=CHICKEN"><input type="button" name="CHICKEN" value="CHICKEN" /></a></td>
    	<td><a href="Basic.php?page=PORK"><input type="button" name="PORK" value="PORK" /></a></td>
    	<td><a href="Basic.php?page=VEGETABLE"><input type="button" name="VEGETABLE" value="VEGETABLE" /></a></td>
    	<td><a href="Basic.php?page=FISH"><input type="button" name="FISH" value="FISH" /></a></td>
    	<td><a href="Basic.php?page=BEEF"><input type="button" name="BEEF" value="BEEF" /></a></td>
    	<td><a href="Basic.php?page=PRAWNS"><input type="button" name="PRAWNS" value="PRAWNS" /></a></td>
    </tr>
</table>
</div>
</center>