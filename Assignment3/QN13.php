<!-- 13. Display the current date and time in different formats:

Expected Output:

Current Date & Time:

Format 1: 2025-11-03

Format 2: 03/11/2025

Format 3: November 03, 2025

Format 4: Monday, 03-Nov-2025

Format 5: 02:30:45 PM

Format 6: 14:30:45 -->
<?php
date_default_timezone_set('Asia/Kathmandu');
echo "<h3>Current Date & Time:</h3>";
echo "Format 1: " . date("Y-m-d") . "<br>";
echo "Format 2: " . date("d/m/Y") . "<br>";
echo "Format 3: " . date("F d, Y") . "<br>";
echo "Format 4: " . date("l, d-M-Y") . "<br>";
echo "Format 5: " . date("h:i:s A") . "<br>";
echo "Format 6: " . date("H:i:s") . "<br>";
?>