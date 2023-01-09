<html>
<head> <title> guide  </title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<style>
*{
	overflow-x:hidden;
}
.navbar{
    display: flex;
    align-items: center;
    justify-content: center;
    position: ;
    top: 0;
    margin-left:-1000px;
    cursor: pointer;
}
.navbar .fa{
 margin-right: 8px;
}

.leftnav-list{
    width: 100%;
    display: flex;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: ;
    background-size: cover;
    background-blend-mode: darken;
}

.leftnav-list li{
    list-style: none;
    padding: 26px 80px;
	
}
.leftnav-list li a{
    text-decoration: none;
    color: orangered;
    font-size: 26px ;
	font-weight:bolder;
}

.leftnav-list li a:hover{
    color: grey;
}

.text-footer{
    text-align: center;
    padding: 17px ;
    color: white;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	font-size:17px;
    justify-content: center;
    background: orangered;
	position:absolute;
	width: 100%;
	height:3%;
	bottom:auto;
	
}

.form-box-font h1{
	font-family:papyrus;
	font-size:45px;
    /*text-shadow: 3px 4px 2px;*/
	font-weight:500;
	margin-left:220px;
	/*text-transform:uppercase;*/
	word-spacing:30;	
}

</style>
<body>
	<nav class="navbar background">
    <ul class="leftnav-list">
        
        <li><a href="index.html"><i class="fa fa-arrow-left"></i>Home</a></li>
		<div class = "form-box-font">
        <h1 align = "center"> <font color = "orangered"><b><u>Your Mate GUIDEs</u></b></font></h1>
		</div>
    </ul>
	</nav>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM userdata";
if($result = mysqli_query($link, $sql))
{
	
    if(mysqli_num_rows($result) > 0)
	{
     
		
        while($row = mysqli_fetch_array($result))
		
  {
           echo"<style>
		   

			hr{
               width:80%;
			}				
		      
		    ul li{
				margin-left:40%;
                list-style:none;
                font-size:22px;
                font-family:cursive;
                overflow:hidden;
                overflow-x:hidden;
			}
			 ul img{
				left:330;
				position:absolute;
			}
			table{
				border:3px;

		   </style>";
			
echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;'; echo '&nbsp;';echo '&nbsp;';
      
echo "<table>";
echo "<tr>";
 echo '<div style="border: 6px solid orangered; margin-left:310px; margin-right:230px;">';
       echo '<html> <ul class = "profile">
<li> <img src="user.png" width="auto" height="190" alt="profile" /> </li>
</ul>';
            echo "<ul>";
            echo  "<li>"."<b> Name: </b>". $row['fullname']."</li>";
		
            echo  "<li>"."<b> ID: </b>".$row['email']."<br>"."</li>";	

            echo "<li>"."<b> Mobile No: </b>".$row['phone']."<br>"."</li>" ;
            echo "<li>"."<b> Skills:  </b>".$row['skills']."<br>"."</li>" ;
			echo "<li>"."<b> Charge/hr:  </b>".'&#8377;'.$row['fees']."<br>"."</li>" ;
			echo "<br>";
		
			echo'</div>';
			echo "</tr>";
			echo "</table>";
			
		}
	        
        
        // Free result set
        mysqli_free_result($result);
		
    } 
    
else{
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

	<footer class="background">
        <p class="text-footer">
        Copyright &copy; 2021 All rights are reserved |&nbsp;<a href="index.html"><b>Home</b></a>&nbsp|&nbsp;<a href="about.html"><b>About</b></a>&nbsp;|&nbsp;<a href="contact.php"><b>Contact</b></a>&nbsp;|&nbsp;<a href="privacypolicy.html"><b>Privacy Policy</b></a>&nbsp;|&nbsp;<a href="tac.html"><b>Terms & conditions</b></a>&nbsp;
        </p>
    </footer>
</body>
</html>
<script>(function(w, d) { w.CollectId = "6074394b5d8493507d58337e"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>