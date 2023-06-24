<?php
    session_start();
    require_once 'connect.php';
    $user_id = $_SESSION['id'];
    // Update the user statuss to "offline"
    $conn->query("UPDATE `users` SET `statuss` = 'Offline' WHERE `id` = '$user_id'") or die(mysqli_error($conn));  
    if(session_destroy()){
        header("location: login.php");
    }
?>