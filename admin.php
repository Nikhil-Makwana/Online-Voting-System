<!DOCTYPE html>
<html>
<head>
    <title>Online Voting System | Admin</title>
</head>

<body>
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_admin.php"; 
?>

<h1>Welcome to <span style="color:blue">Administrator</span> !!</h1>

</body>
</html>