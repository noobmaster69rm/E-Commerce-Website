<link rel="stylesheet" href="css/style2.css">

<?php

//Include the PHP functions to be used on the page
include('common.php');

//Output header
outputHeader("Home");

?>

<!-- Site header -->
<?php

//Output the navigation bar
Navbar();

//Main body
?>

<div class="container">
    <div class="middlelogo">
        <p>SneakerThings</p>
        <div class="shopnow">
            <a href="shop.php">Shop now -></a>
        </div>
    </div>
</div>

<!-- Site footer -->
<?php

//Output the footer
outputFooter();

?>