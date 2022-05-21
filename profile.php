<!DOCTYPE html>
<html>
<head>
    <title>Online Voting System | User Profile</title>
    <style>
</style>
</head>

<body>

<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>
<?php
$username = $_SESSION['SESS_NAME'];

$query = 'SELECT * FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'"';
$result = mysqli_query($con,$query);

$row=mysqli_fetch_assoc($result);
        $id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $username = $row['username'];
        $mobile = $row['mobileno'];
        $address = $row['addr'];
        $area = $row['area'];
        $status = $row['status'];
        $voted = $row['voted'];

?>

<br>
<br>

<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $firstname." ".$lastname ?></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $firstname ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $lastname ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Aadharcard Number </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $username ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile no.</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $mobile?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $address ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Area</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $area ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $status ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Party Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $voted ?>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>


</body>
</html>