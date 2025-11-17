<!-- 16. Create a tool that compares prices from different sellers:

Find highest price
Find lowest price
Calculate average price
Sort prices in ascending order
Given:

$prices = [

    "Amazon" => 5000,

    "Flipkart" => 4500,

    "eBay" => 4800,

    "Snapdeal" => 5200

];

Expected Output

PRICE COMPARISON

Amazon: Rs. 5,000

Flipkart: Rs. 4,500

eBay: Rs. 4,800

Snapdeal: Rs. 5,200

Statistics:

Highest Price: Rs. 5,200 (Snapdeal)

Lowest Price: Rs. 4,500 (Flipkart)

Average Price: Rs. 4,875

Savings: Rs. 700 (if you buy from Flipkart)

Sorted by Price (Low to High):

Flipkart: Rs. 4,500

eBay: Rs. 4,800

Amazon: Rs. 5,000

Snapdeal: Rs. 5,200 -->
<?php
$prices = [
    "Amazon" => 5000,
    "Flipkart" => 4500,
    "eBay" => 4800,
    "Snapdeal" => 5200
];
echo "<h3>PRICE COMPARISON</h3>";
foreach ($prices as $seller => $price) {
    echo $seller . ": Rs. " . number_format($price) . "<br>";
}
// Find highest price
$highestPrice = max($prices);
$highestSeller = array_search($highestPrice, $prices);
// Find lowest price
$lowestPrice = min($prices);
$lowestSeller = array_search($lowestPrice, $prices);
// Calculate average price
$averagePrice = array_sum($prices) / count($prices);
// Calculate savings
$savings = $highestPrice - $lowestPrice;
// Display Statistics
echo "<h3>Statistics:</h3>";
echo "Highest Price: Rs. " . number_format($highestPrice) . " ($highestSeller)<br>";
echo "Lowest Price: Rs. " . number_format($lowestPrice) . " ($lowestSeller)<br>";
echo "Average Price: Rs. " . number_format($averagePrice) . "<br>";     
echo "Savings: Rs. " . number_format($savings) . " (if you buy from $lowestSeller)<br>";
// Sort prices in ascending order
asort($prices);
echo "<h3>Sorted by Price (Low to High):</h3>";
foreach ($prices as $seller => $price) {
    echo $seller . ": Rs. " . number_format($price) . "<br>";
}
?>