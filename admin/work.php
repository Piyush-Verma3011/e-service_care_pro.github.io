<?php
define('TITLE','Work Order');
define('PAGE','work');
include('../dbConnection.php');
include('includes/header.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail=$_SESSION['aEmail'];
  }else{
    echo "<script> location.href='login.php'</script>";
  }
?>

<div class="col-sm-9 col-sm-10 mt-5">
    <?php
    $sql="SELECT * FROM assignwork_tb";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        echo '<table class="table">';
              echo '<thead>';
                echo '<tr>';
                   echo '<th scope="col">Req ID</th>';
                   echo '<th scope="col">Req Info</th>';
                   echo '<th scope="col">Name</th>';
                   echo '<th scope="col">Address</th>';
                   echo '<th scope="col">City</th>';
                   echo '<th scope="col">Mobile</th>';
                   echo '<th scope="col">Technician</th>';
                   echo '<th scope="col">Assigned Date</th>';
                   echo '<th scope="col">Action</th>';
                echo '</tr>';
              echo'</thead>';
              echo '<tbody>';
                  while($row=$result->fetch_assoc()){
                    echo '<tr>';
                    echo '<td>'.$row['request_id'].'</td>';
                    echo '<td>'.$row['request_info'].'</td>';
                    echo '<td>'.$row['requester_name'].'</td>';
                    echo '<td>'.$row['requester_add2'].'</td>';
                    echo '<td>'.$row['requester_city'].'</td>';
                    echo '<td>'.$row['requester_mobile'].'</td>';
                    echo '<td>'.$row['assign_tech'].'</td>';
                    echo '<td>'.$row['assign_date'].'</td>';
                    echo '<td>';
                      echo '<form action="viewassignwork.php" method="POST" class="d-inline me-2">';
                         echo '<input type="hidden" name="mail" value='.$row['requester_email'].'><button class="btn btn-warning" name="view" value="View" type="submit" ><i class="far fa-eye"></i></button>';
                      echo '</form>';
                     
                    echo'</td>';
                    echo'</tr>';
                  }

              echo '</tbody>';
        echo '</table>';
    }else{
        echo '0 Result!';
    }
    



    ?>
</div>



<?php
             include('includes/footer.php');

?>