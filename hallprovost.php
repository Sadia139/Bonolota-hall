<?php

//--------------------------------->> DB CONFIG
require_once "config/configPDO.php";

//--------------------------------->> START SESSION
session_start();

//--------------------------------->> START SESSION
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>HALL MANAGEMENT SYSTEM | HALL PROVOST Profile</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include_once "includes/headerScripts.php";?>
<link rel="stylesheet" href="../css/common.css">

</head>

<body>
 <!-- Include Admin Navbar -->
    <?php include_once "includes/navbar.php";?>
 <div class="container">

		
			
<?php

try {

    $sql = "SELECT * FROM hall_provost";

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
  margin-right: auto;" src="hall_provost/upload/<?php echo $row['avatar'] ?>" alt="" width="300px" height="300px" id="cimg"></td> 
 <h1 class="text-center font-Staatliches-heading"><?php echo "Hall Provost" ?></h1> 
 <h3 style="text-align: center;"><?php echo $row["name"] ?></h3> 
 <h5 style="text-align: center;">Eamil: <?php echo $row["userName"]; ?></h5>
  <h5 style="text-align: center;">Phone: +880-01708503575</h5>
 <h5 style="text-align: center;">Designation: Associate Professor</h5>
  <h5 style="text-align: center;">Department of CSE</h5>
    </div>
	<div style=" padding: 70px 0; border: 3px solid green;text-align: center;">
	             <h5 style="text-align: center;">Message From Hall Provost:</h5>
  <p>It is my great pleasure to introduce you all to the  Bonolota Hall, a dormitory of the students of the BAUET. The Bonolota hall is situated almost at the center of the campus.The Provost of the hall, run the administration in cooperation with a group of well-experienced and qualified teachers of the university as House Tutors and Assistant House Tutors. Besides, a team work offered by a group of efficient and experienced officers, staffs, gardeners, and cooks provide vital supports to the resident and non-resident students of the hall. Me, as Provost and my office is always ready to welcome to listen to our dearest students, honorable teachers, and visitors during a pre-fixed mutually given convenient time. Following this process, the services of the hall is thereby guaranteed for the future generation.</p>
</div>
<br>
	  <!-- Include FooterScripts -->
    <?php include_once "includes/footerScripts.php";?>

</body>

</html>