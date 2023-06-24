<?php 
include('connect.php');
// $username = $_POST['username'];
// $email = $_POST['email'];
// $mobile = $_POST['mobile'];
// $city = $_POST['city'];
// $id = $_POST['id'];
if(isset($_POST['admin']) && $_POST['admin'] == 'yes'){
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $id = $_POST['id'];

    $sql = "UPDATE `admin` SET  `username`='$username' , `firstname`= '$firstname', `lastname`='$lastname' WHERE id='$id' ";
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

if(isset($_POST['user']) && $_POST['user'] == 'yes'){
    $ign = $_POST['ign'];
    $games = $_POST['games'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $position = $_POST['position'];
    $link = $_POST['link'];
    $id = $_POST['id'];

    $sql = "UPDATE `user` SET  `ign`='$ign' , `games`= '$games', `firstname`='$firstname', `lastname`='$lastname', `link`='$link', `position`='$position' WHERE id='$id' ";
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