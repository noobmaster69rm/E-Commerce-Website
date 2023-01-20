<link rel="stylesheet" href="style2.css">
<?php

//Include the PHP functions to be used on the page
include('common.php');

//Output header
outputHeader("Register");

?>

<!-- Site header -->
<?php

//Output the navigation bar
Navbar();

?>
<div class="frame2">
    <div class="main2">
        <div class="title"><span>Register</span></div>
        <form action="#">
            <div class="row">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="First Name" required>
            </div>
            <div class="row">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Last Name" required>
            </div>
            <div class="row">
                <i class="fa-solid fa-location-dot"></i>
                <input type="text" placeholder="Address" required>
            </div>
            <div class="row">
                <i class="fa-solid fa-phone"></i>
                <input type="number" placeholder="Phone Number" required>
            </div>
            <div class="row">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Email" required>
            </div>
            <div class="row">
                <i class="fa-solid fa-fingerprint"></i>
                <input type="password" placeholder="Password" required>
            </div>
            <div class="row button">
                <input type="submit" placeholder="Register">
                <p class="new-text2">
                    Already have an account?
                    <a href="login.php" class="register2">
                        Login >
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
