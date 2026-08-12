<?php
/* DECLARING VARIABLES : name, age, favourite colour, and favourite hobby */

$name = 'Tseleng';
$age = 20;
$faveColour = 'pink';
$faveHobby = 'reading';

/* FORMATTED BIO PARAGRAPH */
echo "<p>My name is <b>$name</b>, I am <b>$age</b> years old.
My favourite colours is <b>$faveColour</b>, and I love <b>$faveHobby</b> in my free time.</p>";

/* BMI CALCULATOR
* bmi = weight (kg) / (height (m) * height (m))
 */

// Formatting and labelling html section 
echo <<< HTML
<hr style='margin: 30px 0;'>
<h3 style='text-align: center;'>BMI Calculator</h3>
HTML;

// BMI Calculator Logic 
$height = 1.65; //in metres
$weight = 60; //in kg

$bmi = $weight/($height * $height);

// Determining weight category 
if ($bmi < 18.5) {
  $category = "Underweight";
} elseif ($bmi >= 18.5 && $bmi < 25) {
  $category = "Normal Weight";
} elseif ($bmi >= 25 && $bmi < 30) {
  $category = "Overweight";
} elseif ($bmi >= 30 && $bmi < 35) {
  $category = "Moderately Obese";
} else {
  $category = "Severely Obese";
}

// Outputting in HTML
echo <<< HTML
<p style='text-align: center;'><b>Height:</b> {$height}m | <b>Weight:</b> {$weight}kg</p>;
<p style='text-align: center;'><b>Your BMI:</b> . round($bmi, 2) .</p>;
<p style='text-align: center;'><b>Category:</b> <span style='color: #3c0008; font-weight: bold;'>$category</span></p>;
HTML;

/* CONVERTING FLOAT TO INTEGER USING intval() */
echo "<hr style='margin: 30px 0;'>
<h3 style='text-align: center;'>Type Conversion</h3>";

// Declaring variables
$floatValue = 42.75;
$intValue = intval($floatValue);

// Formatted Output of values for HTML
echo "<p style='text-align: center;'><b>Original Float Value:</b> $floatValue</p>
<p style='text-align: center;'><b>Converted Float Value (Integer):</b> $intValue</p>";

/* USING gettype() TO IDENTIFY DATA TYPES
* Identifies and prints the data type of different variables 
*/

// Formatting for html readability
echo "<hr style='margin: 30px 0;'>
<h3 style='text-align: center;'>Data Type Identification</h3>";

// Declaring different types of variables 
$stringVar = "PHP Fundamentals";
$intVar = 23;
$floatVar = 3.14159;
$arrayVar = array("pink", "yellow", "orange");

// Outputting into html - using a table for better readability
echo <<< HTML
<table style='width: 60%; margin: 20px auto; border-collapse: collapse;'>
  <tr style='background-color: #faf1ec;'>
    <th style='border: 1px solid #ddd; padding: 8px;'><b>VARIABLE</b></th>;
    <th style='border: 1px solid #ddd; padding: 8px;'><b>VALUE</b></th>;
    <th style='border: 1px solid #ddd; padding: 8px;'><b>DATA TYPE</b></th>;
  </tr>;

  <tr>
    <td style='border: 1px solid #ddd; padding: 8px;'>\$stringVar</td>;
    <td style='border: 1px solid #ddd; padding: 8px;'>'$stringVar'</td>;
    <td style='border: 1px solid #ddd; padding: 8px;'><b> . gettype($stringVar) . </b></td>;
  </tr>

  <tr>
    <td style='border: 1px solid #ddd; padding: 8px;'>\$intVar</td>;
    <td style='border: 1px solid #ddd; padding: 8px;'>'$intVar'</td>;
    <td style='border: 1px solid #ddd; padding: 8px;'><b> . gettype($intVar) . </b></td>;
  </tr>

  <tr>
    <td style='border: 1px solid #ddd; padding: 8px;'>\$floatVar</td>;
    <td style='border: 1px solid #ddd; padding: 8px;'>'$floatVar'</td>;
    <td style='border: 1px solid #ddd; padding: 8px;'><b> . gettype($floatVar) . </b></td>;
  </tr>

  <tr>
    <td style='border: 1px solid #ddd; padding: 8px;'>\$arrayVar</td>;
    <td style='border: 1px solid #ddd; padding: 8px;'>'$arrayVar'</td>;
    <td style='border: 1px solid #ddd; padding: 8px;'><b> . gettype($arrayVar) . </b></td>;
  </tr>
</table>
HTML;
?>

<head>
  <!-- Adding Bootstrap for styling -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="padding: 20px;">
  <header class="p-3 border-bottom bg-light">
    <h1>PHP Variables & Data Types</h1>
  </header>
</body>