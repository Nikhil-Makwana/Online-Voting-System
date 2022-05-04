<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";

if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<br>

<style>
	.container{
		width:400px;
		height:480px;
		background-color : #383838;
		border-radius: 10px;

	}
</style>

<div class="container">
<center>
<legend> <h3 style="color:white;"> Register </h3></legend> </center>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform" >
<label style="color:white;">Firstname : </label>
<input type="text" name="firstname" value="" />
<br>
<br>
<label style="color:white;">Lastname : </label>
<input type="text" name="lastname" value="" />
<br>
<br>
<label style="color:white;">Username : </label>
<input type="text" name="username" value="" />
<br>
<br>
<label style="color:white;">Password : </label>
<input type="password" name="password" value="" />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>
<br>
<input class="btn btn-primary" type="submit" name="submit" value="Register" />
</form>
</font>
</center>
</div>
