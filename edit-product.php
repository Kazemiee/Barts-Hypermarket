<?php
$id = $_GET["p-id"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pierre Chevalier  ID 40098342">
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
  error_reporting(0);
  if($id == ""){
    // header('Location: addProductScript.php');
    echo "<form action=\"php-utility/addProductScript.php\" method=\"post\">";
  }
  else{
    // header('Location: editProductScript.php?id='.$id.'');
    echo "<form action=\"php-utility/editProductScript.php\" method=\"post\">";
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
             <input type="text" name="new-image" width="1%">
			</div>
      <div>
        Product Aisle:
        <input type="text" name="new-aisle" size="60">
       </div>
			<div>
			 Product Name:
			 <input type="text" name="new-name" size="60">
			</div>
      <div style="display: none;">
			 Product ID:
        <?php
        echo "<input type=\"text\" name=\"new-id\" size=\"60\" value=\"".$id."\">";
        ?>
			</div>
      <div>
        Important Details: 
        <textarea class="input" name="i-details" rows="5" cols="64"></textarea>
       </div>
			<div>
			 Extra Details: 
			 <textarea class="input" name="e-details" rows="5" cols="64"></textarea>
			</div>
      <?php
      if($id == ""){
        echo "<div style=\"display: none;\">";
      }
      else{
        echo "<div>";
      }
      ?>
        Product TypeID:
        <input type="text" name="typeid" size="60">
       </div>
       <?php
      if($id == ""){
        echo "<div style=\"display: none;\">";
      }
      else{
        echo "<div>";
      }
      ?>
        Product Price Multiplier:
        <input type="text" name="p-multiplier" size="60">
       </div>
       <?php
      if($id == ""){
        echo "<div style=\"display: none;\">";
      }
      else{
        echo "<div>";
      }
      ?>
        Product Type Name:
        <input type="text" name="tname" size="60">
       </div>
      <div>
        Price (CAD):
        <input type="number" name="price">
       </div>
			<div>
			 Adjusted Price After Sale(CAD):
			 <input type="number" name="a-price">
			</div>
			<br></br>
			<input class="save" type="submit" value="Save Changes">
		</form>
     </div>
  </body>
</html>
