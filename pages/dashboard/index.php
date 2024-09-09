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
                        <img id="shop-logo-mark-img" src="" alt="Product Image" class="shop-image-dashboard">
                        <br>
                        <input id="shop-logo-mark" name="shop-logo-mark" type="file" class="input-field shop-logo-mark width-half">
                        <div class="image-actions">
                            <div class="button-holder save-image">
                                <button class="image-button save-logo-mark-button">Save Image</button>
                            </div>
                        </div>
                    </div>

                    <!-- Shop Logo Section -->
                    <div class="input-section">
                        <label for="shop-logo-type" class="input-label">Shop Logo Type</label>
                        <img id="shop-logo-type-img" src="" alt="Product Image" class="shop-image-dashboard">
                        <br>
                        <input id="shop-logo-type" name="shop-logo-type" type="file" class="input-field shop-logo-type width-half">
                        <div class="image-actions">
                            <div class="button-holder save-image">
                                <button class="image-button save-logo-type-button">Save Image</button>
                            </div>
                        </div>
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

                        
                    <div id="update-confirmation-alert"></div>
                    <!-- Submit Button -->
                    <div class="submit-section">
                        <button class="submit-button update-shop-button">Update Shop Information</button>
                    </div>
                </div>
            </div>
            
        </section>


        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="toastSuccess" class="toast align-items-center text-bg-primary" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                    Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="toastError" class="toast align-items-center text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                    Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>

    </main>
    
    
    <script>
        const toastSuccessTag = document.getElementById('toastSuccess');
        const toastErrorTag = document.getElementById('toastError');

        function toastSuccess(body) {
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastSuccessTag);
            toastBootstrap.show();
            $('.toast-body').text(body);
        }
        function toastError(body) {
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastErrorTag);
            toastBootstrap.show();
            $('.toast-body').text(body);
        }

        const alertPlaceholder = document.getElementById('update-confirmation-alert')
        const appendAlert = (message, type) => {
            const wrapper = document.createElement('div')
                wrapper.innerHTML = [
                    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                    `   <div>${message}</div>`,
                    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                    '</div>'
                ].join('')

                alertPlaceholder.append(wrapper)
            }
            const alertTrigger = document.getElementById('liveAlertBtn')
            if (alertTrigger) {
                alertTrigger.addEventListener('click', () => {
                    appendAlert('Nice, you triggered this alert message!', 'success')
            })
        }   

        // Populate fields with shop object values
        $(document).ready(function() {
            $('#shop-name').val(shop[0].shopName);
            $('#shop-description').val(shop[0].shopDescription);            
            $('#shop-logo-type-img').attr('src', root + 'images/craftify/' + shop[0].logoType);
            $('#shop-logo-mark-img').attr('src', root + 'images/craftify/' + shop[0].logoMark);
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
            $(".save-logo-mark-button").hide();
            $(".save-logo-type-button").hide();
        });

        
        $("#shop-logo-mark").on('change', () => {           
            const fileInput = $("#shop-logo-mark")[0];
            const file = fileInput.files[0];

            // Check if a file was selected
            if (file) {
                // Validate file type (optional)
                const validImageTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (!validImageTypes.includes(file.type)) {
                    alert("Please select a valid image file (JPEG, PNG, GIF).");
                    fileInput.value = ""; // Clear the input
                    return;
                }

                // Create a FileReader to read the file and preview it
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Show the image preview
                    $('#shop-logo-mark-img').attr('src', e.target.result).show();
                    $(".save-logo-mark-button").show();
                };
                reader.readAsDataURL(file); // Convert the file to a base64 string

            } else {
                alert("Invalid file.");
            }
        });

        $("#shop-logo-type").on('change', () => {          
            const fileInput = $("#shop-logo-type")[0];
            const file = fileInput.files[0];

            // Check if a file was selected
            if (file) {
                // Validate file type (optional)
                const validImageTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (!validImageTypes.includes(file.type)) {
                    alert("Please select a valid image file (JPEG, PNG, GIF).");
                    fileInput.value = ""; // Clear the input
                    return;
                }

                // Create a FileReader to read the file and preview it
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Show the image preview
                    $('#shop-logo-type-img').attr('src', e.target.result).show();
                    $(".save-logo-type-button").show();
                };
                reader.readAsDataURL(file); // Convert the file to a base64 string

            } else {
                alert("Invalid file.");
            }

        });

        $(".save-logo-mark-button").on('click', () => {           
            const fileInput = $("#shop-logo-mark")[0];
            const file = fileInput.files[0];
            let fileName = "woodcraftify_logomark";

            // Ensure a file is selected
            if (!file) {
                alert("Please select an image file.");
                return;
            }

            // Create a FormData object
            const formData = new FormData();
            formData.append('image', file);
            formData.append('name', fileName);

            // Send data to PHP script via AJAX
            $.ajax({
                url: root+'php/uploads/uploadShopLogos.php', // The URL of your PHP script
                type: 'POST',
                data: formData,
                processData: false,  // Prevent jQuery from automatically transforming the data into a query string
                contentType: false,  // Prevent jQuery from setting Content-Type header, so the browser sets it correctly for file uploads
                success: function(response) {
                    // Handle the response from the server
                    if(response.success) {
                        // alert("Image uploaded successfully!");
                    }else {
                        console.log(response);

                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('AJAX Error:', textStatus, errorThrown);
                    alert("An error occurred while uploading the image.");
                }
            });
            
            $('.save-logo-mark-button').hide(); 
            toastSuccess("Image saved successfully!")
        });

        $(".save-logo-type-button").on('click', () => {   
            const fileInput = $(".shop-logo-type")[0];
            const file = fileInput.files[0];
            let fileName = "woodcraftify_logotype";
            // Ensure a file is selected
            if (!file) {
                alert("Please select an image file.");
                return;
            }
            

            // Create a FormData object
            const formData = new FormData();
            formData.append('image', file);
            formData.append('name', fileName);

            // Send data to PHP script via AJAX
            $.ajax({
                url: root+'php/uploads/uploadShopLogos.php', // The URL of your PHP script
                type: 'POST',
                data: formData,
                processData: false,  // Prevent jQuery from automatically transforming the data into a query string
                contentType: false,  // Prevent jQuery from setting Content-Type header, so the browser sets it correctly for file uploads
                success: function(response) {
                    
                    // Handle the response from the server
                    if(response.success) {
                        alert("Image uploaded successfully!");
                    } else {
                        console.log(response);

                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('AJAX Error:', textStatus, errorThrown);
                    alert("An error occurred while uploading the image.");
                }
            });
            $('.save-logo-type-button').hide(); 
            toastSuccess("Image saved successfully!")
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
                        // $("#update-confirmation").text("Successfully Updated Shop Information");
                        appendAlert("Shop Updated successfully!", "success")
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error updating shop:', error);
                        // $("#update-confirmation").text("Error Updating Shop Information");
                        appendAlert("Shop Updating Failed! Try again.", "danger")
                    }
                });
        });
    </script>


<?php
    renderFooter($root);
    renderEnds($root);
?>  