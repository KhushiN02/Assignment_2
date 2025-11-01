<!-- Create an array of 5 student names and display them using foreach loop. -->
 <?php
 echo "<h3>The Students name are:</h3>";
$students = ["Aishwarya", "Laxmi", "Riya", "Amesha", "Ram-Maya"];
$count = 1;
foreach($students as $girls){
    echo "$count: $girls<br>";
    $count++;
}
?>