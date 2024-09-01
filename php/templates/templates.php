<?php

function renderHeaders($root) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Woodcraftify</title>
        <link rel="shortcut icon" href="'.$root.'images/craftify/logomark.png" type="image/x-icon">

        <!-- MATERIAL ICONS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- GOOGLE FONTS POPPINS -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- GLOBAL STYLES -->
        <link rel="stylesheet" href="'.$root.'css/globals.css">
        <link rel="stylesheet" href="'.$root.'css/components.css">
        <!-- PAGE STYLES -->
        <link rel="stylesheet" href="./style.css">
                
        <!-- EXTERNAL SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>  ';
}
function renderEnds() {
    echo '
    </body>
    </html>  ';
}


function renderNavbar($root){
    include $root.'php/templates/navbar.php';
}

function renderFooter($root){
    include $root.'php/templates/footer.php';
}

?>