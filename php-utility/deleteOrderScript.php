<?php

$file = "../order-xml/orders.xml";
$id = (int)$_GET["id"];
$counter = 0;

$xml = simplexml_load_file($file);
foreach($xml->orders->order as $order) {
	if($order->order_number == id) {
		unset($xml->order[$counter]);
	}
	$counter++;
}

$xml->saveXML($file);

header('Location: ../order-list.php');
?>