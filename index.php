<?php
    $root = "./";
    require_once $root.'php/WoodcraftifyDatabase.php';
    include $root.'php/data.php';
    include $root.'php/components.php';
    include $root.'php/templates/templates.php';

    // find db connection on './php/components.php'
    $db = generateDBObject();
?>

<!-- JS ROUTES -->
<script> const root = "./"; </script>

<?php
    renderHeaders($root);
    renderNavbar($root);
?> 
    <main>
        <section class="hero">
            <div class="title-section">
                <h1 class="hero-title"><span class="heroLine"></span> <span class="colored heroLineHighlight"></span></h1>
                <p class="hero-subtitle"></p>
                <a href="./pages/shop/index.html"><div class="hero-button">Explore Products <i class="material-icons">arrow_right</i> </div></a>
            </div>
            <div class="img-section">
                <div class="img-holder">
                    <!-- <img src="./assets/images/hero.png" alt="" class="hero-img"> -->
                    <div class="hero-img tenor-gif-embed" data-postid="16358604" data-share-method="host" data-aspect-ratio="1.79775" data-width="100%"><a href="https://tenor.com/view/pulve-tischler-orangutan-saw-grats-gif-16358604">Pulve Tischler GIF</a>from <a href="https://tenor.com/search/pulve-gifs">Pulve GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
                    <!-- <div class="hero-img tenor-gif-embed" data-postid="18009371" data-share-method="host" data-aspect-ratio="1.50235" data-width="100%"><a href="https://tenor.com/view/woodwork-in-london-woodworker-near-me-gif-18009371">Woodwork In London Woodworker Near Me GIF</a>from <a href="https://tenor.com/search/woodwork+in+london-gifs">Woodwork In London GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script> -->
                </div>
            </div>
        </section>


        <section class="section">
            <h1 class="page-title left">Featured Products<hr></h1>
            <div class="featured-products">
                <script>
                    // console.log(products);  
                    FeaturedProducts("featured-products", root);
                </script>
            </div>            
        </section>

        
        <div class="tag-holder">
            <h1 class="tag">"Woodcraftify choose only the best"</h1>
        </div>

        
        <section class="section chooseus">
            <h2 class="page-title">Why choose our products?</h2>
            <div class="values-holder">
                <div class="value">
                    <img class="value-img" src="./images/craftify/quality.jpg" alt="">
                    <h2 class="value-title value1"></h2>
                    <p class="tagline value1desc"></p>
                </div>
                <div class="value">
                    <img class="value-img" src="./images/craftify/craftmanship.jpg" alt="">
                    <h2 class="value-title value2"></h2>
                    <p class="tagline value2desc"></p>
                </div>
                <div class="value">
                    <img class="value-img" src="./images/craftify/artistry.jpg" alt="">
                    <h2 class="value-title value3"></h2>
                    <p class="tagline value3desc"></p>
                </div>
            </div>
        </section>

    </main>
    
<script>
    // console.log(shop[0]);
    $(".heroLine").text(shop[0].heroLine);
    $(".heroLineHighlight").text(shop[0].heroLineHighlight);
    $(".hero-subtitle").text(shop[0].heroDescription);
    $(".value1").text(values[0].valueName);
    $(".value2").text(values[1].valueName);
    $(".value3").text(values[2].valueName);
    $(".value1desc").text(values[0].description);
    $(".value2desc").text(values[1].description);
    $(".value3desc").text(values[2].description);
</script>
<?php
    renderFooter($root);
    renderEnds($root);
?>  