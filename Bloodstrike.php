<?php 
//fake webLogin for bloodstrike users.
 //login get post 
 
 if(isset($_POST['userId']) && isset($_POST['age'])) {
	 $userId = trim($_POST['userId']);
	 $age = trim($_POST['age']);
	 
	 if(strlen($userId)>0 && is_numeric($age)) {
		 print $userId . ' - ' . $age . 'years old';
		 echo "Your Cheat is Summited in your Account in 2minutes because The <br>
		        Procedures is Ongoing To Avoid Distruction and issues. <br>
				And Protect your BS Account for Avoid Detection. <br>
				Thank you and Please support to my Telegram for more Details" ;
	 }  
	    else {
			echo "Invalid Error" ;
		}
 }
 
 

?>

<html>
<head>
<title>
</title>
</head>

<body>

<!-- Loging Headin -->
<br>
<h1>BloodStrike Access cheat </h1>
<!-- Login Form --> 
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST">

<input type="text" name="userId" maxlength="12" placeholder="Enter your ID"> <br><br><br>
<input type="text" name="age" maxlength="2" placeholder="Enter your Age"> <br><br><br>
<h1>Choose your CHEAT </h1>
<ol class="oL"> 
<select class="selector" onclick="alert('Choose if you want')">
<option>Speed Run </option>
<option>Quick Change </option>
<option>89% Fucos OnHead </option>
<option>Increase 70% High Damage</option>
<option>Anti Log</option>
<option>Quick Response</option>
<option>Anti ban</option>
<option>Bullet Accuracy 68.5%</option>
</select>
</ol> <br> 
<div id="Loader"> </div> <br>
<input type="submit" name="Confirm" value="Submit" id="Submit" onclick="Verify()">
</form>

</body>
</html>

<style> 

body {
	 display: relative;
	 background: black;
	 color: white;
	 align-item: center;
	 justify-content: center;
	 text-align: center;
	 border: 3px solid white;
	 padding-top: 500px;
	 z-index: -1;
	 font-size: 40px;		 
}

h1 {
	font-style: italic;
	text-shadow: 5px 8px 8px yellow;
	font-size: 60px;
}

input {
	text-align: center;
	color: white;
	border-bottom: 2px solid white;
	background: transparent;
	height: 80px;
	width: 500px;
	font-size: 25px;
	box-shadow: 5px 8px 5px yellow;
	
}

input:hover {
	background: wheat;
	color: black;
}

#Submit:hover {
	text-align: center;
	color: white;
	borde-bottom: 10px solid red;
	background: blue;
	height: 80px;
	width: 500px;
} 

.oL {
	height: 50px;
	width: 500px;
	
}

.selector {
	background: orange;
	color: black;
	width: 500px;
	height: 80px;
	margin-right: 50%;
	margin-left: 38%;
   font-size: 25px;
}

.selector:active {
	background: red;
	color: white;
}


#Loader {
	margin-left: 42%;
	height: 120px;
	width: 120px;
	border: 16px solid black;
	border-radius: 50%;
	border-top: 16px solid white;
	border-bottom: 16px solid white;
	-webkit-animation: loader 1.1s linear infinite;
	animation: loader 1.1s linear infinite;
}

@-webkit-keyframes loader {
	0% {
		-webkit-transform : rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
	}
}

@keyframes loader{
	0% {
		transform: rotate(0deg);
	}
	100% {
		transform: rotate(360deg);
	}
}
</style>

<script>


function Verify() {
     alert("Make sure your system is Secured During the Operation for avoid issue");
	 alert('Modify by: Anonymous');
}

</script>