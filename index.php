<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  </head>
  <body>
  <!-- Navigasi -->
  <nav class="navbar fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">HELLOWS</span>
    </div>
  </nav>

    <!-- Konten -->
    <div class="global-container">
      <div class=" card login-form">
        <div id="Card">
          <div id="card-content">
            <div id="card-title">
              <h2>LOGIN</h2>
            </div>
              <div class="underline-title">
              </div>
                <form action="proses_login.php" method="post" class="form">
                    <label for="user-name" style="padding-top: 13px">&nbsp;Username</label>
                    <input type="text" class="form-content" id="user-name" name="username" required/>
                    <div class="form-border"></div>

                    <label for="user-password" style="padding-top: 13px">&nbsp;Password</label>
                    <input type="password" class="form-content" id="user-password" name="password" required/>
                    <div class="form-border"></div>

                    <input id="submit-btn" type="submit" name="submit" value="LOGIN">

                    <p class="login-register-text text-center">Don't have an account? 
                    <a href="sign_up.php" id="signup">Sign Up</a></p>
                </form>        
          </div>
        </div>
      </div>
    </div>

<!-- Footer -->
<nav class="navbar fixed-bottom navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Copyright &copy; ALFI </a>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>