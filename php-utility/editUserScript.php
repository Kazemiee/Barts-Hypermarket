<?php

$file = "../user-xml/users.xml";
$id = (int)$_POST["new-id"];
$user_id = $_POST["new-userid"];
$nFirst_name = $_POST["new-firstname"];
$nLast_name = $_POST["new-lastname"];
$nPhone_number = $_POST["new-phonenumber"];
$nEmail = $_POST["new-email"];
$nPassword = $_POST["new-password"];
$nAdmin = $_POST["new-admin"];

// echo $xml->book[1]->title;
$xml = simplexml_load_file($file);
// $product = $xml[$id];
$user = $xml->user[$id];
$user->user_id = $id;
$user->first_name = $nFirst_name;
$user->last_name = $nLast_name;
$user->phone_number = $nPhone_number;
$user->email = $nEmail;
$user->password = $nPassword;
$user->admin = $nAdmin;

// print_r($product);

// $xml->preserveWhiteSpace = false;
// $xml->formatOutput = true;

$xml->saveXML($file);

// $dom = dom_import_simplexml($sxe)->ownerDocument;
// $dom->formatOutput = TRUE;
// $formatted = $dom->saveXML();


header('Location: ../user-list.php');
?>