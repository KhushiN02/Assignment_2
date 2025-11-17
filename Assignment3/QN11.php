<!-- 11. Create a shopping bill that:

Calculates subtotal
Applies 13% VAT
Rounds all prices to 2 decimal places
Formats numbers with commas
Given:

$items = [

    ["name" => "Laptop", "price" => 75000],

    ["name" => "Mouse", "price" => 500],

    ["name" => "Keyboard", "price" => 1200]

];

Expected Output:

SHOPPING BILL

Laptop:    Rs. 75,000.00

Mouse:     Rs. 500.00

Keyboard:  Rs. 1,200.00

----------------------------------

Subtotal:  Rs. 76,700.00

VAT (13%): Rs. 9,971.00

---------------------------------

TOTAL:     Rs. 86,671.00

========================= -->
<?php
$items = [
    ["name" => "Laptop", "price" => 75000],
    ["name" => "Mouse", "price" => 500],
    ["name" => "Keyboard", "price" => 1200]
];
echo "<h3>SHOPPING BILL</h3>";
$subtotal = 0;
foreach ($items as $item) {
    echo $item['name'] . ":    Rs. " . number_format($item['price'], 2) . "<br>";
    $subtotal += $item['price'];
}
$vat = round($subtotal * 0.13, 2);
$total = $subtotal + $vat;
echo "----------------------------------<br>";
echo "Subtotal:  Rs. " . number_format($subtotal, 2) . "<br>";
echo "VAT (13%): Rs. " . number_format($vat, 2) . "<br>";
echo "---------------------------------<br>";
echo "TOTAL:     Rs. " . number_format($total, 2) . "<br>";
echo "=========================";
?>