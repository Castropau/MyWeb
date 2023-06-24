<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bago";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users ORDER BY statuss='Online' DESC";
$result = mysqli_query($conn, $sql);
?>
<?php
	require_once 'validate.php';
	require 'name.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Skylar Versatile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/svg+xml">
    
</head>
<style>
    .navbar li i.fa-user {
  display: inline-block;
  margin-right: 5px;
  font-size: 20px;
  color: #fff;
}

.navbar li i.fa-user:hover {
  color: #FFB900;
}
    html,body {
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(bg.jpg);
        
    }
    .table td{
        color: white;
    }
    #searchInput::-webkit-input-placeholder {
  /* WebKit browsers */
  color: white;
}

#searchInput::-moz-placeholder {
 
  color: white;
}

#searchInput::-ms-input-placeholder {
 
  color: white;
}

#searchInput:-moz-placeholder {
 
  color: white;
}

#searchInput::placeholder {

  color: white;
}

#searchInput {
  background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value (0.5) to your desired opacity */
  color: white;
}
.status-circle {
  width: 12px;
  height: 12px;
  border-radius: 50%;
}

.status-circle.active {
  background-color: green;
}

.status-circle.offline {
  background-color: grey;
}
.containerr{
    width: 100%;
    height: 100vh;
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

.user-dropdown:hover .dropdown-menu {
  display: block;
}
.icon {
  display: inline-block;
  margin-right: 5px;
  font-size: 20px;
  color: #fff;
  vertical-align: middle; /* align the icon with the text */
}

.name {
  display: inline-block;
  max-width: 150px; /* adjust the max-width to your desired value */
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  vertical-align: middle; /* align the text with the icon */
}

/* adjust the icon position if the name is too long */
.name + .icon {
  position: relative;
  top: -2px; /* adjust the vertical position */
}

</style>
<body>
    
<div class="containerr">
    <header>
    
        <div class="logo">
            
            <p>#SKYVERSA</p>
        </div>
        <ul class="navbar">
            <li><a href="home.php">HOME</a></li>
            <li><a href="memberr.php">MEMBERS</a></li>
            <li><a href="communities.php">COMMUNITY</a></li>
            <li class="user-dropdown">
            <i class="fa-solid fa-user"></i>
            <span class="name" style="color: white;"><?php echo $name;?></span>
            <ul class="dropdown-menu">
        <li><a href="profile.php">Profile</a></li>
            <li><a href="out.php">logout</a></li>
            <li><a href="setting.php">Setting</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
            </li>
        
            </ul>
        
    </header>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <br>
            <input type="text" id="searchInput" class="form-control" placeholder="Search">
        </div>
    </div>
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Info</th>
      </tr>
    </thead>
    <tbody>


    




<?php


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>

<tr>
    <td><?php echo $row["users_id"] ?></td>
    <td><?php echo $row["firstname"] . " " . $row["lastname"]; ?></td>
    <td><button id='<?php echo $row["id"] ?>' class='btn btn-secondary'>Show</button></td>
  </tr>

<?php
   
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>


       
</tbody>
  </table>
  </div>





  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #000;">

      <!-- Modal Header -->
     

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>




  <script>
$(document).ready(function(){
    $('button').click(function(){
  id_emp = $(this).attr('id')
        $.ajax({url: "com.php",
        method:'post',
        data:{emp_id:id_emp},
         success: function(result){
    $(".modal-body").html(result);
  }});


        $('#myModal').modal("show");
    })
})

  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const rows = document.querySelectorAll('.table tbody tr');

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.toLowerCase();

            rows.forEach(row => {
                const columns = row.querySelectorAll('td');
                let found = false;

                columns.forEach(column => {
                    const text = column.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        found = true;
                    }
                });

                if (found) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>

</body>
</html>