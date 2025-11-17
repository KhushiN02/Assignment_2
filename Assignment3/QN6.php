<!-- 6. Create a product inventory array:

$inventory = [

    ["id" => 101, "name" => "Laptop", "price" => 75000, "stock" => 10],

    ["id" => 102, "name" => "Mouse", "price" => 500, "stock" => 50],

    ["id" => 103, "name" => "Keyboard", "price" => 1200, "stock" => 0],

    ["id" => 104, "name" => "Monitor", "price" => 25000, "stock" => 5]

];

Display:

All products in a formatted table
Products that are out of stock (stock = 0)
Products that need reorder (stock < 10)
Total value of inventory (sum of price × stock for all products)
Expected Output:

PRODUCT INVENTORY

ID   | Name      | Price    | Stock

-----|-----------|----------|------

101  | Laptop    | 75000    | 10

102  | Mouse     | 500      | 50

103  | Keyboard  | 1200     | 0

104  | Monitor   | 25000    | 5

OUT OF STOCK:

- Keyboard (ID: 103)

LOW STOCK (Need Reorder):

- Monitor (ID: 104) - Only 5 units left

Total Inventory Value: Rs. 900000 -->
<?php
$inventory = [
    ["id" => 101, "name" => "Laptop", "price" => 75000, "stock" => 10],
    ["id" => 102, "name" => "Mouse", "price" => 500, "stock" => 50],
    ["id" => 103, "name" => "Keyboard", "price" => 1200, "stock" => 0],
    ["id" => 104, "name" => "Monitor", "price" => 25000, "stock" => 5]
];
// Display All products in a formatted table
echo "<h3>PRODUCT INVENTORY</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Stock</th></tr>";
$totalValue = 0;
foreach ($inventory as $product) {
    echo "<tr>";
    echo "<td>" . $product['id'] . "</td>";
    echo "<td>" . $product['name'] . "</td>";
    echo "<td>" . $product['price'] . "</td>";
    echo "<td>" . $product['stock'] . "</td>";
    echo "</tr>";
    // Calculate total inventory value
    $totalValue += $product['price'] * $product['stock'];
}
echo "</table>";
// Display Products that are out of stock
echo "<h3>OUT OF STOCK:</h3>";
foreach ($inventory as $product) {
    if ($product['stock'] == 0) {
        echo "- " . $product['name'] . " (ID: " . $product['id'] . ")<br>";
    }
}
// Display Products that need reorder
echo "<h3>LOW STOCK (Need Reorder):</h3>";
foreach ($inventory as $product) {
    if ($product['stock'] < 10 && $product['stock'] > 0) {
        echo "- " . $product['name'] . " (ID: " . $product['id'] . ") - Only " . $product['stock'] . " units left<br>";
    }
}
// Display Total value of inventory
echo "<h3>Total Inventory Value: Rs. " . number_format($totalValue) . "</h3>";
?>
