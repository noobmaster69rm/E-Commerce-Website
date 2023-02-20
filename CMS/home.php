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

include('../vendor/autoload.php');

$mongoClient = (new MongoDB\Client);
$db = $mongoClient->SneakerThings;

$brand= filter_input(INPUT_GET, 'Brand', FILTER_SANITIZE_STRING);
$findCriteria = [
    "Brand" => $brand,
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
    echo '    <div>';
    echo '      <h2 class=pdt-price> Price: Rs ' .$prods["Price"]. '</h2>';
    echo '    </div>';
    echo '</div>';
}

$findCriteria2 = [
    "Brand" => $brand,
];
$cursor2 = $db->ProductsSale->find($findCriteria2);
$Productss2 = $db->ProductsSale->find();

foreach ($Productss2 as $prods2)
{
    echo '<div class = product>';
    echo '    <h2> ID: ' .$prods2["_id"]. '</h2>';
    echo '    <div class = product-img>';
    echo '      <img src="../SneakerThings/' .$prods2["Url"]. '" alt="productimg">';
    echo '    </div>';
    echo '    <div>';
    echo '      <h2 class=pdt-name>' .$prods2["Brand"]. '  ' .$prods2["Description"]. '</h2>';
    echo '    </div>';
    echo '    <div>';
    echo '      <h2 class=pdt-price> Original Price: Rs ' .$prods2["Original Price"]. '</h2>';
    echo '      <h2 class=pdt-price> Sale Price: Rs ' .$prods2["Price"]. '</h2>';
    echo '    </div>';
    echo '</div>';
}

