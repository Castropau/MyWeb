<?php
  require_once 'validate.php';
  require 'name.php';
  require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MEMBERS</title>
	
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/svg+xml">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet"/>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #292929;
  padding: 30px 0px;
  position: fixed;
  opacity: 0.8;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #000000;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}
.image{
    width: 100%;
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(bg.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.content-desc h1{
    font-size: 5em;
    margin: 0;
    padding: 0;
    text-align: center;
    color: #fff;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translateX(-50%);
}
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 10%;
  opacity: 0.8;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  background-color: white;
}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
  position: relative;
}
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}

    .btnAdd {
      text-align: right;
      width: 83%;
      margin-bottom: 20px;
    }
    body{
        color: white;
    }
    .row th{
        
        color: blue;
        background-color: red;
    }
    .row td{
        
        color: red;
        background-color: white;
        opacity: 0.8;
    }
    .modal-body .row{
         color: red;
    }
    .fa-user {
  margin-right: 10px;
}
.dataTables_length label{
  color: blue;
}
#table-bordered_info{
  color: blue;
}
#table-bordered_filter{
  color: blue;
}
.containerr{
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
        <span class="name"><?php echo $name;?></span>
        <ul class="dropdown-menu">
        <li><a href="profile.php">Profile</a></li>
            <li><a href="out.php">logout</a></li>
            <li><a href="setting.php">Setting</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
    </li>
</ul>
        
    </header>
            
                
                
          
       
        <div class="image">
        <div class="container-fluid">
    <br>
    <h2 class="datatable design text-center">ALL MEMBERS</h2>
    <div class="row">
      <div class="container">
      <div class="container">
   

  

<!-- <div class="container" style="background-color: rgba(7, 3, 5, 0.8); width: 1500px; border-top: 10px solid rgba(7, 3, 5, 0.8);"> -->
  <div class="row justify-content-center">
    <div class="col-md-8">
      <table class="table table-hover text-center" style="max-width: 2000px; margin-right: 70px;" id="table-bordered">
      <!-- <a href="add-new.php" class="btn btn-dark mb-3">Add New</a> -->
        <thead class="table-dark">
          <tr>
          <th scope="col">IGN</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Position</th>
            <th scope="col">Games</th>
            <th scope="col">Link</th>
           
          </tr>
        </thead>
        <tbody>
  <?php
  $sql = "SELECT * FROM `user`";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $link = $row["link"]; // Retrieve the link value from the row
  ?>
    <tr>
    <td class="align-middle text-center"><?php echo $row["ign"] ?></td>
      <td class="align-middle text-center"><?php echo $row["firstname"] ?></td>
      <td class="align-middle text-center"><?php echo $row["lastname"] ?></td>
      <td class="align-middle text-center"><?php echo $row["position"] ?></td>
      <td class="align-middle text-center"><?php echo $row["games"] ?></td>
      <td class="align-middle text-center"> <!-- Add the 'text-center' class for horizontal alignment -->
        <a href="<?php echo $link ?>" class="viewlink" target="_blank">
          <img src="admin/fb.png" class="img-fluid img-thumbnail align-middle" width="40" height="40"> <!-- Add the 'align-middle' class for vertical alignment -->
        </a>
      </td>
     
    </tr>
  <?php
  }
  ?>
</tbody>

      </table>
    </div>
  </div>
</div>

</div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/dt-1.10.25datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<script type="text/javascript">
  //var table = $('#example').DataTable();
</script>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#table-bordered').DataTable();
  });
</script>
</body>
</html>