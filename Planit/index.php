<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <script type="text/javascript" src="./app.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.27.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../style/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../scripts/script.js"></script>
    <script type="text/javascript" src="../app.js"></script>
  </head>

  <body>
    <div class="navbar bg-base-100">
      <div class="flex-1">
        <a href="index.html" class="logo" alt="Logo"></a>
      </div>
      <div class="flex-none">
        <ul class="menu menu-horizontal p-0">
          <a id="signup" class="btn m-4 " href="./signup.php">REGISTER</a>
          <li tabindex="0">
        </ul>
      </div>
    </div>
    <div class="container1">
      <div class="imageContainer1">
        <img class="floatingAstronaut" src = "/../images/floatingAstronaut.svg" alt="Floating Astronaut"/>
      </div>
      <!--<div class="imageContainer2">
        <img class="floatingMeteor" src = "/../images/meteor.svg" alt="Floating Meteor"/>
      </div>-->
      <div class="textContainer">
        <h1 class="welcometo">WELCOME TO</h1>
        <h1 class="planitu">PLANIT YOU!</h1>
        <h4 class="slogan">Start your space (and self) exploration today.</h4>
        <a id="login" class="btn m-4" href="./login.php">Take Off!</a>
      </div>
    </div>
    <div class="container2">
      <div class="row">
        <div class="column1">
          <h4 class="description">
          Planit You! is an interactive personal tracker and planner.<br><br>
          Utilize the Planner to keep track of important dates and deadlines. Chart a course towards distant Planits that represent the habits and goals you keep track of.<br><br>
          Every real-life day that passes will count as a day that passes on the Planits you're exploring. <br><br>
          Planit You keeps track of your goals and behaviors, so you can see yourself grow, and you can see more of the universe!<br><br>
          <a id="about" class="learnButton" href="./about.html">Learn More!</a>
        </h4>
        </div>
        <div class="column2">
          <div class="homeArt"></div>
        </div>
      </div>
    </div>
    <div class="ack">
      <h2>Made with love by</h2>
      <h3>Alivia, Caelen, Henry, and Hosanna</h3>
    </div>
  </body>
</html>