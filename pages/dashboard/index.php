<?php
    $root = "../../";
    require_once $root.'php/WoodcraftifyDatabase.php';
    include $root.'php/data.php';
    include $root.'php/components.php';
    include $root.'php/templates/templates.php';

    // find db connection on './php/components.php'
    $db = generateDBObject();

    
    $dashboardRoot = "./";
?>   
    
<!-- JS ROUTES -->
<script> const root = "../../"; </script>

<?php
    renderHeaders($root);
    renderNavbar($root);
?>

    <main>
        <section class="dashboard-section">
            <div class="left-navigation">
                <ul class="links">
                    <a href="<?php echo $dashboardRoot;?>"><li class="link selected">Shop</li></a>
                    <a href="<?php echo $dashboardRoot.'products/';?>"><li class="link ">Products</li></a>
                    <a href="<?php echo $dashboardRoot.'categories/';?>"><li class="link ">Categories</li></a>
                </ul>
            </div>
            <div class="dashboard-container">
                <div class="dashboard">
                    <h1 class="dash-title">Shop Information</h1>
            
                    <!-- Shop Name Section -->
                    <div class="input-section">
                        <label for="shop-name" class="input-label">Shop Name</label>
                        <input id="shop-name" name="shop-name" type="text" class="input-field shop-name width-third">
                    </div>
            
                    <!-- Shop Description Section -->
                    <div class="input-section">
                        <label for="shop-description" class="input-label">Shop Description</label>
                        <textarea id="shop-description" name="shop-description" class="input-field shop-description width-half "></textarea>
                    </div>
            
                    <!-- Shop Logo Section -->
                    <div class="input-section">
                        <label for="shop-logo-mark" class="input-label">Shop Logo Mark</label>
                        <img id="shop-logo-mark" src="" alt="Product Image" class="shop-image-dashboard">
                        <br>
                        <input id="shop-logo-mark" name="shop-logo-mark" type="file" class="input-field shop-logo-mark width-half">
                    </div>

                    <!-- Shop Logo Section -->
                    <div class="input-section">
                        <label for="shop-logo-type" class="input-label">Shop Logo Type</label>
                        <img id="shop-logo-type" src="" alt="Product Image" class="shop-image-dashboard">
                        <br>
                        <input id="shop-logo-type" name="shop-logo-type" type="file" class="input-field shop-logo-type width-half">
                    </div>
            
                    <!-- Location Section -->
                    <div class="input-section">
                        <label for="shop-location" class="input-label">Location</label>
                        <input id="shop-location" name="shop-location" type="text" class="input-field shop-location width-half">
                    </div>
            
                    <!-- Contact Number Section -->
                    <div class="input-section">
                        <label for="shop-contact" class="input-label">Contact Number</label>
                        <input id="shop-contact" name="shop-contact" type="tel" class="input-field shop-contact width-half">
                    </div>
            
                    <!-- Email Section -->
                    <div class="input-section">
                        <label for="shop-email" class="input-label">Email Address</label>
                        <input id="shop-email" name="shop-email" type="email" class="input-field shop-email width-half">
                    </div>

                    
                    <!-- Our Story Section -->
                    <div class="input-section">
                        <label for="our-story" class="input-label">Our Story</label>
                        <textarea id="our-story" name="our-story" class="input-field our-story width-full "></textarea>
                    </div>



                    <!-- Our Mission Section -->
                    <div class="input-section">
                        <label for="our-mission" class="input-label">Our Mission</label>
                        <textarea id="our-mission" name="our-mission" class="input-field our-mission width-full "></textarea>
                    </div>

                    <!-- Hero Line Section -->
                    <div class="input-section">
                        <label for="hero-line" class="input-label">Hero Line</label>
                        <input id="hero-line" name="hero-line" type="text" class="input-field hero-line width-half">
                    </div>
                    <!-- Hero Line Highlight Section -->
                    <div class="input-section">
                        <label for="hero-line-highlight" class="input-label">Hero Line Highlight</label>
                        <input id="hero-line-highlight" name="hero-line-highlight" type="text" class="input-field hero-line-highlight width-third">
                    </div>
                    <!-- Our Mission Section -->
                    <div class="input-section">
                        <label for="hero-description" class="input-label">Hero Description</label>
                        <textarea id="hero-description" name="hero-description" class="input-field hero-description width-full "></textarea>
                    </div>


                    <!-- Shop Name Section -->
                    <div class="input-section">
                        <label for="our-values-1" class="input-label">Values</label>
                        <input id="our-values-1" name="our-values-1" type="text" class="input-field our-values-1 width-third" placeholder="Value 1">
                        <br>
                        <textarea id="our-values-1-description" name="our-values-1-description" class="input-field our-values-1-description width-half " placeholder="Value 1 Description"></textarea>
                        <br><br>
                        <input id="our-values-2" name="our-values-2" type="text" class="input-field our-values-2 width-third" placeholder="Value 2">
                        <br>
                        <textarea id="our-values-2-description" name="our-values-2-description" class="input-field our-values-2-description width-half " placeholder="Value 2 Description"></textarea>
                        <br><br>
                        <input id="our-values-3" name="our-values-3" type="text" class="input-field our-values-3 width-third" placeholder="Value 3">
                        <br>
                        <textarea id="our-values-3-description" name="our-values-3-description" class="input-field our-values-3-description width-half " placeholder="Value 3 Description"></textarea>
                    </div>

                        
                    <p id="update-confirmation"></p>
                    <!-- Submit Button -->
                    <div class="submit-section">
                        <button class="submit-button update-shop-button">Update Shop Information</button>
                    </div>
                </div>
            </div>
            
        </section>


    </main>
    
    
    <script>
        // Populate fields with shop object values
        $(document).ready(function() {
            $('#shop-name').val(shop[0].shopName);
            $('#shop-description').val(shop[0].shopDescription);            
            $('#shop-logo-type').attr('src', root + 'images/craftify/' + shop[0].logoType);
            $('#shop-logo-mark').attr('src', root + 'images/craftify/' + shop[0].logoMark);
            $('#shop-location').val(shop[0].location);
            $('#shop-contact').val(shop[0].contactNumber);
            $('#shop-email').val(shop[0].email);
            $('#our-story').val(shop[0].story);
            $('#our-mission').val(shop[0].mission);
            $('#our-values-1').val(values[0].valueName);
            $('#our-values-1-description').val(values[0].description);
            $('#our-values-2').val(values[1].valueName);
            $('#our-values-2-description').val(values[1].description);
            $('#our-values-3').val(values[2].valueName);
            $('#our-values-3-description').val(values[2].description);
            $('#hero-line').val(shop[0].heroLine);
            $('#hero-line-highlight').val(shop[0].heroLineHighlight);
            $('#hero-description').val(shop[0].heroDescription);
        });

        
        $(".update-shop-button").on('click', () => {                
            // new product functionality here
            const shopName = $('#shop-name').val();
            const shopDesc = $('#shop-description').val();
            const shopLocation = $('#shop-location').val();
            const shopContact = $('#shop-contact').val();
            const shopEmail = $('#shop-email').val();
            const story = $('#our-story').val();
            const mission = $('#our-mission').val();
            const value1 = $('#our-values-1').val();   
            const value1desc = $('#our-values-1-description').val(); 
            const value2 = $('#our-values-2').val();   
            const value2desc = $('#our-values-2-description').val(); 
            const value3 = $('#our-values-3').val();   
            const value3desc = $('#our-values-3-description').val(); 
            const heroLine = $('#hero-line').val(); 
            const heroLineHighlight = $('#hero-line-highlight').val(); 
            const heroDescription = $('#hero-description').val(); 


            // Send data to PHP script via AJAX
            $.ajax({
                    url: root+'php/update/updateShop.php', // The URL of your PHP script
                    type: 'POST',
                    data: {
                        shopName: shopName, 
                        shopDesc: shopDesc, 
                        shopLocation: shopLocation, 
                        shopContact: shopContact, 
                        shopEmail: shopEmail, 
                        story: story, 
                        mission: mission, 
                        value1: value1, 
                        value1desc: value1desc, 
                        value2: value2, 
                        value2desc: value2desc, 
                        value3: value3, 
                        value3desc: value3desc,  
                        heroLine: heroLine,
                        heroLineHighlight: heroLineHighlight,
                        heroDescription: heroDescription
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log('Shop Updated successfully:', response);
                        $("#update-confirmation").text("Successfully Updated Shop Information");
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error updating shop:', error);
                        $("#update-confirmation").text("Error Updating Shop Information");
                    }
                });
        });
    </script>


<?php
    renderFooter($root);
    renderEnds($root);
?>  