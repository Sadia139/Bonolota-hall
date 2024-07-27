<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['update']))
{
  $stud_id=$_POST['edit_id'];
 $status=$_POST['status'];
 $date= date("Y-m-d h:i:sa");
$query="UPDATE meal_status SET status='$status', date_created='$date' WHERE stud_id='$stud_id'";
$query_run= mysqli_query($conn, $query);

if(mysqli_query($conn, $query)){
    echo "Records were updated successfully.";
	 include_once 'view_meal_stetus.php';
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 
}

?>
