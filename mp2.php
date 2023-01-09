    
<html>
    <head> <title> Registration</title>
    <link rel="stylesheet" href="mp.php"> 
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
.gender{
    font-family: cursive;
    font-size: 13px;
    color:#777;
    display:flex;
	padding:15px;
	margin:1%;
}
.wgender{
	font-family: cursive;
    font-size: 16px;
    color:#777;
    
}
	</style>
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
        <H1 align = "center"> <font color = "orangered">SignUp </font></H1> 		<br>
     <P align = "center"> Register and enjoy additional features </p> 
<p align = "center"> I already have <a href = "loginn.php"> <i><font color = "blue"> Login </font> </i> </a></p>  
</div>
                 <div class = "button-box">
		 		 
                    <div id = "btn"> </div>
                    <button type = "button" class = "toggle-btn" onclick="login()"> Guide </button>
                    
                            
                </div> 
                <!------for guide-------->


                <form id = "login" class = "input-group" name="myForm" action = "registeration2.php"  method="POST">
				
				
                <input type = "text" class = "input-field" placeholder = "Full Name*" name = "fullname" required>
                <input type = "email" class = "input-field" placeholder = "Email id*" name = "email" required> 
			 			 	<div class = "wgender"> Gender: &nbsp;</div>
			 	<div class = "gender">
				<input type = "radio" class = "input-field" name = "ab" value = "male" required>Male 
				<input type = "radio" class = "input-field" name = "ab" value = "female" required>Female
				<input type = "radio" class = "input-field" name = "ab" value = "other" required>Other 
				</div>
                <input type = "text" class = "input-field" placeholder = "Mobile No" name = "phoneno" required>   
                <input type = "text" class = "input-field" placeholder = "Skills(anything you are good at)*" name = "skills" required>
				          <input type = "text" class = "input-field" placeholder = " &#8377; Charge Per Hour*" name = "fees" required>

                <input type = "password" class = "input-field" placeholder = "create password*"  id="my" name = "createpassword" required>
                <div class = "f1"> <input type="checkbox" onclick="myFunction()"> Show Password  </div>
                <br><br><br>
                <div class = "terms"> <input type = "checkbox" class = "chech-box" 	required>I have filled the informations correctly(*)</div>
                <div class = "terms"> <input type = "checkbox" class = "chech-box" required> I agree all the <a href="tac.html">term, conditions, and policy </a>(*) </div>
				<br> <br>
             
                     <button type = "submit" class = "submit-btn" onclick="validate()"/> Register Me </button>
                 </form>
				 </div>
                


                 <!------for student-------->
<script>           
            function myFunction() {
  var a = document.getElementById("my");
  if (a.type === "password") {
    a.type = "text";
  } else {  
    a.type = "password";
  }

}

          function meFunction() {
  var b = document.getElementById("me");
  if (b.type === "password") {
    b.type = "text";
  } else {  
    b.type = "password";
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

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">

<script>(function(w, d) { w.CollectId = "6074394b5d8493507d58337e"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
