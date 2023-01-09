<?php
session_start();	

?>

<html>
<head> <title> Tutor profile </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="l11.png">
	
	<link rel = "stylesheet" href = "profile3.css">
	</head>
	<body>
	
	<nav class="navbar background">
    <ul class="leftnav-list">
        
        <li><a href="index.html"><i class="fa fa-arrow-left"></i>Home</a></li>
    </ul>
	<br><br>
	<div class ="heading">
	<h1> <b> Hey! <?php echo $_SESSION['fullname']; ?> welcome to Your Mate where you can Earn, Learn & Grow.</b></h1>
	</div> <br><br>
</nav>  

	<div class = "container">
	<div class = "form-box">
	<img src = "user.png">
	<ul>
	<li> Name:<?php echo $_SESSION['fullname']; ?> </li>
	<li> ID: <?php echo $_SESSION['email']; ?> </li>
	
	</ul>
	</div>
	<br>
	<footer class="background">
        <p class="text-footer">
            Copyright &copy; 2021-22 | www.yourmate.com | All rights are reserved
        </p>
    </footer>
    </body>
	</html>
