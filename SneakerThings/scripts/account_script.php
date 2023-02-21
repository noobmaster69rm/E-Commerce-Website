<?php

//Include libraries
include('../../vendor/autoload.php');

//Create instance of MongoDB client, selecting database and collection(s)
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->SneakerThings;
$collection = $db->Customer;

$email= $_POST['email'];

//compare email in form to email in database
$result = $collection->findOne(['Email' => $email]);

//array to store form data
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