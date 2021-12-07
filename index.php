<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="style.css" rel="stylesheet" />
    <link href="img/Axlot.png" rel="icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Matthew Kazemie  ID: 40190450" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bart's Hypermarket</title>
  </head>
  <body>
  <?php include "php-templates/header.php"?>
    <main class="page-content">
      <article class="great-deals">
        <h2>Great Deals</h2>
        <div class="article-container">
          <ul class="great-deals-list">
            <li>
              <p>
                <a href="clothing_aisle/jeans.html"><img src=img/Jeans.jpg width=20% alt="Image of a pair of
                  jeans"></a>
                <a href="clothing_aisle/jeans.html">Jeans</a> Buy one Get one
                Free!
              </p>
            </li>
            <li>
              <p>
                <a href="bread_aisle/baguette.html"><img src=img/baguette.jpg width = 20% alt = "Image of a
                  Baguette"></a>
                <a href="bread_aisle/baguette.html">Baguette</a> 0% off!
              </p>
            </li>
            <li>
              <p>
                <a href="milk.html">
                  <img src=img/milk.jpg width = 20% alt = "Image of milk">
                </a>
                <a href="milk.html"> Milk </a> 99% off!
              </p>
            </li>
            <li>
              <p>
                <a href="axolotl.html">
                  <img src=img/Axlot.png width = 20% alt = "Image of an Axolotl">
                </a>
                <a href="axolotl.html">Axolotl</a> 99% off!
              </p>
            </li>
            <li>
              <p>
                <a href="meat-computer.html">
                  <img src=img/MeatModelX.png width = 20% alt = "Image of a MEAT
                Model X">
                </a>
                <a href="meat-computer.html">MEAT Computer Model X</a> 99% off!
              </p>
            </li>
          </ul>
        </div>
      </article>
    </main>
    <?php include "php-templates/footer.php"?>
  </body>
</html>