const logoLink = "assets/images/craftify/logo2.png";
const bnwLogoLink = "assets/images/craftify/logo-bnw.png";
const webtitle = "WOODCRAFTIFY";
const imgSrc = "assets/images/products/";

const Navbar = (targetTagId, linkPrefix) => {
    
    var targetField = document.getElementById(targetTagId);
    
    var homeLink = document.createElement('a');
    homeLink.href = linkPrefix + 'index.html';
    // homeLink.innerHTML = '<div class="logo-holder"><img src="'+linkPrefix+logoLink+'" class="logo"></img> <h3 class="">'+webtitle+'</h3></div>';
    // homeLink.innerHTML = '<div class="logo-holder"><h3 class="">'+webtitle+'</h3></div>';    
    homeLink.innerHTML = '<div class="logo-holder"><img src="'+linkPrefix+logoLink+'" class="logo"></img></div>';

    var enterprise = document.createElement('a');
    enterprise.href = linkPrefix + 'views/shop/index.html';
    enterprise.innerHTML = '<div class="link contained"><i class="material-icons">store</i> Shop</div>';

    // var productsLink = document.createElement('a');
    // productsLink.href = linkPrefix + 'views/products.html';
    // productsLink.innerHTML = '<div class="link"><i class="material-icons">category</i> Marketplace</div>';

    
    var aboutusLink = document.createElement('a');
    aboutusLink.href = linkPrefix + 'views/aboutus/index.html';
    aboutusLink.innerHTML = '<div class="link"><i class="material-icons">contact_support</i> About Us</div>';

    // var locationLink = document.createElement('a');
    // locationLink.href = linkPrefix + 'pages/location.html';
    // locationLink.innerHTML = '<div class="link">Our Location</div>';

    // var contactLink = document.createElement('a');
    // contactLink.href = linkPrefix + 'pages/contact.html';
    // contactLink.innerHTML = '<div class="link">Contact Us</div>';

    // var cartLink = document.createElement('a');
    // cartLink.href = linkPrefix + 'pages/cart.html';
    // // cartLink.innerHTML = '<div class="link">Cart</div>';
    // cartLink.innerHTML = '<div class="link"><i class="material-icons">shopping_cart</i></div>';

    // var dashboardLink = document.createElement('a');
    // dashboardLink.href = linkPrefix + 'pages/dashboard.html';
    // // dashboardLink.innerHTML = '<div class="link">Dashboard</div>';
    // dashboardLink.innerHTML = '<div class="link"><i class="material-icons">account_circle</i></div>';

    // var loginLink = document.createElement('a');
    // loginLink.href = linkPrefix + 'pages/login.html';
    // loginLink.innerHTML = '<div class="link">Login</div>';

    // var registerLink = document.createElement('a');
    // registerLink.href = linkPrefix + 'pages/register.html';
    // registerLink.innerHTML = '<div class="link">Register</div>';

    var newNav = document.createElement("nav");

    const navLogo = document.createElement('div');
    navLogo.classList.add("nav-logo");
    navLogo.classList.add("portion");
    navLogo.appendChild(homeLink);

    const navLinks = document.createElement('div');
    navLinks.classList.add("nav-links");
    navLinks.classList.add("center");
    navLinks.classList.add("portion");

    const rightLinks = document.createElement('div');
    rightLinks.classList.add("nav-links");
    rightLinks.classList.add("right");
    rightLinks.classList.add("portion");

    // navLinks.appendChild(enterprise);
    // navLinks.appendChild(productsLink);
    // navLinks.appendChild(locationLink);
    // navLinks.appendChild(contactLink);

    // rightLinks.appendChild(productsLink);
    rightLinks.appendChild(enterprise);
    rightLinks.appendChild(aboutusLink);
    // rightLinks.appendChild(loginLink);
    // rightLinks.appendChild(registerLink);
    // rightLinks.appendChild(cartLink);
    // rightLinks.appendChild(dashboardLink);

    newNav.appendChild(navLogo);
    newNav.appendChild(navLinks);
    newNav.appendChild(rightLinks);

    targetField.appendChild(newNav);
};







// const Footer = (targetTagId, linkPrefix) => {
//     var targetField = document.getElementById(targetTagId);
    
//     var img = document.createElement('img');
//     img.classList.add("logo");
//     img.src = linkPrefix+logoLink;
    
//     var footerSection1 = document.createElement('div');
//     footerSection1.classList.add('footer-section');
        
//     footerSection1.appendChild(img);
    
//     var hr = document.createElement('hr');
    
//     var footerSection2 = document.createElement('div');
//     footerSection2.classList.add('footer-section');
    
//     var p = document.createElement('p');
//     p.innerHTML = '&copy; 2024 Woodcraftify. All rights reserved.';
    
//     footerSection2.appendChild(p);
    
//     // targetField.appendChild(img);
//     targetField.appendChild(footerSection1);
//     targetField.appendChild(hr);
//     targetField.appendChild(footerSection2);
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
        <li><a href="${linkPrefix}about-us.html">About Us</a></li>
        <li><a href="${linkPrefix}contact-us.html">Contact Us</a></li>
        <li><a href="${linkPrefix}shop.html">Shop</a></li>
        <li><a href="${linkPrefix}privacy-policy.html">Privacy Policy</a></li>
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





const createCard2 = (targetTagId, product, linkPrefix) => {
    // Create card container
    const $card = $('<div>', { class: 'product-card' });

    // Create image holder
    const $imageHolder = $('<div>', { class: 'product-image-holder' });
    const $image = $('<img>', {
        // src: linkPrefix+imgSrc+product.productId+".jpg",        
        src: linkPrefix+"assets/images/hero.jpg",
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
        text: `Dimensions: ${product.dimensions.length} x ${product.dimensions.width} x ${product.dimensions.height} cm`
    });
    $details.append($dimensions);

    // Create product materials
    const $materials = $('<p>', {
        class: 'product-materials',
        text: `Materials: ${product.materials.join(', ')}`
    });
    $details.append($materials);

    // Create product tags
    const $tags = $('<p>', { class: 'product-tags', text: `Tags: ${product.tags.join(', ')}` });
    $details.append($tags);

    // Create shop name
    const $shopName = $('<p>', { class: 'shop-name', text: `Shop: ${getShopNameById(product.shopId)}` });
    $details.append($shopName);

    // Create CTA button
    const $ctaButton = $('<button>', { class: 'cta-button', text: 'View Details' });

    // Append details and CTA button to card
    $card.append($imageHolder, $details, $ctaButton);

    // Append the card to the page (assuming you have a container with class 'product-container')
    $('.'+targetTagId).append($card);

     // Add click event to the card
     $card.on('click', () => {
        // Open the details page
        window.location.href = `${linkPrefix}views/shop/product/index.html?productId=${product.productId}`;
    });
}





const createCardBrief = (targetTagId, product, linkPrefix) => {
    // Create card container
    const $card = $('<div>', { class: 'product-card brief' });

    // Create image holder
    const $imageHolder = $('<div>', { class: 'product-image-holder' });
    const $image = $('<img>', {
        // src: linkPrefix+imgSrc+product.productId+".jpg",        
        src: linkPrefix+"assets/images/hero.jpg",
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
        window.location.href = `${linkPrefix}views/shop/product/index.html?productId=${product.productId}`;
    });
}





 // Fetch product details based on productId
 const fetchProductDetails = (productId) => { 
    var productDetails;
    products.map(product => {
        if (product.productId === productId){
            productDetails = product;
        }
    })    
    console.log(productDetails);
    return productDetails;
};

const FeaturedProducts2 = (targetTagId, linkPrefix) => {
    featuredProducts.map( product => {
        console.log(product);
        const productDetails = fetchProductDetails(product);
        console.log(productDetails);
        createCard2(targetTagId, productDetails, linkPrefix)
    });
}

const AllProducts = (targetTagId, linkPrefix) => {
    products.map( product => createCard2(targetTagId, product, linkPrefix));
}

const AllProductsBrief = (targetTagId, linkPrefix) => {
    products.map( product => createCardBrief(targetTagId, product, linkPrefix));
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
          createCard2("all-products", product, linkPrefix);
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
          createCard2(targetTagId, product, linkPrefix);
        }
      });
    
  };



// const showCategory = (category, linkPrefix) => {
    
//     Array.from(document.getElementsByClassName('card')).map(card => card.style.display = 'none');

//     switch (category) {
//         case 'All' :
//             AllProducts(linkPrefix);
//             break;
//         case 'Coffee' :
//             products.map( product => {
//                 product.category === 'Coffee' ? createCard(product, linkPrefix) : null;
//             });
//             break;
//         case 'Tea' :
//             products.map( product => {
//                 product.category === 'Tea' ? createCard(product, linkPrefix) : null;
//             });
//             break;
//         case 'Pastry' :
//             products.map( product => {
//                 product.category === 'Pastry' ? createCard(product, linkPrefix) : null;
//             });
//             break;
//         case 'Sandwiches' :
//             products.map( product => {
//                 product.category === 'Sandwiches' ? createCard(product, linkPrefix) : null;
//             });
//             break;
//         case 'Shakes' :
//             products.map( product => {
//                 product.category === 'Shakes' ? createCard(product, linkPrefix) : null;
//             });
//             break;
//         case 'Desserts' :
//             products.map( product => {
//                 product.category === 'Desserts' ? createCard(product, linkPrefix) : null;
//             });
//             break;
//         default :
//             AllProducts(linkPrefix);
//             break;
//     }
// }



