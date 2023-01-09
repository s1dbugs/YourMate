<?php
session_start();
$con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,'mp');

$fullname = $_POST['fullname'];
$mail = $_POST['email'];
$gender = $_POST['ab'];
$mob = $_POST['phoneno'];
$fieldofinterest = $_POST['skills'];
$createpwd = $_POST['createpassword'];
$fees = $_POST['fees'];


$s = "select * from userdata where email = '$mail'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1)
{

	echo "<script>{
  alert('your account has already registered');
	}
	</script>";

}
else
{
	


	$reg = "insert into userdata(fullname,  email, gender, phone, skills, fees, createpwd) values 
	('$fullname', '$mail', '$gender', '$mob', '$fieldofinterest', '$fees', '$createpwd')";	

mysqli_query($con, $reg);
header('location:loginn.php');

}
?>


<script>
        setTimeout(function () {
            window.location.replace("mp2.php"); //will redirect to main page (index.html)
        },0); //will call the function after 3 secs.
    </script> 
