<h3><font face="sans-serif" size="5" color="#FF0000">Cart</font></h3>

<?php
	if(isset($_POST['sendorder']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$lnum = $_POST['lnum'];
		$mnum = $_POST['mnum'];
		$eadd = $_POST['eadd'];
		$paddn = $_POST['paddn'];
		$paddr = $_POST['paddr'];
		$paddc = $_POST['paddc'];
		$order = $_POST['order'];
		$total = $_POST['total'];
		$padd = $paddn.", ".$paddr.", ".$paddc.".";
		date_default_timezone_set("Asia/Colombo");
		$date = date("Y-m-d");
		$time = date("H:i:s");
		
		
		if($fname && $lname && ($lnum || $mnum) && ($eadd || ($paddn && $paddr && $paddc)) && $total)
		{
			$sql = "SELECT * FROM orders WHERE FirstName='$fname' AND LastName='$lname' AND PermenentAddress='$padd' AND Date='$date'";
			
			$query = mysql_query($sql);
			
			$row = mysql_fetch_array($query);
			
			if(mysql_num_rows($query)!=0)
			{
				$timedb = $row['Time'];
				
				$tm = explode(":",$time);
				$timenow = ($tm[0]*60)+($tm[1]);
				
				$tm1 = explode(":",$timedb);
				$timeindb = ($tm1[0]*60)+($tm1[1]);
				
				$different = $timenow - $timeindb;

				if($total==0)
				{
					echo "<script type='text/javascript'>alert('You Must Add Some Foods!');document.location='Basic.php?page=Cart&dis=display';</script>";
				}
				else if(($date==$row['Date']) && ($different<=60 && $different>=0))
				{
					
					$sql1 = "UPDATE `orders` SET `LandPhoneNumber` = '$lnum', `MobilePhoneNumber` = '$mnum', `EmailAddress` = '$eadd',`PermenentAddress` = '$padd',`Order` = '$order',`Total` = '$total',`Date` = '$date'  WHERE `FirstName`='$fname' AND `LastName`='$lname' AND `PermenentAddress`='$padd' AND `Date`='$date' AND `Time`='$timedb'";
					
					$query1 = mysql_query($sql1);
					
					echo "<script type='text/javascript'>alert('Your Order Was Changed!');document.location='Basic.php?dis=display';</script>";
					
					unset($_SESSION['cart']);
				}
				else
				{
					$sql1 = "INSERT INTO orders VALUES('','$fname','$lname','$lnum','$mnum','$eadd','$padd','$order','$total','$date','$time')";
					
					$query = mysql_query($sql1);
					
					echo "<script type='text/javascript'>alert('Your Order Was Send!!');document.location='Basic.php?dis=display';</script>";
					
					unset($_SESSION['cart']);
				}
				
			}
			else
			{
				if($total==0)
				{
					echo "<script type='text/javascript'>alert('You Must Add Some Foods!');document.location='Basic.php?page=Cart&dis=display';</script>";
				}
				else
				{
					$sql1 = "INSERT INTO orders VALUES('','$fname','$lname','$lnum','$mnum','$eadd','$padd','$order','$total','$date','$time')";
					
					$query = mysql_query($sql1);
					
					echo "<script type='text/javascript'>alert('Your Order Was Send!');document.location='Basic.php?dis=display';</script>";
					
					unset($_SESSION['cart']);
				}
			}
				
		}
		else
		{
			echo "<script type='text/javascript'>alert('Please Fill Records');document.location='Basic.php?page=Cart&dis=UserDetails';</script>";
		}
	}error_reporting(0);
?>


<?php
	
	//Check Cart Is Set
	if(isset($_SESSION['cart']))
	{
		$sql = "SELECT * FROM menu WHERE id IN (";
			foreach($_SESSION['cart'] as $id => $value)
			{
				$sql .= $id.",";
			}
			$sql = substr($sql,0,-1).") ORDER BY name ASC";
			
			$query = mysql_query($sql);
			
			//Check Cart Is Empty
			if(!empty($query))
			{
			?>
            	<table cellpadding="5px" cellspacing="0px">
                <?php
				while($row = mysql_fetch_array($query))
				{
				?>
                	<tr>
                    	<td><?php echo $row['name']; ?></td>
                        <td width="30px" align="center">&times;</td>
                        <td><?php echo $_SESSION['cart'][$row['id']]['quantity']; ?></td>
                    </tr>
                    <?php
				}
				?>
                </table>
                <?php
			}
			else
			{
				echo '<i><font face="sans-serif" size="3" color="#0000FF">Your Cart Is Empty<br>Please Add Some Items</i></font>';
			}
			//End Check Cart Is Empty
	}
	else
	{
		echo '<i><font face="sans-serif" size="3" color="#0000FF">You Did not Add Any Items Yet</i></font>';
	}
	//End Check Cart Is Set
?>

	<br><br />
	<a href="Basic.php?page=Cart"><input type="button" name="gotocart" value="Go To Cart" /></a>