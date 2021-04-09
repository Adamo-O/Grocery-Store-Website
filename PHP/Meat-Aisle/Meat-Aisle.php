<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meat</title>
  <link rel="stylesheet" href="../../CSS/style.css">
  <link href="../../css-fas/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../CSS/ProductDes.css">
</head>

<body>
  <section class="header">
    <h1><a href="../index.php">La Meilleure Épicerie</a></h1>
  </section>
  <section class="nav-bar">
    <ul class="nav-bar-content">
      <li><a href="../index.html">Home</a></li>
      <li><a href="../index.html#aisles">Aisles</a></li>
      <li><a href="../index.html#offers">Offers</a></li>
      <li><a href="../Login.html">Login</a></li>
      <li><a href="../../Sign Up.html">Sign Up</a></li>
      <li><a href="../../HTML/ShoppingCart.html" id="right">Shopping Cart</a></li>
    </ul>
  </section>
  <section class="banner">
    <img src="../../Images/Meat-Aisle/banner.png" alt="Banner Image">
    <h2>Meat</h2>
  </section>
  <section class="products">
  <?php
    $file = fopen("../..//DB/products.json", "r");
    $data = file_get_contents("../..//DB/products.json");
    $json = json_decode($data);
    $products = $json->products;
    foreach ($products as $value) {
      $aisle = $value->aisle;
      if (strcasecmp($aisle, "Meat-Aisle") == 0) {
        print('
          <div class="fake-margin col">
          <div class="row">
          <img src="../../Images/Meat-Aisle/' . $value->name . '.png" alt="' . $value->name . ' Image">
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