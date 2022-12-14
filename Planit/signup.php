<?php
session_start();
define('BASEPATH', True); 
if($_SESSION['Exists']) {
  echo '<script>alert("This username already exists")</script>';
}
$_SESSION['Exists'] = FALSE;


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.27.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../style/signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../scripts/script.js"></script>
    <script type="text/javascript" src="../app.js"></script>
  </head>

  <!-- TO DO: launch submit button css not working gr, image flex. -->
  <body>
    <div class="navbar bg-base-100">
      <div class="flex-1">
        <a href="./" class="logo" alt="Logo"></a>
      </div>
      <div class="flex-none">
        <ul class="menu menu-horizontal p-0">
          <li tabindex="0">
        </ul>
      </div>
    </div>
    
    <div class="container">
      <div class="form-title">
        <h2>SIGN UP</h2>
      </div>
          <form class="login-form" action="signupaction.php" method="post">
            <div class="form-control">
                <label class="label">
                  <span class="label-text"> Username:</span>
                </label>
                <input type="text" placeholder="username" name="username" class="input input-bordered">
              </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Email:</span>
              </label> 
              <input type="text" placeholder="email" name="email" class="input input-bordered">
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Password:</span>
              </label> 
              <input type="text" placeholder="password" name="password" class="input input-bordered">
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">First Name:</span>
              </label> 
              <input type="text" placeholder="first name" name="firstname" class="input input-bordered">
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Last Name:</span>
              </label> 
              <input type="text" placeholder="last name" name="lastname" class="input input-bordered">
            </div>
            <div class="form-submit">
              <input type="submit" value="Launch">
            </div>
            <div class="form-info">
              <p>Already have an account? <a href="./login.php" class="loginlink">Log in here.</a></p>
            </div>
        </form>
        </div>
      </body>
    </html>