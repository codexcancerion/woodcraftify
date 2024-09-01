<?php
include '../WoodcraftifyDatabase.php';

// Create an instance of the WoodcraftifyDatabase class
$db = generateDBObject();

// Get the data from the AJAX request
$formerName = $_POST['formerName'];
$categoryName = $_POST['categoryName'];
$categoryDescription = $_POST['categoryDescription'];

    $db->updateCategory($formerName, $categoryName, $categoryDescription);

?>
