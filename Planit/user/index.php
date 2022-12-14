<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="/user/">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.27.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../scripts/script.js"></script>


</head>
<body onload="getDate()">
  <div class="navbar bg-base-100">
    <div class="flex-1">
      <a href="./index.php" class="logo" alt="Logo"></a>
      <a class="btn m-4" id="calendar" href="./calendar.php">Calendar</a>
      <a class="btn m-4" id="tracker" href="./planits.php">Tracker</a>
    </div>
    
    <div class="flex-none">
      <ul class="menu menu-horizontal p-0">
      <?php
      
      if(!isset($_SESSION["UserID"])){
        header("Location: .././login.php");
      }


      if(isset($_POST['signout'])) {
          session_destroy();
          header("Location: .././login.php");
      }
  ?>
        <form method="POST">
          <input name="signout" id="signout" class="btn m-4" type="submit" value="Sign Out"/>
          <li tabindex="0">
        </form>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="text p-10 title-div" id="text">
      <h3 class="welcome">WELCOME TO...</h3>
      <h1 class="name">PLANIT YOU!</h1>
      <h3 class="small">STATUS: online</h3>
      <!-- leave blank, gets date and time on load-->
      <h3 class="small" id="today"></h3>
    </div>

    <img class="planet" src = "/../images/planet.svg" alt="Planet"/>
  </div>
  <img class="ground-img" src = "/../images/groundAndAstronaut.svg" alt="Ground"/>
  <div class="ack">
    <h2>Made with love by</h2>
    <h3>Alivia, Caelen, Henry, and Hosanna</h3>
  </div>
</body>
</html>
