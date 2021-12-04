<?php

$file = "../product-xml/products.xml";
// $id = (int)$_POST["id"];
$aisle = $_POST["new-aisle"];
$name = $_POST["new-name"];
$image = $_POST["new-image"];
$important_details = $_POST["i-details"];
$extra_details = $_POST["e-details"];
$typeID = $_POST["typeid"];
$tname = $_POST["tname"];
$multiplier = $_POST["p-multiplier"];
$price = $_POST["price"];
$adjusted_price = $_POST["a-price"];



$xml = simplexml_load_file($file);
$product = $xml->addChild("product");
$product->addChild("name", $name);
$product->addChild("image", $image);
$product->addChild("aisle", $aisle);
$product->addChild("important_details", $important_details);
// $product->$important_details->addCData($important_details);
$product->addChild("extra_details", $extra_details);
// $product->$extra_details->addCData($extra_details);
$product->addChild("price", "Price: $".$price);
$product->addChild("adjusted_price", $adjusted_price);
$types = $product->addChild("types");
$types->addChild("typeID", $typeID);
$types->addChild("tname", $tname);

$xml->preserveWhiteSpace = false;
$xml->formatOutput = true;

$xml->saveXML($file);


header('Location: ../index.html');
?>