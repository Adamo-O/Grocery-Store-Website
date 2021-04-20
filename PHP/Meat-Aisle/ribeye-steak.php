<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Rib Eye Steak</title>
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
  <?php require('../navbarAisle.php'); ?>
    <div class="container d-flex flex-column">
      <div class="row mb-4" id="productContainer">
        <div class="col-md-6 col-lg-6 grey" style="margin-top:30px">
          <h2 class ="product"><?php echo $data['products'][8]['name']?></h2>
          <br/>
          <div class ="image">
          <?php  print('<img src="../../Images/Meat-Aisle/' . $data['products'][8]['image'] . '" alt="' . $value->name . ' Image">');?>
          </div>
        </div> 
        <div class="col-md-6 col-sm-12 col-lg-6 grey" style="margin-top:30px">
          <h3 id="price" class ="price">For only $<?php echo $data['products'][8]['price']?> per pound</h3>
          <form method ="POST" action = "../Order.php">

          <button class="general-btn" type ="submit" class="btn" class ="general-btn" onclick ="alert('Succesfully added to cart')" value ="Add To Cart🛒">Add To Cart</button>
          <input type ="hidden" name ="name" value ="Ribeye Steak" class ="name">
          <input type ="hidden" value = "<?php echo $data['products'][8]['price']?>" name ="price"> </h3>
          <button type ="button" class="general-btn add" onclick="add()">+</button>
          
          <input readonly type="text" id="quantity" name="quantity" placeholder="Quantity">
          <button type ="button" class="general-btn subtract inactive-btn" onclick="subtract()">-</button>
        
      </form>
          <button  class="btn desButton" onclick="showDescription()">More Description</button>
          <div id="description" class="hideDesc">
            <p id="description-text">
            <?php echo $data['products'][8]['description']?>
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
                <td>271</td>
              </tr>
              <tr>
                <td>Total Fat 19g</td>
                <td>29%</td>
              </tr>
              <tr>
                <td>Saturated Fat 8.4g</td>
                <td>42%</td>
              </tr>
              <tr>
                <td>Cholesterol 78mg</td>
                <td>26%</td>
              </tr>
            </table>
            </div>
            
          </div>
        </div>
    </div>
    <?php require('../footerAisle.php'); ?>
  <script src="../../JS/prices.js"></script>
  <script src="../../JS/meat.js"></script>
  <script src ="../../JS/p3.js"></script>
</body>
</html>