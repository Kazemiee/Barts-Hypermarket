<?php
$xml=simplexml_load_file("product-xml/products.xml") or die("Something went wrong");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="back.css" rel="stylesheet" />
    <link href="img/Axlot.png" rel="icon" />
    <script type="text/javascript" src="product.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Mark Kandaleft and  Alexander Zabski  ID: 40126013 and 40044543" />
    <meta name="WP3-author" content="Matthew Kazemie  ID 40190450">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product List</title>
  </head>
  <body>
  <?php include "php-templates/back-header.php"?>
    <main>
      <h2>View Product List Below</h2>
      <div class="user-list">
        <table style="table-layout:fixed; width: 100%;">
            <tr>
                <th style="font-size: 80%;">Image</th>
                <th style="font-size: 80%;">Product</th>
                <th style="font-size: 80%;">Aisle</th>
                <th style="font-size: 80%;">Price</th>
                <th style="font-size: 80%;">Adjusted Price</th>
                <th style="font-size: 80%;">Actions</th>
            </tr>
            <tr>
            <?php
            $counter = 0;
            foreach($xml->children() as $prods){
              echo "<tr>";
              echo "<td style=\"width: auto;\"><img src=".$prods->image." style=\"width: 100%;\"></td>";
              echo "<td style=\"font-size: 80%;\">".$prods->name.", ID = ".$counter."</td>";
              echo "<td>".$prods->aisle."</td>";
              echo "<td style=\"font-size: 80%;\">".$prods->price_text."</td>";
              echo "<td>".$prods->adjusted_price."</td>";
              echo "<td style=\"font-size: 80%;\"><a href=\"edit-product.php?p-id=".$counter."\">Edit</a>
              <a href=\"php-utility/deleteProductScript.php?id=".$counter."\">Delete</a>
              <a href=\"product.php?id=".$counter."\">View</a>
              </td>";
              echo "</tr>";
              $counter++;
            }
            ?>
            </tr>
        </table>
        <a href="edit-product.php"><button>Add a Product</button></a><!--add link to P10 -->
      </div>
    </main>
    <footer></footer>
  </body>
</html>
