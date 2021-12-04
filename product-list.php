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
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Adjusted Price</th>
                <th>Actions</th>
            </tr>
            <tr>
            <?php
            $counter = 0;
            foreach($xml->children() as $prods){
              $counter++;
              echo "<tr>";
              echo "<td style=\"width: auto;\"><img src=".$prods->image." style=\"width: 100%;\"></td>";
              echo "<td>".$prods->name.", ID = ".$counter."</td>";
              echo "<td>".$prods->price."</td>";
              echo "<td>".$prods->adjusted_price."</td>";
              echo "<td><a href=\"edit-product.php?id=".$counter."\">Edit</a> <a onclick=\"DeleteProduct(1)\">Delete</a></td>";
              echo "</tr>";
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
