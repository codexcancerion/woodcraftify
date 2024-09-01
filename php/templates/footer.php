<footer id="footer">
<div class="footer-container">
    <div class="footer-section">
        <img class="logo" src="<?php echo $root."images/craftify/logo-bnw.png" ?>">
        <p>© 2024 Woodcraftify. All rights reserved. <br>
            <a href="https://codexcancerion.github.io/" class="codex">codexcancerion.github.io</a>
        </p>
    </div>
    <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="<?php echo $root."pages/aboutus/" ?>">About Us</a></li>
            <li><a href="<?php echo $root."pages/shop/" ?>">Shop</a></li>
            <li><a href="<?php echo $root."pages/dashboard/" ?>">Dashboard</a></li>
        </ul>
    </div>
    <div class="footer-section">
        <h3>Contact Us</h3>
        <p id="footer-location"><span class="material-icons">location_on</span><span id="footer-location-text"></span></p>
        <p id="footer-number"><span class="material-icons">call</span><span id="footer-number-text"></span></p>
        <p id="footer-email"><span class="material-icons">email</span><span id="footer-email-text"></span></p>
    </div>
</div>
</footer>

<script> 
    $("#footer-location-text").text(shop[0].location );
    $("#footer-number-text").text(shop[0].contactNumber );
    $("#footer-email-text").text(shop[0].email );

</script>