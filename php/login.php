<?php
$servername = "localhost";
$username = "root";
$password = "mypass";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User authenticated, redirect to profile page
    header("Location: ../update.html");
    exit();
} else {
    echo "Invalid email or password";
}

$conn->close();
?>
