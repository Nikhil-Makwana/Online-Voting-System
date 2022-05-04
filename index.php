<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Voting System | main</title>
  <meta charset="utf-8">
  <style>
      .float-container{
          border:3px solid #fff;
          padding: 20px;
      }

      .float-child{
          width:50%;
          float: left;
          height: 550px;
          padding: 50px;
          padding-bottom:50px;
          border: 20px solid white;
          text-align: center;
          background-color:#404040;
      }

      p{
          font-size:xx-large;
          color:white;
      }
    </style>
</head>

<body>
<?php include "header.php";
session_start();
?>

<div class="float-container">
    <div class="float-child green">
        <img src="mainimage.jpg"  width="430" height="430">
    </div>
    <div class="float-child blue">

        <p>Institute of Technology</p>
        <p>Nirma University</p>
        <br>
        <p>Developed by :</p>
        <p>19BCE107 - Makwana Nikhil</p>
        <p>19BCE110 - Makwana Ronik</p>
        <p>19BCE111 - Makwana Vishal</p>
    </div>
</div>


</body>
