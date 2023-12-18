<?php
define('TITLE','Change Password');
define('PAGE','pass');
include('includes/header.php');
include('dbConnection.php');
if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail'];

  }
  else{
    echo"<script>location.href='RequesterLogin.php'</script>";
  }

  $rEmail=$_SESSION['rEmail'];


  if(isset($_REQUEST['passupdate'])){
         if($_REQUEST['rPassword']==""){
            $passmsg='<div class="alert alert-warning col-sm-6 mt-2">Fill All Fields!</div>';
         }
         else{
            $rPass=$_REQUEST['rPassword'];
            $sql= "UPDATE requesterlogin_tb SET r_password ='$rPass' WHERE r_email='$rEmail'";
            if($conn->query($sql)==TRUE){
              $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully!</div>';
          }
          else{
              $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to update!</div>';   
          }
         }
  
 }

?>

<div class="col-sm-9 col-md-10">
    <form class="mt-5 mx-5" action="" method="POST">
        <div class="form-group">
            <label for="email" >Email</label>
            <input type="email" class="form-control" id="inputEmail" readonly value="<?php echo $rEmail;?>">
        </div><br>
        <div class="form-group">
            <label for="inputnewpassword" >New Password</label>
            <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>

        <?php if(isset($passmsg)){
            echo $passmsg;}?>
    </form>
</div>


<?php

include('includes/footer.php');

?>