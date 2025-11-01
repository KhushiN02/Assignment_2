<!-- Write a program that calculates factorial of a number using do-while loop. -->
<?php
echo "<h3>Factorial of a Number using Do-While Loop</h3>";
$i = 1;
$number = 5;
$factorial = 1;
do{  
    $factorial = $factorial * $i; 
    $i++;
}while($i <= $number);
echo "<b>Factorial of $number is: $factorial</b>";
?>