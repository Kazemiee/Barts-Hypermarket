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
$product = $xml->product[$id];
$product->user_id = $id;
$product->first_name = $nFirst_name;
$product->last_name = $nLast_name;
$product->phone_number = $nPhone_number;
$product->email = $nEmail;
$product->password = $nPassword;
$product->admin = $nAdmin;
// $product->types->type->typeID = $nTypeID;
// $product->types->type->tname = $nTname;
// $product->types->type->aisle = $nMultiplier;

// print_r($product);

// $xml->preserveWhiteSpace = false;
// $xml->formatOutput = true;

$xml->saveXML($file);

// $dom = dom_import_simplexml($sxe)->ownerDocument;
// $dom->formatOutput = TRUE;
// $formatted = $dom->saveXML();


header('Location: ../user-list.php');
?>