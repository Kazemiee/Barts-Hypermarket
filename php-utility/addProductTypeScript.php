<?php

$file = "../product-xml/products.xml";
$id = (int)$_GET["id"];
$nTypeID = $_POST["t-id"];
$nTname = $_POST["t-name"];
$nMultiplier = $_POST["t-multiplier"];



// echo $xml->book[1]->title;
$xml = simplexml_load_file($file);
// $product = $xml[$id];
$product = $xml->product[$id];
$type = $product->types->addChild("type");
$type->addChild("typeID", $nTypeID);
$type->addChild("tname", $nTname);
$type->addChild("multiplier", $nMultiplier);

// print_r($product);

// $xml->preserveWhiteSpace = false;
// $xml->formatOutput = true;

$xml->saveXML($file);

// $dom = dom_import_simplexml($sxe)->ownerDocument;
// $dom->formatOutput = TRUE;
// $formatted = $dom->saveXML();


header('Location: ../product.php?id='.$id);
?>