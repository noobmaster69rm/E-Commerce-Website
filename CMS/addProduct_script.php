<?php

include('../vendor/autoload.php');

$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$db = $mongoClient->SneakerThings;
$collection = $db->Products;

$brand =  filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_STRING);
$description =  filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$price =  filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
$keywords=  filter_input(INPUT_POST, 'keywords', FILTER_SANITIZE_STRING);
$url =  filter_input(INPUT_POST, 'url', FILTER_SANITIZE_STRING);

$data = [
    "Brand" => $brand,
    "Description" => $description,
    "Price" => $price,
    "Keywords" => $keywords,
    "Url" => $url
];

$insertData = $collection->insertOne($data);

echo '<script>
            alert("Product added");
            window.location.replace("home.php");
</script>';
