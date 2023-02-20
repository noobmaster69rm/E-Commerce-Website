<?php

include('../../vendor/autoload.php');

$mongoClient = (new MongoDB\Client);
$db = $mongoClient->SneakerThings;
$collection = $db->Customer;

$email= $_POST['email'];

$result = $collection->findOne(['Email' => $email]);

if($result){
    $updateData = array();

    $updateData['Password'] = $_POST['password2'];
    $updateData['Address'] = $_POST['address'];
    $updateData['PhoneNumber'] = $_POST['pnumber'];

    $collection->updateOne(['Email' => $email], ['$set' => $updateData]);
}

echo '<script>alert("Successful updated details");
              window.location.replace("../login.php");
      </script>';