<?php require_once 'login_quer.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/svg+xml">
    <title>Skylar Versatile</title>
  </head>
  <style>
   body {
    background-image: url(bg.jpg);
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 100vh;
}



   .transparent-background {
  background-color: rgba(0, 0, 0, 0);
}
.fa-solid.fa-eye-slash, .fa-solid.fa-eye {
  position: absolute;
  top: 60%;
  right: 5%;
  transform: translateY(-50%);
  font-size: 20px;
  color: #666;
  cursor: pointer;
  transition: 0.5s;
}

.fa-solid.fa-eye-slash:hover, .fa-solid.fa-eye:hover {
  color: #333;
}

  </style>
  <body>
  <section>
    <br><br><br>
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-12 col-sm-7 col-md-6 m-auto">
        <div class="card border-0 shadow" style="background-color: rgba(0, 0, 0, 0.5);">
          <div class="card-body">
            <div style="display: flex; justify-content: center;">
              <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                <image xlink:href="logopic.jpg" width="16" height="16" x="0" y="0" />
              </svg>
            </div>
            <form method="post" class="transparent-background">
              <input type="text" name="username" id="" class="form-control my-4 py-2" placeholder="Username" />
              <input type="password" name="password" id="password" class="form-control my-4 py-2" placeholder="Password" />
              <i class="fa-solid fa-eye-slash" id="password-eye" onclick="toggleVisibility('password')"></i>
              
              <div class="text-center mt-3">
                <button class="btn btn-primary" name="login_quer">Login</button>
                <?php
$errorMessage = "Invalid username or password";
if (isset($_POST['login_quer'])) {
    echo "<script>
        Swal.fire({
            icon: 'error',
            text: '$errorMessage',
            showConfirmButton: true,
        });
    </script>";
}
?>

                <a href="account.php" class="nav-link">Already have an account?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script>
  function toggleVisibility(fieldId) {
    let field = document.getElementById(fieldId);
    let eyeIcon = document.getElementById(fieldId + "-eye");
    
    if (field.type === "password") {
      field.type = "text";
      eyeIcon.classList.remove("fa-eye-slash");
      eyeIcon.classList.add("fa-eye");
    } else {
      field.type = "password";
      eyeIcon.classList.remove("fa-eye");
      eyeIcon.classList.add("fa-eye-slash");
    }
  }
</script>
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
