<?php
session_start();

include "connection.php"; 
if(isset($_POST['submit'])) {
	if (isset($_POST['g-recaptcha-response'])){
		$captcha=$_POST['g-recaptcha-response'];
	  }
	  if(!$captcha){
		echo '<script>alert("Please check captcha !");window.location="register.php";</script>';
		exit();
	  }
	  $secretKey = "6LeD3hEUAAAAADNeeaGRfKmABjn1gnsXxrpdTa2J";
	  $ip = $_SERVER['REMOTE_ADDR'];
	  $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	  $responseKeys = json_decode($response,true);
	  if(intval($responseKeys["success"]) !== 1) {
		echo '<script>alert("You are spammer !");window.location="register.php";</script>';
		exit();
	  }

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		if (empty($_POST["firstname"])) {
			echo '<script>alert("Firstname is required.");window.location="register.php";</script>';
			exit();
			}
		else {
			if (!preg_match ("/^[a-zA-Z ]*$/", test_input($_POST["firstname"])) ) {  
				echo '<script>alert("Only alphabet and whitespace allowed.");window.location="register.php";</script>';
				exit();
			}
		}

		if (empty($_POST["lastname"])) {
			echo '<script>alert("Lastname is required.");window.location="register.php";</script>';
			exit();
		}
		else {
			if (!preg_match ("/^[a-zA-Z ]*$/", test_input($_POST["lastname"])) ) {  
				echo '<script>alert("Only alphabet and whitespace allowed.");window.location="register.php";</script>';
				exit();
			}
		}

		if (empty($_POST["username"])) {
			echo '<script>alert("Aadhar card number is required.");window.location="register.php";</script>';
			exit();
		  } 
		  else {
			if(!is_numeric($_POST["username"])){
				echo '<script>alert("Aadhar card number contain only digits.");window.location="register.php";</script>';
				exit();
			  }
			  if(strlen($_POST["username"]) != 12){
				echo '<script>alert("Aadhar card number length must be 12.");window.location="register.php";</script>';
				exit();
			  }
		}

		if (empty($_POST["mobile"])) {
			echo '<script>alert("Mobile no is required");window.location="register.php";</script>';
				exit();
		  } 
		  else {
			if(!is_numeric($_POST["mobile"])){
				echo '<script>alert("Mobile number contain only digits.");window.location="register.php";</script>';
				exit();
			}
			if(strlen($_POST["mobile"]) != 10){
				echo '<script>alert("Mobile number length must be 10.");window.location="register.php";</script>';
				exit();
			}
		  }

		  if (empty($_POST["address"])) {
			echo '<script>alert("Address is required");window.location="register.php";</script>';
			exit();
		  } 

		  if(empty($_POST['area'])){
			echo '<script>alert("Area is required!!");window.location="voter.php";</script>';
			exit();
		}

		if (empty($_POST["password"])) {
			echo '<script>alert("Password is required.");window.location="register.php";</script>';
			exit();
		  } 
		  else {
			if(strlen(test_input($_POST["password"])) <= 6){
				echo '<script>alert("Password length must be 6.");window.location="register.php";</script>';
				exit();
			}
		  }


$name = mysqli_real_escape_string($con, $_POST['firstname']);
$name2 = mysqli_real_escape_string($con,$_POST['lastname']);
$name3 = mysqli_real_escape_string($con,$_POST['username']);
$mobile = mysqli_real_escape_string($con,$_POST['mobile']); 
$address = mysqli_real_escape_string($con,$_POST['address']);
$area = mysqli_real_escape_string($con,$_POST['area']); 
$pass = mysqli_real_escape_string($con,$_POST['password']);

$_SESSION['area'] = $area;
 

$sq = mysqli_query($con, 'SELECT username FROM loginusers WHERE username="'.$_POST['username'].'"');
$exist = mysqli_num_rows($sq);
	
		if($exist==1){
		unset($username);
		echo '<script>alert("User allready registered. please login !");window.location="login.php";</script>';	
		exit();
		}

$sql = mysqli_query($con, 'INSERT INTO voters(firstname,lastname,username,mobileno,addr,area)
         VALUES("'.$name.'","'.$name2.'","'.$name3.'","'.$mobile.'","'.$address.'","'.$area.'")');
		 if (!$sql) { 
		 die (mysqli_error($con));
		 }
$sql2 = mysqli_query($con, 'INSERT INTO loginusers(username,password)
         VALUES("'.$name3.'","'.$pass.'")'); 
if (!$sql2) { 
		 die (mysqli_error($con));
		 }
else {
	echo "Successfully Registered!  <a href= 'login.php'>Clich here to Login </a>";
}
}
else {
	 $error="<center><h4><font color='#FF0000'>Registration Failed Due To Error !</h4></center></font>";
     include"register.php";
}
?>
