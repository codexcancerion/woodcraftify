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
        <section class="division-container">
            <div class="division">
                <h1 class="division-title">Shop</h1>
                <p class="division-tagline">Choose wise and craftify, only at Woodcraftify.</p>
            </div>
        </section>

       

        <section class="section colored categories" id="categories">
            <h2 class="page-title">Pick a category</h2>
            <div class="categories-holder">
                <button class="category" onclick="showCategory('All', root)">
                    <p class="label">All</p>
                </div>

            </div>
        </section>

        <section class="section products">
            <h1 class="page-title left category-title">Products<hr>
            </h1>
            <p class="category-subtitle">Choose wise and craftify.</p>
            <div class="all-products">
                <script>
                    AllProducts("all-products", root);
                </script>
            </div>            
        </section>

    </main>
    
    
    
    <script>
        $(document).ready(function() {
            
            categories.forEach(function(category) {
                const categoryHtml = `
                    <button class="category" onclick="showCategory('${category.categoryName}', '${root}')">
                        <p class="label">${category.categoryName}</p>
                    </div>
                `;
                $(".categories-holder").append(categoryHtml);

                
            });
        });

        

    </script>

<?php
    renderFooter($root);
    renderEnds($root);
?>  