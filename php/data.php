<?php
  // find db connection on './php/components.php'
  $db = generateDBObject();
  
?>

<script>
  const shop = <?php 
    $shops = $db->getShop(); 
    echo $shops;            
  ?>;

  const values = <?php 
    $values = $db->getShopValues(); 
    echo $values;            
  ?>;

  const categories = <?php 
    $categories = $db->getCategories(); 
    echo $categories;            
  ?>;


  const featuredProducts = <?php 
    $featuredProducts = $db->getFeaturedProducts(); 
    echo $featuredProducts;            
  ?>;

  const products = <?php 
    $products = $db->getAllProducts(); 
    echo $products;            
  ?>;
</script>