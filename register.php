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
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if passwords match
if ($password !== $confirm_password) {
  die("Passwords do not match");
}

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare and execute SQL statement
$sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: signup-success.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>