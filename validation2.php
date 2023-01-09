
<?php

session_start();
 
$con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,'mp');

$fullname = $_POST['fullname'];
$registerationno = $_POST['registerationno']; 
$mob = $_POST['phoneno'];
$mail = $_POST['email'];
$fieldofinterest = $_POST['skills'];
$createpwd = $_POST['createpassword'];

$s = "select * from userdata where email = '$mail' &&  fullname = '$fullname' && createpwd = '$createpwd'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1)
{
	$_SESSION['fullname'] = $fullname;
$_SESSION['email'] = $mail;
header('location:show_profile.php');	 
}
else
{

header ('location:loginn.php');
}
?>



