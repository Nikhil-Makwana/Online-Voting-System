<?php
session_start();
include "auth.php";
include "connection.php"; 
if(isset($_POST['cpass'])) {

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if (empty($_POST["npassword"])) {
		echo '<script>alert("New password is required.");window.location="change_pass.php";</script>';
		exit();
	  } 
	  else {
		if(strlen(test_input($_POST["npassword"])) <= 6){
			echo '<script>alert("New Password length must be 6.");window.location="change_pass.php";</script>';
			exit();
		}
	  }

	$currentpass = $_POST['cpassword'] ;
	$newpass = $_POST['npassword'];
	$cnewpass = $_POST['cnpassword'];
	$currentpass = addslashes($currentpass);
	$newpass = addslashes($newpass);
	$cnewpass = addslashes($cnewpass); 
	$currentpass = mysqli_real_escape_string($con, $currentpass);
	$newpass = mysqli_real_escape_string($con, $newpass);
	$cnewpass = mysqli_real_escape_string($con, $cnewpass);

$sql =  mysqli_query($con, 'SELECT password FROM loginusers WHERE username="'.$_SESSION['SESS_NAME'].'" ');
$row = mysqli_fetch_assoc($sql);
$pass = $row['password'];
if ($currentpass != $pass) {
	echo '<script>alert("Incorrect Current Password !!");window.location="change_pass.php";</script>';	
	exit();
}
else if ($currentpass == $pass && $newpass == $cnewpass){
	$sql1 = mysqli_query($con, 'UPDATE loginusers SET password="'. $_POST['npassword'].'" WHERE username="'.$_SESSION['SESS_NAME'].'" ');
	echo '<script>alert("Password Successfully changed !!");window.location="voter.php";</script>';	
	exit();
}
else {
	echo '<script>alert("New Password and Confirm Password does not match !!");window.location="change_pass.php";</script>';	
	exit();
}
}
else {
	echo '<script>alert("Error !!");window.location="change_pass.php";</script>';	
	exit();
}
?>