<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Chocolate Cake</title>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link href="../../css-fas/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../../CSS/P3.css">
    <link rel="stylesheet" href="../../CSS/ProductDes.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<?php


$file = fopen("../..//DB/products.json", "r");
$data = file_get_contents("../..//DB/products.json");
$data = json_decode($data,true);

?>
  <div class="header p-3">
    <h1><a href="../index.php" class="link">La Meilleure Épicerie</a></h1>
  </div>
<div class="nav-bar mx-4">
    <ul class="nav-bar-content mb-3">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../index.php#aisles">Aisles</a></li>
        <li><a href="../index.php#offers">Offers</a></li>
        <li><a href="../../HTML/Login.html">Login</a></li>
        <li><a href="../../HTML/Sign Up.html">Sign Up</a></li>
        <li><a href="../../HTML/ShoppingCart.html" id="right">Shopping Cart</a></li>
    </ul>
    <div class="container h-100 d-flex flex-column">
      <div class="row h-75 mb-4">
        <div class="col-md-6 col-lg-6 grey" style="margin-top:30px">
          <h2 class ="product"><?php echo $data['products'][13]['name']?></h2>
          <br/>
          <div class ="image">
          <?php  print('<img src="../../Images/Bakery-Aisle/' . $data['products'][13]['image'] . '" alt="' . $value->name . ' Image">');?>
          </div>
        </div> 
        <div class="col-md-6 col-sm-12 col-lg-6 grey" style="margin-top:30px">
          <h3 id="price" class ="price">For only $<?php echo $data['products'][13]['price'];?> each</h3>
          <form method ="POST" action = "http://localhost/SOEN-287/PHP/Shopping Cart.php">

            <input type ="hidden" name ="name" value ="Chocolate Cake" class ="name">
            <input type ="hidden" value = "12.99" name ="price"> </h3>
            <label for="quantity">Quantity:</label></br>
            <input type="number" id="quantity" class="quantity" name="quantity"></br>
            <input type ="submit" name ="submit" class="btn" class ="cartButton" onclick ="alert('Succesfully added to cart')" value ="Add To Cart🛒">
          
          </form>
          <button  class="btn" class="desButton">More Description</button>
          <br/>
        </div>
    </div>
  <div id="footer">
    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
    <h6>
        Thanks for shopping at La Meilleure Épicerie. <br> 
        To contact us please use one of our social media.
    </h6>
  </div>
  <script src ="../../JS/p3.js"></script>
  <script src="../.../JS/products.js"></script>
</body>
</html>