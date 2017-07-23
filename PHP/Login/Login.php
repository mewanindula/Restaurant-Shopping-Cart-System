<?php
	session_start();
	
	//Check Login
	if(isset($_POST['submit']))
	{	
		$name = $_POST['name'];
		$pass = $_POST['pas'];
		//$_SESSION['psword'] = $pass;
		$pass = md5($pass);
		
		//Check All Fields Are Fill?
		if($name&&$pass)
		{
			mysql_connect("localhost","root","") or die("Unable To Connect DB");
			
			mysql_select_db("user") or die("Unable To Select DB");
		
			$all = mysql_query("SELECT * FROM password where UserName='$name'");
			
			//Check Records Are There In Same User Name
			if(mysql_num_rows($all)!=0)
			{
				while($row = mysql_fetch_array($all))
				{
					$dbuser = $row['UserName'];
					$dbpass = $row['Password'];
				}
				
				//Check Name & Password Are Correct
				if($name==$dbuser&&$pass==$dbpass)
				{					
					$_SESSION['name']=$name;
					echo "You Are In DataBase<br><a href='Logout.php'>Click Here To Logout</a>";					
				}
				else
				{
					echo "
					<script type='text/javascript'>
						alert ('Your Password is incorect');
						window.location='LoginForm.php';
					</script>";
					
				}
				//End Check Name & Password Are Correct
			}
			else
			{
				echo "
				<script type='text/javascript'>
					alert ('Your User Name is incorect');
					window.location='LoginForm.php';
				</script>";
				
			}
			//End Check Records Are There In Same User Name
		}
		else
		{
			echo "
			<script type='text/javascript'>
				alert ('Please Enter User Name & Password');
				window.location='LoginForm.php';
			</script>";
			
		}
		//End Check All Fields Are Fill?
	}
	//End Check Login
	
	if(isset($_POST['change']))
	{
		header("location:Change.php");
	}
?>