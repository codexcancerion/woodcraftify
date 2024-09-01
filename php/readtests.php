<?php

// Include the class definition
require_once 'WoodcraftifyDatabase.php';

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "woodcraftify";

// Create an instance of the WoodcraftifyDatabase class
$db = new WoodcraftifyDatabase($servername, $username, $password, $dbname);

$result = $db->getFeaturedProducts();
// $productDecode = json_decode($product);
// $dimension = $db->getDimensions($productDecode[0]->dimensionsId);
// $category = $db->getCategoryById($productDecode[0]->categoryId);

$json = json_decode($result);

for($i = 0; $i<3; $i++) {
    $product = $db->getProductById($json[$i]->productId);
    $product = json_decode($product);
    echo $product[0]->productName;
}



// Close the database connection
$db = null;

echo "read success";
?>
