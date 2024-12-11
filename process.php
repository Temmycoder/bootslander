<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bootslander_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



 if (isset($_POST['send'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $sender_email = $_POST['sender_email'];
    $message = $_POST['message'];
    $created_at = date('Y-m-d H:i:s');

   $sql ="INSERT INTO contact_tbl (first_name, last_name, sender_email, message, created_at)
   values ('$first_name', '$last_name', '$sender_email', '$message', '$created_at')";

    if (mysqli_query($conn, $sql)) {

        echo "SUCCESS, new record created successfully";
    }
    else{
        echo "ERROR: Could not able to send the message"; 

    }




 }

?>