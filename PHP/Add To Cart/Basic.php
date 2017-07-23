<?php
	session_start();
	include "connection.php";
	
	//Check the Page Is Set
	if(isset($_GET['page']))
	{
		$pages = array("RICE_NOODLES","DESSERT","CHICKEN","BEEF","PORK","VEGETABLE","FISH","CUTTLE FISH","PRAWNS","Cart");
		
		//Check The Page in the array
		if(in_array(($_GET['page']),$pages))
		{
			$page = ($_GET['page']);
		}
		else
		{
			$page = "CHICKEN";
		}
		//End Check The Page in the array
	}
	else
	{
		$page = "CHICKEN";
	}
	//End Check the Page Is Set
	
	//Check the Page Is Set
	if(isset($_GET['dis']))
	{
		$pages = array("display","UserDetails");
		
		//Check The Page in the array
		if(in_array(($_GET['dis']),$pages))
		{
			$dis = ($_GET['dis']);
		}
		else
		{
			$dis = "display";
		}
		//End Check The Page in the array
	}
	else
	{
		$dis = "display";
	}
	//End Check the Page Is Set

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
    <link rel="stylesheet" href="../../CSS/Style.css">
</head>
<body>
	<div id="main">
    	<div id="sub1"><?php include $page.".php"; ?></div>
        <div id="sub2"><?php include $dis.".php"; ?></div>
    </div>
</body>
</html>