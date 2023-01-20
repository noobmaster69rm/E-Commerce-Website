<link rel="stylesheet" href="style2.css">
<?php

//Include the PHP functions to be used on the page
include('common.php');

//Output header
outputHeader("About");

//Main body
?>

<div class = "about-us">
    <br><h1>About Us</h1><br><br>
    <p> SneakerThings is an online sneaker store for you</p><br>
    <p>Founded in 2023, Our company continues to lead in the industry with Quality Assurance </p><br>
    <p> Check out sneakers at a fair price</p>
</div><br><br>

<h2 style="text-align:center"> The Team</h2><br><br>
<div class="rows">
    <div class="columns">
        <div class="cards">
            <div class="containers">
                <h2> Vishek Ramgolam</h2>
                <p class="titles">Founder</p>
                <p>Founded SneakerThings in 2023 afterwards leading all roles and decisions to the sucess of SneakerThings.   </p>
                <p>VR281@live.mdx.ac.uk</p><br>
                <p><button class="email">Reach Out</button></p>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="cards">
            <div class="containers">
                <h2>Annu Radha</h2>
                <p class="titles">Marketing</p>
                <p>Heads the marketing team and handles recruiting for different sectors of SneakerThings  </p>
                <p>AR1658@live.mdx.ac.uk</p><br><br>
                <p><button class="email">Reach Out</button></p>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="cards">
            <div class="containers">
                <h2>Jeffrey Katabira</h2>
                <p class="titles">Liaison</p>
                <p>Handles building and maintaining mutually beneficial relationships, facilitating communication and co-ordinating activities </p>
                <p>JK1125@live.mdx.ac.uk</p><br>
                <p><button class="email">Reach Out</button></p>
            </div>
        </div>
    </div>


    <?php

    //Output the navigation bar
    Navbar();

    ?>


    <!-- Site footer -->
    <?php

    //Output the footer
    outputFooter();

    ?>
