<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['edit_data_btn']))
{
 $stud_id=$_POST['edit_id'];
$query="SELECT *FROM meal_status WHERE stud_id='$stud_id' ";
$query_run= mysqli_query($conn, $query);
}

?>







<?php

//--------------------------------->> DB CONFIG
require_once "config/configPDO.php";

//--------------------------------->> START SESSION
session_start();

//--------------------------------->> START SESSION
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HALL MANAGEMENT SYSTEM | MEAL Status Update</title>

<!-- Include HeaderScripts -->
<?php include_once "includes/headerScripts.php";?>
<link rel="stylesheet" href="css/common.css">


</head>

<body>

    <!-- Include Admin Navbar -->
     <?php include_once "includes/navbar.php";?>

<div id="main-content">
    <h2 style="text-align: center;">Meal Status</h2>
	<br>
	<?php
	foreach($query_run as $row)
	{
		?>
    <form class="post-form" action="meal_stetus_update.php" method="post" enctype="multipart/form-data">
	 <br>
      <div style="text-align: center;" class="form-group">
	  <h5 style="text-align: center;">Current Status: <?php echo $row['status']?></h5>
		  	<label for="status">Meal Status</label>
                         <select name="status" id="status">
	   <option value="On">On</option>
	<option value="Off">Off</option>
</select>
      </div>
	   <div style="text-align: center;" class="form-group">
	   <input type="hidden" name="edit_id" value="<?php echo $row['stud_id'] ?>">
          <input  style=" vertical-align: middle;" name="update" class="submit" type="submit" value="Update"/>
      </div>
      
    </form>
	
	<?php
	}
		?>
</div>
</div>
 <!-- Include FooterScripts -->
    <?php include_once "includes/footerScripts.php";?>
</body>
</html>
