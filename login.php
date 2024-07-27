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
 <?php

try {
  if (isset($_POST['UN']) && isset($_POST['PASS'])) {
    $stud_id = $_POST['UN'];
    $password = $_POST['PASS'];
} else {
    die();
}
        # Sql Query
        $sql = "SELECT password from user_information WHERE stud_id = :stud_id";

        # Prepare Query
        $result = $conn->prepare($sql);

        # Binding Value
        $result->bindValue(":stud_id", $stud_id);

        # Execute Query
        $result->execute();

        $row = $result->fetch(PDO::FETCH_ASSOC);

        $dbpassword = $row["password"];

        if (password_verify($password, $dbpassword)) {

            # If verify redirect to Index Page
            $_SESSION['user'] = $stud_id;
            header("Location: main.php");

        } else {
            echo "<script>Swal.fire({
                icon: 'error',
                title: 'Unable to Login',
                text: 'Please Check Your Credentials'
              })</script>";
             header("Location: index.php");
        }

}
 catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}

?>
