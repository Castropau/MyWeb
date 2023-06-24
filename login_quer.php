<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "bago");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Add the statuss and last_active columns to the users table if they don't exist
$conn->query("ALTER TABLE `users` ADD COLUMN IF NOT EXISTS `statuss` VARCHAR(10) DEFAULT 'Offline' AFTER `password`") or die(mysqli_error($conn));
$conn->query("ALTER TABLE `users` ADD COLUMN IF NOT EXISTS `last_access` INT(11) AFTER `statuss`") or die(mysqli_error($conn));

// Start session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['id'])) {
    header('location: home.php');
    exit();
}

// Update all users to "offline" statuss except for the current user
//bakit all user kasi nakalagay inupdate ko na sya haha diko lang natanngal yungcomment
//yung else kasi yung ma eexecute never yan papasok sa first
//execute mo to after mavalidate
// if (isset($_SESSION['id'])) {
//     $current_user_id = $_SESSION['id'];
//     $conn->query("UPDATE `users` SET `statuss` = 'Offline' WHERE `id` != '$current_user_id'") or die(mysqli_error($conn));
// } else {
//     $conn->query("UPDATE `users` SET `statuss` = 'Offline'") or die(mysqli_error($conn));
// }

// Check if the login button is clicked
if (isset($_POST['login_quer'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    // Hash the password entered by the user
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = $conn->query("SELECT * FROM `users` WHERE `username` = '$username'") or die(mysqli_error($conn));
    $fetch = $query->fetch_array();
    $row = $query->num_rows;

    if ($row > 0 && password_verify($password, $fetch['password'])) {
        $_SESSION['id'] = $fetch['id'];
        $_SESSION['firstname'] = $fetch['firstname'];
        $user_id = $fetch['id'];

        // Update the user statuss to "online" and set the last active timestamp to the current time
        $current_time = time();
        $conn->query("UPDATE `users` SET `statuss` = 'Online', `last_access` = '$current_time' WHERE `id` = '$user_id'") or die(mysqli_error($conn));
        header('location:home.php');
        exit();
    } 
    // else {
    //     echo "<center><label style='color:red;'>Invalid username or password</label></center>";
    // }
}

// Check if the logout button is clicked
// if (isset($_POST['logout_quer'])) {
//     $user_id = $_SESSION['id'];
//     // Update the user statuss to "offline"
//     $conn->query("UPDATE `users` SET `statuss` = 'Offline' WHERE `id` = '$user_id'") or die(mysqli_error($conn));
//     session_destroy();
//     header('location:index.php');
//     exit();
// }

// Close the database connection
mysqli_close($conn);
?>
