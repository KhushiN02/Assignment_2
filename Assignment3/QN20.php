<!-- 20. Create a function `celsiusToFahrenheit($celsius)` that converts Celsius to Fahrenheit and returns the result.

Formula: F = (C × 9/5) + 32

Test with: 0°C, 25°C, 100°C -->
<?php
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}
$testTemperatures = [0, 25, 100];
foreach ($testTemperatures as $celsius) {
    $fahrenheit = celsiusToFahrenheit($celsius);
    echo "$celsius°C is equal to " . number_format($fahrenheit, 2) . "°F<br>";
}   
?>