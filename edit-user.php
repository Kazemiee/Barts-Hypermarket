
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
    error_reporting(0);
    $id = (int)$_GET["p-id"];
    $xml=simplexml_load_file("user-xml/users.xml") or die("Something went wrong");
    // $product = $xml[0]->product[$id];
    // print_r($xml[0]);
    // echo $product;
    $user_id = $xml->user[$id]->user_id;
    $first_name = $xml->user[$id]->first_name;
    $last_name = $xml->user[$id]->last_name;
    $phone_number = $xml->user[$id]->phone_number;
    $email = $xml->user[$id]->email;
    $password = $xml->user[$id]->password;
    $admin = $xml->user[$id]->admin;
    ?>

    <meta charset="utf-8">
    <meta content="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Boisghur Shishani  ID 40098342">
    <meta name="WP3-author" content="Matthew Kazemie  ID 40190450">
    <link href="back.css" rel="stylesheet">
    <link href="img/Axlot.png" rel="icon">
    <title>Edit User</title>
  </head>
  <body>
  <?php include "php-templates/back-header.php"?>
	<main class="page-content">
	<h2>Enter Values</h2>
	<br></br>
	<div class="user-form">
  <?php
  if($id == -1){
    // header('Location: addProductScript.php');
    echo "<form action=\"php-utility/addUserScript.php\" method=\"post\" style = \"font-size: 200%;\">";
  }
  else{
    // header('Location: editProductScript.php?id='.$id.'');
    echo "<form action=\"php-utility/editUserScript.php\" method=\"post\" style = \"font-size: 200%;\">";
  }
  ?>
		<!-- <form action="php-utility/addProduct.php" method="post"> -->
    <h2>Enter User Values</h2>
        <div style="display: none;">
      <h3>User ID:</h3>
        <?php
        echo "<input type=\"text\" name=\"new-id\" size=\"60\" value=\"".$id."\">";
        ?>
	    </div>
      <div>
      <h3>User First Name:</h3>
        <?php
        echo "<input type=\"text\" name=\"new-firstname\" size=\"60\" value=\"".$first_name."\">";
        ?>
       </div>
       <div>
      <h3>User Last Name:</h3>
        <?php
        echo "<input type=\"text\" name=\"new-lastname\" size=\"60\" value=\"".$last_name."\">";
        ?>
       </div>
        <div>
      <h3>User Phone Number:</h3>
        <?php
        echo "<input type=\"tel\" name=\"new-phonenumber\" size=\"60\" value=\"".$phone_number."\">";
        ?>
       </div>
       <div>
      <h3>User E-mail:</h3>
        <?php
        echo "<input type=\"email\" name=\"new-email\" size=\"60\" value=\"".$email."\">";
        ?>
       </div>
       <div>
      <h3>User Password:</h3>
        <?php
        echo "<input type=\"text\" name=\"new-password\" size=\"60\" value=\"".$password."\">";
        ?>
       </div>
       <div>
      <h3>User Admin:</h3>
        <?php
        if ($admin){
            echo "<input type=\"checkbox\" name=\"new-admin\" size=\"60\" value=\"".$admin."\">";
        }
        ?>
       </div>


      <?php
      if($id == -1){
        echo "<div>";
      }
			<br></br>
			<input class="save" type="submit" value="Save Changes">
		</form>
     </div>
  </body>
</html>
