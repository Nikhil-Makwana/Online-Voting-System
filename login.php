<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>

<style>
	.container{
		width:300px;
		height:400px;
		background-color :#383838;
		border-radius: 10px;

	}
</style>

<div class="container" >
<center>
<legend> <h3 style="color:white;">Login for Voting </h3></legend> 
<br>
</center>
<center><font size="4" >
<form action="login_action.php" method="post" id="myform" >
<label style="color:white;">Username : </label>
<input type="text" name="username" value="" > 
<br>
<br>
<label style="color:white;">Password :</label>
<input type="password" name="password" value="" >
<br>
<br>
<input class="btn btn-primary" type="submit" name="login" value="login" > 
</form></font>
</center>
<br>
<br>
<center><p style="color:white;">Don't have account ? <a href="register.php" style="color:blue;">Create New</a></center>
</div>


