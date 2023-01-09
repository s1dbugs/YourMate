
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	  
    <title>yourmate-learning/earning.contact</title>
    <link rel="icon" href="l11.png">
			
</head>
<nav class="navbar background">
    <ul class="leftnav-list">
        
        <li><a href="index.html"><i class="fa fa-arrow-left"></i><b>Home</b></a></li>
    </ul>
</nav>  
<body class="background">

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>We are here ! A companion for people who wants to learn or earn in Student life. 
                We bring service in two formats suitable for you. 
                Help you to be updated about your surroundings in every possible way. We give platform always ready for you !</p>
        </div>
		
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Online Mother Hub,<br>Delhi,India,<br>000000</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                                <h3>Phone</h3>
                                <p>1234567890</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="text">
                                    <h3>Email</h3>
                                    <p>yourmate@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="contactForm">
                            <form action = "contactprocess.php" method = "POST">
                                <h2>Send Message</h2>
                            <div class="inputBox">
                                <input type="text" name="fname" class = "fname" required="required">
                                <span>Full Name</span>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="email" class = "email" required="required">
                                <span>Email</span>
                            </div>
                            <div class="inputBox">
                                <textarea required="required" name = "message" class= "message" ></textarea>
                                <span>Type your Message...</span>
                            </div>
                            <div class="inputBox">
                                <input type="submit" id = "submit"  value="Submit" >
                            </div>
                            </form>
                        </div>
                    </div>
			
					<script>
				
	$("#submit").click(function(){
		
		var fname = $("#fname").val();
		var email = $("#email").val();
		var message = $("#message").val();
	/*
	 if fname == '' || email == ''|| message == ''){
		swal({
			title:"Fields Empty!!",
			text: "Please check the missing fields!!",
			icon = "warning",
			button: "ok",
		});
		}
		else{*/
swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
	 	
	</script>
    </section>
    <footer class="background">
        <p class="text-footer">
        Copyright &copy; 2021 All rights are reserved |&nbsp;<a href="index.html"><b>Home</b></a>&nbsp;|&nbsp;<a href="about.html"><b>About</b></a>&nbsp;|&nbsp;<a href="privacypolicy.html"><b>Privacy Policy</b></a>&nbsp;|&nbsp;<a href="tac.html"><b>Terms & conditions</b></a>&nbsp;
        </p>
    </footer>
    </body>
    </html>
	
	