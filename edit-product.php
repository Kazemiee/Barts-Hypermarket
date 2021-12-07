
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
    error_reporting(0);
    $id = (int)$_GET["p-id"];
    $xml=simplexml_load_file("product-xml/products.xml") or die("Something went wrong");
    // $product = $xml[0]->product[$id];
    // print_r($xml[0]);
    // echo $product;
    $name = $xml->product[$id]->name;
    $author = $xml->product[$id]->author;
    $image = $xml->product[$id]->image;
    $aisle = $xml->product[$id]->aisle;
    $importantDetails = $xml->product[$id]->important_details;
    $extraDetails = $xml->product[$id]->extra_details;
    $price = $xml->product[$id]->price;
    $adjPrice = $xml->product[$id]->adjusted_price;
    $author = $xml->product[$id]->author;
    ?>

    <meta charset="utf-8">
    <meta content="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pierre Chevalier  ID 40098342">
    <meta name="WP3-author" content="Matthew Kazemie  ID 40190450">
    <link href="back.css" rel="stylesheet">
    <link href="img/Axlot.png" rel="icon">
    <title>Edit Product</title>
  </head>
  <body>
  <?php include "php-templates/back-header.php"?>
	<main class="page-content">
	<h2>Enter Values</h2>
	<br></br>
	<div class="product-form">
  <?php
  if($id != ""){
    echo "<form action=\"php-utility/addProductTypeScript.php?id=".$id."\" method=\"post\">
    <h2>Create new type</h2>
      <div>
        Type Name:
        <input type=\"text\" name=\"t-name\" size=\"60\">
      </div>
      <div>
        Type Id:
        <input type=\"text\" name=\"t-id\" size=\"60\">
      </div>
      <div>
        Type Multiplier:
        <input type=\"number\" name=\"t-multiplier\" size=\"60\">
      </div>
      <input class=\"save\" type=\"submit\" value=\"Save Changes\">
    </form>";
  }
  ?>
  <?php
  if($id == "" && $id != 0){
    // header('Location: addProductScript.php');
    echo "<form action=\"php-utility/addProductScript.php\" method=\"post\" style = \"font-size: 200%;\">";
  }
  else{
    // header('Location: editProductScript.php?id='.$id.'');
    echo "<form action=\"php-utility/editProductScript.php\" method=\"post\" style = \"font-size: 200%;\">";
  }
  ?>
		<!-- <form action="php-utility/addProduct.php" method="post"> -->
    <h2>Enter Product Values</h2>
			<div>
			 <!-- Current Product Image:
			 <img src="img/Axlot.png" width="14%" alt="Image of an Axolotl">
			 <br></br> -->
             Product Image:
             <p>Example: img/MeatModelX.png</p>
             <p>Example: img/Axlot.png</p>
             <p>Example: img/Harrier.png</p>
             <p>Example: img/Triangle.png</p>
             <?php
              echo "<input type=\"text\" name=\"new-image\" width=\"1%\" value=\"".$image."\">";
              ?>
			</div>
      <div>
        Product Aisle:
        <?php
        echo "<input type=\"text\" name=\"new-aisle\" size=\"60\" value=\"".$aisle."\">";
        ?>
        <!-- <input type="text" name="new-aisle" size="60"> -->
       </div>
			<div>
			 Product Name:
       <?php
        echo "<input type=\"text\" name=\"new-name\" size=\"60\" value=\"".$name."\">";
        ?>
			 <!-- <input type="text" name="new-name" size="60"> -->
			</div>
      <?php
      if($id == "" && $id != 0){
        echo "<div>";
      }
      else{
        echo "<div style=\"display: none;\">";
      }
      ?>
			 Product Author:
       <?php
        echo "<input type=\"text\" name=\"new-author\" size=\"60\" value=\"".$author."\">";
        ?>
			 <!-- <input type="text" name="new-author" size="60"> -->
			</div>
      <div style="display: none;">
			 Product ID:
        <?php
        echo "<input type=\"text\" name=\"new-id\" size=\"60\" value=\"".$id."\">";
        ?>
			</div>
      <div>
        Important Details:
        <?php
        echo "<textarea class=\"input\" name=\"i-details\" rows=\"5\" cols=\"64\" value=\"".(String)$importantDetails."\"></textarea>";
        ?>
        <!-- <textarea class="input" name="i-details" rows="5" cols="64"></textarea> -->
       </div>
			<div>
			 Extra Details:
       <?php
        echo "<textarea class=\"input\" name=\"e-details\" rows=\"5\" cols=\"64\" value=\"".(String)$extraDetails."\"></textarea>";
        ?>
			 <!-- <textarea class="input" name="e-details" rows="5" cols="64"></textarea> -->
			</div>
      <?php
      if($id == "" && $id != 0){
        echo "<div>";
      }
      else{
        echo "<div style=\"display: none;\">";
      }
      ?>
        Product TypeID:
        <input type="text" name="typeid" size="60">
       </div>
       <?php
      if($id == "" && $id != 0){
        echo "<div>";
      }
      else{
        echo "<div style=\"display: none;\">";
      }
      ?>
        Product Price Multiplier:
        <input type="text" name="p-multiplier" size="60">
       </div>
       <?php
      if($id == "" && $id != 0){
        echo "<div>";
      }
      else{
        echo "<div style=\"display: none;\">";
      }
      ?>
        Product Type Name:
        <input type="text" name="tname" size="60">
       </div>
      <div>
        Price (CAD):
        <?php
        echo "<input type=\"number\" name=\"price\" value=\"".$price."\">";
        ?>
        <!-- <input type="number" name="price"> -->
       </div>
			<div>
			 Adjusted Price After Sale(CAD):
       <?php
        echo "<input type=\"number\" name=\"a-price\" value=\"".$adjPrice."\">";
        ?>
			 <!-- <input type="number" name="a-price"> -->
			</div>
			<br></br>
			<input class="save" type="submit" value="Save Changes">
		</form>
     </div>
  </body>
</html>
