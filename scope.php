<?php
/* GLOBAL VARIABLE DECLARATION
* This variable is declared outside any function and has global scope
*/
$globalCounter = 0;
$globalMessage = "This is a global variable";

// Accessing global variables inside a function 
function accessGlobalVariable() {
  global $globalCounter, $globalMessage;

  $globalCounter++;
  echo <<< HTML
  <p><b>Inside accessGlobalVariable():</b></p>;
  <p>Global Message: <span style='color: #fe01b1;'>$globalMessage</span></p>
  <p>Global Counter Value: <span style='color: #fe01b1;'>$globalCounter</span></p>
  <p style='color: #666; font-size: 12px;'>(Global variables can be modified inside functions when using the 'global' keyword)</p>;
  HTML;
};

/* LOCAL VARIABLE DEMONSTRATION
* A local variable declared inside a function is not accessible outside
*/
function demonstrateLocalVariable() {
  $localMessage = "I am a local variable";

  echo "<p><b>Inside demostrateLocal():</b></p>
  <p>Local Message: <span style='color: #ff4d00;'>$localMessage</span></p>
  <p style='color: #666; font-size: 12px;'>(This variable will not be accessible outside this function)</p>";
}

/* TRYING TO ACCESS LOCAL VARIABLE OUTSIDE FUNCTION SCOPE
*/
function accessLocalOutside() {
  echo "<p><b>Attempting to access local variable outside of its function scope:</b></p>";

  //This is expected to produce an undefined variable error/notice
  if (isset($localMessage)) {
    echo "<p>Local Message: $localMessage</p>";
  } else {
    echo "<p style='color: #cc0000;'>\$localMessage is Not defined here</p>"; //expected output
  }
}

/* STATIC VARIABLE DEMONSTRATION
*showcasing the usuabilityof the 'static' keyword in variable scopes   */
function staticVariable() {
  static $staticCounter = 0;
  $staticCounter++;

  echo "<p style='margin-left: 20px;'><b>Static Counter:</b> <span style='color: #080838;'>$staticCounter</span></p>
  <p style='margin-left: 20px; color: #666; font-size: 12px;'>Static value persists across function calls</p>";
}

/* NON-STATIC VARIABLE
*as a comparitive caaseto show how a regular variable resets each time the function is called
*/
function regularVariable() {
  $regularCounter = 0;
  $regularCounter++;

  echo "<p style='margin-left: 20px;'><b>Regular Counter:</b> <span style='color: #080838;'>$regularCounter</span></p>
  <p style='margin-left: 20px; color: #666; font-size: 12px;'>Value resets to 1 each time the function is called.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Variable Scope Demonstration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .scope-section {
      border: 2px solid #e1bee7;
      border-radius: 8px;
      padding: 20px;
      margin: 20px 0;
      background-color: #f5f5f5;
    }

    .section-title {
      background-color: #3c0008;
      color: white;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 15px;
      font-weight: bold;
    }
  </style>
</head>
<body style="padding: 20px;">
  <header class="p-3 border-bottom bg-light">
    <h1>Variable Scope Demonstration</h1>
  </header>

  <div class="container" style="margin-top: 30px;">

    <!-- Global Variable Section -->
     <div class="scope-section">
      <div class="section-title">1. Global Variable Scope</div>
      <p>Global variables are declared outside functions and can be accessed inside functions using the <b>global</b> keyword.</p>

      <?php 
      echo "<p><b>Global variable before function call:</b> \$globalCounter = $globalCounter</p>";
      accessGlobalVariable();
      echo "<p><b>Global variable after function call:</b> \$globalCounter = $globalCounter</p>";
      ?>
     </div>

     <!-- Local Variable Section -->
      <div class="scope-section">
        <div class="section-title">2. Local Variable Scope</div>
        <p>Local variables are declarde inside functions and are only accessible within that function's scope.</p>

        <?php
        demonstrateLocalVariable();
        echo "<hr>";
        accessLocalOutside();
        ?>
      </div>

      <!-- Static Variable Section -->
       <div class="scope-section">
        <div class="section-title">3. Static Variable Scope</div>
        <p>Static variables retain their value across multiple function calls (they keep their value between calls).</p>

        <p><b>Calling staticVariable() 3 times:</b></p>
        <?php
        staticVariable();
        staticVariable();
        staticVariable();
        ?>

        <hr style="margin: 30px 0;">

        <p><b>For comparitive reasons - Calling regularVariable() 3 times:</b></p>
        <?php
        regularVariable();
        regularVariable();
        regularVariable();
        ?>
       </div>
  </div>

</body>  
</html>