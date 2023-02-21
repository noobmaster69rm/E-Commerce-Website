<link rel="stylesheet" href="css/style2.css">
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

//Main body
?>
<div class="frame3">
    <div class="main3">
        <div class="title"><span>Profile</span></div>
        <form action="scripts/account_script.php" method="post">
            <div class="row">
                <input type="email" placeholder="Email" id="reg-email" name="email" required>
            </div>
            <div class="row">
                <input type="password" placeholder="Enter current password" name="password" required>
            </div>
            <div class="row">
                <input type="password" placeholder="Enter new password" name="password2" required>
            </div>
            <div class="row">
                <input type="text" placeholder="Enter new address" name="address" required>
            </div>
            <div class="row">
                <input type="text" placeholder="Enter new phone number" name="pnumber" required>
            </div>
            <div class="row button">
                <button id="reg-btn" type="submit" name="submit">Save</button>
            </div>
            <div class="Logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="#">Logout</a>
            </div>
    </div>
</div>

<!-- AJAX script to send form data to backend -->
<script>
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
