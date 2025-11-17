<!-- 15. Create a student list manager that:

Adds students to a list
Removes last student
Checks if a student exists
Displays total students
Given:

$students = ["Ram", "Sita", "Hari"];

// Add "Gita" and "Laxman"

// Remove last student

// Check if "Ram" exists

Expected Output:

Initial students: Ram, Sita, Hari

After adding: Ram, Sita, Hari, Gita, Laxman

After removing last: Ram, Sita, Hari, Gita

Total students: 4

Ram is in the list -->
<?php
$students = ["Ram", "Sita", "Hari"];
echo "<h3>Initial students: " . implode(", ", $students) . "</h3>";
// Add "Gita" and "Laxman"
array_push($students, "Gita", "Laxman");
echo "After adding: " . implode(", ", $students) . "<br>";
// Remove last student
array_pop($students);   
echo "After removing last: " . implode(", ", $students) . "<br>";
// Total students
$total_students = count($students);
echo "Total students: " . $total_students . "<br>";
// Check if "Ram" exists
if (in_array("Ram", $students)) {
    echo "Ram is in the list<br>";
} else {
    echo "Ram is not in the list<br>";
}
?>