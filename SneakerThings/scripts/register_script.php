<?php

//Include libraries
include('../../vendor/autoload.php');

//Create instance of MongoDB client, selecting database and collection(s)
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->SneakerThings;
$collection = $db->Customer;

$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'pnumber', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$findCriteria = [
    "Email" => $email,
];

$data = [
    "FirstName" => $fname,
    "LastName" => $lname,
    "Email" => $email,
    "Password" => $password,
    "Address" => $address,
    "PhoneNumber" => $phone
];

$resultArray = $db->Customer->count($findCriteria);

//Check if email already exists in db, if so, display error, else create new user
if($resultArray == 0)
{
    $insertData = $collection->insertOne($data);
    echo '<script>alert("Registration Successful. Login with you credentials");
                  window.location.replace("../login.php");</script>';
}

else{
    echo '<script>alert("Email already exists");
                  window.location.replace("../register.php");</script>';
}