<?php
	
	if(isset($_POST['submit']))
	{
		foreach($_POST as $id => $value)
		{
			if($_POST[$id]<=0)
			{
				unset($_SESSION['cart'][$id]);
			}
			else
			{
				$_SESSION['cart'][$id]['quantity'] = $value;
			}
		}
	}
	error_reporting(0);
	
	if(isset($_POST['reset']))
	{
		foreach($_POST as $id => $val)
		{
			unset($_SESSION['cart'][$id]);
		}
	}
?>

<style type="text/css">
#cart
{
	width:850px;
}

#cart th
{
	padding:10px;
	background-color:#48577d;
	color:#FFF;
	text-align:center;
	font-weight:bold;
}

#cart td
{
	padding:5px;
	width:auto;
	text-align:left;
}

#cart tr
{
	background-color:#d3dcf2;
}
</style>




<h1><font face="sans-serif" color="#FF0000">Cart View</font></h1><br />
<a href="Basic.php?page=RICE_NOODLES"><input type="button" name="gotoproduct" value="Go To The Products Page" /></a><br /><br />
<form action="Basic.php?page=Cart" method="post">
<table border="1px" cellpadding="10px" cellspacing="0px" id="cart">
	<tr>
		<th>Food Name</th>
        <th>Quantity</th>
        <th>Price Per Item</th>
        <th>Total Cost</th>
    </tr>
    
    <?php
		
		$sql = "SELECT * FROM menu WHERE id IN (";
			foreach($_SESSION['cart'] as $id => $value)
			{
				$sql .= $id.",";
			}
			$sql = substr($sql,0,-1).") ORDER BY name ASC";
			
			$query = mysql_query($sql);
			
			$total = 0;
			
			if(!empty($query))
			{
				while($row = mysql_fetch_array($query))
				{
					$subtotal = $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
					$total += $subtotal;
					?>
                    
                    <tr>
                    	<td><?php echo $row['name']; ?></td>
                        <td><input type="text" name="<?php echo $row['id']; ?>" size="5" value="<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?>"></td>
                        <td><?php echo "Rs. ".$row['price']; ?></td>
                        <td><?php echo "Rs. ".$_SESSION['cart'][$row['id']]['quantity']*$row['price'].".00"; ?></td>
                    </tr>
                    
                    <?php
				}
			}
			else
			{
				echo '<br><i><font face="sans-serif" size="3" color="#33FF66">You Need To Add Items For Them To Be Visible Here</font></i><br><br>';
			}
			?>
            
            <tr>
            	<td></td>
                <td></td>
                <td>Total : </td>
                <td><?php echo "Rs. ".$total.".00/="; ?></td>
            </tr>
</table>
<br>
<input type="submit" name="submit" value="Update Cart">&nbsp;&nbsp;&nbsp;<input type="submit" name="reset" value="Cart Can Be Empty">&nbsp;&nbsp;&nbsp;
</form>
<br />
<a href="Basic.php?dis=UserDetails&page=Cart"><input type="button" name="send" value="Send Order" /></a>
<br>
<p><font face="sans-serif" size="3" color="#FFCC00">To Remove An Item, Set Quantity To 0</font></p>