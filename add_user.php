<?php 
include('connect.php');

if(isset($_POST['user']) && $_POST['user'] == 'yes'){
    $ign = $_POST['ign'];
    $games = $_POST['games'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $position = $_POST['position'];
    $link = $_POST['link'];


    $sql = "INSERT INTO `user` (`ign`,games,`firstname`,`lastname`,`position`, link) values ('$ign','$games', '$firstname', '$lastname', '$position', '$link')";
    $query= mysqli_query($conn,$sql);
    $lastId = mysqli_insert_id($conn);
    if($query ==true)
    {
    
        $data = array(
            'status'=>'true',
        
        );

        echo json_encode($data);
    }
    else
    {
        $data = array(
            'status'=>'false',
        
        );

        echo json_encode($data);
    } 
}

if(isset($_POST['admin']) && $_POST['admin'] == 'yes'){
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `admin` (username, `firstname`,`lastname`,`password`) values ('$username','$firstname', '$lastname', '$password')";
    $query= mysqli_query($conn,$sql);
    $lastId = mysqli_insert_id($conn);
    if($query ==true)
    {
    
        $data = array(
            'status'=>'true',
        
        );

        echo json_encode($data);
    }
    else
    {
        $data = array(
            'status'=>'false',
        
        );

        echo json_encode($data);
    } 
}


?>