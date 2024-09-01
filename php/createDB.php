<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "woodcraftify";
 
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

        
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($dbName);

// SQL to create tables

// Shops table
$sql = "CREATE TABLE IF NOT EXISTS shops (
    shopId INT AUTO_INCREMENT PRIMARY KEY,
    shopName VARCHAR(255) NOT NULL,
    shopDescription TEXT,
    logoType VARCHAR(255),
    logoMark VARCHAR(255),
    location VARCHAR(255),
    contactNumber VARCHAR(20),
    email VARCHAR(255),
    mission TEXT,
    story TEXT,
    heroLine VARCHAR(255),
    heroLineHighlight VARCHAR(255),
    heroDescription TEXT,
    INDEX (shopName),
    INDEX (location)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'shops' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Values table
$sql = "CREATE TABLE IF NOT EXISTS shopvalues (
    valueId INT AUTO_INCREMENT PRIMARY KEY,
    valueName VARCHAR(255) NOT NULL,
    description TEXT,
    INDEX (valueName)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'shopvalues' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Categories table
$sql = "CREATE TABLE IF NOT EXISTS categories (
    categoryId INT AUTO_INCREMENT PRIMARY KEY,
    categoryName VARCHAR(255) NOT NULL,
    categoryDescription TEXT,
    INDEX (categoryName)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'categories' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}




// Products table
$sql = "CREATE TABLE IF NOT EXISTS products (
    productId INT AUTO_INCREMENT PRIMARY KEY,
    shopId VARCHAR(10),
    productName VARCHAR(255) NOT NULL,
    productDescription TEXT,
    productImage VARCHAR(255),
    price DECIMAL(10, 2),
    availableQuantity INT,
    category VARCHAR(100),
    dimensionsId VARCHAR(10),
    materials TEXT,
    length INT (10),
    width INT (10),
    height INT (10),
    INDEX (productName),
    INDEX (price),
    INDEX (category)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'products' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}



// Featured Products table
$sql = "CREATE TABLE IF NOT EXISTS featured_products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    shopId VARCHAR(10),
    productId VARCHAR(10)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'featured_products' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();


?>
