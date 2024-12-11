<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn2 = mysqli_connect('localhost', 'root', '');

// Check connection

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
else{
    echo "Connected successfully";
}


// Create database
?>