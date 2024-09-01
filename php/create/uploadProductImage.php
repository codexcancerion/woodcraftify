<?php
include '../WoodcraftifyDatabase.php';

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "woodcraftify";
    
// Create an instance of the WoodcraftifyDatabase class
$db = new WoodcraftifyDatabase($servername, $username, $password, $dbname);

// Get the data from the AJAX request
$productImage = $_POST['productImage'];

    $db->uploadFile($productImage, "../uploads")


?>
