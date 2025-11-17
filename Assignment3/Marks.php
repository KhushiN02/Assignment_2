<!-- 4. Create an associative array with subject names as keys and marks as values:

`$marks = [

      "Internet Technology" => 85,

      "Data Structure" => 78,

      "Database" => 92,

      "Java Programming" => 88

];

Calculate and display:

    - Each subject with marks

    - Total marks

    - Average marks

    - Percentage (assume each subject is out of 100)

    - Grade based on percentage:

      - A: 80% and above

      - B: 60% - 79%

      - C: 40% - 59%

      - F: Below 40%

Expected Output:

MARK SHEET

Internet Technology: 85

Data Structure: 78

Database: 92

Java Programming: 88

----------------------

Total Marks: 343

Average: 85.75

Percentage: 85.75%

Grade: A -->
<?php
$marks = [

      "Internet Technology" => 85,

      "Data Structure" => 78,

      "Database" => 92,

      "Java Programming" => 88

];
// Display Each subject with marks
echo "MARK SHEET<br><br>";
$totalMarks = 0;
foreach ($marks as $subject => $mark) {
    echo "$subject: $mark<br>";
    $totalMarks += $mark;
}
$average = $totalMarks / count($marks);
$percentage = ($totalMarks / (count($marks) * 100)) * 100;
// Determine Grade      
if ($percentage >= 80) {
    $grade = 'A';
} elseif ($percentage >= 60) {
    $grade = 'B';
} elseif ($percentage >= 40) {
    $grade = 'C';
} else {
    $grade = 'F';
}
// Display Results
echo "----------------------<br>";
echo "Total Marks: $totalMarks<br>";
echo "Average: " . number_format($average, 2) . "<br>";
echo "Percentage: " . number_format($percentage, 2) . "%<br>";
echo "Grade: $grade<br>";
?>


