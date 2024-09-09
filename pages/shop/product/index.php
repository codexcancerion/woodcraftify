<?php
    $root = "../../../";
    require_once $root.'php/WoodcraftifyDatabase.php';
    include $root.'php/data.php';
    include $root.'php/components.php';
    include $root.'php/templates/templates.php';

    // find db connection on './php/components.php'
    $db = generateDBObject();
?>   
    
<!-- JS ROUTES -->
<script> const root = "../../../"; </script>

<?php
    renderHeaders($root);
    renderNavbar($root);
?>

    <main>
        <section class="section product-info">
            <div class="product-card-big">
                <div class="product-image-section">
                    <img src="../../../assets/images/hero.jpg" alt="Cordilleran Wooden Dining Table" class="product-image-big">
                </div>
                <div class="product-info-section">
                    <h1 class="product-name this-product-name"></h1>
                    <p class="product-description this-product-description">
                        <span class="material-icons">info</span>
                    </p>
            
                    <div class="product-details">
                        <div class="product-price this-product-price">
                            <span class="material-icons">sell</span>
                            <span></span>
                        </div>
                        <div class="product-dimensions this-product-dimensions">
                            <span class="material-icons">straighten</span>
                            <span></span>
                        </div>
                        <div class="product-materials this-product-materials">
                            <span class="material-icons">grass</span>
                            <span></span>
                        </div>
                        <div class="product-quantity this-product-quantity">
                            <span class="material-icons">inventory</span>
                            <span></span>
                        </div>
                    </div>
            
            
                    <div class="product-category this-product-category">
                        <span class="material-icons">category</span>
                        <span></span>
                    </div>
            
            
                    <button class="cta-button-big" onclick="buyNowClicked()">Buy Now</button>
                </div>
            </div>
            
        </section>

        <section class="section featured">
            <h1 class="page-title left">Related Products<hr></h1>
            <div class="related-products">
                <script>
                    //  SCRIPTS HERE TRANSFERED BELOW
                </script>
            </div>            
        </section>


    </main>
    
    
    
    <script>
        // Function to get query parameter by name
        const getQueryParam = (param) => {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        };
        
        var productDetails;
        document.addEventListener('DOMContentLoaded', () => {
            const productId = getQueryParam('productId');
            if (productId) {
                // product = fetchProductDetails(productId);
                products.map(product => {
                    if (product.productId === productId){
                        console.log(product);
                        productDetails = product;
                    }
                })  
                console.log(productDetails);
            } else {
                window.location.href = root+"index.html";
            }
            console.log(productDetails);
        });


        $(document).ready(function() {
            // Update the product image
            $('.product-image-big').attr('src', root+"images/products/"+productDetails.productName+".jpg");
            // $('.this-product-image-big').attr('alt', productDetails.productName);

            // Update the product name
            $('.this-product-name').text(productDetails.productName);

            // Update the product description
            $('.this-product-description').html('<span class="material-icons">info</span>' + productDetails.productDescription);

            // Update the product price
            $('.this-product-price span').last().html('<strong>P ' + productDetails.price.toLocaleString() + '</strong>');

            // Update the product dimensions
            const dimensionsText = `Dimensions: ${productDetails.length} x ${productDetails.width} x ${productDetails.height} cm`;
            $('.this-product-dimensions span').last().text(dimensionsText);

            // Update the product materials
            $('.this-product-materials span').last().text('Materials: ' + productDetails.materials);

            // Update the available quantity
            $('.this-product-quantity span').last().text('Available: ' + productDetails.availableQuantity);

            

            // Update the product category
            $('.this-product-category span').last().text('Category: ' + productDetails.category);


            showRelatedProducts("related-products", productDetails.category, root);

        });

       function buyNowClicked(){
            alert("This functionality is unavailable. Contact Us if interested.");
       }       

    </script>
<?php
    renderfooter($root);
    renderends($root);
?> 