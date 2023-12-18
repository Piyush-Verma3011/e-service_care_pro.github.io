<?php
  include('dbConnection.php');
session_start();
  if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail'];

  }
  else{
    echo"<script>location.href='RequesterLogin.php'</script>";
  }
  $sql="SELECT r_name,r_email FROM requesterlogin_tb WHERE r_email='$rEmail'";
  $result=$conn->query($sql);
  if($result->num_rows ==1){
    $row=$result->fetch_assoc();
    $rName=$row['r_name'];
    // $rEmail=$row['r_email'];

  }

 if(isset($_REQUEST['nameupdate'])){
    if($_REQUEST['rName']==""){
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields!</div>';
    }
    else{
        $rName=$_REQUEST['rName'];
        $sql="UPDATE requesterlogin_tb SET r_name ='$rName' WHERE r_email='$rEmail'";
        if($conn->query($sql)==TRUE){
            $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully!</div>';
        }
        else{
            $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to update!</div>';   
        }
    }
 } 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE?></title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
      <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">E-ServiceCare Pro</a></nav>

     <div class="container-fluid" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                    <a class="nav-link <?php if(PAGE=='RequesterProfile'){echo 'active';}?>" aria-current="<?php if(PAGE=='RequesterProfile'){echo 'Page';}?>" href="RequesterProfile.php"><i class="fas fa-user"></i>&nbsp;Profile</a>

                     </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='Request'){echo 'active';}?>" aria-current="<?php if(PAGE=='Request'){echo 'Page';}?>" aria-current="page" href="SubmitRequest.php"><i class="fab fa-accessible-icon"></i>&nbsp;Submit Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='check'){echo 'active';}?>" aria-current="<?php if(PAGE=='check'){echo 'Page';}?>" href="CheckStatus.php"><i class="fas fa-align-center"></i>&nbsp;Service Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='pass'){echo 'active';}?>" aria-current="<?php if(PAGE=='pass'){echo 'Page';}?>" href="Requesterchangepass.php"><i class="fas fa-key"></i>&nbsp;Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logouty.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                        </li>
                    </ul>
                </div>
             </nav>

             
    
  