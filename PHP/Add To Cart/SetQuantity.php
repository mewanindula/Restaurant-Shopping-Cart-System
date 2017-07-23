<?php
	//check Is Add To Cart Set
	if(isset($_GET['action']) && $_GET['action']=="add")
	{
		$id = intval($_GET['id']);
		
		//Check Is The Id Is Set
		if(isset($_SESSION['cart'][$id]))
		{
			$_SESSION['cart'][$id]['quantity']++;
		}
		else
		{
			$sql = "SELECT * FROM menu WHERE id='$id'";
			
			$query = mysql_query($sql);
			
			//Check The Information About Coresponding To The Id
			if(mysql_num_rows($query)!=0)
			{
				$row = mysql_fetch_array($query);
				
				$_SESSION['cart'][$id] = array("quantity" => 1, "price" => $row['price']);
			}
			else
			{
				$message = '<font face="sans-serif" size="5" color="#FF0000">Your Choice Is Incorrect</font>';
			}
			//End Check The Information About Coresponding To The Id
			
		}
		//End Check Is The Id Is Set
	}
	//End of check Is Add To Cart Set

?>