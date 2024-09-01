<?php
include '../WoodcraftifyDatabase.php';

// Create an instance of the WoodcraftifyDatabase class
$db = generateDBObject();

// Get the data from the AJAX request
$shopName = $_POST['shopName'];
$shopDesc = $_POST['shopDesc'];
$shopLocation = $_POST['shopLocation'];
$shopContact = $_POST['shopContact'];
$shopEmail = $_POST['shopEmail'];
$story = $_POST['story'];
$mission = $_POST['mission'];
$value1  = $_POST['value1'];
$value1desc = $_POST['value1desc'];
$value2 = $_POST['value2'];
$value2desc = $_POST['value2desc'];
$value3 = $_POST['value3'];
$value3desc   = $_POST['value3desc'];
$heroLine = $_POST['heroLine'];
$heroLineHighlight = $_POST['heroLineHighlight'];
$heroDescription   = $_POST['heroDescription'];

    $db->updateShop(
        $shopName, 
        $shopDesc, 
        $shopLocation, 
        $shopContact, 
        $shopEmail, 
        $mission, 
        $story, 
        $heroLine, 
        $heroLineHighlight,
        $heroDescription
    );

    $db->updateShopValues(
        'V001',
        $value1, 
        $value1desc
    );
    $db->updateShopValues(
        'V002',
        $value2, 
        $value2desc
    );
    $db->updateShopValues(
        'V003',
        $value3, 
        $value3desc
    );



?>
