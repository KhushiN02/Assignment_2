<!-- 2. Create an array: `$cities = ['Kathmandu', 'Pokhara', 'Lalitpur', 'Bhaktapur', 'Biratnagar']`

Perform the following operations:

Display the first city
Display the last city (use count())
Display the total number of cities
Display the city at index 2 -->
<?php
$cities = ['Kathmandu', 'Pokhara', 'Lalitpur', 'Bhaktapur', 'Biratnagar'];
echo "<h3>Cities Information:</h3>";
// Display the first city
echo "First City: " . $cities[0] . "<br>";
// Display the last city using count()
$lastIndex = count($cities) - 1;
echo "Last City: " . $cities[$lastIndex] . "<br>";
// Display the total number of cities
echo "Total Number of Cities: " . count($cities) . "<br>";
// Display the city at index 2
echo "City at Index 2: " . $cities[2] . "<br>";
?>