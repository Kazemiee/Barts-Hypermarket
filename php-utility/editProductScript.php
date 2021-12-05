<?php

$file = "../product-xml/products.xml";
$id = (int)$Get["id"];
$nAisle = $_POST["new-aisle"];
$nName = $_POST["new-name"];
$nImage = $_POST["new-image"];
$nImportant_details = $_POST["i-details"];
$nExtra_details = $_POST["e-details"];
$nTypeID = $_POST["typeid"];
$nTname = $_POST["tname"];
$nMultiplier = $_POST["p-multiplier"];
$nPrice = $_POST["price"];
$nAdjusted_price = $_POST["a-price"];



$xml = simplexml_load_file($file);
$product = $xml[$ID];
$product->name = $nName;
$product->image = $nImage;
$product->aisle = $nAisle;
$product->important_details = $nImportant_details;
$product->extra_details = $nExtra_details;
$product->price = $nPrice;
$product->adjusted_price = $nAdjusted_price;
$product->types->typeID = $nTypeID;
$product->types->tname = $nTname;
$product->types->aisle = $nMultiplier;

// $xml->preserveWhiteSpace = false;
// $xml->formatOutput = true;

$xml->saveXML($file);

// $dom = dom_import_simplexml($sxe)->ownerDocument;
// $dom->formatOutput = TRUE;
// $formatted = $dom->saveXML();


header('Location: ../index.html');
?>