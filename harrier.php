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
      var page = "-harrier";
      localStorage.setItem("PriceMultiplier" + page, 1);
    </script>
    <title>Axolotl</title>
  </head>
  <body>
    <?php include "php-templates/header.php"?>
    <main class="page-content">
      <article class="article-product">
        <h2>Harrier</h2>
        <div class="article-container">
          <img src=img/HarrierA.png width = 40% alt = "Image of a Harrier">
          <button onclick="ShowExtraDetails()">Show Extra Details</button>
          <!--style="display: none" needs to be there or else it will take 2 clicks to show extra details-->
          <div id="extra-details" style="display: none">
            <p>Taste: Feathers, Disgusting</p>
            <p>1 Harrier Mass: 400gr</p>
            <p>1 Harrier Carbohyrate: 0gr</p>
            <br />
            <p>
              An ancient bird with murderous tendencies. Trained to kill any pest that makes the mistake of passing by your home. 
              After you purchase your very own harrier, red will rain from the sky and the short lives of any pests or 
              babies will be savagely violent!
            </p>
          </div>
          <h3>Buy your own Harrier today!</h3>
          <h3 class="price">Price: $20</h3>
          <h3 class="price">
            <div id="price-displayed">Pay: 20$</div>
          </h3>
          <form action="#">
            <input
              type="number"
              name="Add x to cart"
              size="20"
              id="quantity"
              min="1"
              onkeyup="ChangeQuantityKeyUp(20)"
              onclick="ChangeQuantityKeyUp(20)"
            />
            <select id="select-type" onchange="OnChangeSelected()">
              <option value="combat-harrier">Combat Harrier</option>
            </select>
            <input class="add-to-cart" type="submit" value="Add x To Cart" />
          </form>
          <div>
            <button onclick="AddToQuantity(20)">Add</button>
            <button onclick="SubtractFromQuantity(20)">Subtract</button>
          </div>
        </div>
      </article>
    </main>
    <?php include "php-templates/footer.php"?>
  </body>
  <script type="text/javascript" src="product.js"></script>
</html>
