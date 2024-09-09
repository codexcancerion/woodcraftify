
<script>

const logoLink = "images/craftify/logo2.png";
const bnwLogoLink = "images/craftify/logo-bnw.png";
const webtitle = "WOODCRAFTIFY";
const imgSrc = "images/products/";

// ROUTES
const home_route = "/";
const shop_route = "pages/shop/";
const shop_product_route = "pages/shop/product/";
const dashboard_route = "pages/dashboard/";
const dashboard_products_route = "pages/dashboard/products/";
const dashboard_products_product_route = "pages/dashboard/products/product/";
const dashboard_categories_route = "pages/dashboard/categories/";
const dashboard_categories_category_route = "pages/dashboard/categories/category/";
const aboutus_route = "pages/aboutus/";

// NAVBAR and FOOTER HAS ALREADY BEEN TRANSFERED AT /php/templates






const createCard = (targetTagId, product, linkPrefix) => {
    // console.log("CreateCard Received: " + product);
    // Create card container
    const $card = $('<div>', { class: 'product-card' });

    // Create image holder
    const $imageHolder = $('<div>', { class: 'product-image-holder' });
    const $image = $('<img>', {
        src: linkPrefix+imgSrc+product.productName+".jpg",  
        // src: linkPrefix+imgSrc+product.productId+".jpg",        
        // src: linkPrefix+"assets/images/hero.jpg",
        alt: product.productName,
        class: 'product-image'
    });
    $imageHolder.append($image);

    // Create product details container
    const $details = $('<div>', { class: 'product-details' });

    // Create product name
    const $name = $('<h3>', { class: 'product-name', text: product.productName });
    $details.append($name);
    
    // Description
    // const $description = $('<p>', { class: 'product-description', text: `${product.productDescription}` });
    // $details.append($description);

    // Create product price
    const $price = $('<p>', { class: 'product-price', text: `P ${product.price}` });
    $details.append($price);

    // Create product category
    const $category = $('<p>', { class: 'product-category', text: `Category: ${product.category}` });
    $details.append($category);


    // Create product dimensions
    const $dimensions = $('<p>', {
        class: 'product-dimensions',
        text: `Dimensions: ${product.length} x ${product.width} x ${product.height} cm`
    });
    $details.append($dimensions);

    // Create product materials
    const $materials = $('<p>', {
        class: 'product-materials',
        text: `Materials: ${product.materials}`
    });
    $details.append($materials);


    // Create CTA button
    const $ctaButton = $('<button>', { class: 'cta-button', text: 'View Details' });

    // Append details and CTA button to card
    $card.append($imageHolder, $details, $ctaButton);

    // Append the card to the page (assuming you have a container with class 'product-container')
    $('.'+targetTagId).append($card);

     // Add click event to the card
     $card.on('click', () => {
        // Open the details page
        window.location.href = `${linkPrefix+shop_product_route}?productId=${product.productId}`;
    });
}







const createCardBrief = (targetTagId, product, linkPrefix) => {
    // Create card container
    const $card = $('<div>', { class: 'product-card brief' });

    // Create image holder
    const $imageHolder = $('<div>', { class: 'product-image-holder' });
    const $image = $('<img>', {
        src: linkPrefix+imgSrc+product.productImage+".jpg", 
        // src: linkPrefix+imgSrc+product.productId+".jpg",        
        // src: linkPrefix+"assets/images/hero.jpg",
        alt: product.productName,
        class: 'product-image'
    });
    $imageHolder.append($image);

    // Create product details container
    const $details = $('<div>', { class: 'product-details' });

    // Create product name
    const $name = $('<h3>', { class: 'product-name', text: product.productName });
    $details.append($name);

    // Append details and CTA button to card
    $card.append($imageHolder, $details);

    // Append the card to the page (assuming you have a container with class 'product-container')
    $('.'+targetTagId).append($card);

     // Add click event to the card
     $card.on('click', () => {
        // Open the details page
        window.location.href = `${linkPrefix+dashboard_products_product_route}?productId=${product.productId}`;
    });
}


const createCategoryBrief = (targetTagId, category, linkPrefix) => {
    // Create card container
    const $card = $('<div>', { class: 'category-card brief' });

    // Create product details container
    const $details = $('<div>', { class: 'category-details' });

    // Create product name
    const $name = $('<h3>', { class: 'category-name', text: category.categoryName });
    $details.append($name);
    // Create product name
    const $description = $('<p>', { class: 'category-description', text: category.categoryDescription });
    $details.append($description);

    // Append details and CTA button to card
    $card.append($details);

    // Append the card to the page (assuming you have a container with class 'product-container')
    $('.'+targetTagId).append($card);

     // Add click event to the card
     $card.on('click', () => {
        // Open the details page
        window.location.href = `${linkPrefix+dashboard_categories_category_route}?categoryName=${category.categoryName}`;
    });
}






 // Fetch product details based on productId
 const fetchProductDetails = (productId) => { 
    // console.log("fetchProductDetails Received: " + productId);
    // console.log(products);
    var productDetails;
    products.map(product => {
        // console.log(product);
        // console.log(product.productId);
        // console.log(productId);
        if (product.productId === productId){
            // console.log(product.productId);
            productDetails = product;
        }
    })    
    console.log(productDetails);
    return productDetails;
};

const FeaturedProducts = (targetTagId, linkPrefix) => {
    featuredProducts.map( product => {
        // console.log(product);
        const productDetails = fetchProductDetails(product.productId);
        // console.log(productDetails);
        createCard(targetTagId, productDetails, linkPrefix)
    });
}

const AllProducts = (targetTagId, linkPrefix) => {
    products.map( product => createCard(targetTagId, product, linkPrefix));
}

const AllProductsBrief = (targetTagId, linkPrefix) => {
    products.map( product => createCardBrief(targetTagId, product, linkPrefix));
}
const AllCategoriesBrief = (targetTagId, linkPrefix) => {
    categories.map( category => createCategoryBrief(targetTagId, category, linkPrefix));
}


function getShopNameById(shopId) {
    const shop = shops.find(s => s.shopId === shopId);
    return shop ? shop.shopName : "Shop not found";
}


const showCategory = (category, linkPrefix) => {
    $(".all-products").empty();  // Clear existing product cards

  
    if (category === 'All') {
      AllProducts("all-products", linkPrefix);
      $(".category-title").text("Products");
      $(".category-subtitle").text("Choose wise and craftify.");
    } else {
      products.forEach(product => {
        if (product.category === category) {
            $(".category-title").text(category);
          createCard("all-products", product, linkPrefix);
        }
      });
    }
    
    categories.forEach(cat => {
        if (cat.categoryName === category) {
            $(".category-subtitle").text(cat.categoryDescription);
        }
    })
  };

const showRelatedProducts = (targetTagId, category, linkPrefix) => {
    $("."+targetTagId).empty();  // Clear existing product cards

  
      products.forEach(product => {
        if (product.category === category) {
            $(".category-title").text(category);
          createCard(targetTagId, product, linkPrefix);
        }
      });
    
 };


 </script>