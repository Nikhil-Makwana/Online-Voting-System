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
		width:600px;
		height:700px;
		background-color : #383838;
		border-radius: 10px;

	}

	h3,label{
		color:white;
	}
</style>

<div class="container">
<center>
<legend> <h3> Register </h3></legend> </center>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform" >
<label >Firstname : </label>
<input type="text" name="firstname" value="" />
<br>
<br>
<label >Lastname : </label>
<input type="text" name="lastname" value="" />
<br>
<br>
<label >Aadharcard No : </label>
<input type="text" name="username" value="" />
<br>
<br>
<label >Mobile No. : </label>
<input type="text" name="mobile" value="" />
<br>
<br>
<label >Address : </label>
<textarea rows="3" cols="25" name="address" value="" ></textarea>
<br>
<br>

<label>Area : </label>
<input type="radio" name="area"  value="area1" aria-label="..."><label>Area1 </label>
<input type="radio" name="area"  value="area2" aria-label="..."><label>Area2 </label>
<br>
<br>

<label>Password : </label>
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
