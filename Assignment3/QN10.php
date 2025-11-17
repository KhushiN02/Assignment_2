<!-- 10. Create a simple calculator that performs:

 Addition, Subtraction, Multiplication, Division
 Display the absolute value of the result
 Display result rounded to 2 decimal places
   Given:

    $num1 = 15.567;

    $num2 = 7.234;

  Expected Output:

    Addition: 15.57 + 7.23 = 22.80

    Subtraction: 15.57 - 7.23 = 8.34

    Multiplication: 15.57 × 7.23 = 112.56

    Division: 15.57 ÷ 7.23 = 2.15 -->
<?php
$num1 = 15.567;
$num2 = 7.234;
$addition = round($num1 + $num2, 2);
$subtraction = round($num1 - $num2, 2);
$multiplication = round($num1 * $num2, 2);
$division = round($num1 / $num2, 2);
echo "Addition: " . round($num1, 2) . " + " . round($num2, 2) . " = " . $addition . "<br>";
echo "Subtraction: " . round($num1, 2) . " - "
    . round($num2, 2) . " = " . $subtraction . "<br>";
echo "Multiplication: " . round($num1, 2) . " × "
    . round($num2, 2) . " = " . $multiplication . "<br>"; 
echo "Division: " . round($num1, 2) . " ÷ "
    . round($num2, 2) . " = " . $division . "<br>";
?>
