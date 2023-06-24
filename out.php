<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "bago");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Check if the user is logged in
session_start();
if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
    // Update the user status to "Offline" only if the user is currently online
    $result = $conn->query("UPDATE `account` SET `status` = 'Offline' WHERE `id` = '$user_id' AND `status` = 'Online'");
    if ($result) {
        // Unset the session variable for the current user
        unset($_SESSION['id']);
        // Destroy the session
        session_destroy();
    }
}

// Close the database connection
mysqli_close($conn);

// Redirect the user to the login page
header("location:login.php");
?>