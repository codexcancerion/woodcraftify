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
                    <a href="<?php echo $dashboardRoot.'products/';?>"><li class="link ">Products</li></a>
                    <a href="<?php echo $dashboardRoot.'categories/';?>"><li class="link selected">Categories</li></a>
                </ul>
            </div>
            <div class="dashboard-container">
                <div class="dashboard">
                <h1 class="dash-title-number"></h1>
                <h1 class="dash-title"><span class="categoryId"></span><span class="dash-title-span">Category Information</span></h1>
                    
                    <!-- Product Name -->
                    <div class="input-section">
                        <label for="category-name" class="input-label">Category Name</label>
                        <input id="category-name" name="category-name" type="text" class="input-field category-name width-half">
                    </div>

                    <!-- Product Description -->
                    <div class="input-section">
                        <label for="category-description" class="input-label">Category Description</label>
                        <textarea id="category-description" name="category-description" class="input-field category-description"></textarea>
                    </div>




                    <p class="update-confirmation"></p>
                    <!-- Submit Button -->
                    <div class="submit-section add-new-category">
                        <button class="submit-button add-new-category-button" type="submit">Add New Category</button>
                    </div>
                    <!-- Submit Button -->
                    <div class="submit-section update-category">
                        <button class="submit-button update-category-button" type="submit">Update Category Information</button>
                    </div>
                    <div class="delete-section">
                        <button class="delete-button" >Delete Category</button>
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
            if (isset($_GET['categoyName'])) {
                $categoyName = $_GET['categoyName'];
            };
        ?>

        
        $(".add-new-category-button").on('click', () => {                
            // new product functionality here
            const categoryName = $('#category-name').val();
            const categoryDescription = $('#category-description').val();

            // Send data to PHP script via AJAX
            $.ajax({
                    url: root+'php/create/createNewCategory.php', // The URL of your PHP script
                    type: 'POST',
                    data: {
                        categoryName: categoryName,
                        categoryDescription: categoryDescription,
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Category added successfully:', response);
                        window.location.href = "../";
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error adding category:', error);
                    }
                });
        });

        $(".update-category-button").on('click', () => {      
            console.log("clicked update");
            const formerName = getQueryParam('categoryName');
            const categoryName = $('#category-name').val();
            const categoryDescription = $('#category-description').val();

            // Send data to PHP script via AJAX
            $.ajax({
                    url: root+'php/update/updateCategory.php', // The URL of your PHP script
                    type: 'POST',
                    data: {
                        formerName: formerName,
                        categoryName: categoryName,
                        categoryDescription: categoryDescription,
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Category updated successfully:', response);
                        // window.location.href = "../";
                        $(".update-confirmation").text('Category updated successfully');
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error updating category:', error);
                    }
                });
        });

        $(".delete-button").on('click', () => {                
            // new product functionality here
            const categoryName = getQueryParam('categoryName');

            // Send data to PHP script via AJAX
            $.ajax({
                    url: root+'php/delete/deleteCategory.php', // The URL of your PHP script
                    type: 'POST',
                    data: {
                        categoryName: categoryName,
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Category deleted successfully:', response);
                        window.location.href = "../";
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error deleting Category:', error);
                    }
                });
        });
        
        
        var categoryDetails;
        document.addEventListener('DOMContentLoaded', () => {
            const categoryName = getQueryParam('categoryName');
            if (categoryName && categoryName != "new" ) {
                categories.map(cat => {
                    if (cat.categoryName === categoryName){
                        categoryDetails = cat;
                    }
                })  
            }

            // Populate fields with product details
            if (categoryDetails && categoryName != "new") {
                $('.dash-title-span').text(categoryDetails.categoryName);
                $('#category-name').val(categoryDetails.categoryName);
                $('#category-description').val(categoryDetails.categoryDescription);
                
                $('.add-new-category').hide();
            } 

            if (categoryName == "new") {                
                $('.update-category').hide();
                $('.delete-section').hide();
            }       
        });

        
        // $(".delete-button").on('click', () => { 
        
    </script>
<?php
    renderfooter($root);
    renderends($root);
?> 
