<?php
define('TITLE','Update Technician');
define('PAGE','technician');
include('../dbConnection.php');
include('includes/header.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail=$_SESSION['aEmail'];
  }else{
    echo "<script> location.href='login.php'</script>";
  }
?>

<div class="col-sm-6 mt-5 mx-3">
    <h3 class="text-center">
        Update Requester Details
    </h3>
    <?php
    if(isset($_REQUEST['edit'])){
        $sql="SELECT * FROM technician_tb WHERE empid={$_REQUEST['id']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    }
    if(isset($_REQUEST['empupdate'])){
        if(($_REQUEST['empCity']=="")  || ($_REQUEST['empName']=="") || ($_REQUEST['empEmail']=="") || ($_REQUEST['empMobile']=="")){
            $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields!</div>';
        }else{
            $eId=$_REQUEST['empId'];
            $eName=$_REQUEST['empName'];
            $eEmail=$_REQUEST['empEmail'];
            $eCity=$_REQUEST['empCity'];
            $eMobile=$_REQUEST['empMobile'];
            $sql="UPDATE technician_tb SET empName='$eName',empEmail='$eEmail',empCity='$eCity',empMobile='$eMobile' WHERE empid='$eId'";
            if($conn->query($sql)==TRUE){
                $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully!</div>';
            }else{
                $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update!</div>';
            }
        }
    }
    ?>


<form action="" method="POST">
    <div class="form-group mb-2">
           <label for="empId">Requester ID</label>
           <input type="text" class="form-control" name="empId" id="empId" value="<?php if(isset($row['empid'])){
            echo $row['empid'];}?>" readonly>
    </div>
    <div class="form-group mb-2">
           <label for="empName">Name</label>
           <input type="text" class="form-control" name="empName" id="empName" value="<?php if(isset($row['empName'])){
            echo $row['empName'];}?>" >
    </div>
    <div class="form-group mb-3">
           <label for="empCity">City</label>
           <input type="text" class="form-control" name="empCity" id="empCity" value="<?php if(isset($row['empCity'])){
            echo $row['empCity'];}?>">
    </div>
    <div class="form-group mb-3">
           <label for="empMobile">Mobile</label>
           <input type="text" class="form-control" name="empMobile" id="empMobile" value="<?php if(isset($row['empMobile'])){
            echo $row['empMobile'];}?>">
    </div>
    <div class="form-group mb-3">
           <label for="empEmail">Email</label>
           <input type="email" class="form-control" name="empEmail" id="empEmail" value="<?php if(isset($row['empEmail'])){
            echo $row['empEmail'];}?>">
    </div>
    <div class="text-center mb-2">
         <button type="submit"class="btn btn-danger" id="empupdate" name="empupdate">Update</button>
         <a href="technician.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)){echo $msg;}?>
</form>


</div>




<?php
             include('includes/footer.php');

?>