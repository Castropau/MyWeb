<!DOCTYPE html>
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
    /* height: 100vh; */
    background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(bg.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
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



/* Boxes */

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

/* .user-dropdown .dropdown-menu a:hover {
  text-decoration: underline;
} */

.user-dropdown:hover .dropdown-menu {
  display: block;
}
input[type="text"], input[type="tel"],input[type="email"],input[type="password"]{
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			box-sizing: border-box;
		}
		
form {
        max-width: 500px;
        margin: 0 auto;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #111;
        color: #fff;
        padding: 20px;
        border-radius: 5px;
    }
    
    h1 {
        text-align: center;
        font-size: 36px;
        margin-bottom: 20px;
        color: #00ff00;
    }
    
    label {
        font-size: 18px;
        display: block;
        margin-bottom: 5px;
        color: #fff;
    }
    
    input[type="text"],
    input[type="tel"],
    input[type="email"],
    input[type="password"],
    input[type="date"] {
        padding: 8px;
        border: none;
        border-radius: 5px;
        margin-bottom: 10px;
        background-color: #222;
        color: #fff;
    }
    
    input[type="submit"] {
        background-color: #00ff00;
        color: #111;
        font-weight: bold;
        font-size: 18px;
        padding: 8px;
        border: none;
        border-radius: 5px;
        margin-top: 20px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #fff;
        color: #111;
    }
    
    span {
        display: block;
        margin-bottom: 10px;
        color: #ff0000;
        font-size: 14px;
        font-style: italic;
    }
    
    #username-availability {
        display: block;
        margin-bottom: 10px;
        font-size: 14px;
    }
    .radio-buttons input[type="radio"],
.radio-buttons label {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
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
            <li><a href="index.php">HOME</a></li>
            <li><a href="member.php">MEMBERS</a></li>
            <li><a href="community.php">COMMUNITY</a></li>
            <li class="user-dropdown">
            <i class="fa-solid fa-user"></i>
             <ul class="dropdown-menu">
            <li><a href="login.php">login</a></li>

            </ul>
            </li>
        
            </ul>
        
    </header>
</br>
<?php

require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gmail = $_POST['gmail'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    $sql_username_check = "SELECT * FROM users WHERE username = '$username'";
    $result_username_check = mysqli_query($conn, $sql_username_check);

    $sql_phone_check = "SELECT * FROM users WHERE contact='$phone'";
    $result_phone_check = mysqli_query($conn, $sql_phone_check);

    $sql_email_check = "SELECT * FROM users WHERE email='$gmail'";
    $result_email_check = mysqli_query($conn, $sql_email_check);

    if (mysqli_num_rows($result_username_check) > 0) {
        echo "<script>
                  window.onload = function() {
                      swal('Error', 'Username is already taken. Please choose another one.', 'error');
                  }
              </script>";
    } else if (strlen($username) < 3) {
        echo "<script>
                  window.onload = function() {
                      swal('Error', 'Username must be at least 3 characters long.', 'error');
                  }
              </script>";
    } else if (mysqli_num_rows($result_phone_check) > 0 && mysqli_num_rows($result_email_check) > 0) {
        echo "<script>
                  window.onload = function() {
                      swal('Error', 'Phone number and email are already taken. Please choose other.', 'error');
                  }
              </script>";
    } else if (mysqli_num_rows($result_phone_check) > 0 || mysqli_num_rows($result_email_check) > 0) {
        $error_message = mysqli_num_rows($result_phone_check) > 0 ? 'Phone number is already taken.' : 'Email is already taken.';
        echo "<script>
                  window.onload = function() {
                      swal('Error', '$error_message Please choose another one.', 'error');
                  }
              </script>";
    } else {
        $id = "";
        do {
            $company_name = "SYV";
            $company_code = "GG";
            $company_name = strtoupper(substr($company_name, 0, 3));
            $company_code = strtoupper(substr($company_code, 0, 2));
            $random_letter_number = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
            $random_letters = substr($random_letter_number, 0, 2);
            $random_numbers = substr($random_letter_number, 2, 4);
            $id = $company_name . '(' . $random_letters . $random_numbers . ')' . $company_code;
            $sql_check_id = "SELECT * FROM users WHERE id = '$id'";
            $result_check_id = mysqli_query($conn, $sql_check_id);
        } while (mysqli_num_rows($result_check_id) > 0);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $sql_insert = "INSERT INTO users (users_id, username, firstname, lastname, email, contact, password, gender, dob, middlename) VALUES ('$id', '$username', '$firstname', '$lastname', '$gmail', '$phone', '$hashedPassword', '$gender', '$dob', '$middlename')";

        if (mysqli_query($conn, $sql_insert)) {
            echo "<script>
                      window.onload = function() {
                          swal('Account created successfully', 'Your account ID is $id. Please keep it safe for future reference.', 'success');
                      }
                  </script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

?>
    <form method="post" style="max-width: 500px;">
    <h1>Create Account account</h1>
    <span>Input first valid username before the other field</span></br>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required minlength="3" oninvalid="this.setCustomValidity('Username must be at least 3 characters long')" oninput="this.setCustomValidity('')">
    <span id="username-availability"></span>
    <label for="firstname">Firstname:</label>
    <input type="text" id="firstname" name="firstname" required>
    <label for="firstname">Middlename:</label>
    <input type="text" id="middlename" name="middlename" required>
    <label for="lastname">Lastname:</label>
    <input type="text" id="lastname" name="lastname" required>
    <label for="gender">Gender:</label>
<div class="radio-buttons">
  <input type="radio" id="male" name="gender" value="Male" required>
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="Female" required>
  <label for="female">Female</label>
</div>
<label for="dob">Date of Birth:</label>
<input type="date" id="dob" name="dob" required>

   <label for="gmail">Gmail:</label>
    <input type="email" id="gmail" name="gmail" required pattern="[a-zA-Z0-9._%+-]+@gmail\.com$" oninvalid="setCustomValidity('Please enter a valid Gmail address')" oninput="setCustomValidity('')">
    <span id="gmail-availability"></span>
    <label for="phonee">Phone Number:</label>
    <input type="tel" id="phone" name="phone"  pattern="^(09|\+639)\d{9}$" minlength="11" required placeholder="+639xxxxxxxxx">
    <span id="phone-availability"></span>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Create Account">
</form>
</br></br></br>
<script>

const usernameInput = document.getElementById('username');
const availabilitySpan = document.getElementById('username-availability');


const firstnameInput = document.getElementById('firstname');
const middlenameInput = document.getElementById('middlename');
const lastnameInput = document.getElementById('lastname');
const gmailInput = document.getElementById('gmail');
const phoneInput = document.getElementById('phone');
const passwordInput = document.getElementById('password');


firstnameInput.disabled = true;
firstnameInput.style.cursor = 'not-allowed';
middlenameInput.disabled = true;
middlenameInput.style.cursor = 'not-allowed';
lastnameInput.disabled = true;
lastnameInput.style.cursor = 'not-allowed';
gmailInput.disabled = true;
gmailInput.style.cursor = 'not-allowed';
phoneInput.disabled = true;
phoneInput.style.cursor = 'not-allowed';
passwordInput.disabled = true;
passwordInput.style.cursor = 'not-allowed';


firstnameInput.disabled = true;
middlenameInput.disabled = true;
lastnameInput.disabled = true;
gmailInput.disabled = true;
phoneInput.disabled = true;
passwordInput.disabled = true;


usernameInput.addEventListener('input', () => {
  if (usernameInput.value === '') {
    
    availabilitySpan.textContent = '';
    firstnameInput.disabled = true;
    middlenameInput.disabled = true;
    lastnameInput.disabled = true;
    gmailInput.disabled = true;
    phoneInput.disabled = true;
    passwordInput.disabled = true;
    firstnameInput.style.cursor = 'not-allowed';
    middlenameInput.style.cursor = 'not-allowed';
    lastnameInput.style.cursor = 'not-allowed';
    gmailInput.style.cursor = 'not-allowed';
    phoneInput.style.cursor = 'not-allowed';
    passwordInput.style.cursor = 'not-allowed';
    return;
  }

  
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'check-username.php');
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onload = () => {
    if (xhr.status === 200) {
      const response = xhr.responseText;
      if (response === 'available') {
        
        availabilitySpan.textContent = '';
        firstnameInput.disabled = false;
        middlenameInput.disabled = false;
        lastnameInput.disabled = false;
        gmailInput.disabled = false;
        phoneInput.disabled = false;
        passwordInput.disabled = false;
        firstnameInput.style.cursor = 'auto';
        middlenameInput.style.cursor = 'auto';
        lastnameInput.style.cursor = 'auto';
        gmailInput.style.cursor = 'auto';
        phoneInput.style.cursor = 'auto';
        passwordInput.style.cursor = 'auto';
      } else {
        
        availabilitySpan.textContent = 'Username is not available';
        firstnameInput.disabled = true;
        middlenameInput.disabled = true;
        lastnameInput.disabled = true;
        gmailInput.disabled = true;
        phoneInput.disabled = true;
        passwordInput.disabled = true;
        firstnameInput.style.cursor = 'not-allowed';
        middlenameInput.style.cursor = 'not-allowed';
        lastnameInput.style.cursor = 'not-allowed';
        gmailInput.style.cursor = 'not-allowed';
        phoneInput.style.cursor = 'not-allowed';
        passwordInput.style.cursor = 'not-allowed';
      }
    }
  };
  xhr.send(`username=${usernameInput.value}`);
});
</script>
<script>
    $(document).ready(function() {
    $('#username').keyup(function() {
        var username = $(this).val();
        if(username.length >= 3) {
            $.ajax({
                type: 'POST',
                url: 'check-username.php',
                data: { username: username },
                success: function(response) {
                    if(response == 'available') {
                        $('#username-availability').html('<span style="color:green;">Username is available</span><br>');
                    } else {
                        $('#username-availability').html('<span style="color:red;">Username already taken</span><br>');
                    }
                }
            });
        } else {
            $('#username-availability').html('');
        }
    });
});
</script>
<script>
    $(document).ready(function() {
    $('#gmail').keyup(function() {
        var gmail = $(this).val();
        if(gmail.length >= 3) {
            $.ajax({
                type: 'POST',
                url: 'check-gmail.php',
                data: { gmail: gmail },
                success: function(response) {
                    if(response == 'available') {
                        $('#gmail-availability').html('<span style="color:green;">Gmail is available</span><br>');
                    } else {
                        $('#gmail-availability').html('<span style="color:red;">Gmail already taken</span><br>');
                    }
                }
            });
        } else {
            $('#gmail-availability').html('');
        }
    });
});
</script>
<script>
    $(document).ready(function() {
    $('#phone').keyup(function() {
        var phone = $(this).val();
        if(phone.length >= 11) {
            $.ajax({
                type: 'POST',
                url: 'check-phone.php',
                data: { phone: phone },
                success: function(response) {
                    if(response == 'available') {
                        $('#phone-availability').html('<span style="color:green;">Phone is available</span>');
                    } else {
                        $('#phone-availability').html('<span style="color:red;">Phone already taken</span>');
                    }
                }
            });
        } else {
            $('#phone-availability').html('');
        }
    });
});
</script>

</body>
</html>