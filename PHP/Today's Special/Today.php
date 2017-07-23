<?php
	
	date_default_timezone_set("Asia/Colombo");
	$today = date("l");
	$date = date("l d/m/Y");
	
	echo "<font color='#00FF66' size='2'>$date</font><br>";
	
	switch($today)
	{
		case "Monday":
		{
			echo "<img src='../../Images/Image Slider/img7.jpg' width='198px' height='150px'>";
		}
		break;
		
		case "Tuesday":
		{
			echo "<img src='../../Images/Image Slider/img6.jpg' width='198px' height='150px'>";
		}
		break;
		
		case "Wednesday":
		{
			echo "<img src='../../Images/Image Slider/img5.jpg' width='198px' height='150px'>";
		}
		break;
		
		case "Thursday":
		{
			echo "<img src='../../Images/Image Slider/img4.jpg' width='198px' height='150px'>";
		}
		break;
		
		case "Friday":
		{
			echo "<img src='../../Images/Image Slider/img3.jpg' width='198px' height='150px'>";
		}
		break;
		
		case "Saturday":
		{
			echo "<img src='../../Images/Image Slider/img2.jpg' width='198px' height='150px'>";
		}
		break;
		
		default:
		{
			echo "<img src='../../Images/Image Slider/img1.jpg' width='198px' height='150px'>";
		}
	}
	
?>