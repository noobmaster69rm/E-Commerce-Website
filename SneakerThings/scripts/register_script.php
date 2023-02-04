<?php

session_start();

include('../vendor/autoload.php');

$mongoClient = new MongoDB\Client("mongodb://localhost:27017");

$db = $mongoClient->SneakerThings;

$collection = $db->customer;

$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'pnumber', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$data = [
    "FirstName" => $fname,
    "LastName" => $lname,
    "Email" => $email,
    "Password" => $password,
    "Address" => $address,
    "PhoneNumber" => $phone
];

$insertData = $collection->insertOne($data);
echo '<script>
window.location.replace("../login.php");
</script>';