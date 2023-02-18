<?php

session_start();

include('../vendor/autoload.php');

$mongoClient = (new MongoDB\Client);
$db = $mongoClient->SneakerThings;
$collection = $db->Customer;


$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'pnumber', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING);

$findCriteria = [
    "email" => $email,
];

$updated_data = [
    'set' => [
        "Email" => $email,
        "Password" => $password,
        "Address" => $address,
        "PhoneNumber" => $phone
    ]
];

$insertNewData = $collection->updateOne($findCriteria, $updated_data);

echo $email. "Profile updated";