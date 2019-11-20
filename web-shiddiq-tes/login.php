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
	 
	 /*loader*/
.loader,
.loader:before,
.loader:after {
  background: #ffffff;
  -webkit-animation: load1 1s infinite ease-in-out;
  animation: load1 1s infinite ease-in-out;
  width: 1em;
  height: 4em;
}
.loader:before,
.loader:after {
  position: absolute;
  top: 0;
  content: '';
}
.loader:before {
  left: -1.5em;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.loader {
  text-indent: -9999em;
  margin: 88px auto;
  position: relative;
  font-size: 11px;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
.loader:after {
  left: 1.5em;
}
@-webkit-keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0 #ffffff;
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em #ffffff;
    height: 5em;
  }
}
@keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0 #ffffff;
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em #ffffff;
    height: 5em;
  }
}
/*akhir loader*/
	 
	 
				}
        </style>
</head>
<body bgcolor="brown">
<div id="main">
<div id="relative">
<font face="Old English Text MT" size="8" font color="#00FFFF"><center>LOGIN TO SYSTEM</center></font><br>

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
	<?php 
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    echo $message;
  }
?>
	
<form action="proses_login.php" method="post">
<br><br>

       <input type="text" name="email" placeholder="Input your Email" value="" required><br> <br>
	       <input type="password" name="mobile" placeholder="Input your Phone Number" value="" required><br> <br>
	  <div class="loader">
      <input type="submit" value="Login" >      
	  <input type="reset" value="Reset" ><br><br>
	</div>
   </form>
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