<?php

$file = "../User-xml/users.xml";
$user_id = $_POST["new-userid"];
$first_name = $_POST["new-firstname"];
$last_name = $_POST["new-lastname"];
$phone_number = $_POST["new-phonenumber"];
$email = $_POST["new-email"];
$password = $_POST["new-password"];
$admin = $_POST["new-admin"];




$xml = simplexml_load_file($file);
$user = $xml->addChild("user");
$user->addChild("user_id", $user_id);
$user->addChild("first_name", $first_name);
$user->addChild("last_name", $last_name);
$user->addChild("email", $email);
$user->addChild("password", $password);
$user->addChild("admin", $admin);

// $xml->preserveWhiteSpace = false;
//$xml->formatOutput = true;

$xml->saveXML($file);


header('Location: ../user-list.php');
?>