<?php
define('TITLE','workreport');
define('PAGE','workreport');
include('../dbConnection.php');
include('includes/header.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail=$_SESSION['aEmail'];
  }else{
    echo "<script> location.href='login.php'</script>";
  }
?>


    <div class="col-sm-9 col-md-10 mt-5 text-center">
    <form action="" method="POST" class="d-print-none">
        <div class="d-flex align-items-center">
            <span class="me-2">From:</span>
            <div class="form-group col-md-2 me-2">
                <input type="date" class="form-control" id="startdate" name="startdate">
            </div>
            <span class="me-2">to:</span>
            <div class="form-group col-md-2 me-2">
                <input type="date" class="form-control" id="enddate" name="enddate">
            </div>
            <div class="col-auto">
                <input type="submit" class="btn btn-secondary" name="searchsubmit" value="Search">
            </div>
        </div>
    </form>





<?php
if (isset($_REQUEST['searchsubmit'])) {
    $startdate = $_REQUEST['startdate'];
    $enddate = $_REQUEST['enddate'];
    $sql = "SELECT * FROM assignwork_tb WHERE assign_date BETWEEN '$startdate' AND '$enddate'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<div class="table-responsive mt-4">';
        echo '<table class="table table-bordered table-striped">';
        echo '<thead class="bg-dark text-white">';
        echo '<tr>';
        echo '<th scope="col">Req ID</th>';
        echo '<th scope="col">Request Info</th>';
        echo '<th scope="col">Name</th>';
        echo '<th scope="col">Address</th>';
        echo '<th scope="col">City</th>';
        echo '<th scope="col">Mobile</th>';
        echo '<th scope="col">Technician</th>';
        echo '<th scope="col">Assigned Date</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['request_id'] . '</td>';
            echo '<td>' . $row['request_info'] . '</td>';
            echo '<td>' . $row['requester_name'] . '</td>';
            echo '<td>' . $row['requester_add2'] . '</td>';
            echo '<td>' . $row['requester_city'] . '</td>';
            echo '<td>' . $row['requester_mobile'] . '</td>';
            echo '<td>' . $row['assign_tech'] . '</td>';
            echo '<td>' . $row['assign_date'] . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '<div class="text-center mt-2">';
        echo '<input type="submit" class="btn btn-danger d-print-none" value="Print" onClick="window.print()">';
        echo '</div>';
    } else {
        echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'>No Records Found!</div>";
    }
}
?>
</div>



<?php
             include('includes/footer.php');

?>