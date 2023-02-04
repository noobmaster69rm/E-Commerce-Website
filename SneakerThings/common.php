<?php

function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>><title>' .$title. '</title></head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width = device-width, initial-scale = 1">';
    echo '<script src="https://kit.fontawesome.com/9a86419779.js" crossorigin="anonymous"></script>';
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>';
    echo '<body>';
}

function Navbar()
{
    echo '<header>';
    echo '	<a href="index.php" class="logo">SneakerThings</a>';
    echo '  <div id="menu"><i class="fa-sharp fa-solid fa-bars-sort"></i></div>';

    echo '	<ul class="navbar">';
    //Array of page name and links
    $urls = array(
        'Home' => 'index.php',
        'Shop' => 'shop.php',
        'About' => 'about.php',
    );

    //Loop to output array items(navigation) and page links
    foreach ($urls as $url => $link) {
        echo '<li><a href="' . $link . '">' . $url . '</a></li>';
    }
    echo '  </ul>';

    echo '  <div class="icons">';
    echo '    <a href="cart.php"><img src="assets/images/cart-svgrepo-com.svg" alt=""></a>';
    echo '    <a href="login.php"><img src="assets/images/profile-user-avatar-man-person-svgrepo-com.svg" alt=""></a>';
    echo '    <a href="account.php"><img src="assets/images/edit-attributes-svgrepo-com.svg" alt=""></a>';
    echo '  </div>';
    echo '</header>';
}

function outputFooter(){
    echo '<footer>';
    echo ' <p class="copyright-text">';
    echo '   Copyright &copy; 2023 All Rights Reserved by SneakerThings&#8482;';
    echo ' </p>';
    echo ' <div class="icons2">';
    echo '   <a href="https://facebook.com/"><i class="fa-brands fa-facebook"></i></a>';
    echo '   <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>';
    echo '  </div>';
    echo '</footer>';
    echo '</body>';
    echo '</html>';
}


