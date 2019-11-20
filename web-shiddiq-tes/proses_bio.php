<html>
<?php
include 'connection.php';
$mn = $_POST['mobile'];
//if (substr($mn, 0, 3) != '+62' && substr($mn, 0, 2) != '62') {
			//$message = "Phone Number Must be Indonesian Format"; 
			/*?>
			
			//<body>
				
		//<script type="text/javascript">alert("test");</script>		
		//	</body>
		
		//<?php*/
		     header("Location: http://localhost/web-shiddiq-tes/reg.php?message=success");
//}
$fn = $_POST['firstname'];
//if ($fn == '') {
//			$message = "First Name is Blank";
//		echo "<script type='text/javascript'>alert('$message');</script>";
//		     header("Location: http://localhost/web-shiddiq-tes/reg.php");
//}
$ln = $_POST['lastname'];
//if ($ln == '') {
//			$message = "Last Name is Blank";
//		echo "<script type='text/javascript'>alert('$message');</script>";
//		     header("Location: http://localhost/web-shiddiq-tes/reg.php");
//}
$birth = $_POST['Birthday_day'] + "/" + $_POST['Birthday_Month'] + "/" + $_POST['Birthday_Year'];
$gender = $_POST['Gender'];
$email = $_POST['email'];
//if (strpos($email, '@') == false || $email=='' ) {
//		    $message = "Email must be unique";
//		echo "<script type='text/javascript'>alert('$message');</script>";
//		     header("Location: http://localhost/web-shiddiq-tes/reg.php");
//}
if(strpos($email, '@') == true && (substr($mn, 0, 3) == '+62' || substr($mn, 0, 2) == '62'))
{
		$sql = "INSERT INTO account (phone_number, first_name, last_name, birth, sex, email) VALUES
		            ('$mn', '$fn', '$ln', '$birth', '$gender', '$email')";
		$save = mysqli_query($koneksi, $sql);
		if($save){
		    //$message = "Registration Success";
		//echo "<script type='text/javascript'>alert('$message');</script>";
		     header("Location: http://localhost/web-shiddiq-tes/login.php"); 
		} else{
			//$message = "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		//echo "<script type='text/javascript'>alert('$message');</script>";
		     header("Location: http://localhost/web-shiddiq-tes/reg.php?message=Could_not_able_to_execute");   
		}
}
else{
			//$message = "Data is Blank";
		//echo "<script type='text/javascript'>alert('$message');</script>";
		     header("Location: http://localhost/web-shiddiq-tes/reg.php?message=format_data_email_or_mobile_phone_isn't_suitable");   
		}
              ?>
</html>