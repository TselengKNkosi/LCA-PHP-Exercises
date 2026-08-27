<?php
echo "<h1 style='text-align: center; margin: 20px 0;'>Conditional Logic Examples</h1>";

/* BUDGET CALCULATOR */

echo "<div style='border: 8px solid #52352D; border-radius: 8px; padding: 20px; margin: 20px 0;'>
<h2 style='color: #52352D;'>BUDGET CALCULATOR</h2>";

// Declaring Budget Variables (for logic testing)

$totalBudget = 5000;      // Total budget in Rands
$groceries = 1200;        // Groceries expense
$transport = 800;         // Transport expense
$entertainment = 500;     // Entertainment expense

$totalExpenses = $groceries + $transport + $entertainment;
$balance = $totalBudget - $totalExpenses;

// Formatting Numbers for Outputting
$formattedBudget = number_format($totalBudget, 2);
$formattedGroceries = number_format($groceries, 2);
$formattedTransport = number_format($transport, 2);
$formattedEntertainment = number_format($entertainment, 2);
$formattedExpenses = number_format($totalExpenses, 2);
$formattedBalance = number_format($balance, 2);

// Outputting of Amounts + html formatting 

echo <<<HTML
<p><b>Total Budget: </b>R $formattedBudget</p>
<p><b>Groceries: </b>R $formattedGroceries</p>
<p><b>Transport: </b>R $formattedTransport</p>
<p><b>Entertainment: </b> R $formattedEntertainment</p>
<p><b>Total Expenses: </b> R $formattedExpenses</p>
HTML;

// Conditional logic to check balance status
if ($balance > 0) {
  echo "<p style='color: #228B22;'><b>Remaining Balance:</b> R $formattedBalance (Surplus)</p>";
} elseif ($balance == 0) {
  echo "<p style='color: #FF8C00;'><b>Remaining Balance:</b> R $formattedBalance (Break-even)</p>";
} else {
  echo "<p style='color: #cc0000;'><b>Remaining Balance:</b> R $formattedBalance (Deficit)</p>";
}

// Closing Budget Calculator div
echo "</div>";

/* AGE CATEGORY CHECKER */

echo "<div style='border: 8px solid #B1D4D0; border-radius: 8px; padding: 20px; margin: 20px 0;'>
<h2 style='color: #52352D;'>AGE CATEGORY CHECKER</h2>";

// Array with a range of ages for testing 
$testAges = array(8, 15, 30, 70);

echo "<p><b>Testing age categories:</b></p>";

// Running through each age in the array and categorising the age

foreach ($testAges as $age) {
  // Conditional chain to categorise age
  if ($age < 12) {
    $category = "Child";
  } elseif ($age >= 13 && $age <= 17) {
    $category = "Teen";
  } elseif ($age >= 18 && $age <= 64) {
    $category = "Adult";
  } else {
    $category = "Senior";
  }
  
  // html Outputting and formatting
  echo "<p>Age: <b>$age</b></p> 
  <p>Category: <span style='background-color: #B1D4D0; padding: 2px 6px; color: #52352D;'><b>$category</b></span></p>";
}

// Closing Age Category Checker div
echo "</div>";

/* SIMPLE INTEREST CALCULATOR */

echo "<div style='border: 8px solid #52352D; border-radius: 8px; padding: 20px; margin: 20px 0;'>
<h2 style='color: #52352d;'>SIMPLE INTEREST CALCULATOR</h2>";

// Declaring Variables for testing 

$principal = 10000;  // Principal amount in Rands
$rate = 10;          // Interest rate (5% per annum)
$years = 3;         // Time period in years

// Simple Interest Formula: SI = (P × r × t) / 100
$simpleInterest = ($principal * $rate * $years) / 100;
$totalAmount = $principal + $simpleInterest;

// Variable Formatting for Readability and Clean Code
$formattedPrincipal = number_format($principal, 2);
$formattedSimpleInterest = number_format($simpleInterest, 2);
$formattedTotalAmount = number_format($totalAmount, 2);

// html Outputting and Formatting
echo <<<HTML
<p><b>Principal Amount:</b> R $formattedPrincipal</p>
<p><b>Annual Interest Rate:</b> $rate%</p>
<p><b>Time Period:</b> $years years</p>
<p style='color: #52352D;'><b>Simple Interest Earned:</b> R$formattedSimpleInterest</p>
<p style='background-color: #B1D4D0; padding: 10px; border-radius: 4px; color: #52352D;'><b>Total Amount After $years Years:</b> R $formattedTotalAmount</p>
HTML;

// Closing Simple Interest Calculator div
echo "</div>";

/* VOTER ELIGIBILITY CHECK */

echo "<div style='border: 8px solid #B1D4D0; border-radius: 8px; padding: 20px; margin: 20px 0;'>
<h2 style='color: #52352D;'>VOTER ELIGIBILITY CHECK</h2>";

echo "<p><b>Testing voter eligibility (age 18-35 AND registered to vote):</b></p>";

// Test cases for voter eligibility (inside nested associative array)
$testCases = [
  "case1" => [
    "name" => "Thabiso", 
    "age" => 22, 
    "registered" => true
  ],
  "case2" => [
    "name" => "Naledi", 
    "age" => 16, 
    "registered" => true
  ],
  "case3" => [
    "name" => "Mpho", 
    "age" => 28, 
    "registered" => false
  ],
  "case4" => [
    "name" => "Kagiso", 
    "age" => 35, 
    "registered" => true
  ],
  "case5" => [
    "name" => "Lerato", 
    "age" => 40, 
    "registered" => true
  ]
];

foreach ($testCases as $caseKey => $person) {
  $name = $person["name"];
  $age = $person["age"];
  $registered = $person["registered"];
  
  // Logical operators: AND (&&) - both conditions must be true
  if ($age >= 18 && $age <= 35 && $registered) {
    $eligibility = "ELIGIBLE TO VOTE";
    $color = "#228B22";
  } else {
    $eligibility = "NOT ELIGIBLE TO VOTE";
    $color = "#cc0000";
  }
  
  // Converting "registered" boolean values into readable output (Yes = True, No = False)
  $regStatus = $registered ? "Yes" : "No";
  echo "<p>$name (Age: $age, Registered: $regStatus) — <span style='color: $color;'><b>$eligibility</b></span></p>";
}

// Info to simulate actual website functionality 
echo "<p style='color: #666; font-size: 12px; margin-top: 10px;'><i>Note: Requirements are: age between 18-35 years old AND must be registered to vote</i></p>";

// Closing Voter Eligibility Checker div
echo "</div>";
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Conditionals - Logic Examples</title>
<!--Linking Bootstrap for styling -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f5f5;
      padding: 20px;
      font-family: Arial, sans-serif;
    }
    h1 {
      color: #52352D;
      margin-bottom: 30px;
    }
  </style>
</head>
</html>