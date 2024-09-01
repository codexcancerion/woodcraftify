<?php
include '../WoodcraftifyDatabase.php';

// Create an instance of the WoodcraftifyDatabase class
$db = generateDBObject();

// Get the data from the AJAX request
$productId = $_POST['productId'];
$productName = $_POST['productName'];
$productDescription = $_POST['productDescription'];
$price = $_POST['price'];
$availableQuantity = $_POST['availableQuantity'];
$length = $_POST['length'];
$width = $_POST['width'];
$height = $_POST['height'];
$materials = $_POST['materials'];
$category = $_POST['category'];
$productImage = $productName; 

    $db->updateProduct(
        $productId, 
        $productName, 
        $productDescription, 
        $productImage, 
        $price, 
        $availableQuantity, 
        $category, 
        "D001", 
        $length, 
        $width, 
        $height, 
        $materials
    );



?>
