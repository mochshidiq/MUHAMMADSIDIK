<html>
<head>
<title>REGISTRATION</title>
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
<font face="Old English Text MT" size="8" font color="#00FFFF"><center>REGISTRATION</center></font><br>

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
<h3>PLEASE FILL YOUR IDENTIFICATION DATA</h3>
<?php 
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    echo $message;
  }
?>
<form action="proses_bio.php" method="post">
<br><br>
         <input type="text" name="mobile" placeholder="Mobile number" required><br>
         <input type="text" name="firstname" placeholder="First name" required><br>
         <input type="text" name="lastname" placeholder="Last name" required><br>
         Date of Birth<br>
         <select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
<br>
 <input type="radio" name="Gender" value="Male" />Male
 <input type="radio" name="Gender" value="Female" />Female
<br>
<input type="text" name="email" placeholder="Email" required><br>
<div class="loader">
      <input type="submit" value="Register" >      <input type="reset" value="Reset" ><br><br>
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