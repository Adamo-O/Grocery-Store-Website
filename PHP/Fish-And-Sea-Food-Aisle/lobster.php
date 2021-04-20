<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/style.css">
  <link href="../../css-fas/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../CSS/ProductDes.css">
  <title>Lobster</title>
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
      <h3><?php echo $data['products'][19]['name']?></h3>
      <div class="img-container">
      <?php  print('<img src="../../Images/Fish-And-Sea-Food-Aisle/' . $data['products'][19]['image'] . '" alt="' . $value->name . ' Image">');?>
      </div>
    </div>
    <div class="col-50">
      <p id="price" class="price">For only $<?php echo $data['products'][19]['price']?> per pound</p>
      <form method ="POST" action = "../Order.php">
          <input type ="hidden" name ="name" value ="Lobster" class ="name">
          <input type ="hidden" value = "<?php echo $data['products'][19]['price']?>" name ="price"> </h3>
          <button type ="button" class="general-btn add" onclick="add()">+</button>
          
          <input readonly type="text" id="quantity" name="quantity" placeholder="Quantity">
          <button type ="button" class="general-btn subtract inactive-btn" onclick="subtract()">-</button>
          <button class="general-btn" type ="submit" class="btn" class ="general-btn" onclick ="alert('Succesfully added to cart')" value ="Add To Cart🛒">Add To Cart</button>
        
        </form>
      <button class="general-btn des-btn" onclick="description()">More Description</button>
      <div class="description">
        <p class="description-details">
        <?php echo $data['products'][19]['description']?>
      </p>
        <table class="nutrition-value">
          <tr>
            <th colspan="2">Nutrition Facts</th>
          </tr>
          <tr>
            <th colspan="2">Amounts are per
              s serving</th>
          </tr>
          <tr>
            <th>Total fat</th>
            <td>1%</td>
          </tr>
          <tr>
            <th>Total Carbohydrate</th>
            <td>1%</td>
          </tr>
          <tr>
            <th colspan="2">Vitamins & Minerals</th>
          </tr>
          <tr>
            <td>Vitamin A 2%</td>
            <td>Vitamin C 0%</td>
          </tr>
          <tr>
            <td>Sodium 23%</td>
            <td>Calcium 10%</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <?php require('../footerAisle.php'); ?>
  <script src="../../JS/products.js"></script>
  <script src ="../../JS/p3.js"></script>
</body>

</html>