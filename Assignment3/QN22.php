<!-- 22. Create a function `calculateAverage(...$marks)` that:

Accepts any number of marks
Calculates average
Returns the average rounded to 2 decimal places -->
<?php
function calculateAverage(...$marks) {
    $total = array_sum($marks);
    $count = count($marks);
    if ($count === 0) {
        return 0;
    }
    $average = $total / $count;
    return round($average, 2);
}   
// Test the function
$marks1 = [85, 78, 92, 88];
$average1 = calculateAverage(...$marks1);
echo "Average of marks " . implode(", ", $marks1) . " is: " . $average1 . "<br>";
$marks2 = [70, 75, 80];
$average2 = calculateAverage(...$marks2);
echo "Average of marks " . implode(", ", $marks2) . " is: " . $average2 . "<br>";
$marks3 = [90, 95];
$average3 = calculateAverage(...$marks3);
echo "Average of marks " . implode(", ", $marks3) . " is: " . $average3 . "<br>";
?>