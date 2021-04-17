<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/style.css">
  <link href="../../css-fas/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../CSS/ProductDes.css">
  <title>Crab</title>
</head>

<body>
<?php

$file = fopen("../..//DB/products.json", "r");
$data = file_get_contents("../..//DB/products.json");
$data = json_decode($data,true);

?>
  <?php require('../navbar.php'); ?>
  <div class="content-container">
    <div class="col-50">
      <h3><?php echo $data['products'][18]['name']?></h3>
      <div class="img-container">
        <img src="../../Images/Fish-And-Sea-Food-Aisle/crab.png" alt="Crab Image">
      </div>
    </div>
    <div class="col-50">
      <p id="price" class="price">For only $<?php echo $data['products'][18]['price']?> per pound</p>
      <div class="quantity-container">
        
        <form method ="POST" action = "../Order.php">
          <button class="general-btn" type ="submit" class="btn" class ="general-btn" onclick ="alert('Succesfully added to cart')" value ="Add To Cart🛒">Add To Cart</button>
          <input type ="hidden" name ="name" value ="Crab" class ="name">
          <input type ="hidden" value = "<?php echo $data['products'][18]['price']?>" name ="price"> </h3>
          <button type ="button" class="general-btn add" onclick="add()">+</button>
          
          <input readonly type="text" id="quantity" name="quantity" placeholder="Quantity">
          <button type ="button" class="general-btn subtract inactive-btn" onclick="subtract()">-</button>
        
        </form>
      <button class="general-btn des-btn" onclick="description()">More Description</button>
      <div class="description">
        <p class="description-details">
          Our Finest Crab which is fully cooked and ready to eat. Wild harvested. Legs & Claws.
        </p>
        <table class="nutrition-value">
          <tr>
            <th colspan="2">Nutrition Facts</th>
          </tr>
          <tr>
            <th colspan="2">Amounts are pers serving</th>
          </tr>
          <tr>
            <th>Total fat</th>
            <td>2%</td>
          </tr>
          <tr>
            <th>Total Carbohydrate</th>
            <td>0%</td>
          </tr>
          <tr>
            <th colspan="2">Vitamins & Minerals</th>
          </tr>
          <tr>
            <td>Vitamin A 7%</td>
            <td>Vitamin C 12%</td>
          </tr>
          <tr>
            <td>Calcium 5%</td>
            <td>Sodium 44%</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <?php require('../footer.php'); ?>
  <script src="../../JS/products.js"></script>
  <script src ="../../JS/p3.js"></script>
</body>

</html>