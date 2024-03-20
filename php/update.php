<?php
// MongoDB connection parameters
$mongoHost = 'localhost';
$mongoPort = '27017';
$mongoDB = 'your_database_name';
$mongoCollection = 'your_collection_name';

// Connect to MongoDB
$mongoClient = new MongoDB\Client("mongodb://$mongoHost:$mongoPort");

// Select database and collection
$collection = $mongoClient->$mongoDB->$mongoCollection;

// Get form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$password = $_POST['password'];

// Update user information
$filter = ['fname' => $fname]; // Assuming 'fname' is unique
$update = ['$set' => [
    'lname' => $lname,
    'age' => $age,
    'password' => $password
]];
$result = $collection->updateOne($filter, $update);

if($result->getModifiedCount() > 0) {
    echo "User information updated successfully!";
} else {
    echo "Failed to update user information.";
}
?>
