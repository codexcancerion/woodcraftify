<?php
include '../WoodcraftifyDatabase.php';

// Create an instance of the WoodcraftifyDatabase class
$db = generateDBObject();

// Get the data from the AJAX request
$productName = $_POST['productName'];
$productId = $_POST['productId'];


    $db->deleteFeaturedProductById($productId);
?>
