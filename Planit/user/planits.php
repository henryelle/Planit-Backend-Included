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
    <link rel="stylesheet" href="../style/planits.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap" rel="stylesheet">
    <script defer type="text/javascript" src="../scripts/planits.js"></script>

    <title>YOUR PLANITS</title>
</head>
<body>
  
    <div class="navbar bg-base-100">
        <div class="flex-1">
          <a href="./index.php" class="logo" alt="Logo"></a>
          <a class="btn m-4" href="calendar.php">Calendar</a>
        </div>
    </div>

  <div id="wrapper">
        <div class="flex-container">

            <div class="flex-child" id="lSide">
                <h1 class="menu-title">CREATE A PLANIT</h1>
                <div class="btn-group">
                    <input type="radio" name="options" data-title="Habit" class="btn" />
                    <input type="radio" name="options" data-title="Goal" class="btn" />
                </div>
                <div class="menu-group">
                    <select class="select select-bordered w-full max-w-xs" id="select-planit">
                        <option disabled selected>Select a Planit</option>
                        <option>Mercury</option>
                        <option>Venus</option>
                        <option>Earth</option>
                        <option>Mars</option>
                        <option>Jupiter</option>
                        <option>Saturn</option>
                        <option>Uranus</option>
                        <option>Neptune</option>
                        <option>Pluto</option>
                    </select>
                    <input id="nameInput" type="text" placeholder="Name Your Planit" class="input input-bordered w-full max-w-xs"/>
                </div>
                <div class="createplanit">
                    <button class="btn" onclick="createPlanit()">Create Planit</button>
                </div>
                <!-- <div class="flex-child-1">   -->
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
                  <!-- </div> -->

                  
            </div>
            
              </div>
              <div class="flex-child" id="rSide">
                <a href="help.html" class="btn btn-ghost" id="help">Help</a> 
              </div>
            </div>
  </div>
  <div id="overlay"></div>
  <div id="popup">
    <div class="popupcontrols">
        <span id="popupclose"><button class="btn btn-circle btn-xs">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-4 h-4 stroke-current">   
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>                       
          </svg>
        </button></span>
    </div>
    <div class="popupcontent">
      <div class="p-10 card bg-base-200">
        <div class="form-control">
          <label class="label">
            <span class="label-text" id="labelText"></span>
          </label> 
          <textarea class="textarea h-24" placeholder="Notes"></textarea>
        </div>
      </div>
    </div>
</div>
</body>
</html>