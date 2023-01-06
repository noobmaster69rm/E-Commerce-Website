<?php

function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>><title>' .$title. '</title></head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width = device-width, initial-scale = 1">';
    echo '<link rel="stylesheet" href="style.css">';
    echo '<script src="https://kit.fontawesome.com/9a86419779.js" crossorigin="anonymous"></script>';
    echo '<body>';
}

function Navbar()
{
    echo '<header>';
    echo '	<a href="#" class="logo">Shoes</a>';
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
    echo '    <a href="cart.php"><img src="cart-svgrepo-com.svg" alt=""></a>';
    echo '    <a href="profile.php"><img src="profile-user-avatar-man-person-svgrepo-com.svg" alt=""></a>';
    echo '  </div>';
    echo '</header>';
}

function outputFooter(){
    echo '<footer>';
    echo ' <p class="copyright-text">';
    echo '   Copyright &copy; 2023 All Rights Reserved by SneakerThings&#8482;';
    echo ' </p>';
    echo ' <div class="icons2">';
    echo '   <ul class="social">';
    echo '     <li>';
    echo '        <a href="https://github.com/noobmaster69rm" title="">';
    echo '        <span class="icon fa fa-github"></span>';
    echo '        </a>';
    echo '      </li>';
    echo '      <li>';
    echo '        <a href="https://facebook.com/" title="">';
    echo '          <span class="icon fa fa-facebook"></span>';
    echo '        </a>';
    echo '      </li>';
    echo '      <li>';
    echo '        <a href="https://www.instagram.com/" title="">';
    echo '          <span class="icon fa fa-instagram"></span>';
    echo '        </a>';
    echo '      </li>';
    echo '    </ul>';
    echo '  </div>';
    echo '</footer>';
    echo '</body>';
    echo '</html>';
}


