<!-- Write a PHP program to print prime numbers between 1 and 50. -->
 <?php
 echo "<h3>Prime Numbers between 1 and 50 are:</h3>";
for($num = 1; $num <= 50; $num++) {
    $isPrime = true;
    if($num <= 1) {
        $isPrime = false;
    } else {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }
    if ($isPrime) {
        echo "Prime Number: $num <br>";
    }
}
?>