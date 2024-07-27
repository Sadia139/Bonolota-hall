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
<title>HALL MANAGEMENT SYSTEM | MEAL Status</title>

<!-- Include HeaderScripts -->
<?php include_once "includes/headerScripts.php";?>
<link rel="stylesheet" href="../css/common.css">


</head>

<body>

    <!-- Include Admin Navbar -->
    <?php include_once "includes/navbar.php";?>


    <div class="container">
        <div class="row mt-5">
            <section class="col-md-12">

                <h1 class="text-center font-Staatliches-heading">MEAL Status</h1>

                <div class="table-responsive">

                    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">


                        <thead>
                            <tr class="tableizer-firstrow">
                                <th>Student ID</th>
                                <th> Meal Status</th>
                                <th>Date and Time</th>
                                <th>Action (On/Off)</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

try {
	$stud_id = $_SESSION['user']; 

    # Sql Query
    $sql = "SELECT * FROM meal_status where stud_id='$stud_id'";

    # Prepare Query
    $result = $conn->prepare($sql);

    # Execute Query
    $result->execute();

    # Checking Wether Count Greater than 0
    if ($result->rowCount() > 0) {

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            ?>

                            <tr>
                                <td><?php echo $row["stud_id"]; ?></td>
                                <td><?php echo $row["status"]; ?></td>
                                <td><?php echo $row["date_created"]; ?></td>
								<td>
                                <form action="meal_stetus_edit.php" method="POST">
								<input type="hidden" name="edit_id" value="<?php echo $row['stud_id'] ?>">
								<button type="submit" name="edit_data_btn" class="btn nbtn-success"> Edit </button>
								</form>
								</td>
                            </tr>


                            <?php

        }

        ?>

                        </tbody>
                    </table>

                    <?php

    } else {
        echo "<tr><td class='text-center' colspan='4'>No Records Found</td></tr>";
    }

} catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}

?>
                </div>

            </section>
        </div>
    </div>




    <!-- Include FooterScripts -->
    <?php include_once "includes/footerScripts.php";?>

</body>

</html>