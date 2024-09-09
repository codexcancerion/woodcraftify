<?php

function renderHeaders($root) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Woodcraftify</title>
        <link rel="shortcut icon" href="'.$root.'images/craftify/woodcraftify_logomark.png" type="image/x-icon">

        <!-- MATERIAL ICONS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- GOOGLE FONTS POPPINS -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- BOOSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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