<?php

include('vendor/autoload.php');

$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$db = $mongoClient->SneakerThings;
$collection = $db->Products;