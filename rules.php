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
<html lang="en">

<head>
  <link rel="shortcut icon" href="img/nitrr.ico" />
  <title>HALL MANAGEMENT SYSTEM | RULES & REGULATION</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Include HeaderScripts -->
  <?php include_once "includes/headerScripts.php";?>

</head>

<body>

  <!-- Include HeaderScripts -->
  <?php include_once "includes/navbar.php";?>



  <div class="container">
    <div class="row my-5">
      <div class="col-md-10 offset-md-1">
        <h3 class="text-center font-Staatliches-heading">Rules and Regulations</h3>

        <ul>
          <li class="text-justify"> Application for admission to hostel shall be made in the prescribed form which can
            be had from the
            Hostel Office.</li>
          <hr />

          <li class="text-justify">Allotement of rooms shall be made by the Deputy Wardens under the orders of Warden.
          </li>
          <hr />

          <li class="text-justify">Students must occupy the rooms allotted to them and should not change/exchange rooms
            without prior
            permission from the Deputy Warden/Hostel Authorities. Violations of this rule will result in the Expulsion
            of the student concerned from the hostel.</li>
          <hr />

          <li class="text-justify"> HALL Furniture shall not be removed from one room to another under any
            circumstances. Students are
            responsible for the care of furniture and fittings in their respective rooms. The cost of furniture and
            fittings will be recovered from them in case of any damage or loss along with the fine of BDT.1000/-.</li>
          <hr />

          <li class="text-justify">Students are not allowed to use extra electrical fitting in their rooms unless
            permitted by the HALL
            Authorities.</li>
          <hr />

          <li class="text-justify">.All the rooms, doors and windows should be kept neat and tidy. A fine of BDT.2000
            will be levied for
            disfiguring of doors, glass panels, Furniture and walls of rooms from the resident(s) of the room in
            addition to the amount needed for repairing and repainting the above.</li>
          <hr />

          <li class="text-justify">Guests /Visitors are not permitted to enter any rooms allotted to the residents.
            Anyone who violates
            helps to violate this rule will be levied a fine of HALL.1000/- and will be evicted from the hall by the
            hall authorities.</li>
          <hr />

          <li class="text-justify"> Residents are instructed to switch off the lights and fans when they go out of the
            rooms, to save
            electric power. A fine of BDT.250/- per day will be collected from the residents of the rooms, who violate
            this instruction.</li>
          <hr />

          <li class="text-justify">If any misuse of computers and mobile phones in hostel rooms is brought to notice of
            Hall authorities
            the respective resident(s) will be expelled from the hall</li>
          <hr />

          <li class="text-justify">Students should not arrange any functions or meeting within the hall /collage
            campus or outside the
            campus, without prior permission from the Principal and Warden.</li>
          <hr />

          <li class="text-justify"> No student should stay away from the hall on any day without the prior permission
            of the concerned
            Deputy Warden/Associate Warden/Principal and Warden.</li>
          <hr />

          <li class="text-justify">Students should not keep Mopeds, Motor cycles, Scooters and cars in the hall
            premises.</li>
          <hr />

          <li class="text-justify">Students should settle in their rooms at 9 pm at studies on normal days and at 10 pm
            on free night days
            (Saturdays and Sundays) & maintain silence. </li>
          <hr />

          <li class="text-justify">Students should return to the hall before 6.30 pm and boys before 8 pm on all
            days. </li>
        </ul>


      </div>
    </div>
  </div>


  <!-- Include FooterScripts -->
  <?php include_once "includes/footerScripts.php";?>

</body>

</html>