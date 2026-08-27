<?php
/* LOOPS.PHP
* Demonstrates for, foreach, while, and do-while loops
*/

echo "<h1 style='text-align: center; margin: 20px 0;'>Loop Control Structures</h1>";

/* --- FOR LOOP - Displaying Numbers 0 to 10 --- */

//HTML Formatting
echo <<<HTML
<div style='border: 2px solid #B1D4D0; border-radius: 8px; padding: 20px; margin: 20px 0; background-color: #52352D;'>
  <h2 style='color: #B1D4D0;'>1. for loop - Numbers 0 to 10</h2>
  <p style='color: #f5f5f5; font-size: 14px;'>Format: "i is equal to X"</p>
  <div style='background-color: #52352D; padding: 15px; border-radius: 4px;'>
HTML;

// for loop logic
for ($i = 0; $i <= 10; $i++) {
  echo "<p style='margin: 5px 0; color: #B1D4D0;'>i is equal to $i</p>";
}

// Closing loop div
echo "</div>
<p style='color: white; font-size: 12px; margin-top: 10px;'><i>Use Cases: For loops are best when you know exactly how many iterations you need. Perfect for counting, indexed arrays, or controlled iterations.</i></p>";

// Closing Section div
echo "</div>";

/* --- FOREACH LOOP - South African Cities --- */

echo <<<HTML
<div style='border: 3px solid #52352D; border-radius: 8px; padding: 20px; margin: 20px 0; background-color: #B1D4D0;'>
  <h2 style='color: #52352D;'>2. foreach loop - South African Cities</h2>
  <p style='color: #666; font-size: 14px;'>Iterating through an array of cities</p>
HTML;


// Array with South African cities
$safrican_cities = array("Cape Town", "Johannesburg", "Durban", "Pretoria", "Bloemfontein");

echo "<div style='background-color: #52352D; padding: 15px; border-radius: 4px; color: #B1D4D0;'>";

// for each loop
foreach ($safrican_cities as $city) {
  echo "<p style='margin: 8px 0;'>→ <b>$city</b></p>";
}

//Closing loop div
echo "</div>";

echo "<p style='color: #666; font-size: 12px; margin-top: 10px;'><i>Use Cases: Foreach loops are ideal when working with arrays where you don't know the exact count. Perfect for processing each element in a collection.</i></p>
</div>";

/* --- WHILE LOOP - Countdown from 10 to 0 --- */
 echo <<<HTML
 <div style='border: 3px solid #B1D4D0; border-radius: 8px; padding: 20px; margin: 20px 0; background-color: #52352D;'>
  <h2 style='color: #B1D4D0;'>3. while loop - Countdown 10 to 0</h2>
  <p style='color: white; font-size: 14px;'>Format: "X is equal to: Y"</p>
  <div style='background-color: #B1D4D0; padding: 15px; border-radius: 4px; color: #52352D;'>
HTML;

// Set while loop duration using a counter
$counter = 10;

// while loop logic
while ($counter >= 0) {
  echo "<p style='margin: 5px 0;'> $counter is equal to: $counter</p>";
  $counter--;
}

// Closing loop div
echo "</div>";

echo "<p style='color: white; font-size: 12px; margin-top: 10px;'><i>Use Cases: While loops are used when the number of iterations is unknown and depends on a condition. The condition is checked before each iteration.</i></p>
</div>";

/* --- 4. DO-WHILE LOOP - Observing Behavior --- */

echo <<<HTML
<div style='border: 3px solid #52352D; border-radius: 8px; padding: 20px; margin: 20px 0; background-color: #B1D4D0;'>
  <h2 style='color: #52352D;'>4. do-while loop - Starting at 6</h2>
  <p style='color: #666; font-size: 14px;'>Running while counter is less than or equal to 5</p>
  <!-- do-while loop section -->
  <div style='background-color: #52352D; padding: 15px; border-radius: 4px; color: #B1D4D0;'>
HTML;

// Set do while loop duration using a counter
$counter = 6;

//do-while loop logic
do {
  echo "<p style='margin: 5px 0;'>Counter value: <b>$counter</b></p>";
  $counter--;
 } while ($counter <= 5 && $counter >= 0);

echo "</div>";

echo <<<HTML
<div style='background-color: #52352D; padding: 15px; border-radius: 4px; margin-top: 15px; color: #B1D4D0;'>
  <p><b>Observation:</b></p>
  <p>Even though the condition <code>(\$counter <= 5)</code> is FALSE when starting at 6, the loop body STILL executes ONCE. This is because a do-while loop executes the body first, then checks the condition.</p>
  <p style='margin-top: 10px;'><b>Key Difference:</b></p>
  <ul>
    <li><b>while:</b> Checks condition FIRST, then executes (may never execute if condition is false)</li>
    <li><b>do-while:</b> Executes FIRST, then checks condition (always executes at least once)</li>
  </ul>
</div>

<p style='color: #666; font-size: 12px; margin-top: 10px;'><i>Use Cases: Do-while loops guarantee at least one execution. Useful for menu systems, form validation, or when you must run code at least once.</i></p>
</div>
HTML;

?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Loops - Control Structures</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f5f5;
      padding: 20px;
      font-family: "Times New Roman", sans-serif;
    }
    code {
      background-color: #B1d4d0;
      color: #52352D;
      padding: 2px 6px;
      border-radius: 3px;
      font-family: 'Courier New', monospace;
    }
  </style>
</head>
</html>