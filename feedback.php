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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HALL MANAGEMENT SYSTEM | FEEDBACK</title>

    <!-- Include HeaderScripts -->
    <?php include_once "includes/headerScripts.php";?>

</head>

<body>

    <?php

try {

    if (isset($_POST["submit"])) {

        # Avoid XSS Attack
        $stud_id = htmlspecialchars($_POST["stud_id"]);
        $feedback = htmlspecialchars($_POST["feedback"]);

        # Sql Query
        $sql = "INSERT INTO feedback (stud_id, student_feedback) VALUES
		(:stud_id, :feedback)";

        # Prepare Query
        $result = $conn->prepare($sql);

        # Prepare Query
        $result = $conn->prepare($sql);

        # Binding Values
        $result->bindValue(":stud_id", $stud_id);
        $result->bindValue(":feedback", $feedback);

        # Execute Query
        $result->execute();

        if ($result) {
            echo "<script>Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Thank You for your Feedback!'
                })</script>";

        } else {
            echo "<script>Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Problem in giving Feedback. Try Again!'
                })</script>";
        }

    }

} catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}

?>

    <!-- Include User Navbar -->
    <?php include_once "includes/navbar.php";?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                <h3 class="text-center font-Staatliches-heading">Feedback Form</h3>
                <hr />


                <form action="" method="post" id="feedbackForm">

                    <div class="form-group">
                        <label for="">Student ID</label>
                        <input type="text" name="stud_id" id="stud_id" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                        <label for="feedback">Your Feedback</label>
                        <textarea class="form-control" name="feedback" id="feedback" rows="3" required></textarea>
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
<br>
<br>
    <!-- Include FooterScripts -->
    <?php include_once "includes/footerScripts.php";?>



</body>

</html>