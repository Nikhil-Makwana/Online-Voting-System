<?php
session_start();
include "connection.php"; 
if(isset($_POST['login'])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$username = mysqli_real_escape_string($con,$username);
	$password = mysqli_real_escape_string($con,$password);

	$sql = mysqli_query($con, 'SELECT * FROM loginusers WHERE username="'.$username.'"  AND password="'.$password.'" AND status="ACTIVE" ' );
	if (mysqli_num_rows($sql) >0 ) {
		$member =  mysqli_fetch_assoc($sql);
		$_SESSION['SESS_NAME'] = $member['username'];
		$_SESSION['SESS_RANK'] = $member['rank'];
		
		if($member['rank']=='admin'){
				header("location: admin.php");
				}
				else if($member['rank']=='voter'){
				header("location: voter.php");
				}
	}
	else {
		echo '<script>alert("Invalid Username or Password");window.location="login.php";</script>';
		exit();
	}
}
else {
	echo '<script>alert("Invalid Username or Password");window.location="login.php";</script>';
}
?>