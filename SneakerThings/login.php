<link rel="stylesheet" href="css/style2.css">
<?php

//Include the PHP functions to be used on the page
include('common.php');

//Output header
outputHeader("Login");

?>

<!-- Site header -->
<?php
//Output the navigation bar
Navbar();

//Main body
?>
<div class="frame">
    <div class="main">
        <div class="title"><span>Login</span></div>
        <form action="#">
            <div class="row">
                <i class="fa-regular fa-user"></i>
                <input type="email" placeholder="Email" required>
            </div>
            <div class="row">
                <i class="fa-solid fa-fingerprint"></i>
                <input type="password" placeholder="Password">
            </div>
            <div class="row button">
                <button id="log-btn" type="submit">Login</button>
                <p class="new-text">
                    New here?
                    <a href="register.php" class="register">
                        Register Now >
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>

<!-- Site footer -->
<?php

//Output the footer
outputFooter();

?>
