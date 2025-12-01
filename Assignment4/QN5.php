<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order Form</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Pizza Order Form</h2>
    <?php
    // Initialize variables
    $size = $toppings = $crust = "";
    $sizeErr = $toppingsErr = "";
    $isValid = true;

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validate size
        if (empty($_POST['size'])) {
            $sizeErr = "Please select a size.";
            $isValid = false;
        } else {
            $size = $_POST['size'];
        }

        // Validate toppings
        if (empty($_POST['toppings'])) {
            $toppingsErr = "Please select at least one topping.";
            $isValid = false;
        } else {
            $toppings = $_POST['toppings'];
        }

        // Get crust type
        if (!empty($_POST['crust'])) {
            $crust = $_POST['crust'];
        }
    }
    ?>

    <form method="post" action="">
        Size:<br>
        <input type="radio" name="size" value="Small" <?php if ($size == "Small") echo "checked"; ?>> Small<br>
        <input type="radio" name="size" value="Medium" <?php if ($size == "Medium") echo "checked"; ?>> Medium<br>
        <input type="radio" name="size" value="Large" <?php if ($size == "Large") echo "checked"; ?>> Large<br>
        <span class="error"><?php echo $sizeErr; ?></span><br><br>

        Toppings:<br>
        <input type="checkbox" name="toppings[]" value="Cheese" <?php if (is_array($toppings) && in_array("Cheese", $toppings)) echo "checked"; ?>> Cheese<br>
        <input type="checkbox" name="toppings[]" value="Mushroom" <?php if (is_array($toppings) && in_array("Mushroom", $toppings)) echo "checked"; ?>> Mushroom<br>
        <input type="checkbox" name="toppings[]" value="Onion" <?php if (is_array($toppings) && in_array("Onion", $toppings)) echo "checked"; ?>> Onion<br>
        <input type="checkbox" name="toppings[]" value="Olive" <?php if (is_array($toppings) && in_array("Olive", $toppings)) echo "checked"; ?>> Olive<br>
        <span class="error"><?php echo $toppingsErr; ?></span><br><br>
        Crust Type:
        <select name="crust">
            <option value="Thin" <?php if ($crust == "Thin") echo "selected"; ?>>Thin</option>
            <option value="Regular" <?php if ($crust == "Regular") echo "selected"; ?>>Regular</option>
            <option value="Thick" <?php if ($crust == "Thick") echo "selected"; ?>>Thick</option>   
        </select><br><br>
        <input type="submit" value="Place Order">   
    </form>
    <hr>
    <?php
    // If the form is valid, display the order summary  
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $isValid) {
        echo "<h3>Your Pizza Order Summary:</h3>";
        echo "Size: " . htmlspecialchars($size) . "<br>";
        echo "Toppings: " . implode(", ", array_map('htmlspecialchars', $toppings)) . "<br>";
        echo "Crust Type: " . htmlspecialchars($crust) . "<br>";
    }   
    ?>
</body> 
</html>