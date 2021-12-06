<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
      $aisle = $_GET["aisle"];
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
    <?php include "php-templates/header.php"?>
    <main class="page-content">
      <article class="aisles">
        <h2>Foods Containing Meat</h2>
        <div class="article-container">
          <ul class="aisles-list">
            <!-- <li>
              <p>
                <a href="product.php?id=0">
                  <img src=img/Axlot.png width = 20% alt = "Image of an
                  Axolotl">
                </a>
                <a href="product.php?id=0">Axolotl</a> 99% off!
              </p>
            </li> -->
            <?php
            $counter = 0;
            foreach($xml->children() as $prods){
              if($prods->aisle == $aisle){
                echo "
              <li>
                <p>
                  <img src=".$prods->image." width = 40%>
                  <a href=\"product.php?id=".$counter."\">".$prods->name."</a> ".$prods->price."% off!
                </p>
              </li>";
              }
              $counter++;
            }
            ?>
          </ul>
        </div>
      </article>
    </main>
    <?php include "php-templates/footer.php"?>
  </body>
</html>
