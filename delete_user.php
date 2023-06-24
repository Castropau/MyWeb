<?php 
include('connect.php');


if(isset($_POST['admin']) && $_POST['admin'] == 'yes'){
    $user_id = $_POST['id'];
    $sql = "DELETE FROM admin WHERE id='$user_id'";
    $delQuery =mysqli_query($conn,$sql);
    if($delQuery==true)
    {
        $data = array(
            'status'=>'success',
        
        );

        echo json_encode($data);
    }
    else
    {
        $data = array(
            'status'=>'failed',
        
        );

        echo json_encode($data);
    } 
}

if(isset($_POST['user']) && $_POST['user'] == 'yes'){
    $user_id = $_POST['id'];
    $sql = "DELETE FROM user WHERE id='$user_id'";
    $delQuery =mysqli_query($conn,$sql);
    if($delQuery==true)
    {
        $data = array(
            'status'=>'success',
        
        );

        echo json_encode($data);
    }
    else
    {
        $data = array(
            'status'=>'failed',
        
        );

        echo json_encode($data);
    } 
}



?>