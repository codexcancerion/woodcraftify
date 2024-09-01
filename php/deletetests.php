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

    $product = json_decode($db->getProductById('P001'));
    $dimensionId = $product[0]->dimensionsId;
    echo $db->deleteProductById('P001');
    echo $db->deleteDimensionsById($dimensionId);

// Close the database connection
$db = null;

?>
