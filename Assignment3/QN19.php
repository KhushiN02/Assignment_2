<!-- 19. Create a function introduce($name, $age, $city) that displays a person's introduction.

Test with at least 3 different people.

Expected Output:

My name is Ram Sharma.

I am 20 years old.

I live in Kathmandu. -->
<?php
function introduce($name, $age, $city) {
    echo "My name is $name.<br>";
    echo "I am $age years old.<br>";
    echo "I live in $city.<br><br>";
}
$people = [
    ["Ram Sharma", 20, "Kathmandu"],
    ["Sita Devi", 22, "Pokhara"],
    ["Hari Thapa", 25, "Lalitpur"]
];
foreach ($people as $person) {
    introduce($person[0], $person[1], $person[2]);
}
?>