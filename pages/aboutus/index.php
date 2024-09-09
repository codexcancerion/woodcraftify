<?php
    $root = "../../";
    require_once $root.'php/WoodcraftifyDatabase.php';
    include $root.'php/data.php';
    include $root.'php/components.php';
    include $root.'php/templates/templates.php';

    // find db connection on './php/components.php'
    $db = generateDBObject();
?>   
    
<!-- JS ROUTES -->
<script> const root = "../../"; </script>

<?php
    renderHeaders($root);
    renderNavbar($root);
?>

    <main>
        <div class="about-container">
            <section class="shop-info-section">
                <div class="shop-logo-container">
                    <img src="" alt="Shop Logo" class="shop-logo">
                </div>
                <div class="shop-details-container">
                    <!-- NAME HERE -->
                    <h2 class="shop-name"></h2>
                    <!-- <p class="shop-description"></p> -->
                    <div class="shop-location">
                        <span class="material-icons">location_on</span>
                        <!-- LOCATION HERE -->
                        <span class="location-text"></span>
                    </div>
                    <div class="shop-contact">
                        <span class="material-icons">call</span>
                        <!-- CONTACT HERE -->
                        <span class="contact-text"></span>
                    </div>
                    <div class="shop-email">
                        <span class="material-icons">email</span>                        
                        <!-- EMAIL HERE -->
                        <span class="email-text"></span>
                    </div>
                </div>
            </section>

            
            <div class="division">
                <h1 class="division-title">About Us</h1>
                <p class="division-tagline about-us">Crafting Excellence, Preserving Traditions, Shaping the Future</p>
            </div>
            

            <div class="about-content">
                <section class="about-section">
                    <h2 class="section-title">Our Story</h2>
                    <p class="section-text story">
                        WoodCraftify is a homegrown brand dedicated to preserving the rich heritage of Cordilleran craftsmanship. 
                        With every piece we create, we tell a story of tradition, sustainability, and unparalleled quality. Our journey 
                        began with a vision to connect skilled artisans with clients who appreciate the art of woodworking.
                    </p>
                </section>

                <section class="about-section">
                    <h2 class="section-title">Our Mission</h2>
                    <p class="section-text mission">
                        Our mission is to craft furniture and decor that embody authenticity and sustainability, while honoring the 
                        cultural heritage of the Cordilleras. We strive to deliver products that are not only beautiful but also 
                        functional and durable.
                    </p>
                </section>

                <section class="about-section">
                    <h2 class="section-title">Our Values</h2>
                    <ul class="values-list">
                        <li><strong><span id="value1"></span>:</strong> <span id="value1-desc"></span></li>
                        <li><strong><span id="value2"></span>:</strong> <span id="value2-desc"></span></li>
                        <li><strong><span id="value3"></span>:</strong> <span id="value3-desc"></span></li>
                    </ul>
                </section>

            </div>
        </div>


    </main>
    
    

    
    
    <script>

        // Populate fields with shop object values
        $(document).ready(function() {
            // Shop Name
            // $('.shop-logo').attr({src: root+"assets/images/woodcraftify/shop.jpg"});
            $('.shop-logo').attr({src: root+"images/craftify/"+shop[0].logoMark});

            // Shop Name
            $('.shop-name').text(shop[0].shopName);

            // Shop Description
            // $('.shop-description').text(shop.shopDescription);
            $('.division-tagline').text(shop[0].shopDescription);


            // Location
            $('.location-text').text(shop[0].location);

            // Contact Number
            $('.contact-text').text(shop[0].contactNumber);

            // Email
            $('.email-text').text(shop[0].email);
            
            $('.story').text(shop[0].story);
            $('.mission').text(shop[0].mission);

            $('#value1').text(values[0].valueName);
            $('#value2').text(values[1].valueName);
            $('#value3').text(values[2].valueName);
            $('#value1-desc').text(values[0].description);
            $('#value2-desc').text(values[1].description);
            $('#value3-desc').text(values[2].description);

        });
    </script>
<?php
    renderfooter($root);
    renderends($root);
?> 