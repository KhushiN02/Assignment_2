<!-- 18. Create a function `greet($name)` that displays a personalized greeting message.

Test with: "Ram", "Sita", "Hari"

Expected Output:

Hello, Ram! Welcome to PHP Programming.

Hello, Sita! Welcome to PHP Programming.

Hello, Hari! Welcome to PHP Programming.
 -->
<?php
function greet($name) {
    echo "Hello, $name! Welcome to PHP Programming.<br>";
}
$names = ["Ram", "Sita", "Hari"];
foreach ($names as $name) {
    greet($name);
}
?>