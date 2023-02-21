<?php
session_start();

include('../../vendor/autoload.php');

$mongoClient = (new MongoDB\Client);
$db = $mongoClient->SneakerThings;
$collection = $db->Cart;

$productId = $_POST['productId'];

// Check if the product is already in the cart
$cartItem = $collection->findOne(['product_id' => $productId]);

if ($cartItem) {
    // Increment the quantity of the product in the cart
    $collection->updateOne(['product_id' => $productId], ['$inc' => ['quantity' => 1]]);
} else {
    // Add the product to the cart
    $collection->insertOne(['product_id' => $productId, 'quantity' => 1]);
}
