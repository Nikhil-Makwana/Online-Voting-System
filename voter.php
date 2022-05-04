<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Voting System | User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
      th,td,tr{
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
include "header_voter.php"; 
?>
<h4> Welcome <span style="color:blue;"><?php echo $_SESSION['SESS_NAME']; ?> </span></h4>
<center><h3>Vote for better <span style="color:blue;">India</span> !! </h3></center>
<br>

<form action="submit_vote.php"  method="post" id="myform" >
<table class="table">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="bjp.jpg" alt="Avatar" width="80" height="80"></td>
      <td>Bhartiya Janta party (BJP)</td>
      <td><div><input class="form-check-input" type="radio" name="lan" id="radioNoLabel1" value="bjp" aria-label="..."></div></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img src="congress.png" alt="Avatar" width="80" height="80"></td>
      <td>Indian National Congress (INC)</td>
      <td><div><input class="form-check-input" type="radio" name="lan" id="radioNoLabel1" value="congress" aria-label="..."></div></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img src="aap.jpeg" alt="Avatar" width="80" height="80"></td>
      <td>Aam Aadmi Party (AAP)</td>
      <td><div><input class="form-check-input" type="radio" name="lan" id="radioNoLabel1" value="aap" aria-label="..."></div></td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td><img src="bsp.jpg" alt="Avatar" width="80" height="80"></td>
      <td>Bahujan Samaj Party (BSP)</td>
      <td><div><input class="form-check-input" type="radio" name="lan" id="radioNoLabel1" value="bsp" aria-label="..."></div></td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td><img src="cpi.jpg" alt="Avatar" width="80" height="80"></td>
      <td>Communist Party of India (CPI)</td>
      <td><div><input class="form-check-input" type="radio" name="lan" id="radioNoLabel1" value="cpi" aria-label="..."></div></td>
    </tr>

  </tbody>
</table>

<center><button type="submit" class="btn btn-primary" name="submit">Submit Vote</button></center>

</form>
<br>
<br>

</body>
</html>