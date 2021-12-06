<?php

$file = "../product-xml/products.xml";
$id = (int)$_GET["new-id"];
$nAisle = $_POST["new-aisle"];
$nName = $_POST["new-name"];
$nImage = $_POST["new-image"];
$nImportant_details = $_POST["i-details"];
$nExtra_details = $_POST["e-details"];
$nTypeID = $_POST["t-id"];
$nTname = $_POST["t-name"];
$nMultiplier = $_POST["t-multiplier"];
$nPrice = $_POST["price"];
$nAdjusted_price = $_POST["a-price"];


// echo $xml->book[1]->title;
$xml = simplexml_load_file($file);
// $product = $xml[$id];
$product = $xml->product[$id];
$type = $product->types->addChild("type");
$type->addChild("typeID", $typeID);
$type->addChild("tname", $tname);
$type->addChild("multiplier", $multiplier);

// print_r($product);

// $xml->preserveWhiteSpace = false;
// $xml->formatOutput = true;

$xml->saveXML($file);

// $dom = dom_import_simplexml($sxe)->ownerDocument;
// $dom->formatOutput = TRUE;
// $formatted = $dom->saveXML();


header('Location: ../product.php?id='.$id);
?>