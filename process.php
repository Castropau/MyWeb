<?php
// Assuming you have a database connection setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bago";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve user information from the database
$sql = "SELECT * FROM users WHERE id = ?"; // Replace 1 with the actual user ID
$result = $conn->query($sql);
$user = $result->fetch_assoc();

// Close the database connection
$conn->close();
?>