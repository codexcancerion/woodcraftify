<?php
    $root = "../../../../";
    require_once $root.'php/WoodcraftifyDatabase.php';
    include $root.'php/data.php';
    include $root.'php/components.php';
    include $root.'php/templates/templates.php';

    // find db connection on './php/components.php'
    $db = generateDBObject();
    
    $dashboardRoot = "../../";
?>   
    
<!-- JS ROUTES -->
<script> const root = "../../../../"; </script>

<?php
    renderHeaders($root);
    renderNavbar($root);
?>

    <main>
        <section class="dashboard-section">
            <div class="left-navigation">
                <ul class="links">
                    <a href="<?php echo $dashboardRoot;?>"><li class="link">Shop</li></a>
                    <a href="<?php echo $dashboardRoot.'products/';?>"><li class="link selected">Products</li></a>
                    <a href="<?php echo $dashboardRoot.'categories/';?>"><li class="link ">Categories</li></a>
                </ul>
            </div>
            <div class="dashboard-container">
                <div class="dashboard">
                <h1 class="dash-title-number"></h1>
                <h1 class="dash-title">Product Information</h1>
                    
                    <!-- Product Image -->
                    <div class="input-section">
                        <label for="" class="input-label">Product Image</label>
                        <img id="product-image" src="" alt="Product Image" class="product-image-dashboard">
                        <br>
                        <input id="product-image-upload" name="product-image-upload" type="file" class="input-field product-image-upload width-half">
                    </div>

                    <!-- Product Name -->
                    <div class="input-section">
                        <label for="product-name" class="input-label">Product Name</label>
                        <input id="product-name" name="product-name" type="text" class="input-field product-name width-half">
                    </div>

                    <!-- Product Description -->
                    <div class="input-section">
                        <label for="product-description" class="input-label">Product Description</label>
                        <textarea id="product-description" name="product-description" class="input-field product-description"></textarea>
                    </div>

                    <!-- Price -->
                    <div class="input-section">
                        <label for="product-price" class="input-label">Price (PHP)</label>
                        <input id="product-price" name="product-price" type="number" class="input-field product-price width-half">
                    </div>

                    <!-- Available Quantity -->
                    <div class="input-section">
                        <label for="available-quantity" class="input-label">Available Quantity</label>
                        <input id="available-quantity" name="available-quantity" type="number" class="width-half input-field available-quantity">
                    </div>

                    <!-- Dimensions -->
                    <div class="input-section">
                        <label for="dimensions" class="input-label">Dimensions (L x W x H) (cm)</label>
                        
                        <!-- Length Input -->
                        <input id="length" name="length" type="number" class="input-field dimensions width-quarter" placeholder="Length (cm)">
                        
                        <!-- Width Input -->
                        <input id="width" name="width" type="number" class="input-field dimensions width-quarter" placeholder="Width (cm)">
                        
                        <!-- Height Input -->
                        <input id="height" name="height" type="number" class="input-field dimensions width-quarter" placeholder="Height (cm)">
                    </div>


                    <!-- Materials -->
                    <div class="input-section">
                        <label for="materials" class="input-label">Materials</label>
                        <input id="materials" name="materials" type="text" class="input-field materials width-half">
                    </div>

                    <!-- Category -->
                    <div class="input-section">
                        <label for="category" class="input-label">Category</label>
                        <select id="category" name="category" type="text" class="input-field category width-half">
                            <option disabled value="">Select here</option>
                            <!-- Options are added by the jquery below -->
                        </select>
                    </div>



                    <p class="feature-actions-confirmation"></p>
                    <!-- Add to Featured Products Button -->
                    <div class="submit-section add-to-feature">
                        <button class="add-to-feature-button">Add To Featured Products</button>
                    </div>

                    <!-- Add to Featured Products Button -->
                    <div class="submit-section remove-from-feature">
                        <button class="remove-from-feature-button">Remove From Featured Products</button>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="submit-section add-new-product">
                        <button class="submit-button add-new-product-button" type="submit">Add New Product</button>
                    </div>
                    <!-- Submit Button -->
                    <div class="submit-section update-product">
                        <button class="submit-button update-product-button" type="submit">Update Product Information</button>
                    </div>
                    <div class="delete-section">
                        <button class="delete-button" >Delete Product</button>
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

        <?php
            // Check if 'productId' is set in the query string
            if (isset($_GET['productId'])) {
                // Retrieve the value of 'productId'
                $productId = $_GET['productId'];
            };
        ?>

        
        $(".add-new-product-button").on('click', () => {                
            // new product functionality here
            const prodName = $('#product-name').val();
            const prodDesc = $('#product-description').val();
            const price = $('#product-price').val();
            const quantity = $('#available-quantity').val();
            const length = $('#length').val();
            const width = $('#width').val();
            const height = $('#height').val();
            const materials = $('#materials').val();   
            const category = $('#category').val(); 

            // Send data to PHP script via AJAX
            $.ajax({
                    url: root+'php/create/createNewProduct.php', // The URL of your PHP script
                    type: 'POST',
                    data: {
                        productName: prodName,
                        productDescription: prodDesc,
                        price: price,
                        availableQuantity: quantity,
                        length: length,
                        width: width,
                        height: height,
                        materials: materials,
                        category: category
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Product added successfully:', response);
                        window.location.href = "../";
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error adding product:', error);
                    }
                });
        });

        $(".update-product-button").on('click', () => {      
            console.log("clicked update");
            // new product functionality here
            const prodName = $('#product-name').val();
            const prodDesc = $('#product-description').val();
            const price = $('#product-price').val();
            const quantity = $('#available-quantity').val();
            const length = $('#length').val();
            const width = $('#width').val();
            const height = $('#height').val();
            const materials = $('#materials').val();   
            const category = $('#category').val(); 
            const productId = getQueryParam('productId');

            // Send data to PHP script via AJAX
            $.ajax({
                    url: root+'php/update/updateProduct.php', // The URL of your PHP script
                    type: 'POST',
                    data: {
                        productId: productId,
                        productName: prodName,
                        productDescription: prodDesc,
                        price: price,
                        availableQuantity: quantity,
                        length: length,
                        width: width,
                        height: height,
                        materials: materials,
                        category: category
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Product updated successfully:', response);
                        window.location.href = "../";
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error updating product:', error);
                    }
                });
        });

        $(".delete-button").on('click', () => {                
            // new product functionality here
            const prodName = $('#product-name').val();
            const productId = getQueryParam('productId');

            // Send data to PHP script via AJAX
            $.ajax({
                    url: root+'php/delete/deleteProduct.php', // The URL of your PHP script
                    type: 'POST',
                    data: {
                        productName: prodName,
                        productId: productId,
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Product deleted successfully:', response);
                        window.location.href = "../";
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error deleting product:', error);
                    }
                });
        });

        $(".add-to-feature-button").on('click', () => {                
            // new product functionality here
            const prodName = $('#product-name').val();
            const productId = getQueryParam('productId');

            // Send data to PHP script via AJAX
            $.ajax({
                    url: root+'php/create/createNewFeaturedProduct.php', // The URL of your PHP script
                    type: 'POST',
                    data: {
                        productName: prodName,
                        productId: productId,
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Product added to Featured successfully:', response);
                        // window.location.href = "../";
                        $('.feature-actions-confirmation').text("Successfully added "+prodName+" to Featured Products");
                        $('.add-to-feature').hide();
                        $('.remove-from-feature').show();
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error adding product:', error);
                    }
                });
        });

        $(".remove-from-feature-button").on('click', () => {                
            // new product functionality here
            const prodName = $('#product-name').val();
            const productId = getQueryParam('productId');

            // Send data to PHP script via AJAX
            $.ajax({
                    url: root+'php/delete/deleteFeaturedProduct.php', // The URL of your PHP script
                    type: 'POST',
                    data: {
                        productName: prodName,
                        productId: productId,
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Product removed from Featured successfully:', response);
                        // window.location.href = "../";
                        $('.feature-actions-confirmation').text("Removed "+prodName+" from Featured Products");
                        $('.add-to-feature').show();
                        $('.remove-from-feature').hide();
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error removing product:', error);
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
            // Generate Category Values
            categories.map(cat => {
                if (productId !== "new" && productDetails.category === cat.categoryName) $('#category').append("<option selected id='"+cat.categoryName+"' value='"+cat.categoryName+"'>"+cat.categoryName+"</option>");
                else $('#category').append("<option id='"+cat.categoryName+"' value='"+cat.categoryName+"'>"+cat.categoryName+"</option>");  
            })

            // check if productId is in featuredProducts
            const featuredProduct = (productId) => {
                var featured = false;
                featuredProducts.map (feat => {
                    if(feat.productId === productId) {
                        featured = true;
                        return true;
                    } 
                    else featured = false;
                })
                return featured;
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
                
                $('.add-new-product').hide();                
                featuredProduct(productId) ? $('.add-to-feature').hide() : $('.remove-from-feature').hide();
                
            } else {
                $('#product-image').hide();
            }

            if (productId == "new") {  
                $('.remove-from-feature').hide()              
                $('.update-product').hide();
                $('.delete-section').hide();
                $('.add-to-feature').hide();
            }       

        });

        
        // $(".delete-button").on('click', () => { 
        
    </script>
<?php
    renderfooter($root);
    renderends($root);
?> 
