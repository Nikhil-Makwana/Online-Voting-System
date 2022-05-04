<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql1 ="delete from `voters` where id=$deleteid";
    $sql2 = "delete from `loginusers` where id=$deleteid";

    $result1 = mysqli_query($con,$sql1);
    $result2 = mysqli_query($con,$sql2);

    if($result1 and $result2){
        echo '<script>alert("User Deleted Successfully !!");window.location="add.php";</script>';	
		exit();
    }

}