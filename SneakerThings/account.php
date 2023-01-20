<link rel="stylesheet" href="style2.css">
<?php

//Include the PHP functions to be used on the page
include('common.php');

//Output header
outputHeader("Profile");

?>

<!-- Site header -->
<?php

//Output the navigation bar
Navbar();

?>
<div class="frame3">
    <div class="main3">
        <div class="title"><span>Profile </span></div>
        <form action="#">
            <div class="row">
                <input type="password" placeholder="Enter current password" required>
            </div>
            <div class="row">
                <input type="password" placeholder="Enter new password">
            </div>
            <div class="row">
                <input type="text" placeholder="Enter new email">
            </div>
            <div class="row">
                <input type="text" placeholder="Enter new address">
            </div>
            <div class="row">
                <input type="text" placeholder="Enter new phone number">
            </div>
            <div class="row button">
                <input type="submit" placeholder="Login">
            </div>
            <div class="Logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="#">Logout</a>
            </div>
    </div>
</div>


<!-- Site footer -->
<?php

//Output the footer
outputFooter();

?>
