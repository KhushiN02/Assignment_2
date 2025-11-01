<!-- Write a PHP program that reads 10 numbers and stops input when a negative number is entered. -->
<!DOCTYPE html>
<html>
<head>
    <title>Read Numbers</title>
</head>
<body>
    <h2>Enter up to 10 numbers</h2>

    <form method="post">
        <?php
        // Create 10 input boxes dynamically
        for ($i = 1; $i <= 10; $i++) {
            echo "Number $i: <input type='number' name='num[]'><br>";
        }
        ?>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $numbers = $_POST['num'];
        $count = 0;

        echo "<h3>Entered Numbers:</h3>";

        foreach ($numbers as $num) {
            // If the input is empty, skip it
            if ($num === "") continue;

            // Stop if a negative number is entered
            if ($num < 0) {
                echo "Negative number ($num) entered. Stopping input.<br>";
                break;
            }

            echo "$num <br>";
            $count++;
        }

        echo "<br>Total valid (non-negative) numbers entered: $count";
    }
    ?>
</body>
</html>


