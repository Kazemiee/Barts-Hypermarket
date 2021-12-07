<?php
$xml=simplexml_load_file("user-xml/users.xml") or die("Something went wrong");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="back.css" rel="stylesheet" />
    <link href="img/Axlot.png" rel="icon" />
    <script type="text/javascript" src="product.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Boisghur Shishani  ID: 40170574" />
    <meta name="WP3-author" content="Matthew Kazemie  ID 40190450">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product List</title>
  </head>
  <body>
  <?php include "php-templates/back-header.php"?>
    <main>
      <h2>View User List Below</h2>
      <div class="user-list">
        <table style="table-layout:fixed; width: 100%;">
            <tr>
                <th style="font-size: 80%;">ID</th>
                <th style="font-size: 80%;">First Name</th>
                <th style="font-size: 80%;">Last Name</th>
                <th style="font-size: 80%;">Phone Number</th>
                <th style="font-size: 80%;">E-mail</th>
                <th style="font-size: 80%;">Password</th>
                <th style="font-size: 80%;">Actions</th>
            </tr>
            <tr>
            <?php
            $counter = 0;
            foreach($xml->children() as $prods){
              echo "<tr>";
              echo "<td style=\"font-size: 80%;\">".$prods->user_id.", ID = ".$counter."</td>";
              echo "<td>".$prods->first_name."</td>";
              echo "<td>".$prods->last_name."</td>";
              echo "<td>".$prods->phone_number."</td>";
              echo "<td>".$prods->email."</td>";
              echo "<td>".$prods->password."</td>";
              echo "<td style=\"font-size: 80%;\"><a href=\"edit-user.php?p-id=".$counter."\">Edit</a>
              <a href=\"php-utility/deleteUserScript.php?id=".$counter."\">Delete</a>
              <a href=\"product.php?id=".$counter."\">View</a>
              </td>";
              echo "</tr>";
              $counter++;
            }
            ?>
            </tr>
        </table>
        <a href="edit-User.php?p-id=-1"><button>Add a User</button></a><!--add link to P10 -->
      </div>
    </main>
    <footer></footer>
  </body>
</html>
