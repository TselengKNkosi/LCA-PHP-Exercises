<?php 
/* PERSONAL INTRODUCTION FUNCTION
* includes + prints: 
* my name, my favourite programming language + a reason for it */

function personalIntro() {
  $name = "Tseleng";
  $faveLanguage = "JavaScript";
  $reason = "JavaScript has a large scope of possibility both in frontend, and backend development. 
  I appreciate that versatility as it allows me to work and build mastery in one all-rounder language, and be able to build aesthetic, and dynamic tech solutions.";

  // HTML OUTPUTTING - Doing this for each required element will allow for cleaner code (readability + error handling)
  echo <<<HTML
  <div class="card shadow-sm rounded-4 p-3">
    <h3 style="text-align: center;">$name's Insights</h3>
    <div class="card-body">
      <h6 class="card-title">Favourite Programming Language: </h6>
      <p class="card-text"><b>$faveLanguage</b></p>
      <p class="card-text">$reason</p>
    </div>
  </div>
  HTML;
};

/* GETTING AND FORMATING THE DATE FUNCTION
* makes use of date()
* expected date format : Today is [Day], [Month], [Year]
* this function serves as a means to control the placement of the formatted date on the final page
*/
function generateDate() {
  $dateToday = date("l d, F, Y");
  echo "<h6 style='text-align:center;'><b>Today is</b> $dateToday</h6>";
};

/* GENERATING A RANDOM NUMBER FUNCTION 
* makes use of mt_rand because this number has no security implications 
* generates a random number between 1 and 100 and formats the output for the number
*/
function generateLuckyNum() {
  $randomNumber = mt_rand(1, 100);

  echo "<p style='text-align: center;'><b>Your Lucky Number Today is:</b> $randomNumber</p>";
}
?>

<head>
  <!-- Adding Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header class="p-3 border-bottom bg-light">
  <h1>Welcome to PHP Programming!</h1>
  </header>
  <div class="container">
  <?php generateDate(); ?>
  <?php generateLuckyNum(); ?>
  <?php personalIntro(); ?>
  </div>
</body>