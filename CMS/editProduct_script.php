<?php

include('../vendor/autoload.php');

$mongoClient = (new MongoDB\Client);
$db = $mongoClient->SneakerThings;
$collection = $db->Products;

$id= new MongoDB\BSON\ObjectID($_POST['id']);

$result = $collection->findOne(['_id' => $id]);

if($result){
    $updateData = array();

    $updateData['Description'] = $_POST['description'];
    $updateData['Price'] = $_POST['price'];
    $updateData['Keywords'] = $_POST['keywords'];
    $updateData['Url'] = $_POST['url'];

    $collection->updateOne(['_id' => $id], ['$set' => $updateData]);
}

echo '<script>alert("Successful updated details");
              window.location.replace("home.php");
      </script>';