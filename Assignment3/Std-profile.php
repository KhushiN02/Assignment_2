<!-- 3. Create an associative array for your student profile with the following keys:

name, roll_number, faculty, semester, email

Display the information in a formatted way.

Expected Output:

STUDENT PROFILE

Name: Ram Sharma

Roll Number: 25

Faculty: BCA

Semester: 3

Email: ram.sharma@example.com` -->
<?php
$student_profile = [
    "name" => "Aakriti Neupane",
    "roll_number" => 2,
    "faculty" => "BCSIT",
    "semester" => 3,
    "email" => "aakritineupane@gmail.com"
];
echo "<h3>STUDENT PROFILE</h3>";
echo "Name: " . $student_profile['name'] . "<br>";
echo "Roll Number: " . $student_profile['roll_number'] . "<br>";
echo "Faculty: " . $student_profile['faculty'] . "<br>";
echo "Semester: " . $student_profile['semester'] . "<br>";
echo "Email: " . $student_profile['email'] . "<br>";
?>
