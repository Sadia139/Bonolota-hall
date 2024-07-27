<?php

//------------------------->> DB CONFIG
require_once "config/configPDO.php";

//------------------------->> SESSION START
session_start();

//--------------------------------->> CHECK USER
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>HALL MANAGEMENT SYSTEM | STUDENT Profile</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Include HeaderScripts -->
	<?php include_once "includes/headerScripts.php";?>


</head>

<body>
<!-- Include HeaderScripts -->
    <?php include_once "includes/navbar.php";?>
 <div class="container">

		
			
<?php

try {
     $stud_id = $_SESSION['user']; 
    # Sql Query
    $sql = "SELECT * FROM user_information WHERE stud_id='$stud_id'";

    # Prepare Query
    $result = $conn->prepare($sql);

    # Execute Query
    $result->execute();
     
 

                  


} catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}
  $row = $result->fetch(PDO::FETCH_ASSOC)
?>
     <img style=" display: block;
  margin-left: auto;
  margin-right: auto;" src="admin/upload/<?php echo $row['avatar'] ?>" alt="" width="300px" height="300px" id="cimg"></td> 
 <h1 class="text-center font-Staatliches-heading"><?php echo $row['stud_id'] ?></h1> 
 <h3 style="text-align: center;">Name: <?php echo $row["firstName"].' '.$row["lastName"]; ?></h3> 
 <h3 style="text-align: center;">Department: <?php echo $row["dept"]; ?></h3>
 <h3 style="text-align: center;">Batch: <?php echo $row["batch"]; ?></h3>
 <h3 style="text-align: center;">Email: <?php echo $row["email"]; ?></h3>
 <h3 style="text-align: center;">Phone: <?php echo $row["phone"]; ?></h3>
 <h3 style="text-align: center;">Room No: <?php echo $row["room_no"]; ?></h3>
 <h3 style="text-align: center;">Floor No: <?php echo $row["floor_no"]; ?></h3>
    </div>
	

	<!-- Include FooterScripts -->
	<?php include_once "includes/footerScripts.php";?>

</body>

</html>