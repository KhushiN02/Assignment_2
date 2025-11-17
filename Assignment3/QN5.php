<!-- 5. Create a 2D array containing information of 3 students:

Each student has: name, age, faculty. Display all student information.

Expected Output:

`Student 1: Ram, Age: 20, Faculty: BCA

Student 2: Sita, Age: 19, Faculty: BIT

Student 3: Hari, Age: 21, Faculty: BCA` -->
<?php
$students = [
    ["name" => "Aakriti", "age" => 20, "faculty" => "BCSIT"],
    ["name" => "Binti", "age" => 19, "faculty" => "BBA-Finance"],
    ["name" => "Kamala", "age" => 21, "faculty" => "BBA-Finance"]
];
foreach ($students as $index => $student) {
    $studentNumber = $index + 1;
    echo "Student $studentNumber: " . $student['name'] . ", Age: " . $student['age'] . ", Faculty: " . $student['faculty'] . "<br>";
}
?>
