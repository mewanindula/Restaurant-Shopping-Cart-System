<?php
	include "SetQuantity.php";
?>


<link rel="stylesheet" type="text/css" href="../../CSS/ProTabStyle.css" />

<center>
<div>
<h3><?php if(isset($message)){ echo $message; } ?></h3>
<caption><font face="sans-serif" size="7" color="#FF0000">VEGETABLE FOODS</font></caption>
<table cellspacing="0px" cellpadding="10px" border="0px" id="menu">
	<tr>
    	<th colspan="2" align="center" valign="top"><label>BEAN CURD CABBAGE</label></th>
        <th colspan="2" align="center" valign="top"><label>GRLIC SPINACH</label></th>
        <th colspan="2" align="center" valign="top"><label>FRIED MIXED VEGETABLE</label></th>
        <th colspan="2" align="center" valign="top"><label>FRIED KANGKUNG</label></th>
    </tr>
    
    <tr>
    	<td colspan="2"><img src="../../Images/VEGETABLE/BEAN CURD CABBAGE/BEAN CURD CABBAGE  1.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/VEGETABLE/GRLIC SPINACH/GRLIC SPINACH    2.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/VEGETABLE/FRIED MIXED VEGETABLE/FRIED MIXED VEGETABLE 2.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/VEGETABLE/FRIED KANGKUNG/FRIED KANGKUNG   2.jpg" width="200px" height="150px"></td>
    </tr>
    
    <tr>
    	<td><label>Rs. 250.00/=</label></td>
        <td><a href="Basic.php?page=VEGETABLE&action=add&id=24"><input type="button" name="b24" value="Add To Cart"></a></td>
        <td><label>Rs. 250.00/=</label></td>
        <td><a href="Basic.php?page=VEGETABLE&action=add&id=25"><input type="button" name="b25" value="Add To Cart"></a></td>
        <td><label>Rs. 250.00/=</label></td>
        <td><a href="Basic.php?page=VEGETABLE&action=add&id=26"><input type="button" name="b26" value="Add To Cart"></a></td>
        <td><label>Rs. 250.00/=</label></td>
        <td><a href="Basic.php?page=VEGETABLE&action=add&id=27"><input type="button" name="b27" value="Add To Cart"></a></td>
    </tr>
    
    <tr>
    	<td><a href="Basic.php?page=RICE_NOODLES"><input type="button" name="RICE_NOODLES" value="RICE / NOODLES" /></a></td>
    	<td><a href="Basic.php?page=DESSERT"><input type="button" name="DESSERT" value="DESSERT" /></a></td>
    	<td><a href="Basic.php?page=CHICKEN"><input type="button" name="CHICKEN" value="CHICKEN" /></a></td>
    	<td><a href="Basic.php?page=PORK"><input type="button" name="PORK" value="PORK" /></a></td>
    	<td><a href="Basic.php?page=BEEF"><input type="button" name="BEEF" value="BEEF" /></a></td>
    	<td><a href="Basic.php?page=FISH"><input type="button" name="FISH" value="FISH" /></a></td>
    	<td><a href="Basic.php?page=CUTTLE FISH"><input type="button" name="CUTTLE FISH" value="CUTTLE FISH" /></a></td>
    	<td><a href="Basic.php?page=PRAWNS"><input type="button" name="PRAWNS" value="PRAWNS" /></a></td>
    </tr>
</table>
</div>
</center>