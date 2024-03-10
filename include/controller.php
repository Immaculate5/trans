<?php




// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "Elon2508/*-";
$database = "trans";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$model;
$color;
$year;
$price;

// Prepare and execute SQL statement
$sql = "INSERT INTO cars (model, color, year, price) VALUES ('', '', '', '')";

if ($conn->query($sql) === TRUE) {
  echo "Car ordered successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>