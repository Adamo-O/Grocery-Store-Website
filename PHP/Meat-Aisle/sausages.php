<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Sausages</title>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link href="../../css-fas/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/P3.css">
    <link rel="stylesheet" href="../../CSS/meatDesc.css">
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
    <h1><a href="../index.html" class="link">La Meilleure Épicerie</a></h1>
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
    </div>
    <div class="container d-flex flex-column">
      <div class="row mb-4" id="productContainer">
        <div class="col-md-6 col-lg-6 grey" style="margin-top:30px">
          <h2 class ="product"><?php echo $data['products'][9]['name']?></h2>
          <br/>
          <div class ="image">
            <img src="../../Images/Meat-Aisle/sausages.png"class="img-fluid" alt="Sausages">
          </div>
        </div> 
        <div class="col-md-6 col-sm-12 col-lg-6 grey" style="margin-top:30px">
          <h3 id="price" class ="price">For only $<?php echo $data['products'][9]['price']?> per pound</h3>
          <label for="quantity">Quantity:</label>
          <div class="input">
            <input type="number" id="quantity" class="quantity" name="quantity">
          </div>         
          <button class="btn cartButton" onclick ="getData()">Add To Cart🛒</button>
          <br/>
          <button class="btn desButton" onclick="showDescription()">More Description</button>
          <div id="description" class="hideDesc">
            <p id="description-text">
              Being one of our most popular imported meats, Italian Sausage merits its praise.<br/>
              Perfect for sandwiches, combining with cheese spreads, or just devouring it alone. You can never go wrong with this one.
            </p>
            <div>
              <table id="nutrition">
              <tr>
                <th id="nutritionTitle" colspan="2">Nutritional Facts</th>
              </tr>
              <tr>
                <th id="nutritionLegend" colspan="2">Values per 100g</th>
              </tr>
              <tr>
                <td>Total Calories</td>
                <td>344</td>
              </tr>
              <tr>
                <td>Total Fat 27g</td>
                <td>42%</td>
              </tr>
              <tr>
                <td>Saturated Fat 10g</td>
                <td>50%</td>
              </tr>
              <tr>
                <td>Cholesterol 57mg</td>
                <td>19%</td>
              </tr>
            </table>
            </div>
            
          </div>
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
  <script src="../../JS/prices.js"></script>
  <script src="../../JS/meat.js"></script>
  <script src="../../JS/p3.js"></script>
  <script src="../../JS/products.js"></script>
</body>
</html>