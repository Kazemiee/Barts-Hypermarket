<?php
$xml=simplexml_load_file("product-xml/products.xml") or die("Something went wrong");
$name = $xml->products->product[0]->name;
$image = $xml->products->product[0]->image;
$importantDetails = $xml->products->product[0]->important_details;
$extraDetails = $xml->products->product[0]->extra_details;
$price = $xml->products->product[0]->price;
$adjPrice = $xml->products->product[0]->adjusted_price;
print_r($xml);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="style.css" rel="stylesheet" />
    <link href="img/Axlot.png" rel="icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Matthew Kazemie ID: 40190450" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
      <?php
        echo "var page = \""."-".$name."\";";
        echo "function InitialFunction() {
          if (localStorage.getItem(\"Selected\" + page) == \"".$xml->products[0]->product->types->type[1]->typeID."\") {
            ChangePriceMultiplier(".$xml->products[0]->product->types->type[1]->multiplier.");
            ChangeQuantity(
              localStorage.getItem(\"UnitPrice\" + page),
              localStorage.getItem(\"Quantity\" + page)
            );
          } else {
            ChangePriceMultiplier(".$xml->products[0]->product->types->type[0]->multiplier.");
            ChangeQuantity(
              localStorage.getItem(\"UnitPrice\" + page),
              localStorage.getItem(\"Quantity\" + page)
            );
          }
        }";
        ?>
      //localStorage.setItem("PriceMultiplier" + page, 1);
    </script>
    <title>
        <?php
        echo $name;
        ?>
    </title>
  </head>
<body>
  <?php include "php-templates/header.php"?>
  <main class="page-content">
    <article class="article-product">
        <h2>
        <?php
        echo $name;
        ?>
        </h2>
        <div class="article-container">
          <?php
          echo "<img src=".$image." width = 40%>";
          echo $importantDetails;
          ?>
          <button onclick="ShowExtraDetails()">Show Extra Details</button>
          <!--style="display: none" needs to be there or else it will take 2 clicks to show extra details-->
          <?php
          echo $extraDetails;
          echo "<h3>Buy your own ".$name." today!</h3>";
          ?>
          <h3 class="price">
          <?php
          echo $price;
          ?>
          </h3>
          <h3 class="price">
            <div id="price-displayed">
            <?php
            echo "Pay: ".$adjPrice."$";
            ?>
            </div>
          </h3>
          <form action="#">
            <?php
            echo "<input type=\"number\"
            name=\"Add x to cart\"
            size=\"20\"
            id=\"quantity\"
            min=\"1\"
            onkeyup=\"ChangeQuantityKeyUp(".$adjPrice.")\"
            onclick=\"ChangeQuantityKeyUp(".$adjPrice.")\"
          />";
            ?>
            <select id="select-type" onchange="OnChangeSelected()">
              <?php
              foreach($xml->products[0]->product->types->children() as $types) {
                echo "<option value=\"".$types->type->typeID."\">".$types->type->tname."</option>";
              }
              ?>
            </select>
            <input class="add-to-cart" type="submit" value="Add x To Cart" />
          </form>
          <div>
            <?php
            echo "<button onclick=\"AddToQuantity(".$adjPrice.")\">Add</button>";
            echo "<button onclick=\"SubtractFromQuantity(".$adjPrice.")\">Subtract</button>";
            ?>
          </div>
        </div>
    </article>
  </main>
  <?php include "php-templates/footer.php"?>
</body>
<script type="text/javascript" src="product.js"></script>
  <script>
    InitialFunction();
  </script>
</html>
