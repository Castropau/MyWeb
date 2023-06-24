<?php include('connect.php');

    if(isset($_POST['admin']) && $_POST['admin'] == 'yes'){
        $id = $_POST['id'];
        $sql = "SELECT * FROM admin WHERE id='$id' LIMIT 1";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($query);
        echo json_encode($row);
    }

    if(isset($_POST['user']) && $_POST['user'] == 'yes'){
        $id = $_POST['id'];
        $sql = "SELECT * FROM user WHERE id='$id' LIMIT 1";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($query);
        echo json_encode($row);
    }
?>
