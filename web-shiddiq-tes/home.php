<html>
<head>
<title>Website Shiddiq</title>
<style type="text/css">
#main, #relative {
position: absolute;
}
            #main {
                background-image: url('images/Desert.jpg');
                height: 660px;
                width: 1360px;
				top: 0px;
    left: 0px;
	 z-index: 1;
            }
			#relative {
        top: 10px;
    left: 30px;
	 z-index: 2;
				}
        </style>
</head>
<body bgcolor="brown">
<div id="main">
<div id="relative">
<font face="Old English Text MT" size="8" font color="#00FFFF"><center>WELCOME TO WEB-SHIDDIQ</center></font><br>

<table border="0" align="center" width="1200" height="500">
<tr>
<td rowspan="4" valign="top" width="500" height="500" bgcolor="black">
<table border="1" width="500" height="500" valign="top" bgcolor="#7FFFD4">
<tr>
<td width="500" height="500"><center><img src="images/Desert.jpg" width="500" height="500"></center></td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" height="40" bgcolor="#f9700c"></td>
<td align="center" height="40" Width="100" bgcolor="#7FFFD4"><font fice="times New Roman" size="2"><a href="home.php">HOME</a></font></td>
<td align="center" height="40" Width="100" bgcolor="#7FFFD4"><font fice="times New Roman" size="2"><a href="reg.php">REGISTRATION</a></font></td>
<td align="center" height="40" Width="100" bgcolor="#7FFFD4"><font fice="times New Roman" size="2"><a href="login.php">LOGIN</a></font></td>
<td align="center" height="40" bgcolor="#f9700c"></td>
</tr>
<tr>
<td colspan="5" width="700" height="420" valign="top" bgcolor="#cff8f1">

<h2><p style="text-align: justify; text-indent: 0.5in;">Welcome to web-shiddiq</h2><br>
	
	
This web provide about registration and login into system.<br>

<br>
<?php 
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    echo $message;
  }
?>
</td>
</tr>
<tr>
<div align="center">
<td colspan="5" bgcolor="#f9700c" width="700"><marquee direction="left"><center><font fice="Palace Script MT" Font color="purple">WEBSITE TEST MITRAIS</font></center></marquee></td>
</div>
</tr>
</table>
        </div></div>
</body>
</html>