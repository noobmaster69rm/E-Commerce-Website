<link rel="stylesheet" href="css/style2.css">
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

//Main body
?>
<div class="cart-container">
<?php
    include('../vendor/autoload.php');
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->SneakerThings;

    $cart = $db->Cart->find();
    $collection = $db->Orders;

    //Load cart items from mongodb

foreach ($cart as $basket) {
    echo '<br><br><br><br><div class=items>
          <div class="item-id">
          <p>Item-id: ' .$basket["product_id"] .'</p>
</div>
<div class="item-quantity">
          <p>Item-quantity: ' .$basket["quantity"] .'</p>
</div>
</div>';
}
?>
    <br><br><form method="post" action="confirmation.html">
        <input type="submit" name="buy" value="Buy now" class="cart-btn">
    </form>
</div>

<?php
// On clicking buy now button, send data to mongodb
if(array_key_exists('buy', $_POST)){
    $data= ["product-id" => $basket["product_id"], "Quantity" => $basket["quantity"]];

    $insertData = $collection->insertOne($data);
    echo '<script>alert("Order saved")';
};
?>

<!-- Site footer -->
<?php

//Output the footer
outputFooter();

?>
