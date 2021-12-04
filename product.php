<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
      $id = (int)$_GET["id"];
      error_reporting(0);
      $xml=simplexml_load_file("product-xml/products.xml") or die("Something went wrong");
      $name = $xml[0]->product[$id]->name;
      $image = $xml[0]->product[$id]->image;
      $importantDetails = $xml[0]->product[$id]->important_details;
      $extraDetails = $xml[0]->product[$id]->extra_details;
      $price = $xml[0]->product[$id]->price;
      $adjPrice = $xml[0]->product[$id]->adjusted_price;
      // // print_r($xml);
      ?>
    <meta charset="UTF-8" />
    <link href="style.css" rel="stylesheet" id = "style"/>
    <link href="img/Axlot.png" rel="icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Matthew Kazemie ID: 40190450" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="product.js"></script>
    <script>
      <?php
        echo "var page = \""."-".$name."\";";
        echo "function InitialFunction() {";
        foreach($xml->product[$id]->types[0]->children() as $types) {
          // echo "<option value=\"".$types->typeID."\">".$types->tname."</option>";
          echo "if (localStorage.getItem(\"Selected\" + page) == \"".$types->typeID."\") {
            ChangePriceMultiplier(".$types->multiplier.");
            ChangeQuantity(
              localStorage.getItem(\"UnitPrice\" + page),
              localStorage.getItem(\"Quantity\" + page)
              );
            }";
          }
          echo "else {
            ChangePriceMultiplier(1);
            ChangeQuantity(
              localStorage.getItem(\"UnitPrice\" + page),
              localStorage.getItem(\"Quantity\" + page)
            );
          }
        }";
        ?>
    </script>
    <title>
        <?php
        echo $name;
        ?>
    </title>
  </head>
  <body>
    <div id="page-id" style="display: none;">
    <?php
    echo $id;
    ?>
    </div>
    <?php include "php-templates/header.php"?>
    <main class="page-content">
      <article class="article-product">
          <h2>
          <?php
          echo $name;
          ?>
          </h2>
          <div class="article-container">
            <div>
            <?php
            echo "<img src=".$image." width = 40%>";
            echo $importantDetails;
            ?>
            </div>
            <button onclick="ShowExtraDetails()">Show Extra Details</button>
            <!--style="display: none" needs to be there or else it will take 2 clicks to show extra details-->
            <div id="extra-details" style="display: none">
            <?php
            echo $extraDetails;
            ?>
            </div>
            <?php
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
              <select id="select-type" onchange="OnChangeSelected(), InitialFunction()">
                <?php
                foreach($xml->product[$id]->types[0]->children() as $types) {
                  echo "<option value=\"".$types->typeID."\">".$types->tname."</option>";
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
    <!-- <script type="text/javascript" src="product.js"></script> -->
    <script>InitialFunction();</script>
  </body>
</html>
