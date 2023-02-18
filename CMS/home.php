<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Products</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/9a86419779.js" crossorigin="anonymous"></script>
</head>

<header>
    <div class="menu">
        <a href="home.php" class="logo">SneakerThings</a>
        <a href="home.php">Home</a>
        <a href="addProduct.php">Add Product</a>
        <a href="editProduct.html">Edit Product</a>
        <a href="customerOrders.html">Orders</a>
        <a href="#">Logout</a>
    </div>
</header>
<body>
<div class = container>
<?php

include('vendor/autoload.php');

$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$db = $mongoClient->SneakerThings;

$name= filter_input(INPUT_GET, 'Brand', FILTER_SANITIZE_STRING);
$findCriteria = [
    "Brand" => $name,
];
$cursor = $db->Products->find($findCriteria);
$Productss = $db->Products->find();

foreach ($Productss as $prods)
{
    echo '<div class = product>';
    echo '    <h2> ID: ' .$prods["_id"]. '</h2>';
    echo '    <div class = product-img>';
    echo '      <img src="../SneakerThings/' .$prods["Url"]. '" alt="productimg">';
    echo '    </div>';
    echo '    <div>';
    echo '      <h2 class=pdt-name>' .$prods["Brand"]. '  ' .$prods["Description"]. '</h2>';
    echo '    </div>';
    echo '</div>';
}
