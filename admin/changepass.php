<?php
define('TITLE','Change Password');
define('PAGE','changepass');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail=$_SESSION['aEmail'];

  }
  else{
    echo"<script>location.href='login.php'</script>";
  }
  

  $aEmail=$_SESSION['aEmail'];


  if(isset($_REQUEST['passupdate'])){
         if($_REQUEST['aPassword']==""){
            $passmsg='<div class="alert alert-warning col-sm-6 mt-2">Fill All Fields!</div>';
         }
         else{
            $aPass=$_REQUEST['aPassword'];
            $sql= "UPDATE adminlogin_tb SET a_password ='$aPass' WHERE a_email='$aEmail'";
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
            <input type="email" class="form-control" id="inputEmail" readonly value="<?php echo $aEmail;?>">
        </div><br>
        <div class="form-group">
            <label for="inputnewpassword" >New Password</label>
            <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="aPassword">
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