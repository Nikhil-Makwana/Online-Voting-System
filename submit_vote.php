<?php
include "connection.php";
session_start();
if(empty($_POST['lan'])){
	echo '<script>alert("Kindly give your vote !!");window.location="voter.php";</script>';
	exit();
}

$lan = $_POST['lan'];
$sess = $_SESSION['SESS_NAME'] ;
$area = $_SESSION['area'];
$lan = addslashes($_POST['lan']);
$lan = mysqli_real_escape_string($con, $lan);

$sql = mysqli_query($con, 'SELECT * FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status="VOTED"');

if(mysqli_num_rows($sql) > 0 ) {
	echo '<script>alert("You have already been voted, No need to vote again !!");window.location="voter.php";</script>';
	exit();
}
else{
	if($area == "area1"){
		$sql1 =mysqli_query($con, 'UPDATE languages SET area1 = area1 + 1 WHERE fullname = "'.$_POST['lan'].'"');
	}else{
		$sql1 =mysqli_query($con, 'UPDATE languages SET area2 = area2 + 1 WHERE fullname = "'.$_POST['lan'].'"');
	}

	$sql2 =mysqli_query($con, 'UPDATE voters SET status="VOTED" WHERE username="'.$_SESSION['SESS_NAME'].'"');
	$sql3 = mysqli_query($con, 'UPDATE voters SET voted= "'.$_POST['lan'].'" WHERE username="'.$_SESSION['SESS_NAME'].'"');
	
	if(!$sql1 && !$sql2){
		die("Error on mysql query".mysqli_error());
	}
	else{
		echo '<script>alert("Congratulation, you have made your vote.");window.location="voter.php";</script>';
		exit();
	}
}
?>
