<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bakery</title>
  <link rel="stylesheet" href="../../CSS/style.css">
  <link href="../../css-fas/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">

</head>

<body>
  <section class="header">
    <h1><a href="../index.php">La Meilleure Épicerie</a></h1>
  </section>
  <section class="nav-bar">
    <ul class="nav-bar-content">
      <li><a href="../index.php">Home</a></li>
      <li><a href="../index.php#aisles">Aisles</a></li>
      <li><a href="../index.php#offers">Offers</a></li>
      <li><a href="../../HTML/Login.html">Sign in</a></li>
      <li><a href="../../HTML/ShoppingCart.html" id="right">Shopping Cart</a></li>
    </ul>
  </section>
  <section class="banner">
    <img src="../../Images/Bakery-Aisle/banner.jpg" alt="Banner Image">
    <h2>Bakery</h2>
  </section>
  <section class="products">
    <?php
    $file = fopen("../..//DB/products.json", "r");
    $data = file_get_contents("../..//DB/products.json");
    $json = json_decode($data);
    $products = $json->products;
    foreach ($products as $value) {
      $aisle = $value->aisle;
      if (strcasecmp($aisle, "Bakery-Aisle") == 0) {
        print('
          <div class="fake-margin col">
          <div class="row">
          <img src="../../Images/Bakery-Aisle/' . $value->image . '" alt="' . $value->name . ' Image">
          <p>' . $value->name . '<br>
          <a href="' . $value->name . '.php" class="check">Check it here</a>
          </p>
          </div>
          </div>
        ');
      }
    }
    ?>
  </section>
  <section id="footer">
    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
    <h6>
      Thanks for shopping at La Meilleure Épicerie. <br>
      To contact us, please click <a href="../../HTML/contact-us.html" class="contact-page">here</a>.
    </h6>
  </section>
</body>

</html>