<?php

$file = "../product-xml/products.xml";
$id = (int)$_POST["new-id"];
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


// echo $xml->book[1]->title;
$xml = simplexml_load_file($file);
// $product = $xml[$id];
$product = $xml->product[$id];
$product->name = $nName;
$product->image = $nImage;
$product->aisle = $nAisle;
$product->important_details = $nImportant_details;
$product->extra_details = $nExtra_details;
$product->price = "Price: $".$nPrice." ".(int)(100*($nPrice-$nAdjusted_price)/$nPrice)."% off";
$product->adjusted_price = $nAdjusted_price;
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


header('Location: ../product-list.php');
?>