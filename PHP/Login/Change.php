<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Change Form</title>
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
			height:350px;
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
	<form action="Reg.php" method="post">
    <table border="0px" cellspacing="0px" width="500px" height="350px" cellpadding="20px">
    	<tr>
        	<td colspan="4" bgcolor="#FF0000"></td>
        </tr>
        
        <tr>
        	<td colspan="4"></td>
        </tr>
        
    	<tr>
        	<td width="50px">&nbsp;</td>
        	<td align="left" valign="middle">Current User Name</td>
            <td align="left" valign="middle">: <input type="text" name="uname" id="siz" /></td>
            <td width="50px">&nbsp;</td>
        </tr>
        
        <tr>
        	<td width="50px">&nbsp;</td>
        	<td align="left" valign="middle">Current Password</td>
            <td align="left" valign="middle">: <input type="password" name="password" id="siz" /></td>
            <td width="50px">&nbsp;</td>
        </tr>
        
        <tr>
        	<td width="50px">&nbsp;</td>
        	<td align="left" valign="middle">New User Name</td>
            <td align="left" valign="middle">: <input type="text" name="nuname" id="siz" /></td>
            <td width="50px">&nbsp;</td>
        </tr>
        
        <tr>
        	<td width="50px">&nbsp;</td>
        	<td align="left" valign="middle">New Password</td>
            <td align="left" valign="middle">: <input type="password" name="npassword" id="siz" /></td>
            <td width="50px">&nbsp;</td>
        </tr>
        
        <tr>
        	<td width="50px">&nbsp;</td>
        	<td align="left" valign="middle">Re Enter New Password</td>
            <td align="left" valign="middle">: <input type="password" name="rnpassword" id="siz" /></td>
            <td width="50px">&nbsp;</td>
        </tr>
        
        <tr>
        	<td width="50px">&nbsp;</td>
        	<td align="left" valign="middle">Email Address</td>
            <td align="left" valign="middle">: <input type="text" name="email" id="siz" /></td>
            <td width="50px">&nbsp;</td>
        </tr>
        
        <tr>
        	<td width="50px">&nbsp;</td>
        	<td align="left" valign="middle"><input type="submit" name="sub" value="Submit" /></td>
            <td align="left" valign="middle"><input type="reset" name="reset" value="Reset"></td>
            <td width="50px" align="left"><input type="submit" name="back" value="Back"></td>
        </tr>
     </table>
    </form>
    </div>
</body>
</html>