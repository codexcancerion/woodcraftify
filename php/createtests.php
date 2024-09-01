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


// CREATE TESTS
// Dummy data for shops
$db->createShop(
    'Woodcraftify',
    'Crafting Excellence, Preserving Traditions, Shaping the Future',
    'woodcraftify_logotype.jpg',
    'woodcraftify_logomark.jpg',
    'Baguio City, Philippines',
    '+63 912 345 6789',
    'contact@woodcrafts.ph',
    'Our mission is to craft furniture and decor that embody authenticity and sustainability, while honoring the cultural heritage of the Cordilleras. We strive to deliver products that are not only beautiful but also functional and durable.',
    'WoodCraftify is a homegrown brand dedicated to preserving the rich heritage of Cordilleran craftsmanship. With every piece we create, we tell a story of tradition, sustainability, and unparalleled quality. Our journey began with a vision to connect skilled artisans with clients who appreciate the art of woodworking.',
    'Furnish your homes like a',
    'MASTER',
    'In Woodcraftify, we help you furnish your homes with quality crafts and furnitures.'
);

// // // Dummy data for values
// $db->createValue(
//     'V001',
//     'Quality',
//     'We deliver products that stand the test of time'
// );

// // Dummy data for categories
// $db->createCategory(
//     "Cabinets",
//     "Spacious wooden cabinets and wardrobes, perfect for storage, with intricate Cordilleran carvings."
// );

// $db->createCategory(
//     "Shelves",
//     "Multi-layered wooden shelves for storage and display, blending functionality with traditional craftsmanship."
// );
// $db->createCategory(
//     "Beds",
//     "Traditional wooden bed frames with beautiful Cordilleran carvings, providing both comfort and style."
// );

// $db->createCategory(
//     "Sculptures",
//     "Intricately carved wooden sculptures inspired by Cordilleran culture, symbolizing strength and tradition."
// );



// Dummy data for products
// $db->createProduct(
//     'Bontoc Wooden Bench',
//     'A sturdy and elegantly designed bench inspired by Bontoc craftsmanship.',
//     '',
//     8000,
//     10,
//     'C001',
//     'D002',
//     'Cordilleran Wood',
//     150,
//     100,
//     50,
// );
// // // Dummy data for dimensions
// $db->createDimension(
//     'D002',
//     150,
//     50,
//     45
// );



// Dummy data for products
// $db->createProduct(
//     'Ifugao Wooden Sculpture',
//     'An intricately carved Ifugao wooden sculpture symbolizing strength and resilience.',
//     '',
//     5000,
//     20,
//     'C001',
//     'D003',
//     'Cordilleran Wood',
//     150,
//     100,
//     50,
// );
// // // Dummy data for dimensions
// $db->createDimension(
//     'D003',
//     30,
//     20,
//     40
// );

// $db->createFeaturedProduct(
//     'S001',
//     'P001'
// );
// $db->createFeaturedProduct(
//     'S001',
//     'P002'
// );
// $db->createFeaturedProduct(
//     'S001',
//     'P003'
// );


// Dummy data for products
// $db->createProduct(
//     'Cordilleran Wooden Dining Table',
//     'A handcrafted wooden dining table made from sustainable Cordilleran wood, featuring traditional carvings.',    
//     '',
//     15000,
//     5,
//     'C001',
//     'D001',
//     'Cordilleran Wood',
//     150,
//     100,
//     50,
// );

// Close the database connection
$db = null;

echo "Dummy data inserted successfully.";
?>
