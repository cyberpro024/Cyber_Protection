

<! DOCTYPE HTML>
<html>
</head> <title> Cyber Pro </title> </head>
<body>


   <!-- header -->
   <header id="header">
        <nav>
		<ul>
		<li>
		<a href=""> Home </a>
		</li>
		<li>
		<a href=""> About </a>
		</li>
		<li>
		<a href=""> Download</a>
		</li>
	</ul>
		</nav>
   </header> <!-- End of Header-->
    
	
	
	<!-- Content-->
   <main> 
   <section id="home"> Welcome our Home </section>
   <br> <br> <br> <br> <br>   
   <section id="about"> 
   <h1 class="About-list">About</h1>
   Cyber Protection! <br>
   Install and Download link from Modify Games
   </section>
   </main> <!--End Of Content-->
   
   
   
   <!--Animation bar-->
   <div id="animation"></div>
   <!-- End Ani Bar -->
   
   
   
   
   <!-- Php Script Validation of form comment-->	
	<!-- Form for Comment -->
   <div id="form">
	<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">    
	<section class="form-list">Suggestion</section>	
    <br><br><br>
	
	<?php 
	if(isset($_POST['comment'])) {
	$comment = trim($_POST['comment']);
    if(strlen($comment)) {
		print $comment. "<br>". "<p class='php-print'>Your REQUEST Is SUBMITTED" . "<br>";
		print "<p class='php-print'>Thank you for your SUGGESTION </p>";
	} 
	else {
		print "<p class='php-print'>Invalid Please Try Again</p>";
	}
	}
    ?> 
	
	<br><br>
	<input type="text-area" Placeholder="Enter Your Request" name="comment" class="comment" maxlength="40"> <br>
	<input type="submit" value="Send" name="submit" onclick="if(confirm('ARE YOU SURE?')) {alert('Continue')}">
	</form>
	</div> <!-- End of Comment VALIDATION -->
   

   
   
   <!-- Media fire link -->
   <main>
    <h1 class="Download">Download</h1>
	    <h3 class="Download">Updated Link ! </h3>
    <ul>
      <li class="link-list"> <a href="https://www.mediafire.com/file/6zi1cg7gh8znswx/GTA-CYBERPROTECTION.zip/file"> GTA San Andreas Click Download<span> 312.12mb</a></li>
      <br><br><br><br>
	 <li class="link-list"> <a href="https://www.mediafire.com/file/acrepw3wg45fh7b/Hill-Climb-Racing-v1.63.0-MOD-CyberProtection.zip/file "> Hill Climb Unlimited Coins & Gems <span> 89.9mb</span> </li>
	 <br><b><br><br>
	 <li class="link-list"> <a href="https://www.mediafire.com/file/yzazmkzumm4i9ud/CyberProtection-Soul_Eater_Battle.zip/file">SOUL_EATER_Battle-PSP <span>66.92mb</span></a></li>
     <br><br><br><br>
	 <li class="link-list"> <a href="https://www.mediafire.com/file/yzazmkzumm4i9ud/CyberProtection-Soul_Eater_Battle.zip/file">Temple Run Unlimited Coins <span>91.59mb</span></a></li>
	</ul>
	<br>
	</main>
	<!-- End of Media fire Link -->
	
	
	
	<!-- HOME PAGE CONTENT SESSION -->
	<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
	header('Location: login.html');
	exit(); //add this line to stop execution
}
 //Display welcome message
 print "<p class='welcome-msg'>Welcome our Home</p><br>";
 
 //logout link 
 print "<br><br><br><br><a href='logout.php' class='logout-btn'>Logout</a>";

?>
	</div>
   <!--End of file -->
  
  
   <br><br><br><br><br><br><br>
   <br><br><br><br>
   
   
   <!-- end of website-->
   <div class="Footer"> 
   Website Developer - Cyber Protection Oct 1 2024 <br>
   Follow facebook Page : Cyber Protection <br>
   Visit: <a href="https://www.facebook.com/profile.php?id=61566557403344&mibextid=LQQJ4d"> Cyber Protection@facebook.com</a>
   </div>
   

</body>
</html>

<style>

body {
	padding: 0px;
	margin: 0px;
}

#header {
	background: #262626;
	padding: 1em;
	text-align: center;
}

#header nav ul {
	list-style: none;
	padding: 0px;
	margin: 0px;
	display: flex;
	justify-content: space-betwenn;
}

#header nav ul li {
	margin-left: 115px;
}

#header nav a {
	text-decoration: none;
	font-size: 60px;
	color: white;
	text-shadow: 3px 5px 6px white;
}

main {
	display: flex;
	flex-direction: column;
	align-items: center;
	padding: 1em;
}

section {
	background: white;
	color: black;
	border: 1px color wheat;
	box-shadow: 3px 5px 6px black;
	font-size: 50px;
	padding: 3%;
}

#animation {
	margin-left: 38%;
	border: 16px solid white;
	border-radius: 50%;
	border-top: 30px solid black;
	border-bottom: 30px solid black;
	width: 150px;
	height: 140px;
	padding: 20px;
	-webkit-animation: loader 1.1s linear infinite;
	animation: loader 1.1s linear infinite;
}

main {
	display: flex; 
	flex-direction: column;
	padding: 2em;
	border: 1px solid white;	
}


@-webkit-keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
	}
}

@keyframes loader {
	0% {
		transform: rotate(0%);
	}
	100% {
		transform: rotate(360deg);
	}
}

.Download {
	color: none;
	background: none;
	font-size: 70px;
	border: 1px solid black;
	text-shadow: 3px 5px 5px green;
	box-shadow: 3px 5px 5px black;
	padding-left: 20px;
	padding-right: 20px;
}

main .link-list a {
	text-decoration: none;
	font-size: 40px;
	background: #00b300;
	color: white;
	padding-top: 20px;
	padding-bottom: 20px;
	padding-left: 10px;
	padding-right: 10px;
	border-radius: 8px;	
	box-shadow: 3px 5px 8px lightgreen;
	border-bottom: 2px solid black;
}

.Footer {
	background: #262626;
	color: white;
	padding-top: 70px;
	padding-bottom: 50px;
	text-align: center:
	text-decoration: none;
	font-size: 40px;
	padding-left: 40px;
	padding-bottom: 80px;
}

.Footer a {
	text-decoration: none;
	color: white;
}


form {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 1em;
	flex-direction: column;
}

form .form-list {
	border: 1px solid green;	
}

input {
	border: 1px solid black;
	text-align: center;
	padding-left: 100px;
	padding-right: 100px;
	height: 100px;
	font-size: 40px;
	border-radius: 20px;
}

input:hover {
	background: wheat;
	color: black;
	border: 1px solid red;
}

.php-print {
	font-size: 35px;
	border: 2px solid blue;
    padding-top: 40px;
	padding-bottom: 40px;
	padding-left: 40px;
	padding-right: 40px;
	color: white;
	background: black;
}

.comment {
	font-size: 30px;
}


.logout-btn {
	background: #595959;
	color: white;
	font-size: 50px;
	padding-top: 40px;
	padding-bottom: 40px;
	padding-left: 50px;
	padding-right: 50px;
	border-radius: 20px;
	text-decoration: none;
	margin-left: 70%;
	box-shadow: 5px 8px 9px #008080;
	border-left: 3px solid gold;
}

.welcome-msg {
	font-size: 40px;
	margin-left: 70%;
	background: white;
	color: black;
	font-style: italic;
	padding-top: 50px;
	padding-bottom: 50px;
	padding-left: 50px;
	padding-right: 50px;
	border-radius: 40px;
	box-shadow: 5px 8px 10px #00e6e6;
	
}
</style