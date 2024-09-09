<?php

function generateDBObject() {    
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "woodcraftify";
        
    // Create an instance of the WoodcraftifyDatabase class
    $db = new WoodcraftifyDatabase($servername, $username, $password, $dbname);
    return $db;
}

class WoodcraftifyDatabase {
    private $conn;

    // Constructor to initialize the database connection
    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Method to upload a file and return the file path
    public function uploadFile($file, $targetDir, $name) {
        // Get the original file extension
        $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
    
        // Set the target file path using the provided name and the original file extension
        $newFileName = $name . '.' . $fileExtension;
        $targetFile = $targetDir . $newFileName;
    
        // Move the uploaded file to the target directory with the new filename
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return $targetFile;
        } else {
            return false; // Return false if the file upload failed
        }
    }
    

    // Method to insert data into the shops table
    public function createShop($shopName, $shopDescription, $logoType, $logoMark, $location, $contactNumber, $email, $mission, $story, $heroLine, $heroLineHighlight, $heroDescription) {
        // $shopLogoPath = $this->uploadFile($shopLogo, "uploads/");
        $sql = "INSERT INTO shops ( shopName, shopDescription, logoType, logoMark, location, contactNumber, email, mission, story, heroLine, heroLineHighlight, heroDescription)
                VALUES ( '$shopName', '$shopDescription', '$logoType', '$logoMark', '$location', '$contactNumber', '$email', '$mission', '$story', '$heroLine', '$heroLineHighlight', '$heroDescription')";
        
        return $this->executeQuery($sql);
    }

    // Method to insert data into the values table
    public function createValue($valueName, $description) {
        $sql = "INSERT INTO shopvalues ( valueName, description)
                VALUES ( '$valueName', '$description')";
        
        return $this->executeQuery($sql);
    }

    // Method to insert data into the categories table
    public function createCategory( $categoryName, $categoryDescription) {
        $sql = "INSERT INTO categories ( categoryName, categoryDescription)
                VALUES ( '$categoryName', '$categoryDescription')";
        
        return $this->executeQuery($sql);
    }

    // Method to insert data into the products table
    public function createProduct( $productName, $productDescription, $productImage, $price, $availableQuantity, $category, $dimensions, $materials, $length, $width, $height) {
        $productImage = $productName;
        
        $sql = "INSERT INTO products (  productName, productDescription, productImage, price, availableQuantity, category, dimensionsId, materials, length, width, height)
                VALUES ( '$productName', '$productDescription', '$productImage', '$price', '$availableQuantity', '$category', '$dimensions', '$materials', '$length', '$width', '$height')";
        
        return $this->executeQuery($sql);
    }

    // Method to insert data into the dimensions table
    public function createDimension( $length, $width, $height) {
        $sql = "INSERT INTO dimensions ( length, width, height)
                VALUES ( '$length', '$width', '$height')";
        
        return $this->executeQuery($sql);
    }

    
    // Method to insert data into the categories table
    public function createFeaturedProduct( $productId) {
        $sql = "INSERT INTO featured_products ( productId)
                VALUES ( '$productId')";
        
        return $this->executeQuery($sql);
    }









    // READ

    // Method to get all categories
    public function getCategories() {
        $sql = "SELECT * FROM categories";
        return $this->fetchResults($sql);
    }

    // Method to get dimensions by category ID
    public function getCategoryById($categoryId) {
        $sql = "SELECT * FROM categories WHERE categoryId = '$categoryId'";
        return $this->fetchResults($sql);
    }

    // Method to get dimensions by category Name
    public function getCategoryByName($categoryName) {
        $sql = "SELECT * FROM categories WHERE categoryName = '$categoryName'";
        return $this->fetchResults($sql);
    }

    // Method to get all products
    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        return $this->fetchResults($sql);
    }

    // Method to get dimensions by dimension ID
    public function getDimensions($dimensionId) {
        $sql = "SELECT * FROM dimensions WHERE dimensionId = '$dimensionId'";
        return $this->fetchResults($sql);
    }


    // Method to get a product by its ID
    public function getProductById($productId) {
        $sql = "SELECT * FROM products WHERE productId = '$productId'";
        return $this->fetchResults($sql);
    }

    
    // Method to get a product by its category ID
    public function getProductByCategory($categoryId) {
        $sql = "SELECT * FROM products WHERE categoryId = '$categoryId'";
        return $this->fetchResults($sql);
    }

    // Method to get shop details
    public function getShop() {
        $sql = "SELECT * FROM shops";
        return $this->fetchResults($sql);
    }

    // Method to get shop values (values associated with a specific shop)
    public function getShopValues() {
        $sql = "SELECT * FROM shopvalues";
        return $this->fetchResults($sql);
    }

    // Method to get featured products
    public function getFeaturedProducts() {
        
        $sql = "SELECT * FROM featured_products";
        return $this->fetchResults($sql);

        // $featuredProductsString = implode("','", $featuredProducts);
        // $sql = "SELECT * FROM products WHERE productId IN ('$featuredProductsString')";
        // return $this->fetchResults($sql);
    }








    

        // --- UPDATE METHODS ---
    
        // Method to update the entire shop details
        public function updateShop(
            $shopName, 
            $shopDescription, 
            $location, 
            $contactNumber, 
            $email, 
            $mission, 
            $story, 
            $heroLine, 
            $heroLineHighlight,
            $heroDescription) {

            // $shopLogoPath = $this->uploadFile($shopLogo, "uploads/");
            $sql = "UPDATE shops SET 
                        shopName = '$shopName',
                        shopDescription = '$shopDescription',
                        location = '$location',
                        contactNumber = '$contactNumber',
                        email = '$email',
                        mission = '$mission',
                        story = '$story',
                        heroLine = '$heroLine',
                        heroLineHighlight = '$heroLineHighlight',
                        heroDescription = '$heroDescription'";
            
            return $this->executeQuery($sql);
        }
        public function updateShopImage(
            $type, $value) {

            // $shopLogoPath = $this->uploadFile($shopLogo, "uploads/");
            $sql = "UPDATE shops SET 
                        $type = '$value'";
            
            return $this->executeQuery($sql);
        }

        // Method to update the entire shop values
        public function updateShopValues(
            $id,
            $value, 
            $description
            ) {

            // $shopLogoPath = $this->uploadFile($shopLogo, "uploads/");
            $sql = "UPDATE shopvalues SET 
                        valueName = '$value',
                        description = '$description'
                    WHERE valueId = '$id'";
            
            return $this->executeQuery($sql);
        }
    
        // Method to update a specific shop info by ID
        public function updateShopInfoById($shopId, $columnName, $value) {
            $sql = "UPDATE shops SET $columnName = '$value' WHERE shopId = '$shopId'";
            return $this->executeQuery($sql);
        }
    
        // Method to update the entire product details
        public function updateProduct($productId, $productName, $productDescription, $productImage, $price, $availableQuantity, $category, $dimensionsId, $length, $width, $height, $materials) {
            $productImagePath = $productImage;
            
            $sql = "UPDATE products SET 
                        productName = '$productName',
                        productDescription = '$productDescription',
                        productImage = '$productImagePath',
                        price = '$price',
                        availableQuantity = '$availableQuantity',
                        category = '$category',
                        dimensionsId = '$dimensionsId',
                        length = '$length',
                        width = '$width',
                        height = '$height',
                        materials = '$materials'
                    WHERE productId = '$productId'";
            
            return $this->executeQuery($sql);
        }
    
        // Method to update a specific product info by ID
        public function updateProductInfoById($productId, $columnName, $value) {
            $sql = "UPDATE products SET $columnName = '$value' WHERE productId = '$productId'";
            return $this->executeQuery($sql);
        }
        public function updateCategory($formerName, $categoryName, $categoryDescription) {
            $sql = "UPDATE categories SET 
                    categoryName = '$categoryName',
                    categoryDescription = '$categoryDescription'
                    WHERE categoryName = '$formerName'";
            return $this->executeQuery($sql);
        }







    
        // --- DELETE METHODS ---
    
        // Method to delete a product by its ID
        public function deleteProductById($productId) {
            $sql = "DELETE FROM products WHERE productId = '$productId'";
            return $this->executeQuery($sql);
        }


        // Method to delete a product by its ID
        public function deleteFeaturedProductById($productId) {
            $sql = "DELETE FROM featured_products WHERE productId = '$productId'";
            return $this->executeQuery($sql);
        }

        // Method to delete a product by its ID
        public function deleteCategory($categoryName) {
            $sql = "DELETE FROM categories WHERE categoryName = '$categoryName'";
            return $this->executeQuery($sql);
        }
     





        

    // Method to execute SQL queries
    private function executeQuery($sql) {
        if ($this->conn->query($sql) === TRUE) {
            return "Record created successfully";
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    // Method to fetch results from a SELECT query and return as JSON
    private function fetchResults($sql) {
        $result = $this->conn->query($sql);
        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        
        return json_encode($data);
    }






    // Destructor to close the database connection
    public function __destruct() {
        $this->conn->close();
    }
}

?>
