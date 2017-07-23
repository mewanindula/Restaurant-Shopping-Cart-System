<?php
	
	session_start();
	
	//Check Submit
	if(isset($_POST['sub']))
	{
		$uname = $_POST['uname'];
		$nuname = $_POST['nuname'];
		$pass1 = $_POST['password'];
		$npass2 = $_POST['npassword'];
		$rnpass2 = $_POST['rnpassword'];
		$email = $_POST['email'];
		$pass = md5($pass1);
		$npass1 = md5($npass2);
		$rnpass1 = md5($rnpass2);
		
		//Check All Records Are Fill
		if($uname&&$nuname&&$pass1&&$npass2&&$rnpass2)
		{
			mysql_connect("localhost","root","") or die("Unable To Connect DB");
			
			mysql_select_db("user") or die("Unable To Select DB");
		
			$all = mysql_query("SELECT * FROM password where UserName='$uname'");
			
			//Check Records Are There In User Name
			if(mysql_num_rows($all)!=0)
			{
				while($row = mysql_fetch_array($all))
				{
					$dbuser = $row['UserName'];
					$dbpass = $row['Password'];
				}
				
				//Check Current User Name & Password
				if($uname==$dbuser&&$pass==$dbpass)
				{
					//Check New User Name Length
					if(strlen($nuname)>=21||strlen($nuname)<=0)
					{

                        echo '<script type="text/javascript">
							alert ("Your User Name Between The Character 1-20");
							window.location="Change.php";
						</script>';

					}
					else
					{
						//Check New Password & Renew Password
						if($npass1==$rnpass1)
						{
							//Check Password Length
							if(strlen($npass2)>=11||strlen($npass2)<=0)
							{

								echo '<script type="text/javascript">
									alert ("Your Password Is Too Long\nIt Must Be In Characters 1-10");
									window.location="Change.php";
								</script>';
                             
							}
							else
							{
								$_SESSION['name']=$nuname;
							
								$sqli = "UPDATE password SET UserName='$nuname',Password='$npass1',Email='$email' WHERE UserName='$uname' AND Password='$pass'";
								$sqle = "UPDATE decript SET Password='$npass2' WHERE Password='$pass1'";
								
								mysql_query($sqli);
								
								mysql_query($sqle);
								
								echo "<script type='text/javascript'>
										alert('Your User Name & Password Were Changed!');
										window.location='LoginForm.php';
									  </script>";
								
							}
							//End Check Password Length												
							
						}
						else
						{
							
							echo '<script type="text/javascript">
								alert ("Your Re New Password Is Wrong");
								window.location="Change.php";
							</script>';
                          
						}
						//End Check New Password & Renew Password
					}
					//End Check New User Name Length					
				}
				else
				{
				
					echo '<script type="text/javascript">
						alert ("Your Password is incorect");
						window.location="Change.php";
					</script>';
                
				}
				//End Check Current User Name & Password				
			}
			else
			{

				echo '<script type="text/javascript">
					alert ("User Name Is Incorect");
					window.location="Change.php";
				</script>';
                
			}
			//End Check Records Are There In User Name			
		}
		else
		{

			echo '<script type="text/javascript">
				alert ("Please Fill All Records");
				window.location="Change.php";
			</script>';	
            
		}
		//End Check All Records Are Fill				
		
	}
	//End Check Submit
	
	if(isset($_POST['back']))
	{
		header("Location:LoginForm.php");
	}

?>