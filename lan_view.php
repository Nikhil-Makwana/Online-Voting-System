<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Voting System | Vote Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
      th,td{
          text-align:center;
      }
    </style>

</head>
<body>
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_admin.php";
?>

<center><h3> Voting till now </h3></center><br>
<?php
include "connection.php";
$data = mysqli_query($con, 'SELECT * FROM languages' );
$sql1 =  mysqli_query($con, 'SELECT count(area1) FROM languages' );
$sql2 = mysqli_query($con, 'SELECT count(area2) FROM languages' );

if (mysqli_num_rows($data)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<table class="table">
	<thead>
	<tr>
	<th scope="col"><center>Id</center></td>		
	<th scope="col"><center>Party Name</center></td>
	<th scope="col"><center>About</center></td>
	<th scope="col"><center>Area1</center></td>
	<th scope="col"><center>Area2</center></td>
	</tr>
	<thead>';
while($mb=mysqli_fetch_object($data))
		{	
			$id=$mb->lan_id;
			$name=$mb->fullname;
			$about=$mb->about;
			$area1=$mb->area1;
			$area2=$mb->area2;
			echo '<tr>';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$about.'</td>';
	echo '<td>'."$area1".'</td>';
	echo '<td>'."$area2".'</td>';
	echo "</tr>";
		}

		echo'</table></center>';
	}
?>

</body>
</html>
