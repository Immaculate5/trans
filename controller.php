<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "Immah2001";
$database = "trans";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$Customer_Name = $_POST['Customer_Name'];
$Phone = $_POST['Phone'];
$Pickup_Location = $_POST['Pickup_Location'];
$Destination = $_POST['Destination'];
$Ride_Price = $_POST['Ride_Price'];

// Prepare and execute SQL statement
$sql = "INSERT INTO customers (Customer_Name, Phone, Pickup_Location, Destination, Ride_Price) VALUES ('$Customer_Name', '$Phone', '$Pickup_Location', '$Destination', '$Ride_Price')";

if ($conn->query($sql) === TRUE) {
  echo "Car ordered successfully";
  header("location:index.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>