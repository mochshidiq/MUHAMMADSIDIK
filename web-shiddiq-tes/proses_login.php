<?php 
include 'connection.php';
 
$username = $_POST['email'];
$password = $_POST['mobile'];
 
$query = mysqli_query($koneksi, "select * from account where email='$username' and phone_number='$password'");
$cek = mysqli_num_rows($query);
if($cek == 1)
{
	header("Location: http://localhost/web-shiddiq-tes/home.php?message=Login_success"); 
	}
	else
	{
		header("Location: http://localhost/web-shiddiq-tes/login.php?message=Login_failed"); 
	}
	
?>