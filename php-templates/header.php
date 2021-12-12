<?php
      // $aisle = $_GET["aisle"];
      error_reporting(0);
      $xml=simplexml_load_file("product-xml/products.xml");
      // $name = $xml[0]->product[$id]->name;
      // $image = $xml[0]->product[$id]->image;
      // $importantDetails = $xml[0]->product[$id]->important_details;
      // $extraDetails = $xml[0]->product[$id]->extra_details;
      // $price = $xml[0]->product[$id]->price;
      // $adjPrice = $xml[0]->product[$id]->adjusted_price;
      // // print_r($xml);
      ?>
<header class="top-header">
      <div class="header-upper-half">
        <div class="name-slogan">
        <?php
        echo "<span style=\"font-size: 7px\">".$xml[0]->product[$id]->author."</span>";
        ?>
          <!-- <span style="font-size: 7px">Matthew Kazemie ID: 40190450</span> -->
          <h1 class="shop-name">Bart's Hypermarket</h1>
          <p class="slogan">For the Earth Product Enthusiasts out there</p>
        </div>
        <div class="go-to-cart">
          <a href="shopping-cart.html">Go to Cart</a>
        </div>
      </div>
      <form action="#">
        <div class="search-bar">
          <div class="text-div">
            <input type="text" name="search bar" size="20" />
          </div>
          <div class="search-div">
            <input type="submit" value="Search" />
          </div>
        </div>
      </form>
      <div class="header-bottom-half">
        <nav class="top-nav">
          <a href="index.php">Home</a>
          <section>
            <div class="drop-menu">
              <a href="#">Aisles</a>
              <div class="drop-content">
                <a href="aisle.php?aisle=Meat">Meat</a>
                <a href="aisle.php?aisle=Bread">Bread</a>
                <a href="aisle.php?aisle=Dairy"> Dairy</a>
                <a href="aisle.php?aisle=Electronics">Electronics</a>
                <a href="aisle.php?aisle=Clothing">Clothing</a>
                <a href="aisle.php?aisle=Fruit">Fruit</a>
                <a href="aisle.php?aisle=Vegetable">Vegetables</a>
              </div>
            </div>
          </section>
          <section>
            <div class="drop-menu">
              <a href="#">Popular</a>
              <div class="drop-content">
              <?php
              for($x = 0; $x <= 4; $x++){
                echo "<a href=\"product.php?id=".$x."\">".$xml[0]->product[$x]->name."</a>";
              }
              ?>
                <!-- <a href="clothing_aisle/jeans.html">Jeans</a>
                <a href="bread_aisle/baguette.html">Baguette</a>
                <a href="milk.html">Milk</a>
                <a href="axolotl.html">Axolotl</a>
                <a href="meat-computer.html">MEAT Computer Model X</a>
                <a href="meat-computer.html">MEAT Computer Model X</a> -->
              </div>
            </div>
          </section>
          <section>
            <div class="drop-menu">
              <a href="#">Account</a>
              <div class="drop-content">
                <a href="login.html">Log In</a>
                <a href="sign-up.html">Sign Up</a>
              </div>
            </div>
          </section>
          <section>
            <div class="drop-menu">
              <a href="#">Backend</a>
              <div class="drop-content">
                <a href="product-list.php">Products</a>
                <a href="user-list.php">Users</a>
                <a href="order-list.html">Orders</a>
              </div>
            </div>
          </section>
          <!-- <a href="#">Best Value</a> -->
        </nav>
      </div>
    </header>