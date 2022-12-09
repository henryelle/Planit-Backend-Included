<?php
session_start();
//define('BASEPATH', True); 

?>

<!-- if(isset($_POST['submit'])){
  $accountname = !empty($_POST['username']) ? trim($_POST['username']) : null;
  $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

  $sql = "SELECT UserID, AccountName, Pass FROM users WHERE AccountName = :username";
  $stmt = $pdo->prepare($sql);

  $stmt->bindValue(':username', $accountname);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  
  if($user === false){
    echo '<script>alert("The username or password you gave is incorrect.")</script>';
  }
  else{
    $validPassword = password_verify($passwordAttempt, $user['password']);

    if($validPassword){
      $_SESSION['users'] = $accountname;
      echo '<script>window.location.replace("index.php");</script>';
      exit;
    }
    else{
      echo '<script>alert("The username or password you gave is incorrect.")</script>';
    }
  }
}
?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.27.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../style/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../scripts/script.js"></script>
    <script type="text/javascript" src="../app.js"></script>
  </head>

  <!-- TO DO: launch submit  button css not working gr, image flex. -->
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
        <h2>LOG IN</h2>
      </div>
      <form class="login-form" action="loginaction.php" method="post">
        <div class="form-control">
          <label class="label">
            <span class="label-text">Username:</span>
          </label> 
          <input type="text" placeholder="username" name="username" class="input input-bordered">
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Password:</span>
          </label> 
          <input type="password" placeholder="password" name="password" class="input input-bordered">
        </div>
        <div class="form-submit">
          <input type="submit" value="Launch" name="submit">
        </div>
        <div class="form-info">
          <p>Don't have an account? <a href="signup.php" class="signuplink">Sign up here.</a></p>
        </div>
    </form>
    </div>
    </div>
  </body>
</html>
