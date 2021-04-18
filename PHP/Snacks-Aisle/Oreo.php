<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Oreo</title>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link href="../../css-fas/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/P3.css">
    <link rel="stylesheet" href="../../CSS/ProductDes.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
    <div class="container h-100 d-flex flex-column">
      <div class="row h-100 mb-4">
        <div class="col-md-6 col-lg-6 grey" style="margin-top:30px">
          <h2 class ="product"><?php echo $data['products'][26]['name']?></h2>
          <br/>
          <div class ="image">
          <?php  print('<img src="../../Images/Snacks-Aisle/' . $data['products'][26]['image'] . '" alt="' . $value->name . ' Image">');?>
          </div>
        </div> 
        <div class="col-md-6 col-sm-12 col-lg-6 grey" style="margin-top:30px">
          <h3 id="price" class ="price">For only $<?php echo $data['products'][26]['price']?>/ 500g</h3>
          <label for="quantity">Quantity:</label>
          <div class="input">
            <input type="number" id="quantity"  class="quantity" name="quantity">
          </div>
          <br/>
          <button  class="btn" style ="background-color:cyan" class="desButton" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">More Description</button>
          <br/>
          <h4 class="collapse" id="collapseExample"><br/>The world's favourite cookie. Delicious and full of Wonder for over 100 years. This traditional cookie couldn't be any simpler - rich, creamy filling between two chocolate wafers.<br/></h4> 
          <table class="collapse"  id="collapseExample" style="border: 1px solid">
            <tr><th>Nutrition</th></tr>
            <tr>
              <th colspan ="2"></th>
              <th colspan ="2">% DV</th>
            </tr>
            <tr>
              <th>Total fat</th>
              <td></td>
              <td>7%</td>
            </tr>
            <tr>
              <th>Total carbohydrate</th>
              <td></td>
              <td>6%</td>
            </tr>
            <tr>
              <th>Sodium</th>
              <td></td>
              <td>3%</td>
            </tr>
            <tr>
              <th>Calcium</th>
              <td></td>
              <td>6%</td>
            </tr>
            <tr>
              <th>Iron</th>
              <td></td>
              <td>6%</td>
            </tr>
          </table><br/>
          <button class="btn" style ="background-color:cyan"onclick="getData()" id ="cartButton"  onclick="addRow()">Add To Cart🛒</button>
        </div>
    </div>
    <section id="footer">
      <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
      <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
      <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
      <h6>
        Thanks for shopping at La Meilleure Épicerie. <br>
        To contact us, please click <a href="../contact-us.html" class="contact-page">here</a>.
      </h6>
    </section>
  <script src="../../JS/p3.js"></script>
  <script src ="../../JS/products.js"></script>
</body>
</html>