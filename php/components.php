
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

// NAVBAR HAS ALREADY BEEN TRANSFERED AT /php/templates
// const Navbar = (targetTagId, linkPrefix) => {    
//     var targetField = document.getElementById(targetTagId);
    
//     var homeLink = document.createElement('a');
//     homeLink.href = linkPrefix + home_route;
//     // homeLink.innerHTML = '<div class="logo-holder"><img src="'+linkPrefix+logoLink+'" class="logo"></img> <h3 class="">'+webtitle+'</h3></div>'; 
//     homeLink.innerHTML = '<div class="logo-holder"><img src="'+linkPrefix+logoLink+'" class="logo"></img></div>';

//     var shop = document.createElement('a');
//     shop.href = linkPrefix + shop_route;
//     shop.innerHTML = '<div class="link contained"><i class="material-icons">store</i> Shop</div>';

    
//     var aboutusLink = document.createElement('a');
//     aboutusLink.href = linkPrefix + aboutus_route;
//     aboutusLink.innerHTML = '<div class="link"><i class="material-icons">contact_support</i> About Us</div>';

//     var newNav = document.createElement("nav");

//     const navLogo = document.createElement('div');
//     navLogo.classList.add("nav-logo");
//     navLogo.classList.add("portion");
//     navLogo.appendChild(homeLink);

//     const rightLinks = document.createElement('div');
//     rightLinks.classList.add("nav-links");
//     rightLinks.classList.add("right");
//     rightLinks.classList.add("portion");

//     rightLinks.appendChild(shop);
//     rightLinks.appendChild(aboutusLink);

//     newNav.appendChild(navLogo);
//     newNav.appendChild(rightLinks);

//     targetField.appendChild(newNav);
// };








const Footer = (targetTagId, linkPrefix) => {
    var targetField = document.getElementById(targetTagId);

    // Create footer container
    var footerContainer = document.createElement('div');
    footerContainer.classList.add('footer-container');

    // Create the first section (Logo and Company Info)
    var footerSection1 = document.createElement('div');
    footerSection1.classList.add('footer-section');

    var img = document.createElement('img');
    img.classList.add('logo');
    img.src = linkPrefix+bnwLogoLink; // Replace with actual path to logo
    footerSection1.appendChild(img);

    var companyInfo = document.createElement('p');
    companyInfo.innerHTML = '&copy; 2024 Woodcraftify. All rights reserved.<br><a href="https://codexcancerion.github.io/" class="codex">codexcancerion.github.io</a>';
    footerSection1.appendChild(companyInfo);

    // Create the second section (Quick Links)
    var footerSection2 = document.createElement('div');
    footerSection2.classList.add('footer-section');

    var quickLinksTitle = document.createElement('h3');
    quickLinksTitle.innerText = 'Quick Links';
    footerSection2.appendChild(quickLinksTitle);

    var quickLinksList = document.createElement('ul');
    quickLinksList.innerHTML = `
        <li><a href="${linkPrefix+aboutus_route}">About Us</a></li>
        <li><a href="${linkPrefix+shop_route}">Shop</a></li>
        <li><a href="${linkPrefix+dashboard_route}">Dashboard</a></li>
    `;
    footerSection2.appendChild(quickLinksList);

    // Create the third section (Contact Info)
    var footerSection3 = document.createElement('div');
    footerSection3.classList.add('footer-section');

    var contactTitle = document.createElement('h3');
    contactTitle.innerText = 'Contact Us';
    footerSection3.appendChild(contactTitle);

    var contactInfo = document.createElement('p');
    contactInfo.innerHTML = `
        <span class="material-icons">location_on</span> Baguio City, Philippines <br>
        <span class="material-icons">call</span> +63 912 345 6789 <br>
        <span class="material-icons">email</span> support@woodcraftify.com
    `;
    footerSection3.appendChild(contactInfo);

    // Append sections to footer container
    footerContainer.appendChild(footerSection1);
    footerContainer.appendChild(footerSection2);
    footerContainer.appendChild(footerSection3);

    // Append footer container to target field
    targetField.appendChild(footerContainer);
};








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
    const $description = $('<p>', { class: 'product-description', text: `${product.productDescription}` });
    $details.append($description);

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