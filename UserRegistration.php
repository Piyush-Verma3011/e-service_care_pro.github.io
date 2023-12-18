<?php
include('dbConnection.php');
if(isset($_REQUEST['rSignup'])){
    if(($_REQUEST['rName']=="") || ($_REQUEST['rEmail']=="") || ($_REQUEST['rPassword']=="")){
        $regmsg= '<div class="alert alert-warning mt-2" role="alert">All Fields are Required!</div>';
    }else{

         $sql="SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
         $result=$conn->query($sql);
         if($result->num_rows==1){
            $regmsg= '<div class="alert alert-warning mt-2" role="alert">Email ID Already Exists!</div>';;
         }else{

                    $rName= $_REQUEST['rName'];
                    $rEmail= $_REQUEST['rEmail'];
                    $rPassword= $_REQUEST['rPassword'];
                    $sql= "INSERT INTO requesterlogin_tb(r_name, r_email,r_password) VALUES('$rName','$rEmail','$rPassword')";
                    $conn->query($sql);
                    if($conn->query($sql)==TRUE){
                        $regmsg= '<div class="alert alert-success mt-2" role="alert">Account Successfully Created!</div>';
                    }else{


                        $regmsg= '<div class="alert alert-danger mt-2" role="alert"> Unable to create Account!</div>';
                    }
               }
        }
    }

?>
<div class="container pt-5" id="registration"><br><br>
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4"method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="name"><strong style="font-weight: 750;">&nbspName</strong></label><input type="text" class="form-control" placeholder="Name" name="rName">
                </div><br>
                <div class="form-group">
                    <i class="fas fa-envelope"></i><label for="email"><strong style="font-weight: 750;">&nbspEmail</strong></label><input type="email" class="form-control" placeholder="Email" name="rEmail">
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div><br>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="pass"><strong style="font-weight: 750;">&nbspNew Password</strong></label><input type="password" class="form-control" placeholder="Password" name="rPassword">
                </div><br>

                <button type="submit" class="btn btn-danger mt-5 w-100 shadow-sm " name="rSignup">
                <strong class="font-weight-bold">Sign Up</strong>
                 </button>
                 <em style="font-size:10px;">Note-By clicking Sign Up, you agree to our Terms, Data policy and Cookie Policy.</em>

<?php if(isset($regmsg)){
      echo $regmsg;
}

?>

            </form>
        </div>
    </div>
</div><br>