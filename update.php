<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Connect to the database
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'bago';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Check if the connection was successful
  if (!$conn) {
    die('Could not connect to the database: ' . mysqli_error($conn));
  }

  // Get user inputs
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $ign = $_POST['ign'];
  $bio = $_POST['bio'];
  $about = $_POST['about'];

  // Check if the image was uploaded
  if (!empty($_FILES['profile-picture']['name'])) {
    // Get the uploaded image
    $image = $_FILES['profile-picture']['tmp_name'];

    // Check if the image was uploaded successfully
    if (!$image) {
      die('Error uploading image');
    }

    // Convert the image to binary
    $image_data = addslashes(file_get_contents($image));

    // Update the user image
    $query = "UPDATE account SET image = '$image_data' WHERE id = '{$_SESSION['id']}'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if (!$result) {
      die('Error updating user image: ' . mysqli_error($conn));
    }
  }

  // Update the user information
  $query = "UPDATE account SET firstname = '$firstname', lastname = '$lastname', ign = '$ign', bio = '$bio', about = '$about' WHERE id = '{$_SESSION['id']}'";
  $result = mysqli_query($conn, $query);

  // Check if the query was successful
  if ($result) {
    $success_message = 'User information updated successfully';
  } else {
    $error_message = 'Error updating user information: ' . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}
?>