<?php
include('../dbConnection.php');
session_start();

if (!isset($_SESSION['is_adminlogin'])) {
    if (isset($_REQUEST['aEmail'])) {
        $aEmail = trim($_REQUEST['aEmail']);
        $aPassword = trim($_REQUEST['aPassword']);
        $sql = "SELECT a_email, a_password FROM adminlogin_tb WHERE a_email = '".$aEmail."' AND a_password = '".$aPassword."' LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION['is_adminlogin'] = true;
            $_SESSION['aEmail'] = $aEmail;
            echo "<script>location.href='dashboard.php';</script>";
            exit;
        } else {
            $msg = '<div class="alert alert-warning mt-2">Enter Valid Email and Password!</div>';
        }
    }
} else {
    echo "<script>location.href='dashboard.php';</script>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/all.min.css">
     <link rel="stylesheet" href="../css/custom.css">


    <title>Login</title>
</head>
<body>
    
    <div class= "mb-3 mt-5 text-center" style="font-size: 30px;">
    <i class="fas fa-stethoscope"></i>
        <span>
            E-ServiceCare Pro 
        </span>
    </div>
     <p class="text-center" style="font-size:20px;">
       <i class="fas fa-user-secret text-danger"></i> Admin Area
     </p>

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-6 col-md-4">
                   <form action="#"  class="shadow-lg p-4" method="POST">
                       <div class="form-group">
                        <i class="fas fa-envelope"></i></fa-user><label for="email" style="font-weight: bold;" class="pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="aEmail">
                        <small class="form-text"> We'll never share your email with anyone else.</small>
                       </div> 

                       <div class="form-group">
                          <i class="fas fa-key"></i><label for="pass" style="font-weight: bold;" class="pl-2 mt-3">Password</label><input type="password" class="form-control" placeholder="Password" name="aPassword">
                       </div>
                       <button type="submit" class="btn btn-danger mt-5 w-100 " style="font-weight: bold;">Login</button>
                       <?php 
                              if(isset($msg)){
                              echo $msg; 
                              }?>
                   </form>


                   <div class="text-center">
                    <a href="../index.php" class="btn btn-info mt-3" style="font-weight: bold;">Back to Home</a>
                   </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/all.min.js"></script>
</body>
</html>