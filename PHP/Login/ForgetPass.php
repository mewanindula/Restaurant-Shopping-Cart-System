<?php
	session_start();
	
	//Check Submit
	if(isset($_POST['sub']))
	{
		$email = $_POST['email'];
		
		mysql_connect("localhost","root","") or die("Unable To Connect DB");
				
		mysql_select_db("user") or die("Unable To Select DB");
		
		$mail = mysql_query("SELECT * FROM password") or die("No Data".mysql_error());
		
		$ps = mysql_query("SELECT * FROM decript") or die("No Data".mysql_error());
		
		while($row = mysql_fetch_array($mail))
		{
			$nam = $row['UserName'];
			$eml = $row['Email'];
		}
		
		while($rw = mysql_fetch_array($ps))
		{
			$pw = $rw['Password'];
		}
					
		//Check Email
		if($eml==$email)
		{
?>
			<script type='text/javascript'>
				var nam = '<?php echo $nam; ?>';
				var pas = '<?php echo $pw; ?>';
				
				alert ('User Name : '+nam+'\nPassword : '+pas);
				
				window.location="LoginForm.php";
				
			</script>"; 
<?php			
		}
		else
		{

			echo "<script type='text/javascript'>
            	alert ('Your Email Is Incorrect');
				window.location='LoginForm.php';
        	</script>";		
			
		}
		//End Check Email				
	}
	
	if(isset($_POST['back']))
	{
		header("Location:LoginForm.php");
	}
?>