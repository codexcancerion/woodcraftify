<?php
$root = "../../../../";
include $root.'php/components.php';
require_once $root.'php/WoodcraftifyDatabase.php';

// find db connection on './php/components.php'
$db = generateDBObject();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woodcraftify</title>
    <link rel="shortcut icon" href="../../../../images/craftify/logomark.png" type="image/x-icon">

    <!-- MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- GOOGLE FONTS POPPINS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="../../../../css/globals.css">
    <link rel="stylesheet" href="../../../../css/components.css">
    <!-- PAGE STYLES -->
    <link rel="stylesheet" href="./style.css">
            
    <!-- EXTERNAL SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="../../../../js/data.js"></script>
    <script src="../../../../js/components.js"></script> -->
</head>
<body>    
    <!-- ROUTES -->
    <script>
        const root = "../../../../";
    </script>
    <header id="header">
        <script>
            Navbar("header", root);
        </script>
    </header>

    <main>
        <section class="dashboard-section">
            <div class="left-navigation">
                <ul class="links">
                    <a href="../../"><li class="link">Shop</li></a>
                    <a href="../"><li class="link selected">Products</li></a>
                </ul>
            </div>
            <div class="dashboard-container">
                <div class="dashboard">
                    <h1 class="dash-title">Product Information</h1>
                    
                    <!-- Product Image -->
                    <div class="input-section">
                        <label for="" class="input-label">Product Image</label>
                        <img id="product-image" src="" alt="Product Image" class="product-image-dashboard">
                        <br>
                        <input id="product-image-upload" name="product-image-upload" type="file" class="input-field product-image-upload width-half">
                    </div>


                    
                    <!-- Submit Button -->
                    <div class="submit-section add-new-product">
                        <button class="submit-button add-new-product-button" >Test Upload</button>
                    </div>
                </div>
            </div>
            
        </section>
    </main>
    
    
    
    <script>
        // Function to get query parameter by name
        const getQueryParam = (param) => {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        };

        
        $(".add-new-product-button").on('click', () => {                
            // new product functionality here
            const prodImage = $('#product-image-upload').val();

            // Send data to PHP script via AJAX
            $.ajax({
                    url: root+'php/create/uploadProductImage.php', // The URL of your PHP script
                    type: 'POST',
                    data: {
                        productImage: prodImage,
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Product added successfully:', response);
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error adding product:', error);
                    }
                });
        });
        
        var productDetails;
        document.addEventListener('DOMContentLoaded', () => {
            const productId = getQueryParam('productId');
            if (productId && productId != "new" ) {
                products.map(product => {
                    if (product.productId === productId){
                        productDetails = product;
                    }
                })  
            }

            // Populate fields with product details
            if (productDetails && productId != "new") {
                $('.dash-title').text(productDetails.productName);
                $('#product-image').attr('src', root + 'images/products/' + productDetails.productName +".jpg");
                $('#product-name').val(productDetails.productName);
                $('#product-description').val(productDetails.productDescription);
                $('#product-price').val(productDetails.price);
                $('#available-quantity').val(productDetails.availableQuantity);
                $('#length').val(productDetails.length);
                $('#width').val(productDetails.width);
                $('#height').val(productDetails.height);
                $('#materials').val(productDetails.materials);
                
                var category;
                categories.map(cat => {
                    if (cat.categoryId === productDetails.categoryId) category = cat.categoryName;
                })
                $('#category').val(category);  
                
                
                $('.add-new-product').hide();
                
            } else {
                $('#product-image').hide();
            }

            if (productId == "new") {                
                $('.update-product').hide();
                $('.delete-section').hide();
            }           


        });
    </script>
<?php
    renderfooter($root);
    renderends($root);
?> 
