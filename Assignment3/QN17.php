<!-- 17. Create a tag management system for blog posts:

Store tags as an array
Convert tags to string for display
Convert tag string back to array
Check if specific tag exists
Sort tags alphabetically
Given:

$tags = ["PHP", "Web Development", "Programming", "MySQL", "Backend"];

Expected Output:

Tags as array: ["PHP", "Web Development", "Programming", "MySQL", "Backend"]

Tags as string: PHP, Web Development, Programming, MySQL, Backend

"PHP" tag exists

"JavaScript" tag not found

Sorted tags: Backend, MySQL, PHP, Programming, Web Development

Total tags: 5 -->
<?php
$tags = ["PHP", "Web Development", "Programming", "MySQL", "Backend"];
// Display tags as array    
echo "<h3>Tags as array: </h3>";
print_r($tags); 
echo "<br>";
// Convert tags to string for display
$tag_string = implode(", ", $tags);
echo "<h3>Tags as string: </h3>" . $tag_string . "<br>";
// Check if specific tag exists
$check_tags = ["PHP", "JavaScript"];
foreach ($check_tags as $tag) {
    if (in_array($tag, $tags)) {
        echo "\"$tag\" tag exists<br>";
    } else {
        echo "\"$tag\" tag not found<br>";
    }
}
// Sort tags alphabetically
sort($tags);
echo "<h3>Sorted tags: </h3>" . implode(", ", $tags) . "<br>";
// Total tags
$total_tags = count($tags);
echo "<h3>Total tags: </h3>" . $total_tags . "<br>";
?>