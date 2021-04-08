<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/style.css">
  <link href="../../css-fas/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../CSS/ProductDes.css">
  <title>Tuna</title>
</head>

<body>
<?php


$file = fopen("../..//DB/products.json", "r");
$data = file_get_contents("../..//DB/products.json");
$data = json_decode($data,true);

?>
  <section class="header">
    <h1><a href="../index.html">La Meilleure Épicerie</a></h1>
  </section>
  <section class="nav-bar">
    <ul class="nav-bar-content">
      <li><a href="../index.php">Home</a></li>
      <li><a href="../index.php#aisles">Aisles</a></li>
      <li><a href="../index.php#offers">Offers</a></li>
      <li><a href="../../HTML/Login.html">Login</a></li>
      <li><a href="../../HTML/Sign Up.html">Sign Up</a></li>
      <li><a href="../../HTML/ShoppingCart.html" id="right">Shopping Cart</a></li>
    </ul>
  </section>
  <div class="content-container">
    <div class="col-50">
      <h3><?php echo $data['products'][23]['name']?></h3>
      <div class="img-container">
        <img src="../../Images/Fish-And-Sea-Food-Aisle/tuna.png" alt="Tuna Image">
      </div>
    </div>
    <div class="col-50">
      <p id="price" class="price">For only $<?php echo $data['products'][23]['price']?> per bundle</p>
      <button onclick="getData()" class="general-btn">Add To Cart</button>
      <div class="quantity-container">
        <label for="quantity"></label>
        <button class="general-btn add" onclick="add()">+</button>
        <input readonly type="text" id="quantity" name="quantity" placeholder="Quantity">
        <button class="general-btn subtract inactive-btn" onclick="subtract()">-</button>
      </div>
      <button class="general-btn des-btn" onclick="description()">More Description</button>
    </div>
  </div>
  <section id="footer">
    <a href="https://facebook.com" target="_blank"><em class="fab fa-facebook fa-2x"></em></a>
    <a href="https://instagram.com" target="_blank"><em class="fab fa-instagram fa-2x"></em></a>
    <a href="https://twitter.com" target="_blank"><em class="fab fa-twitter-square fa-2x"></em></a>
    <h6>
      Thanks for shopping at La Meilleure Épicerie. <br>
      To contact us, please click <a href="../../HTML/contact-us.html" class="contact-page">here</a>.
    </h6>
  </section>
  <script src="../../JS/products.js"></script>
  <script src ="../../JS/p3.js"></script>
</body>

</html>