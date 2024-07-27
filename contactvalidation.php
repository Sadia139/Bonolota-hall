 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database= "hostel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
      if (isset($_POST['Submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];

             
        $sql="INSERT contact_us (name,email,subject) values('$name','$email','$subject')";
        $query=mysqli_query($conn,$sql);
        if($sql)
        {
          header('Location:index.php');
        }
    }
  
    ?>