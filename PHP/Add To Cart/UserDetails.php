<form method="post" action="Basic.php?dis=display">
<table border="0px" cellpadding="5px" cellspacing="0px">
	<tr>
    	<td valign="middle" align="left"><label>First Name</label></td>
        <td>:</td>
        <td valign="middle" align="left"><input type="text" name="fname"></td>
    </tr>
    
    <tr>
    	<td valign="middle" align="left"><label>Last Name</label></td>
        <td>:</td>
        <td valign="middle" align="left"><input type="text" name="lname"></td>
    </tr>
    
    <tr>
    	<td valign="middle" align="left"><label>Landphone Number</label></td>
        <td>:</td>
        <td valign="middle" align="left"><input type="text" name="lnum"></td>
    </tr>
    
    <tr>
    	<td valign="middle" align="left"><label>Mobile Phone Number</label></td>
        <td>:</td>
        <td valign="middle" align="left"><input type="text" name="mnum"></td>
    </tr>
    
    <tr>
    	<td valign="middle" align="left"><label>Email Address</label></td>
        <td>:</td>
        <td valign="middle" align="left"><input type="text" name="eadd"></td>
    </tr>
    
    <tr>
    	<td valign="top" align="left"><label>Permenent Address</label></td>
        <td valign="top" align="left">:</td>
        <td valign="middle" align="left"><input type="text" name="paddn" value="No"><br><input type="text" name="paddr" value="Road"><br><input type="text" name="paddc" value="City"></td>
    </tr>
    <tr>
    	<td valign="top" align="left"><label>Order</label></td>
        <td valign="top" align="left">:</td>
        <td valign="middle" align="left"><textarea name="order" cols="44" rows="10" readonly name="readonly"><?php
        	$sql = "SELECT * FROM menu WHERE id IN (";
				foreach($_SESSION['cart'] as $id => $value)
				{
					$sql .= $id.",";
				}
				$sql = substr($sql,0,-1).") ORDER BY name ASC";
			
			$query = mysql_query($sql);
			
			if(mysql_num_rows($query)!=0)
			{
				while($row = mysql_fetch_array($query))
				{
					echo $row['name']."\t".$_SESSION['cart'][$row['id']]['quantity'].",\n";
				}
			}
			else
			{
				echo "You Need To Add Items For Them To Be Visible Here";
			}
		?>
        </textarea></td>
    </tr>
    
    <tr>
    	<td colspan="3" valign="middle" align="left"><textarea name="total" cols="44" rows="10" readonly name="readonly" style="display:none"><?php
        	$sql = "SELECT * FROM menu WHERE id IN (";
				foreach($_SESSION['cart'] as $id => $value)
				{
					$sql .= $id.",";
				}
				$sql = substr($sql,0,-1).") ORDER BY name ASC";
			
			$query = mysql_query($sql);
			
			$total = 0;
			
			if(mysql_num_rows($query)!=0)
			{
				while($row = mysql_fetch_array($query))
				{
					$subtotal = $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
					$total += $subtotal;
				}
				
				echo $total;
			}
			else
			{
				echo "You Need To Add Items For Them To Be Visible Here";
			}
		?>
        </textarea></td>
    
    <tr>
    	<td><input type="submit" name="sendorder" value="Send Order"></td>
        <td></td>
        <td><input type="reset" name="reset" value="Reset" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Basic.php?page=Cart&dis=display"><input type="button" name="back" value="Leave" /></a></td>
    
</table>
</form>