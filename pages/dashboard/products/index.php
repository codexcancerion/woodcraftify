<?php
    $root = "../../../";
    require_once $root.'php/WoodcraftifyDatabase.php';
    include $root.'php/data.php';
    include $root.'php/components.php';
    include $root.'php/templates/templates.php';

    // find db connection on './php/components.php'
    $db = generateDBObject();

    
    $dashboardRoot = "../";
?>   
    
<!-- JS ROUTES -->
<script> const root = "../../../"; </script>

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
                    <a href="<?php echo $dashboardRoot.'categories/';?>"><li class="link">Categories</li></a>
                </ul>
            </div>
            <div class="dashboard-container">

                <div class="dashboard">
                    <h1 class="dash-title">Products Information</h1>
            
                    <div class="products-container">
                        <script>
                            AllProductsBrief("products-container", root)
                        </script>
                        <div class="product-card brief plus-card">
                            <!-- <div class="product-image-holder">
                                <img src="../../../assets/images/plus.png" alt="Add products" class="add-product-image product-image">
                            </div> -->
                            <div class="product-details">
                                <span class="material-icons">add_circle</span>
                                <h3 class="product-name">Add product</h3>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
            
        </section>


    </main>
    
    
    
    <script>

        // Populate fields with shop object values
        $(document).ready(function() {
            
            // Add click event to the plus card
            $(".plus-card").on('click', () => {
                // Open the details page
                window.location.href = `./product/?productId=new`;
            });
        });

    </script>
<?php
    renderfooter($root);
    renderends($root);
?> 