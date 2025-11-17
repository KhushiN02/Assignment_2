<!-- 1. Create an indexed array containing your 5 favorite foods.

Display all foods using a foreach loop
Display them in a numbered list format (1., 2., 3., etc.) -->
<?php
echo "<h3>My Favorite Foods are:</h3>";
$foods = ["Pizza", "Sushi", "Pasta", "Ice Cream", "Tacos"];
$count = 1;
foreach($foods as $food){
    echo "$count. $food<br>";
    $count++;
}
?>

