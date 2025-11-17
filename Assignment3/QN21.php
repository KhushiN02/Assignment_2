<!-- 21. Create a function `createProfile($name, $role = "student", $status = "active")` that displays user information.

    Test with:

Only name
Name and role
All three parameters -->
<?php
function createProfile($name, $role = "student", $status = "active") {
    echo "Name: $name<br>";
    echo "Role: $role<br>";
    echo "Status: $status<br><br>";
}   
// Test with only name
createProfile("Aakriti Neupane");
// Test with name and role
createProfile("Aakriti Neupane", "admin");  
// Test with all three parameters
createProfile("Aakriti Neupane", "editor", "inactive");
?>