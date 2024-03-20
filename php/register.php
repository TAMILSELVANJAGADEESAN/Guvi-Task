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

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO register (fname, lname, email, password)
VALUES ('$fname', '$lname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "<a href='../logon.html'>login</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
