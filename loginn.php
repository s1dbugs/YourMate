    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<html>
    <head> <title> Registration form </title>
    <link rel="stylesheet" href="loginn_css.php"> 
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
<nav class="navbar">
  <ul class="leftnav-list">
      
      <li><a href="index.html"><i class="fa fa-arrow-left"></i>Home</a></li>
  </ul>
</nav> 
    <body class="background">
        
           <div class = "hero">
          
               
               <div class = "form-box">
	<div class = "form-box-font">
        <H1 align = "center"> <font color = "orangered">Login  </font></H1> 		<br>
     <P align = "center"> Login and enjoy additional features </p> 
<p align = "center"> Create a new <a href = "mp2.php"> account </a></p>  
</div>
                 <div class = "button-box">
		 		 
                    <div id = "btn"> </div>
                    <button type = "button" class = "toggle-btn" onclick="login()"> Guide </button>
                      
                </div> 
                <!------for tutor-------->



        <form id = "login" class = "input-group" name="myForm" action = "validation2.php"  method="POST">
				    
		<!---<input type="text" placeholder="fullname*" class = "input-field" name = "fullname">-->
		
		<input type="email" placeholder="email*" class = "input-field" name = "email">
		<input type = "text" class = "input-field" placeholder = "fullname (as same as registeration)" name = "fullname" required>
		<input type="password" placeholder="your password*" id = "my" class = "input-field" name = "createpassword" name = "password" required>
		
        <div class = "f1"> <input type="checkbox"  onclick="myFunction()"> Show Password </div>       
       
	   <br>
	   
	   
	   <br>
            <br>
            <button type = "submit" class = "submit-btn"> Login </button>
        

                 </form>
                



                 <!------for guide-------->


                <form id = "register" class = "input-group">
                 
		<input type="email" placeholder="email*" class = "input-field" name = "email">
		<input type = "text" class = "input-field" placeholder = "fullname (as same as registeration)" name = "fullname" required>
		<input type="password" placeholder="your password*" id = "my" class = "input-field" name = "createpassword" name = "password" required>
		<div class = "f1"> <input type="checkbox"  onclick="myFunction()"> Show Password </div>
<br><br><br>                    
                    <button type = "submit" class = "submit-btn">Register me as a Guide </button>
                </form>





                 <!------for student-------->




                <form id = "student" class = "input-group">
                 <input type = "email" class = "input-field" placeholder = "E-mail id" name = "email" required>
            <input type = "email" class = "input-field" placeholder = "fullname" name = "fullname" required>
   
                    <input type = "password" class = "input-field" placeholder = "create password"  id="my" name = "password" required>
                 
<br><br><br>                    
                    <button type = "submit" class = "submit-btn">Register me as a Guide </button>
                </form>

              </div>
           
        
        <script>
            function myFunction() {
  var a = document.getElementById("my");
  if (a.type === "password") {
    a.type = "text";
  } else {  
    a.type = "password";
  }

}
  

<!------------till now form validation i used  only on tutor portion---->


    </script>



<footer>
  <p class="text-footer">
  Copyright &copy; 2021 All rights are reserved |&nbsp;<a href="index.html"><b>Home</b></a>&nbsp|&nbsp;<a href="about.html"><b>About</b></a>&nbsp;|&nbsp;<a href="contact.php"><b>Contact</b></a>&nbsp;|&nbsp;<a href="privacypolicy.html"><b>Privacy Policy</b></a>&nbsp;|&nbsp;<a href="tac.html"><b>Terms & conditions</b></a>&nbsp;
  </p>
</footer>
    </body>
</html>
<script>(function(w, d) { w.CollectId = "6074394b5d8493507d58337e"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>