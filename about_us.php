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
	<title>HALL MANAGEMENT SYSTEM | ABOUT US</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Include HeaderScripts -->
	<?php include_once "includes/headerScripts.php";?>


</head>

<!-- Include Navbar -->
<?php include_once "includes/navbar.php";?>


<div class="container">
	<div class="row mt-5">
		<div class="col-md-10 offset-md-1">

			<h3 class="text-center font-Staatliches-heading">About Institute</h3>

			<p class="text-justify">
				institute is committed to the challenging task of development of
				technical education by preparing seasoned graduates in highly sophisticated field of engineering
				and technology. Development of Bangladesh as an emerging industrial power is a demanding exercise as
				it involves the combination of cost effectiveness and efficiency along with producing
				world-class technology at the cutting edge.

				At present the institute offers graduate level courses in eight disciplines.
			</p>

	
		</div>
	</div>

	<hr>

	<div class="row my-5">

		<div class="col-md-10 offset-md-1">
			<h3 class="text-center font-Staatliches-heading">About Hall</h3>

			<p class="text-justify">
                Hostel blocks of 500 seats, for the girls will be available for the first semester students
				and will be allotted on the basis of the merit. Lists for hall admission will be declared after
				receiving the hall admission forms by the hall administration.
			</p>
		</div>

	</div>
</div>

<!-- Include FooterScripts -->
<?php include_once "includes/footerScripts.php";?>


</html>