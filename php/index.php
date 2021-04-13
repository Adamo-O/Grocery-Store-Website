<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grocery Store</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <link href="../css-fas/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">
</head>

<body onload="warningStatus()">
  <?php require('navbar.php'); ?>
  <div class="covid-19">
    <h4>Delivery time may vary due to COVID-19</h4>
    <button onclick="disappear(this)"><i class="far fa-times-circle fa-2x close"></i></button>
  </div>
  <section class="banner">
    <img src="../Images/banner.png" alt="Banner Image">
    <h3>La Meilleure Épicerie</h3>
    <p>We are a family based business in Montreal. Our aim is to only provide our customers with the freshest,
      finest, and most delicious food they can find anywhere with astonishingly low prices!!
    </p>
  </section>

  <section id="offers">
    <h3 class="section-title">Weekly Offers</h3>
    <?php
    $file = fopen("..//DB/products.json", "r");
    $data = file_get_contents("..//DB/products.json");
    $json = json_decode($data);
    $products = $json->products;
    $foundOffers = false;
    foreach ($products as $value) {
      $offerPrice = $value->price;
      $originalPrice = $value->originalPrice;
      if ($offerPrice < $originalPrice) {
        $foundOffers = true;
        print('
          <div class="fake-margin">
          <div class="row">
          <img src="../Images/' . $value->aisle . '/' . $value->name . '.png" alt="' . $value->name . ' image">
          <p>Check our organic fresh<br>' . $value->name . '<br>
          <span class="offer-price">from only $' . $offerPrice . ' per pound</span><br>
          <a href="../HTML/' . $value->aisle . '/' . $value->name . '.html" class="check">Check it here</a>
          </p>
          </div>
          </div>
        ');
      }
    }
    if (!$foundOffers) {
      print('
          <h4 class="section-title">Unfortunately there are no offers this week please check again next week</h4>
        ');
    }

    ?>
  </section>

  <section id="aisles">
    <h3 class="section-title">Aisles</h3>
    <ul>
      <!--Change the links-->
      <li><a href="fruits-and-vegetables-aisle/fruits-and-vegetables-aisle.php">Fruits and Vegatables</a></li>
      <li><a href="Meat-Aisle/meat-aisle.php">Meat</a></li>
      <li><a href="Fish-And-Sea-Food-Aisle/fish-and-sea-food-aisle.php">Fish and Sea food</a></li>
      <li><a href="Bakery-Aisle/Bakery-Aisle.php">Bakery</a></li>
      <li><a href="Dairy-Products-Aisle/Dairy-Products-Aisle.php">Diary Products</a></li>
      <li><a href="Snacks-Aisle/Snacks-Aisle.php">Snacks</a></li>
    </ul>
  </section>

  <?php
  require('footer.php');
  ?>

  <script src="../JS/index.js"></script>
</body>

</html>