<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<link rel="icon" type="image/png" href="../Images/img2.jpg">
	<title> PAN RESTAURENT </title>
    <link rel="stylesheet" href="../CSS/Body.css" type="text/css">
    <link rel="stylesheet" href="../CSS/Navigation.css" type="text/css">
    <link rel="stylesheet" href="../CSS/Image Slider.css" type="text/css">
    
	<script type="text/javascript" src="../JS/Slide Show.js"></script>
    
</head>
<body onLoad="start()">
	
    <table border="1px" bordercolor="#000000" cellspacing="0px" width="100%" id="base">
    	<tr>
        	<td valign="top" align="left" width="20%"><img id="image" src="../Images/img2.jpg" width="150px" height="100px"></td>
            <td>

                <center>    
                
                    <table border="1px" cellspacing="0px" align="center" bordercolor="#FF0000" width="800px" height="auto">
                    
                        <tr>
                            <td colspan="4" width="100%" height="400px">
                            	<div id="container1">
                                	<img src="../Images/img1.jpg" id="slide"> 
                                    <img src="../Images/img10.jpg" onClick="ImageCount(-1)" onMouseOver="pause()" onMouseOut="start()" class="left_holder">
                                    <img src="../Images/img10.jpg" onClick="ImageCount(1)" onMouseOver="pause()" onMouseOut="start()" class="right_holder">
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="4" height="50px">
                            
                                <div id="container2" scrolling="no">
                                <ul id="menu">
                                    <li id=list1 onMouseOver="pause(); navi(5)" onMouseOut="start()">PRODUCT</li>
                                    <li onMouseOver="pause(); navi(6)" onMouseOut="start()">MENU
                                        <ul id=child>
                                            <li>Blog</li>
                                            <li>Blog</li>
                                            <li id="end">Blog</li>
                                        </ul>
                                    </li>
                                    <li onMouseOver="pause(); navi(7)" onMouseOut="start()">USER
                                        <ul id=child>
                                            <li>Blog</li>
                                            <li>Blog</li>
                                            <li id="end">Blog</li>
                                        </ul>
                                    </li>
                                    <li id=list2 onMouseOver="pause(); navi(8)" onMouseOut="start()"><a href="Location.html" target="_blank">CONTACT</a></li>
                                </ul>
                                </div>
                          </td>
                        </tr>
                        
                        <tr height="400px">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        
                        <tr height="500px">
                            <td align="center" valign="middle" width="25%">
                            	<?php
									include "Today.php";
								?>
                            </td>
                            <td width="25%">&nbsp;</td>
                            <td width="25%">&nbsp;</td>
                            <td width="25%">&nbsp;</td>
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