<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Voting System | Add Delete User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_admin.php";
include "connection.php";
?>

<table class="table">
  <thead>
    <tr> 
      <th scope="row">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Username</th>
      <th scope="col">status</th>
      <th scope="col">voted</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
      <?php

      $sql = "Select * from voters";
      $result = mysqli_query($con,$sql);

      if($result){
          while($row=mysqli_fetch_assoc($result)){
              $id = $row['id'];
              $firstname = $row['firstname'];
              $lastname = $row['lastname'];
              $username = $row['username'];
              $status = $row['status'];
              $voted = $row['voted'];
              echo '<tr>
              <td>'.$id.'</td>
              <td>'.$firstname.'</td>
              <td>'.$lastname.'</td>
              <td>'.$username.'</td>
              <td>'.$status.'</td>
              <td>'.$voted.'</td>
              <td>
              <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" style="color:white;">Delete</a></button>
              </tr>';
          }
      }
    ?>

  </tbody>
</table>

</body>
</html>