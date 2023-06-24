<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bago";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform database query to count the number of rows with status "Online"
$sql = "SELECT COUNT(*) AS activeUserCount FROM users WHERE statuss = 'Online'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $activeUserCount = $row['activeUserCount'];

    // Set active user count to 0 if there are no rows with status "Online"
    $activeUserCount = ($activeUserCount > 0) ? $activeUserCount : 0;

    // Return the active user count as the response
    echo $activeUserCount;
} else {
    // Handle the query error
    echo 'Error: ' . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
