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
                <input type="email" placeholder="Email" id="reg-email" name="email">
            </div>
            <div class="row">
                <input type="password" placeholder="Enter current password" name="password" required>
            </div>
            <div class="row">
                <input type="password" placeholder="Enter new password" name="password2">
            </div>
            <div class="row">
                <input type="text" placeholder="Enter new address" name="address">
            </div>
            <div class="row">
                <input type="text" placeholder="Enter new phone number" name="pnumber">
            </div>
            <div class="row button">
                <button id="reg-btn" type="submit">Save</button>
            </div>
            <div class="Logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="#">Logout</a>
            </div>
    </div>
</div>

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
