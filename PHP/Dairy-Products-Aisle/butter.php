<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/style.css">
  <link href="../../css-fas/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../CSS/ProductDes.css">
  <title>Butter</title>
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
      <h3><?php echo $data['products'][32]['name']?></h3>
      <div class="img-container">
      <?php  print('<img src="../../Images/Dairy-Products-Aisle/' . $data['products'][32]['image'] . '" alt="' . $value->name . ' Image">');?>
      </div>
    </div>
    <div class="col-50">
      <p id="price" class = "price">For only $<?php echo $data['products'][32]['price'];?> </p>

      <div class="quantity-container">
        
        <form method ="POST" action = "http://localhost/SOEN-287/PHP/Shopping Cart.php">
          <button class="general-btn" type ="submit" class="btn" class ="general-btn" onclick ="alert('Succesfully added to cart')" value ="Add To Cart🛒">Add To Cart</button>
          <input type ="hidden" name ="name" value ="Butter" class ="name">
          <input type ="hidden" value = "<?php echo $data['products'][32]['price'];?>" name ="price"> </h3>
          <button type ="button" class="general-btn add" onclick="add()">+</button>
          
          <input readonly type="text" id="quantity" name="quantity" placeholder="Quantity">
          <button type ="button" class="general-btn subtract inactive-btn" onclick="subtract()">-</button>
        
        </form>
      </div>
      <button class="general-btn des-btn" onclick="moredescription()">More Description</button>
      <div id= "des" style="visibility: hidden;">
        <p>
        <?php echo $data['products'][32]['description']?>
        </p>
        <table class="nutrition-value">
          <tr>
            <th colspan="2">Nutrition Facts</th>
          </tr>
          <tr>
            <th colspan="2">Amounts are per 1tbsp</th>
          </tr>
          <tr>
            <th>Total Calories</th>
            <td>102  </td>
          </tr>
          <tr>
            <th>Total fat</th>
            <td>11.5g </td>
          </tr>
        
          <tr>
            <th colspan="2">Vitamins & Minerals</th>
          </tr>
          <tr>
            <td>Vitamin B12 </td>
            <td>Vitamin A </td>
          </tr>
          <tr>
            <td>Vitamin K </td>
            <td>Vitamin E  </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <?php require('../footer.php'); ?>
  <script src="../../JS/milkproduct.js"></script>
  <script src="../../JS/p3.js"></script>
  <script src ="../../JS/products.js"></script>
</body>

</html>