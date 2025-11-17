<!-- 7. Create a username validator that checks:

Username is at least 5 characters long
Username is not more than 15 characters
Display appropriate messages
   Test with: `$username = "  Ram123  ";

    Don't forget to trim the input first!

   Expected Output:    

    Username: Ram123

    Length: 6 characters

    Username is valid (5-15 characters) -->
<?php
$username = "  Ram123  ";
$username = trim($username);
$length = strlen($username);    
echo "Username: $username<br>";
echo "Length: $length characters<br>";  
if ($length < 5) {
    echo "Username is too short. It must be at least 5 characters long.";
} elseif ($length > 15) {
    echo "Username is too long. It must not exceed 15 characters.";
} else {
    echo "Username is valid (5-15 characters).";
}
?>
