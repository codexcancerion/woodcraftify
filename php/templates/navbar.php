


<header id="header">
<nav>
    <div class="nav-logo portion">
        <a href="<?php echo $root ?>">
            <div class="logo-holder">
                <img class="logo">
            </div>
        </a>
    </div>
    
    <div class="nav-links right portion">
        <a href="<?php echo $root."pages/shop/"?>">
            <div class="link contained">
                <i class="material-icons">store</i> Shop
            </div>
        </a>
        <a href="<?php echo $root."pages/aboutus/"?>">
            <div class="link">
                <i class="material-icons">contact_support</i> About Us
            </div>
        </a>
    </div>
</nav>
</header>

<script>
    $('.logo').attr("src", root+"images/craftify/"+shop[0].logoType)
</script>