<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/svg+xml">
    <link rel="stylesheet" href="swiper.min.css">
    <link rel="stylesheet" href="swiper.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script  src="app.js"></script>
    <title>Skylar Versatile</title>
    <style>
        body{
    background-color: #292929;
    font-family: 'Poppins', sans-serif;
    
    
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}
body{
    background-color: #292929;
    font-family: 'Poppins', sans-serif;
    height: auto;
    
}
.logo-section{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 30px 0;
}
.logo-section .fas{
    font-size: 6rem;
    color: #FEC53A;
}
.logo-section h1{
    width: 250px;
    font-size: 2rem;
    color: #FEC53A;
    margin-left: 10px;
}
/* main */
.container{
    width: 100%;
    height: 150vh;
    background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(bg.jpg);
    background-size: cover;
    background-position: center;
    
}
header{
    width: 100%;
    height: 10vh;
    background:rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 300px;
    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    
    padding: 10px;
    line-height: 1.3rem;
}
.logo p{
    width: 130px;
    margin-left: 10px;
    font-size: 20px;
}
.logo .fas{
    font-size: 50px;
}
ul.navbar{
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}
ul.navbar li{
    width: 120px;
}
ul.navbar li a{
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}
ul.navbar li a.active{
    color: #FEC53A;
}
ul.navbar li a:hover:not(.active){
    color: #FEC53A;
}
#btn{
    width: 250px;
    height: 10vh;
    background: #FEC53A;
    color: #000;
    outline: none;
    border: none;
    background-color: #ff0000;
    font-size: 1.2rem;
    font-weight: bold;
    text-align: right;
    padding-right: 40px;
}
#btn .fas{
    margin-right: 10px;
}

.content-wrapper{
    width: 80%;
    min-height: 80vh;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
}


.content-desc h1{
    font-size: 3rem;
    margin-bottom: 10px;
}
.content-desc p{
    width: 550px;
    font-size: 1.3rem;
    line-height: 2rem;
    margin-bottom: 10px;
}
.content-desc span{
    color: #FEC53A;
}
#btn2{
    width: 350px;
    height: 10vh;
    padding-left: 20px;
    outline: none;
    border: none;
    background: #FEC53A;
    font-size: 1.2rem;
    font-weight: bold;
    margin-top: 15px;
    clip-path: polygon(0 0, 74% 0, 100% 100%, 0% 100%);
    border-radius: 20px;
    text-align: left;
}
.logos{
    width: 400px;
    height: 400px;
    background: linear-gradient(rgba(38, 2, 39, 0.849));
    background-size: cover;
    background-position: center;
    position: relative;
}
.logos::after{
    content: '';
    width: 400px;
    height: 400px;
    background: url(logopic.jpg);
    background-size: cover;
    background-position: center;
    position: absolute;
    bottom: 0px;
    left: -150px;

}
/* card */
.top{
    font-size: 3em;
    font-weight: bold;
    text-align: center;
}
.wrap{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 30px;
    max-width: 1000px;
    margin: auto;
    margin-top: 50px;
    
     
 
}
.box{
    background: #e60000;
    border-radius: 10px;
}
img{
    width:100%;
    height: 300px;
}
.social{
    margin-top: -270px;
    background: #2b3da6;
    border-radius: 0 20px 20px 0 ;
    position: absolute;
     
     
}
.social a{
    display: flex;
    margin: 5px;
 
     
    position: relative;
    text-decoration: none;
    font-size:15px;
    color:#fff;
    padding: 5px;

     
}
.text{
    text-align: center;
    color:#fff;
}
/* card */
/* shop */
.about hr{
    height: 2px;
    background: #d98ca5;
    border-radius: 5px;
    margin: 30px 110px;
}

.about .Clothes h1{
    font-size: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 35px 0;
}

.about .clothes_box{
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 15px;
}

.about .clothes_box .clothes_card{
    background: #5a0c5a;
    width: 350px;
    padding: 25px 25px;
    text-align: center;
    border-radius: 10px;
    transition: 0.3s;
}

.about .clothes_box .clothes_card:hover{
    box-shadow: 5px 5px 5px rgba(0,0,0,0.6);
}

.about .Clothes .clothes_box img{
    width: 250px;
    cursor: pointer;
    transition: 0.3s;
}

.about .Clothes .clothes_box img:hover{
    transform: scale(1.1);
}

.about .clothes_box .clothes_card h1{
    font-size: 35px;
    color: gainsboro;
    margin: 15px 0;
}

.about .clothes_box .clothes_card p{
    color: white;
    margin: 25px 0;
    font-size: 17px;
}

.about .clothes_box .clothes_card .btn{
    text-decoration: none;
    color: white;
    padding: 10px 30px;
    background: #f9004d;
}
.footer{
    background: #24262b;
    padding: 50px;
}

.footer .main{
    max-width: 1170px;
    margin: auto;
}

ul{
    list-style: none;
}

.row{
    display: flex;
    flex-wrap: wrap;
}
/* esports games */
.games hr{
    height: 2px;
    background: #d98ca5;
    border-radius: 5px;
    margin: 30px 110px;
    
}

.games .Clothes h1{
    font-size: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 35px 0;
}

.games .clothes_box{
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 15px;
}

.games .clothes_box .clothes_card{
    background: #4d4dff;
    width: 350px;
    padding: 25px 25px;
    text-align: center;
    border-radius: 10px;
    transition: 0.3s;
}

.games .clothes_box .clothes_card:hover{
    box-shadow: 5px 5px 5px rgba(0,0,0,0.6);
}

.games .Clothes .clothes_box img{
    width: 250px;
    cursor: pointer;
    transition: 0.3s;
}

.games .Clothes .clothes_box img:hover{
    transform: scale(1.1);
}

.games .clothes_box .clothes_card h1{
    font-size: 35px;
    color: gainsboro;
    margin: 15px 0;
}

.games .clothes_box .clothes_card p{
    color: white;
    margin: 25px 0;
    font-size: 17px;
}

.games .clothes_box .clothes_card .btn{
    text-decoration: none;
    color: white;
    padding: 10px 30px;
    background: #f9004d;
}



/* footer */
footer{
    width: 100%;
    height: 55vh;
    background: #282828;
    display: flex;
    align-items: center;
    
}
.footer-body{
    width: 90%;
    margin: auto;
    display: flex;
    justify-content: space-around;
}
ul h3{
    color: #4d4dff;
    font-weight: 450;
}
ul li{
    list-style: none;
    line-height: 2.5rem;
}
ul li a{
    text-decoration: none;
    color: #fff;
}
ul li a .fab{
    font-size: 1.2rem;
    color: #FEC53A;
    margin-right: 15px;
}
    ul li a .fas{
        font-size: 1.2rem;
        color: #FEC53A;
        margin-right: 15px;
}
ul li a:hover{
    color: #FEC53A;
}
.footer-bottom{
    width: 100%;
    height: 7vh;
    background: #282828;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.875rem;
}
.footer-bottom span{
    color: #FEC53A;
    font-weight: bold;
}
.contact-me {
    width: 100%;
    height: 290px;
    background: #5a0c5a;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
}

    .contact-me p {
        color: white;
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 25px;
    }

    .contact-me .button-two {
        background-color: #0000e6;
        color: white;
        text-decoration: none;
        border: 2px solid transparent;
        font-weight: bold;
        padding: 13px 30px;
        border-radius: 30px;
        transition: .4s;
    }

        .contact-me .button-two:hover {
            background-color: transparent;
            border: 2px solid red;
            cursor: pointer;
        }
        .swiper-container {
            width: 100%;
            padding-top: 150px;
            padding-bottom: 50px;
            
        }
        
        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 350px;
            height: 350px;
        }
        
        .info h5{
            margin: 0;
            padding-top: 15px;
            position: absolute;
            bottom: 0;
            text-align: center;
            width: 100%;
            height: 60px;
            background: rgba(0, 0, 0, 0.685);
            font-size: 20px;
            font-weight: bold;
            color: #fff;
        }
        
        .info span{
            font-size: 15px;
            color: red;
            font-weight: bold;
        }
    

section{
  display: grid;

}
        .container {

  font-family: Arial, sans-serif;
  background-color: #1d1d1d;
  color: #fff;
}

/* Header */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 0;
}

.logo {
  font-size: 28px;
  font-weight: bold;
}

.navbar {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.navbar li {
  margin-right: 30px;
}

.navbar a {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  font-size: 16px;
  padding: 10px 0;
  border-bottom: 2px solid transparent;
}

.navbar a.active,
.navbar a:hover {
  border-bottom: 2px solid #fff;
}

/* Content */
.content-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 80px 0;
}

.content-desc {
  flex-basis: 60%;
}

.content-desc h1 {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 20px;
}

.content-desc p {
  font-size: 20px;
  line-height: 1.5;
  margin-bottom: 40px;
}

.content-desc span {
  color: #33ccff;
}

.logos {
  flex-basis: 30%;
}

/* Boxes */
.wrap {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  margin-bottom: 80px;
}

.box {
  flex-basis: 45%;
  background-color: #333;
  padding: 40px;
  margin-bottom: 20px;
  text-align: center;
}

.box img {
  max-width: 100%;
  margin-bottom: 20px;
}

.box h1 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.box p {
  font-size: 16px;
  line-height: 1.5;
}

.social {
  margin-bottom: 20px;
}

.social a {
  display: inline-block;
  margin-right: 10px;
  color: #fff;
  font-size: 20px;
}

.social a:hover {
  color: #33ccff;
}

/* Footer */
footer {
  background-color: #333;
  color: #fff;
  padding: 40px;
}

.footer-body {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.footer-body h3 {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-body ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.footer-body li {
  margin-bottom: 10px;
}

.footer-body a {
  text-decoration: none;
  color: #fff;
  font-size: 16px;
}

.footer-body a:hover {
  color: #33ccff;
}
.footer-bottom {
  background-color: #292929;
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 60px;
  margin-top: 50px;
}
.footer-body ul:first-child li:first-child img {
  width: 100px;
  height: 100px;
  object-fit: contain;
}

/* Style for the text within the footer */
.footer-bottom p {
  font-size: 14px;
  text-align: center;
  margin: 0;
}

/* Style for the name of the website author */
.footer-bottom span {
  font-weight: bold;
  margin-left: 5px;
}
.about {
  display: flex;
  flex-direction: row;
  align-items: center;
  background-color: #0a0a0a;
  color: #fff;
  padding: 80px 0;
}

.about-image {
  flex: 1;
  margin-right: 50px;
}

.about-image img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.about-content {
  flex: 2;
}

.about h2 {
  font-size: 36px;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-weight: 700;
}

.about p {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 20px;
}

.about .button {
  background-color: #ff2d55;
  color: #fff;
  padding: 10px 20px;
  font-size: 18px;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.2s ease-in-out;
  text-transform: uppercase;
  letter-spacing: 3px;
  border: none;
  margin-top: 20px;
  font-weight: 600;
}

.about .button:hover {
  background-color: #d82046;
}

.fade-in {
  opacity: 0;
  transition: opacity 250ms ease-in;
}

.fade-in.appear {
  opacity: 1;
}

.from-left {
  grid-column: 2 / 3;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}

.from-right {
  grid-column: 3 / 4;
  -webkit-transform: translateX(50%);
  transform: translateX(50%);
}

.from-left,
.from-right {
  transition: opacity 250ms ease-in, -webkit-transform 400ms ease-in;
  transition: opacity 250ms ease-in, transform 400ms ease-in;
  transition: opacity 250ms ease-in, transform 400ms ease-in,
    -webkit-transform 400ms ease-in;
  opacity: 0;
}

.from-left.appear,
.from-right.appear {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  opacity: 1;
}
.navbar li i.fa-user {
  display: inline-block;
  margin-right: 5px;
  font-size: 20px;
  color: #fff;
}

.navbar li i.fa-user:hover {
  color: #FFB900;
}
.user-dropdown {
  position: relative;
}

.user-dropdown .dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1;
  background-color: #1a1a1a;
  border: 1px solid #ccc;
  padding: 10px;
  font-family: 'Roboto', sans-serif;
  font-size: 14px;
  color: #fff;
  text-align: left;
}

.user-dropdown .dropdown-menu li {
  margin: 5px 0;
}

.user-dropdown .dropdown-menu a {
  color: #fff;
  text-decoration: none;
}

.user-dropdown:hover .dropdown-menu {
  display: block;
}
.profile-container {
  width: 600px;
  margin: 0 auto;
  background-color: #1f1f1f;
  padding: 20px;
}

.profile-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.profile-picture {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  margin-right: 20px;
}

.profile-username {
  font-size: 2em;
  margin: 0;
}

.profile-tagline {
  margin-top: 10px;
}

.profile-body {
  margin-top: 40px;
}

.section-title {
  font-size: 1.5em;
  margin: 0 0 20px 0;
}

.section-content {
  margin: 0;
  padding: 0;
  list-style: none;
}

.section-content li {
  margin-bottom: 10px;
}

.section-content li span {
  font-weight: bold;
  margin-right: 10px;
}
.button-container {
  margin-top: 10px;

}


.update-button {
  background-color: #f1c40f;
  color: #2c3e50;
  border: none;
  padding: 10px;
  font-size: 1.2rem;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
}

.update-button:hover {
  background-color: #e67e22;
}
.bio-input, .about-input {
  background-color: #2d2d2d;
  color: #fff;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  padding: 10px;
  width: 100%;
  margin-bottom: 10px;
}
textarea {
  width: 100%;
  height: 50px;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  background-color: #f2f2f2;
  font-size: 16px;
  line-height: 24px;
  resize: vertical;
}

/* Input styling */
input {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  background-color: #f2f2f2;
  font-size: 16px;
  line-height: 24px;
}

/* Button styling */
button[type="submit"] {
  display: inline-block;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  background-color: #e91e63;
  color: #fff;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #c2185b;
}
.profile-picture-container {
  position: relative;
}

.profile-picture-container label {
  position: absolute;
  bottom: 0;
  right: 0;
  background-color: #fff;
  color: #333;
  padding: 6px;
  border-radius: 50%;
  cursor: pointer;
  box-shadow: 0px 0px 5px #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}

.profile-picture-container label i {
  font-size: 18px;
}

.profile-picture-container input[type="file"] {
  display: none;
}
        </style>
<body>

 <!--main-->
 <div class="container">
    <header>
    
        <div class="logo">
            
            <p>#SKYVERSA</p>
        </div>
        <ul class="navbar">
        <li><a href="home.php">HOME</a></li>
    <li><a href="memberr.php">MEMBERS</a></li>
    <li><a href="communities.php">COMMUNITY</a></li>
            <li class="user-dropdown">
            <i class="fa-solid fa-user"></i><?php echo $name;?></i></i>
             <ul class="dropdown-menu">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="out.php">Logout</a></li>
            <li><a href="chat/">Chat</a></li>
            </ul>
            </li>
        
            </ul>
    </header>
</br>
<?php

include "connect.php";

$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $message = $_POST['message'];

    // Prepare the SQL statement
    $sql = "INSERT INTO feedback (account_id, firstname, middlename, lastname, message) 
            VALUES ('$id','$firstname', '$middlename', '$lastname', '$message')";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                  window.onload = function() {
                      swal('Feedback Submitted', 'Thank you for your feedback!', 'success');
                  }
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Retrieve user data from the database
$users_id = $id;
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $middlename = $row['middlename'];
    $users_id = $row['users_id']; // Update the variable name to 'users_id'

    $message = '';


    // Check if image path is not empty and the file exists
    if (!empty($image) && file_exists('uploads/'.$image) && is_readable('uploads/'.$image)) {
        $image = 'uploads/'.$image;
    } else {
        // Set default image path and update it in the database
        $image = 'logopic.jpg';
        $sql = "UPDATE users SET image='$image' WHERE id='$id'";
        mysqli_query($conn, $sql);

        // Update empty or null image paths for other users
        $sql = "UPDATE users SET image='$image' WHERE image='' OR image IS NULL";
        mysqli_query($conn, $sql);
    }
}
?>
<div class="profile-container">
<form method="post">
    <div class="profile-section">
        <h2 class="section-title">ID</h2>
        <input type="text" name="id" value="<?php echo $users_id; ?>" readonly> <!-- Update the variable name to 'users_id' -->
    </div>
    <div class="profile-section">
        <h2 class="section-title">Firstname</h2>
        <input type="text" name="firstname" value="<?php echo $firstname; ?>" readonly>
    </div>
    <div class="profile-section">
        <h2 class="section-title">Middlename</h2>
        <input type="text" name="middlename" value="<?php echo $middlename; ?>" readonly>
    </div>
    <div class="profile-section">
        <h2 class="section-title">Lastname</h2>
        <input type="text" name="lastname" value="<?php echo $lastname; ?>" readonly>
    </div>
    <div class="profile-section">
        <h2 class="section-title">Comment/Suggestion</h2>
        <textarea name="message"><?php echo $message; ?></textarea>
    </div>

    <button type="submit" name="submit" id="submit">Submit</button>
</form>
  </div>
</div>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
  var disclaimer =  document.querySelector("img[alt='www.000webhost.com']");
   if(disclaimer){
       disclaimer.remove();
   }  
 });
      </script>
</body>
</html>