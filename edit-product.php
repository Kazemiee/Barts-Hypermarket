
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
  if($id != -1){
    echo "<form action=\"php-utility/addProductTypeScript.php?id=".$id."\" method=\"post\">
    <h2>Create new type</h2>
      <div>
        Type Name:
        <input type=\"text\" name=\"t-name\" size=\"100%\">
      </div>
      <div>
        Type Id:
        <input type=\"text\" name=\"t-id\" size=\"100%\">
      </div>
      <div>
        Type Multiplier:
        <input type=\"number\" name=\"t-multiplier\" size=\"100%\">
      </div>
      <input class=\"save\" type=\"submit\" value=\"Save Changes\">
    </form>";
  }
  ?>
  <?php
  if($id == -1){
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
       <h3>Product Image:</h3>
             <p>Example: img/MeatModelX.png</p>
             <p>Example: img/Axlot.png</p>
             <p>Example: img/Harrier.png</p>
             <p>Example: img/Triangle.png</p>
             <?php
              echo "<input type=\"text\" name=\"new-image\" width=\"1%\" value=\"".$image."\" size=\"100%\">";
              ?>
			</div>
      <div>
      <h3>Product Aisle:</h3>
        <?php
        echo "<input type=\"text\" name=\"new-aisle\" size=\"100%\" value=\"".$aisle."\">";
        ?>
        <!-- <input type="text" name="new-aisle" size="60"> -->
       </div>
			<div>
        <h3>Product Name:</h3>
			 
       <?php
        echo "<input type=\"text\" name=\"new-name\" size=\"100%\" value=\"".$name."\">";
        ?>
			 <!-- <input type="text" name="new-name" size="60"> -->
			</div>
      <?php
      if($id == -1){
        echo "<div>";
      }
      else{
        echo "<div style=\"display: none;\">";
      }
      ?>
      <h3>Product Author:</h3>
       <?php
        echo "<input type=\"text\" name=\"new-author\" size=\"100%\" value=\"".$author."\">";
        ?>
			 <!-- <input type="text" name="new-author" size="60"> -->
			</div>
      <div style="display: none;">
      <h3>Product ID:</h3>
        <?php
        echo "<input type=\"text\" name=\"new-id\" size=\"100%\" value=\"".$id."\">";
        ?>
			</div>
      <div>
      <h3>Important Details:</h3>
        <?php
        echo "<textarea class=\"input\" name=\"i-details\" rows=\"5\" cols=\"64\">".(String)$importantDetails."</textarea>";
        ?>
        <!-- <textarea class="input" name="i-details" rows="5" cols="64"></textarea> -->
       </div>
			<div>
      <h3>Extra Details:</h3>
       <?php
        echo "<textarea class=\"input\" name=\"e-details\" rows=\"5\" cols=\"64\">".(String)$extraDetails."</textarea>";
        ?>
			 <!-- <textarea class="input" name="e-details" rows="5" cols="64"></textarea> -->
			</div>
      <?php
      if($id == -1){
        echo "<div>";
      }
      else{
        echo "<div style=\"display: none;\">";
      }
      ?>
      <h3>Product TypeID:</h3>
        <input type="text" name="typeid" size="100%">
       </div>
       <?php
      if($id == -1){
        echo "<div>";
      }
      else{
        echo "<div style=\"display: none;\">";
      }
      ?>
      <h3>Product Price Multiplier:</h3>
        <input type="text" name="p-multiplier" size="100%">
       </div>
       <?php
      if($id == -1){
        echo "<div>";
      }
      else{
        echo "<div style=\"display: none;\">";
      }
      ?>
      <h3>Product Type Name:</h3>
        <input type="text" name="tname" size="100%">
       </div>
      <div>
      <h3>Price (CAD):</h3>
        <?php
        echo "<input type=\"number\" name=\"price\" value=\"".$price."\">";
        ?>
        <!-- <input type="number" name="price"> -->
       </div>
			<div>
      <h3>Adjusted Price After Sale(CAD):</h3>
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
