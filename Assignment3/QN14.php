<!-- 14. Calculate a person's age from their birthdate:

Calculate exact age in years
Display birthdate in readable format
Display current date
Given:

$birthdate = "2000-05-15";

Expected Output:

Birthdate: May 15, 2000

Current Date: November 03, 2025

Age: 25 years old -->
<?php
$birthdate = "2000-05-15";
$birthDateObj = new DateTime($birthdate);
$currentDateObj = new DateTime();
$ageInterval = $birthDateObj->diff($currentDateObj);
$age = $ageInterval->y;
echo "Birthdate: " . $birthDateObj->format("F d, Y") . "<br>";
echo "Current Date: " . $currentDateObj->format("F d, Y") . "<br>";
echo "Age: " . $age . " years old<br>";
?>