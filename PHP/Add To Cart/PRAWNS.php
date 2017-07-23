<?php
	include "SetQuantity.php";
?>


<link rel="stylesheet" type="text/css" href="../../CSS/ProTabStyle.css" />

<center>
<div>
<h3><?php if(isset($message)){ echo $message; } ?></h3>
<caption><font face="sans-serif" size="7" color="#FF0000">PRAWNS FOODS</font></caption>
<table cellspacing="0px" cellpadding="10px" border="0px" id="menu">
	<tr>
    	<th colspan="2" align="center" valign="top"><label>MANCHURIAN</label></th>
        <th colspan="2" align="center" valign="top"><label>HOT GARLICK PRAWNS</label></th>
        <th colspan="2" align="center" valign="top"><label>SINGAPURE CHILLI PRAWNS</label></th>
        <th colspan="2" align="center" valign="top"><label>LEMON PRAWNS</label></th>
    </tr>
    
    <tr>
    	<td colspan="2"><img src="../../Images/Image Slider/img5.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/Image Slider/img4.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/Image Slider/img3.jpg" width="200px" height="150px"></td>
        <td colspan="2"><img src="../../Images/Image Slider/img2.jpg" width="200px" height="150px"></td>
    </tr>
    
    <tr>
    	<td><label>Rs. 480.00/=</label></td>
        <td><a href="Basic.php?page=PRAWNS&action=add&id=36"><input type="button" name="b36" value="Add To Cart"></a></td>
        <td><label>Rs. 480.00/=</label></td>
        <td><a href="Basic.php?page=PRAWNS&action=add&id=37"><input type="button" name="b37" value="Add To Cart"></a></td>
        <td><label>Rs. 480.00/=</label></td>
        <td><a href="Basic.php?page=PRAWNS&action=add&id=38"><input type="button" name="b38" value="Add To Cart"></a></td>
        <td><label>Rs. 480.00/=</label></td>
        <td><a href="Basic.php?page=PRAWNS&action=add&id=39"><input type="button" name="b39" value="Add To Cart"></a></td>
    </tr>
    
    <tr>
    	<td><a href="Basic.php?page=RICE_NOODLES"><input type="button" name="RICE_NOODLES" value="RICE / NOODLES" /></a></td>
    	<td><a href="Basic.php?page=DESSERT"><input type="button" name="DESSERT" value="DESSERT" /></a></td>
    	<td><a href="Basic.php?page=CHICKEN"><input type="button" name="CHICKEN" value="CHICKEN" /></a></td>
    	<td><a href="Basic.php?page=PORK"><input type="button" name="PORK" value="PORK" /></a></td>
    	<td><a href="Basic.php?page=VEGETABLE"><input type="button" name="VEGETABLE" value="VEGETABLE" /></a></td>
    	<td><a href="Basic.php?page=FISH"><input type="button" name="FISH" value="FISH" /></a></td>
    	<td><a href="Basic.php?page=CUTTLE FISH"><input type="button" name="CUTTLE FISH" value="CUTTLE FISH" /></a></td>
    	<td><a href="Basic.php?page=BEEF"><input type="button" name="BEEF" value="BEEF" /></a></td>
    </tr>
</table>
</div>
</center>