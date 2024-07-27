<?php
//--------------------------------->> DB CONFIG
require_once "config/configPDO.php";

//--------------------------------->> SESSION START
session_start();

//--------------------------------->> CHECK USER
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}


?>


<!DOCTYPE html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HALL MANAGEMENT SYSTEM | FAQ</title>

	<!-- Include HeaderScripts -->
	<?php include_once "includes/headerScripts.php";?>

</head>

<body>


	<!-- Include Navbar -->
	<?php include_once "includes/navbar.php";?>



	<div class="container">
		<div class="row mt-5">
			<div class="col-md-10 offset-md-1">

				<div class="accordion" id="accordionExample">

					<div class="card">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
									data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									1) What room furnishings are provided by the
									hall?
								</button>
							</h2>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne"
							data-parent="#accordionExample">
							<div class="card-body">
								The rooms come equipped with a table, chair, cot and
								a cupboard for each student. All the rooms are
								triple sharing with 2 fans and sufficient sockets. A
								big sized mirror is provided in each room.
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button"
									data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
									aria-controls="collapseTwo">
									2) What necessary items must students bring to the
									hall?
								</button>
							</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
							data-parent="#accordionExample">
							<div class="card-body">
								The bed and bathroom accessories, such as
								mattresses, pillows, bed covers, buckets, mugs etc.,
								need to be purchased by the students. The students
								can purchase the same at the college shops within
								the campus.
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button"
									data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
									aria-controls="collapseThree">
									3) What are the facilities available for the
									students in the hall?
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
							data-parent="#accordionExample">
							<div class="card-body">
								Each hall block has a common room provided with TV
								along with other sources of entertainment like
								carrom board etc. It also contains water cooler and
								Solar Heater in each floor. Hence pure drinking
								water and hot water for bath are available. The
								hostels are Wi-Fi enabled.
							</div>
						</div>
					</div>



					<div class="card">
						<div class="card-header" id="headingFour">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button"
									data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
									aria-controls="collapseFour">
									4) What are the recreational facilities available
									in the hall?
								</button>
							</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour"
							data-parent="#accordionExample">
							<div class="card-body">
								There are separate \91Gymnasiums\92 for Boys hostel
								and Girls hostel. In addition to the above, sports
								materials such as Cricket Bats, Shuttlecocks, Throw
								balls, Volley balls and Indoor games are available
								in each block. Hall has an open badminton
								court. Movies are arranged periodically at the
								common area of the hostels (or) University open
								auditorium. Student activity centre and incubation
								centers are available in the college complex.
							</div>
						</div>
					</div>


					<div class="card">
						<div class="card-header" id="headingFive">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button"
									data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
									aria-controls="collapseFive">
									5) What are the Hall Mess Facilities?
								</button>
							</h2>
						</div>

						<div id="collapseFive" class="collapse" aria-labelledby="headingFive"
							data-parent="#accordionExample">
							<div class="card-body">
								The Hall Mess is run by the management. Menu will
								be displayed on the notice board and meal chart. Changes to the
								menu can be made through the Mess Committee. In
								addition to the Mess service, Canteens and Food
								courts are also available for students\92 use.
							</div>
						</div>
					</div>



					<div class="card">
						<div class="card-header" id="headingSix">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button"
									data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
									aria-controls="collapseSix">
									6) Is there a Laundry Service available in the
									hall?
								</button>
							</h2>
						</div>

						<div id="collapseSix" class="collapse" aria-labelledby="headingSix"
							data-parent="#accordionExample">
							<div class="card-body">
								Hall provides laundry and dry cleaning service to
								the hostellers. Equipped with state-of-the art
								machinery, every kind of cloth and fabric can be
								serviced.
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
<br>
<br>
<br>

	<!-- Include FooterScripts -->
	<?php include_once "includes/footerScripts.php";?>

</body>

</html>