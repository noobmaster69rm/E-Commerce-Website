<link rel="stylesheet" href="style2.css">
<?php

//Include the PHP functions to be used on the page
include('common.php');

//Output header
outputHeader("Cart");

?>

<!-- Site header -->
<?php

//Output the navigation bar
Navbar();

?>

<div class="main-container">
    <div class = "cart-container"><br><br><br><br>
        <table>
        <!-- table row  -->
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>

            </tr>
        <!-- first product in cart -->
            <tr>
                <td>
                    <div class ="cart-product">
                        <img src="assets/shoe-3.png" alt = "cart product image">
                        <div>
                            <h4>SKECHERS</h4>
                            <p>WOMEN'S SUMMITS-NEXT WAVE</p>
                            <p>149538-WBK</p>
                            <small>Price:Rs 2,500.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value = "1"</td>
                <td>Rs 2,500.00</td>
            </tr>
        <!-- second product in cart -->
            <tr>
                <td>
                    <div class ="cart-product">
                        <img src="assets/shoe-9.png" alt = "cart product image">
                        <div>
                            <h4>PUMA</h4>
                            <p>Mayze Mid Safari Wns Putty</p>
                            <p>38368801</p>
                            <small>Price:Rs 5,900.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value = "1"</td>
                <td>Rs 5,900.00</td>
            </tr>


        <!-- third product in cart -->
            <tr>
                <td>
                    <div class ="cart-product" alt = "cart product image">
                        <img src="assets/shoe-5.png">
                        <div>
                            <h4>PUMA</h4>
                            <p>Cali Star Glam Sneakers Women</p>
                            <p>38767902</p>
                            <small>Price:Rs 5,000.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value = "1"</td>
                <td>Rs 5,000.00</td>
            </tr>
        </table>
    </div>

    <div class="total">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>Rs 5000.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>Rs 5000.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Rs 5000.00</td>
            </tr>
        </table>
    </div>
</div>

<!-- Site footer -->
<?php

//Output the footer
outputFooter();

?>
