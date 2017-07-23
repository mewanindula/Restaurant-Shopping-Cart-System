<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<link rel="icon" type="image/png" href="../../Images/Logo/pan logo.jpg">
	<title> PAN RESTAURENT </title>
    <link rel="stylesheet" href="../../CSS/Body.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/Navigation.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/Image Slider.css" type="text/css">
    
	<script type="text/javascript" src="../../JS/Slide Show.js"></script>
    
</head>
<body onLoad="start()">
	
    <table border="0px" bordercolor="#000000" cellspacing="0px" width="100%" id="base">
    	<tr>
        	<td valign="top" align="left" width="20%"><img id="image" src="../../Images/Logo/pan logo.jpg" width="150px" height="100px"></td>
            <td>

                <center>    
                
                    <table id="structure" border="0px" cellspacing="0px" align="center" bordercolor="#FF0000" width="800px" height="auto">
                    
                    	<!--Start Image Slider-->
                        <tr>
                            <td colspan="4" width="100%" height="400px">
                            	<div id="container1">
                                	<img src="../../Images/Image Slider/img1.jpg" id="slide"> 
                                    <img src="../../Images/Image Slider/img10.jpg" onClick="ImageCount(-1)" onMouseOver="pause()" onMouseOut="start()" class="left_holder">
                                    <img src="../../Images/Image Slider/img10.jpg" onClick="ImageCount(1)" onMouseOver="pause()" onMouseOut="start()" class="right_holder">
                                </div>
                            </td>
                        </tr>
                        <!--Stop Image Slider-->
                        
                        
                        <!--Start Navigation Bar-->
                        <tr>
                            <td colspan="4" height="50px">
                            
                                <div id="container2" scrolling="no">
                                <ul id="menu">
                                    <li id=list1 onMouseOver="pause(); navi(5)" onMouseOut="start()">PRODUCT</li>
                                    <li onMouseOver="pause(); navi(6)" onMouseOut="start()">MENU
                                        <ul id=child>
                                            <a href="../Add To Cart/Basic.php?page=RICE_NOODLES" target="_blank"><li>RICE/NOODLES</li></a>
                                            <a href="../Add To Cart/Basic.php?page=DESSERT" target="_blank"><li>DESSERT</li></a>
                                            <a href="../Add To Cart/Basic.php" target="_blank"><li id="end">OTHERS</li></a>
                                        </ul>
                                    </li>
                                    <li onMouseOver="pause(); navi(7)" onMouseOut="start()"><a href="../Login/LoginForm.php" target="_blank">ADMIN</a></li>
                                    <li id=list2 onMouseOver="pause(); navi(8)" onMouseOut="start()"><a href="../Location/Location.php" target="_blank">CONTACT</a></li>
                                </ul>
                                </div>
                          </td>
                        </tr>
                        <!--Stop Navigation Bar-->
                        
                        <tr height="400px">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        
                        <tr>
                            <td width="25%" align="center" valign="middle">
                            	<center><u><font face="sans-serif" color="#00FF66" size="4">Today's Special</font></u></center>
                            	<?php
	
									include "../Today's Special/Today.php";
	
								?>                                
                            </td>
                            <td  width="25%">&nbsp;</td>
                            <td  width="25%">&nbsp;</td>
                            <td  width="25%">&nbsp;</td>
                        </tr>
                        
                        <tr height="600px">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    
                    
                    </table>
                        
                </center>
            </td>
            
            <td width="20%">&nbsp;</td>
            
        </tr>
    </table>
</body>
</html>