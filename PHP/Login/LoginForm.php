<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Log In Form</title>
    <style type="text/css">
	
		*
		{
			margin:0px;
			padding:0px;
		}
	
		body
		{
			background:url(../../Images/Background.jpg)fixed no-repeat;
			background-position:left;
		}
		
		#form
		{
			margin:150px auto;
			width:500px;
			height:300px;
			background-color:#9999FF;
		}
		
		#siz
		{
			width:250px;
			height:30px;
		}
		
		#bsiz
		{
			font-weight:bold;
		}
		
	</style>
</head>

<body>
	<div id="form">
	<form action="Login.php" method="post">
    <table border="0px" cellspacing="0px" width="500px" height="300px">
    
    	<tr>
        	<td colspan="4" bgcolor="#FF0000"></td>
        </tr>
        
  <tr>
        	<td align="center" valign="middle" colspan="4"><img src="../../Images/Sec.png" name="image" width="70" height="50px" align="middle" id="image">Login To Admin Panel</td>
      </tr>
        
        <tr>
        	<td width="70px">&nbsp;</td>
        	<td align="right" valign="middle">Name</td>
            <td align="left" colspan="2">: <input type="text" name="name" id="siz"></td>
        </tr>
        
        <tr>
        	<td width="70px">&nbsp;</td>
        	<td align="right" valign="middle">Password</td>
            <td align="left" colspan="2">: <input type="password" name="pas"  id="siz"></td>
        </tr>
        
        <tr>
        	<td align="center" valign="middle"><input type="submit" name="submit" value="Login" id="bsiz" /></td>
            <td align="center" valign="middle"><input type="reset" name="reset" value="Reset" /></td>

      
            <td align="center" valign="middle"><input type="submit" name="change" value="Change Password" id="bsiz"></td>
      
            <td align="center" valign="middle"><a href="ForgetPassForm.php">Forget Password?</a></td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>