<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.27.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../style/calendar.css">
    <script defer type="text/javascript" src="../scripts/calendar.js"></script>
    <script type="text/javascript" src="../scripts/control.js"></script>

    <title>PLANNER</title>
</head>
<body>
  <div class="navbar bg-base-100">
    <div class="flex-1">
      <a href="./index.php" class="logo" alt="Logo"></a>
      <a class="btn m-4" href="planits.php">Tracker</a>
    </div>
  </div>

  <div class="flex-container">
    <div class="flex-child">
      <div class="lSideTop">
        <h2 class="info">
          DATE: [DATE]<br>
          TASK(S): [INFO]
        </h2>
      </div>
      <!--<div class="lSideBottom">
        <div class="radial-progress bg-green text-primary-content border-4 border-primary" style="--value:70;">70%</div>
        <div class="radial-progress bg-primary text-primary-content border-4 border-primary" style="--value:35;">35%</div>
        <div class="radial-progress bg-primary text-primary-content border-4 border-primary" style="--value:55;">55%</div>
      </div>-->
    </div>


  <div class="flex-child-1">  
    <div class="container">
      <div class="curr-month"><b id="month-box">november</b></div>
      <div class="all-days">
        <ul>
          <li>sun</li>
          <li>mon</li>
          <li>tue</li>
          <li>wed</li>
          <li>thu</li>
          <li>fri</li>
          <li>sat</li>
        </ul>
      </div>
      <div class="all-date">
        <ul>
        </ul>
      </div>
    </div>
    <div class="btn-group">
      <button class="btn btn-outline btn-wide" onclick="pageMonth('left')">Previous Month</button> 
      <button class="btn btn-outline btn-wide" onclick="pageMonth('right')">Next Month</button>
    </div>

    <div id="menu">
      <input type="submit" class="menu-control" value="ADD" onclick="toggleAddMenu()"></input>
      <form id="task-form">
        <h1 class="menu-title">CREATE A TASK</h1>
        <div class="inputtext">
          <input id="nameInput" type="text" placeholder="Task Name" class="input input-bordered w-full max-w-xs"/>
          <input id="nameInput" type="text" placeholder="Date" class="input input-bordered w-full max-w-xs"/>
          <input id="nameInput" type="text" placeholder="Start Time" class="input input-bordered w-full max-w-xs"/>
          <input id="nameInput" type="text" placeholder="End Time" class="input input-bordered w-full max-w-xs"/>
          <input id="nameInput" type="text" placeholder="Location" class="input input-bordered w-full max-w-xs"/>
        </div>
        <h3 class="priority">PRIORITY:</h3>
        <div class="rating">
          <input type="radio" name="rating-9" class="rating-hidden"> 
          <input type="radio" name="rating-9" class="mask mask-star-2"> 
          <input type="radio" name="rating-9" checked="checked" class="mask mask-star-2"> 
          <input type="radio" name="rating-9" class="mask mask-star-2"> 
          <input type="radio" name="rating-9" class="mask mask-star-2"> 
          <input type="radio" name="rating-9" class="mask mask-star-2">
        </div>
        <a class="btn m-4" id="submit" href="/">SUBMIT</a>
      </form>
    </div>
    <a href="help.html" class= "btn btn-ghost" id="help">Help</a>
  </div>

</body>
</html>