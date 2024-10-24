<?php 

  session_start();
  
  //define valid credentials (replace with your Own)
  $valid_credentials = array('cyberpro024' => 'cyber024');
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  //Check Credentials
  if(isset($valid_credentials[$username]) && $valid_credentials[$username] == $password) {
	  //Login successfully Creat Session
	  $_SESSION['logged_in'] = true;
	  $_SESSION['username'] = $username;
	  header('Location: main.php');
  } 
  else {
	  //login failed , dipslay error
	  print "<p class='invalid-message'>⚠️ Invalid Username and Password !</p>";
  }

?>

<!DOCTYPE HTML>
<html>
<head><title></title></head>
<body>
    
</body>
</html>
<style>

 body {
	 padding: 0px;
	 margin: 0px;
 }
 
.invalid-message {
	font-size: 30px;
	background: #003333;
	color: white;
	border: 2px solid orange;
	padding-top: 100px;
	padding-bottom: 100px;
	text-align: center;
	box-shadow: 5px 8px 10px #b3b3b3;
	border-radius: 10px;
	width: 90%;
	margin-left: 50px;
	
		
}
</style>