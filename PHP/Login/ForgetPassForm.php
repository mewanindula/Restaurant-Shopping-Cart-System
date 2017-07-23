<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Forgrt Password</title>
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
			width:400px;
			height:150px;
			background-color:#9999FF;
		}
		
		#siz
		{
			width:230px;
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
	<form action="ForgetPass.php" method="post">
    <table  border="0px" cellspacing="0px" width="400px" height="150px">
    	<tr>
        	<td colspan="2" height="50px"></td>
        </tr>
        
        <tr>
        	<td align="right" valign="middle" width="30%">Email</td>
            <td align="left" valign="middle">: <input type="text" name="email" id="siz" /></td>
        </tr>
        
        <tr>
        	<td align="center" valign="middle" width="30%"><input type="submit" name="sub" value="Submit" /></td>
            <td align="center" valign="middle"><input type="submit" name="back" value="Back"></td>
        </tr>
            	
    </table>        
    </form>
    </div>
</body>
</html>