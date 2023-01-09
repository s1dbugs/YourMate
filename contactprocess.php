<head>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<font color = "white"> use import swal from 'sweetalert' </font>
 </head>
<?php
session_start();

$con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,'contact');

$fullname = $_POST['fname'];
$mail = $_POST['email'];
$message = $_POST['message'];


	$reg = "insert into query(fname, email, message) values 
	('$fullname', '$mail', '$message')";	
	
mysqli_query($con, $reg);
echo'<script>
swal("Thanks", "Your response has been submitted", "success");
	 	
	</script>';

?>
 