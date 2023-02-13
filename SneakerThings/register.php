<link rel="stylesheet" href="css/style2.css">
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

//Main body
?>
<div class="frame2">
    <div class="main2">
        <div class="title"><span>Register</span></div>
        <form action="scripts/register_script.php" method="post">
            <div class="row">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="First Name" id="Fname" name="fname">
            </div>
            <div class="row">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Last Name" id="Lname" name="lname">
            </div>
            <div class="row">
                <i class="fa-solid fa-location-dot"></i>
                <input type="text" placeholder="Address" id="Address" name="address">
            </div>
            <div class="row">
                <i class="fa-solid fa-phone"></i>
                <input type="text" placeholder="Phone Number" id="Number" name="pnumber">
            </div>
            <div class="row">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Email" id="reg-email" name="email">
            </div>
            <div class="row">
                <i class="fa-solid fa-fingerprint"></i>
                <input type="password" placeholder="Password" id="reg-password" name="password2">
            </div>
            <div class="row button">
                <button id="reg-btn" type="submit">Register</button>
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
<script src="js/register.js">
    let request = new XMLHttpRequest();
    request.open();
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.send();
</script>

<!-- Site footer -->
<?php

//Output the footer
outputFooter();

?>
