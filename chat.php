<?php
	require_once 'validate.php';
	require 'name.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Messenger Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<style>
	body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	background-color: #0084ff;
	color: white;
	padding: 20px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

nav ul {
	list-style: none;
	display: flex;
}

nav li {
	margin-left: 20px;
}

nav a {
	color: white;
	text-decoration: none;
}
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

/* Messages section */

main {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  
}

/* Column styles */
.column {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 10px;
  width: 20%;
  margin-right: 20%;
   margin-top: 20px;
}

/* Messages section styles */
#messages {
  background-color: #F4F6F9;
  padding: 20px;
  border-right: 1px solid #ECEFF1;
  width: 300px;
  height: calc(100vh - 60px);
  overflow-y: auto;
}

#messages ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

#messages li {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
  cursor: pointer;
  padding: 10px;
  border-radius: 10px;
  background-color: white;
}

.user-image img {
  width: 50px;
  height: 50px;
  object-fit: cover;
  border-radius: 50%;
}


/* Chat section styles */
#chat {
  background-color: #FFFFFF;
  padding: 1px;
  width: 250%; /* updated width */
  height: calc(100vh - 60px);
  overflow-y: auto;
}

.user-header {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.user-header .user-image {
  margin-right: 10px;
}

.user-header .user-info h3 {
  margin: 0;
  font-size: 18px;
}

.user-header .user-info p {
  margin: 0;
  font-size: 14px;
  color: #A0A0A0;
}

#chat-messages {
  list-style: none;
  margin: 0;
  padding: 0;
}

#chat-messages li {
  margin-bottom: 10px;
  padding: 10px;
  border-radius: 10px;
  font-size: 16px;
  line-height: 20px;
  word-wrap: break-word;
}

.sent {
  background-color: #DCF8C6;
  align-self: flex-end;
  margin-left: 50%;
}

.received {
  background-color: #e6e6e6;
  margin-right: 50%;
}

#message-form {
  position: fixed;
  bottom: 0;
  display: flex;
  width: 50%;
  background-color: #FFFFFF;
  padding: 10px;
  box-sizing: border-box;
  z-index: 9999; /* to make sure it appears on top of other elements */
}

#message-form input[type="text"] {
  flex: 1;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  background-color: #F4F6F9;
  margin-right: 10px;
}

#message-form button {
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  background-color: #0084FF;
  color: #FFFFFF;
  cursor: pointer;
}

#message-form button:hover {
  background-color: #0065C9;
}
#searchbar input[type="text"] {
  flex: 1;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  background-color: #F4F6F9;
  margin-right: 10px;
  margin-top: 20px;
  
}
#searchbar button {
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 8px 16px;
  font-size: 16px;
  cursor: pointer;
}

#searchbar button:hover {
  background-color: #3e8e41;
}

#active-users {
  margin-top: 20px;
  cursor: pointer;
}

#active-users h2 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

#active-users ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#active-users li {
  font-size: 14px;
  margin-bottom: 5px;
}

#active-users li:hover {
  background-color: #ECEFF1;
}

#active-users .user-image img {
  width: 50px;
  height: 50px;
  object-fit: cover;
  border-radius: 50%;
  margin-right: 10px;
}

#active-users .user-info h3 {
  margin: 0;
  font-size: 18px;
}

#active-users .user-info p {
  margin: 0;
  font-size: 14px;
  color: #A0A0A0;
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
	<header>
		<h1>Messenger</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Messages</a></li>
				<li><a href="#">Contacts</a></li>
				<li><a href="#">Settings</a></li>
        <li class="user-dropdown">
        <i class="fa-solid fa-user"></i>
        <span class="name"><?php echo $name;?></span>
        <ul class="dropdown-menu">
        <li><a href="profile.php">Profile</a></li>
            <li><a href="out.php">logout</a></li>
            <li><a href="setting.php">Setting</a></li>
        </ul>
    </li>
			</ul>
		</nav>
	</header>
	
	<main>
  <div class="column">
    <section id="messages">
      <h2>Recent Messages</h2>
      <ul>
        <?php
          // $query = $conn->query("SELECT * FROM account");
          // $data = [];
          // if($query->num_rows > 0)
          // {
          //   while($row = mysqli_fetch_assoc($query))
          //   {
          //     $data[] = $row;
          //   }
          // }
          // print_r($data);
          // foreach ($data as $key) :
        ?>
        <li>
          <div class="user-image">
            <img src="logopic.jpg" alt="User 1">
          </div>
          <div class="user-info">
            <!-- <h3><?=$key['firstname'].' '.$key['lastname'].' ('.$key['gmail'].')'?></h3> -->
            <h3>s</h3>
            <p>Last message from User 1</p>
          </div>
        </li>
        <li>
          <div class="user-image">
            <img src="logopic.jpg" alt="User 2">
          </div>
          <div class="user-info">
            <h3>User 2</h3>
            <p>Last message from User 2</p>
          </div>
        </li>
        <li>
          <div class="user-image">
            <img src="logopic.jpg" alt="User 3">
          </div>
          <div class="user-info">
            <h3>User 3</h3>
            <p>Last message from User 3</p>
          </div>
        </li>

        <?php //endforeach; ?>
      </ul>
    </section>
    
  </div>
  <div class="column">
    <section id="chat">
      <div class="user-header">
        <div class="user-image">
          <img src="logopic.jpg" alt="User 1">
        </div>
        <div class="user-info">
          <h3>User 1</h3>
          <p>Last seen 5 minutes ago</p>
        </div>
      </div>
      <ul id="chat-messages">
        <li class="sent">Hi, how are you?</li>
        <li class="received">I'm good, thanks! How about you?</li>
        <li class="sent">I'm good too, thanks!</li>
      </ul>
      <form id="message-form">
        <input type="text" placeholder="Type your message...">
        <button>Send</button>
      </form>
    </section>
  </div>
  <section id="searchbar">
  <form>
    <input type="text" placeholder="Search ID or Fullname">
    
    <section id="active-users">
  <h2>Active Users</h2>
  <ul id="active-users-list">
  <?php
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "bago");

  // Query the account table
  $sql = "SELECT firstname, lastname, id, image FROM account WHERE status = 'Online'";
  $result = mysqli_query($conn, $sql);

  // Loop through the results and output each user
  $count = mysqli_num_rows($result);
  $i = 0;
  while ($row = mysqli_fetch_assoc($result)) {
    // Construct the URL to the image file
    $image_url = "uploads/" . $row['image'];

    // Output the user's name and image with background color and margin
    $bg_color = ($i % 2 == 0) ? "#e5e5e5" : "#e5e5e5"; // alternate background colors
    echo "<hr>";
    echo "<div style='display: flex; align-items: center; background-color: $bg_color; margin-bottom: 10px;'>";
    echo "<img src='$image_url' alt='{$row['firstname']} {$row['lastname']}' style='width: 50px; height: 50px; margin-right: 10px;'>";
    echo "<div>";
    echo "<h3> {$row['firstname']} {$row['lastname']}</h3>";
    echo "<p>{$row['id']}</p>";
    echo "</div>";
    echo "</div>";
   
    

    $i++;
  }

  // Close the database connection
  mysqli_close($conn);
?>
  </ul>
</section>
  </form>
</section>

<script>
  // Make an AJAX request to retrieve the list of active users
  fetch('/api/active-users')
    .then(response => response.json())
    .then(activeUsers => {
      // Clear the loading message
      const activeUsersList = document.querySelector('#active-users-list');
      activeUsersList.innerHTML = '';

      // Add each active user to the list
      activeUsers.forEach(user => {
        const listItem = document.createElement('li');
        listItem.textContent = user.name;
        activeUsersList.appendChild(listItem);
      });
    });
</script>
 
</main>
    
	<script src="app.js"></script>
</body>
</html>