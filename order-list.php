<?php
$xml=simplexml_load_file("../order-xml/orders.xml") or die("Something went wrong");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="back.css" rel="stylesheet" />
    <link href="img/Axlot.png" rel="icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Pierre Chevalier  ID: 40098342 " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Order List</title>
  </head>
  <body>
	<?php include "php-templates/back-header.php"?>
    <main>
      <h2>View Order List Below</h2>
      <div class="user-list">
        <table style="table-layout:fixed; width: 100%;">
            <tr>
                <th style="font-size: 80%;">Order Number</th>
                <th style="font-size: 80%;">Product Type Name</th>
                <th style="font-size: 80%;">Quantity Ordered</th>
                <th style="font-size: 80%;">Customer ID</th>
                <th style="font-size: 80%;">Customer Name</th>
                <th style="font-size: 80%;">E-mail</th>
                <th style="font-size: 80%;">Address</th>
                <th style="font-size: 80%;">Actions</th>
            </tr>
            <tr>
				<?php
				$counter = 0;
				foreach($xml->children() as $prods){
				  echo "<tr>";
				  echo "<td style=\"font-size: 80%;\">".$prods->order_number. $counter = ($prods->order_number)"</td>";
				  echo "<td style=\"font-size: 80%;\">".$prods->product_type_name."</td>";
				  echo "<td style=\"font-size: 80%;\">".$prods->quantity."</td>";
				  echo "<td style=\"font-size: 80%;\">".$prods->user_id."</td>";
				  echo "<td style=\"font-size: 80%;\">".$prods->first_name." ".$prods->last_name."</td>";
				  echo "<td style=\"font-size: 80%;\">".$prods->email."</td>";
				  echo "<td style=\"font-size: 80%;\">".$prods->adress."</td>";
				  echo "<td style=\"font-size: 80%;\"><a href=\"edit-order-profile.php?p-id=".$counter."\">Edit</a>
				  <a href=\"php-utility/deleteOrderScript.php?id=".$counter."\">Delete</a>
				  </td>";
				  echo "</tr>";
				}
				?>
            </tr>
        </table>
		<a href="edit-order-profile.php?p-id=-1"><button>Add an order</button></a>
      </div>
    </main>
    <footer></footer>
  </body>
</html>