<?php
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bago";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];

   
    $stmt = $conn->prepare("SELECT username FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $num_rows = $stmt->num_rows;
    $stmt->close();

    if($num_rows > 0) {
        echo 'taken';
    } else {
        echo 'available';
    }

    $conn->close();
?>