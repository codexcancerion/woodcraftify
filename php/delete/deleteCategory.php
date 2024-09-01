<?php
include '../WoodcraftifyDatabase.php';

// Create an instance of the WoodcraftifyDatabase class
$db = generateDBObject();

// Get the data from the AJAX request
$categoryName = $_POST['categoryName'];

    $db->deleteCategory($categoryName);
?>
