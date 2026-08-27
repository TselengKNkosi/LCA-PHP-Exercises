<?php
echo "<h1 style='text-align: center; margin: 20px 0;'>PHP Functions - Reusable Code Blocks</h1>";

/* --- PRINTGREETING FUNCTION --- */

echo "<div style='border: 3px solid #52352D; border-radius: 8px; padding: 20px; margin: 20px 0; background-color: #B1D4D0;'>
<h2 style='color: #52352D;'>1. printGreeting() Function</h2>
<p style='color: #666; font-size: 14px;'>Accepts a name parameter and outputs a greeting</p>";

/** printGreeting() function
 * Prints a personalized greeting message
 * @param string $name - The person's name
 */
function printGreeting($name) {
  // Formatting name parameter 
  $formattedName = htmlspecialchars($name);

  // Outputting and html formatting 
  return "<p style='background-color: #B1D4D0; padding: 10px; border-radius: 4px; border-left: 4px solid #B1D4D0; color: #52352D;'>
  Hello, <b>$formattedName</b>! Welcome to PHP Functions. Have a wonderful day ^_^</p>";
}

// Testing the printGreeting function
echo "<div style='background-color: #52352D; padding: 15px; border-radius: 4px;'>"
  . printGreeting("Tseleng")
  . printGreeting("Naledi")
  . printGreeting("Mpho")
  . "</div>";

echo "<p style='color: #666; font-size: 12px; margin-top: 10px;'><i>Characteristics: Accepts parameter, produces output, no return value.</i></p>";

// Closing printGreeting() div
echo "</div>";

/* --- MULTIPLY FUNCTION --- */

echo "<div style='border: 3px solid #17191D; border-radius: 8px; padding: 20px; margin: 20px 0; background-color: #D4BCC8;'>
<h2 style='color: #17191D;'>2. multiply() Function</h2>
<p style='color: #666; font-size: 14px;'>Accepts two numbers, multiplies them, and returns the result</p>";

/** multiply() function
 * Multiplies two numbers and returns the result
 * @param float $a - First number
 * @param float $b - Second number
 * @return float - The product of a and b
 */
function multiply($a, $b) {
  return $a * $b;
}

// Test the multiply function with various inputs
$testPairs = array(
  array(5, 3),
  array(12, 8),
  array(25, 4),
  array(7.5, 2),
  array(100, 0.5)
);

echo <<<HTML
<div style='background-color: #17191D; padding: 15px; border-radius: 4px;'>
  <table style='width: 100%; border-collapse: collapse;'>
    <tr style='background-color: #D4BCC8; color: #17191D;'>
      <th style='padding: 10px; border: 1px solid #17191D;'>Number 1</th>
      <th style='padding: 10px; border: 1px solid #17191D;'>Number 2</th>
      <th style='padding: 10px; border: 1px solid #17191D;'>Result</th>
    </tr>
HTML;

foreach ($testPairs as $pair) {
  $result = multiply($pair[0], $pair[1]);
  echo <<<HTML
  <tr style='color: white;'>
    <td style='padding: 10px; border: 1px solid #D4BCC8;'>$pair[0]</td>
    <td style='padding: 10px; border: 1px solid #D4BCC8;'>$pair[1]</td>
    <td style='padding: 10px; border: 1px solid #D4BCC8; font-weight: bold; color: #D4BCC8;'>$result</td>
  </tr>
HTML;
}

// Closing multiply() function tags in html
echo "</table>";
echo "</div>";

echo "<p style='color: #666; font-size: 12px; margin-top: 10px;'><i>Characteristics: Accepts parameters, processes data, returns a value.</i></p>";

echo "</div>";

/* --- ARRAYLOOPER FUNCTION --- */

echo "<div style='border: 3px solid #CB616F; border-radius: 8px; padding: 20px; margin: 20px 0; color: #eed8d5;'>
<h2 style='color: #CB616F;'>3. arrayLooper() Function</h2>
<p style='color: #666; font-size: 14px;'>Accepts an array and displays each element on a new line</p>";

/** arrayLooper() function
 * Loops through an array and displays each element
 * @param array $array - The array to loop through
 */
function arrayLooper($array) {
  // Checking for content in array
  if (empty($array)) {
    echo "<p style='color: #cc0000;'>Array is empty!</p>";
    return;
  }
  
  echo "<div style='background-color: #eed8d5; padding: 15px; border-radius: 4px;'>
  <ul style='list-style-type: none; padding-left: 0;'>";
  
  foreach ($array as $item) {
    // Formatting item for outputting 
    $formattedItem = htmlspecialchars($item);

    // Outputting and html formatting 
    echo "<li style='padding: 8px; margin: 5px 0; background-color: #cb616f; border-radius: 4px; color: #eacc83;'>
    <b>$formattedItem</b>
    </li>";
  }
  
  echo "</ul>";
  echo "</div>";
}

// Testing the arrayLooper function with fruits
echo "<div style='margin: 20px 0;'>
<p style='color: #cb616f;'><b>Example 1: Fruits Array</b></p>";

$fruits = array("Apple", "Banana", "Orange", "Mango", "Strawberry");
arrayLooper($fruits);

echo "<p style='color: #666; font-size: 12px; margin-top: 10px;'><i>Characteristics: Accepts array parameter, uses foreach for iteration, produces formatted output.</i></p>";

echo "</div>";
echo "</div>";

/* --- CALCULATEDISCOUNT FUNCTION --- */

echo "<div style='border: 2px solid #cc0000; border-radius: 8px; padding: 20px; margin: 20px 0;'>
<h2 style='color: #cc0000;'>4. calculateDiscount() Function</h2>
<p style='color: #666; font-size: 14px;'>Tiered discount: 10% for R1000+, 5% for R500-R999, 2% for R250-R499, 0% otherwise</p>";

/** calculateDiscount() 
 * Calculates discount based on purchase amount (tiered pricing)
 * @param float $amount - The purchase amount in Rands
 * @return array - Contains discount percentage and final amount
 */
function calculateDiscount($amount) {
  $discountPercent = 0;
  
  // Tiered discount logic
  if ($amount >= 1000) {
    $discountPercent = 10;
  } elseif ($amount >= 500 && $amount < 1000) {
    $discountPercent = 5;
  } elseif ($amount >= 250 && $amount < 500) {
    $discountPercent = 2;
  } else {
    $discountPercent = 0;
  }
  
  // Calculating discount amount and final price
  $discountAmount = ($amount * $discountPercent) / 100;
  $finalAmount = $amount - $discountAmount;
  
  // Return an array with results
  return array(
    "original" => $amount,
    "discountPercent" => $discountPercent,
    "discountAmount" => $discountAmount,
    "final" => $finalAmount
  );
}

// Test the calculateDiscount function with various amounts
$testAmounts = array(150, 280, 450, 650, 800, 1200, 2500);

echo <<<HTML
<div style='background-color: #fff0f0; padding: 15px; border-radius: 4px;'>
  <table style='width: 100%; border-collapse: collapse; margin-top: 15px;'>
    <tr style='background-color: #cc0000; color: white;'>
      <th style='padding: 10px; border: 1px solid #ddd;'>Original Amount</th>"
      <th style='padding: 10px; border: 1px solid #ddd;'>Discount (%)</th>
      <th style='padding: 10px; border: 1px solid #ddd;'>Discount Amount</th>
      <th style='padding: 10px; border: 1px solid #ddd;'>Final Amount</th>
    </tr>
HTML;

foreach ($testAmounts as $amount) {
  $result = calculateDiscount($amount);
  
  // Determine color based on discount
  $rowColor = ($result["discountPercent"] > 0) ? "#fff0f0" : "#ffffff";
  
  echo "<tr style='background-color: $rowColor;'>
  <td style='padding: 10px; border: 1px solid #ddd;'>R" . number_format($result["original"], 2) . "</td>
  <td style='padding: 10px; border: 1px solid #ddd;'><b>" . $result["discountPercent"] . "%</b></td>
  <td style='padding: 10px; border: 1px solid #ddd;'><span style='color: #cc0000;'>-R" . number_format($result["discountAmount"], 2) . "</span></td>
  <td style='padding: 10px; border: 1px solid #ddd; font-weight: bold; color: #228B22;'>R" . number_format($result["final"], 2) . "</td>
  </tr>";
}

echo "</table>";
echo "</div>";

//List of Discount Tiers (to act similarly to a key)
echo <<<HTML
<div style='background-color: #fff0f0; padding: 15px; border-radius: 4px; margin-top: 15px;'>
  <p><b>Discount Tiers:</b></p>
  <ul style='margin: 10px 0;'>
    <li>R1,000 and above: <span style='background-color: #90EE90; padding: 2px 6px; border-radius: 10px;'>10% discount</span></li>
    <li>R500 to R999: <span style='background-color: #FFD700; padding: 2px 6px; border-radius: 10px;'>5% discount</span></li>
    <li>R250 to R499: <span style='background-color: #FFA500; padding: 2px 6px; border-radius: 10px;'>2% discount</span></li>
    <li>Below R250: <span style='background-color: #ffcccc; padding: 2px 6px; border-radius: 10px;'>No discount</span></li>
  </ul>
</div>
HTML;

echo "<p style='color: #666; font-size: 12px; margin-top: 10px;'><i>Characteristics: Accepts amount parameter, applies conditional logic, returns array with calculated results.</i></p>";

echo "</div>";
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Functions - Reusable Code</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f5f5;
      padding: 20px;
      font-family: 'Courier New', monospace;
    }
  </style>
</head>
</html>