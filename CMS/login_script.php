<?php

$username= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

include('vendor/autoload.php');

$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$db = $mongoClient->SneakerThings;
$collection = $db->Admin;

$findCriteria = [ 'Username' => $username];

$resultArray = $db->Admin->find($findCriteria)->toArray();

$admin = $resultArray[0];

if($admin['Password'] != $password)
{
    echo '<script>
                alert("Incorrect username password combination");
                window.location.replace("index.html")
          </script>';
    return false;
}

else{
    echo '<script>
                window.location.replace("home.php");
          </script>';
}