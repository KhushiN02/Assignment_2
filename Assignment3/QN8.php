<!-- 8. Write a program to validate an email address:

 Check if it contains "@" symbol
 Extract the part before @ (username)
 Extract the part after @ (domain)
 Convert email to lowercase for storage
   Test with: `$email = "RAM.Sharma@EXAMPLE.com"; 

   Expected Output: 

    Original: RAM.Sharma@EXAMPLE.com

    Cleaned: ram.sharma@example.com

    Valid email format

    Username: ram.sharma

    Domain: example.com -->

<?php
$email = "AakritiNe1212@gmail.com";
echo "Original: $email<br>";
$cleanedEmail = strtolower($email);
echo "Cleaned: $cleanedEmail<br>";
if (filter_var($cleanedEmail, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email format<br>";
    list($username, $domain) = explode("@", $cleanedEmail);
    echo "Username: $username<br>";
    echo "Domain: $domain<br>";
} else {
    echo "Invalid email format";
}
?>
