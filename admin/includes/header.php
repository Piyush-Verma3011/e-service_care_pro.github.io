<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/all.min.css">
     <link rel="stylesheet" href="../css/custom.css">
     <title><?php echo TITLE?></title>

</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">E-ServiceCare Pro</a></nav>
<div class="container-fluid" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                    <a class="nav-link <?php if(PAGE=='dashboard'){echo 'active';}?>" aria-current="<?php if(PAGE=='dashboard'){echo 'Page';}?>" href="dashboard.php"><i class="fas fa-home"></i>&nbsp;Dashboard</a>

                     </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='work'){echo 'active';}?>" aria-current="<?php if(PAGE=='work'){echo 'Page';}?>" aria-current="page" href="work.php"><i class="fas fa-tasks"></i>&nbsp;Work Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='request'){echo 'active';}?>" aria-current="<?php if(PAGE=='request'){echo 'Page';}?>" href="request.php"><i class="fas fa-align-center"></i>&nbsp;Requests</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='assests'){echo 'active';}?>" aria-current="<?php if(PAGE=='assests'){echo 'Page';}?>" href="assests.php"><i class="fas fa-file-contract"></i>&nbsp;Assests</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='technician'){echo 'active';}?>" aria-current="<?php if(PAGE=='technician'){echo 'Page';}?>" href="technician.php"><i class="fas fa-wrench"></i>&nbsp;Technician</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='requesters'){echo 'active';}?>" aria-current="<?php if(PAGE=='requesters'){echo 'Page';}?>" href="requester.php"><i class="fas fa-user-tie"></i>&nbsp;Requester</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='sellreport'){echo 'active';}?>" aria-current="<?php if(PAGE=='sellreport'){echo 'Page';}?>" href="soldproductreport.php"><i class="fas fa-file-invoice"></i>&nbsp;Sell Report</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='workreport'){echo 'active';}?>" aria-current="<?php if(PAGE=='workreport'){echo 'Page';}?>" href="workreport.php"><i class="fas fa-clipboard-list"></i>&nbsp;Work Report</a>
                        </li>
                         
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE=='changepass'){echo 'active';}?>" aria-current="<?php if(PAGE=='changepass'){echo 'Page';}?>" href="changepass.php"><i class="fas fa-key"></i>&nbsp;Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../includes/logouty.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                        </li>
                    </ul>
                </div>
             </nav>