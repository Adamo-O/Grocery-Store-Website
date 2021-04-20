<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Belted Sirloin Meat</title>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link href="../../css-fas/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/P3.css">
    <link rel="stylesheet" href="../../CSS/meatDesc.css">
    <link rel="stylesheet" href="../../CSS/ProductDes.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </div>
</head>
<body onload="checkItemPrice()">
<?php


$file = fopen("../..//DB/products.json", "r");
$data = file_get_contents("../..//DB/products.json");
$data = json_decode($data,true);

?>
  <?php require('../navbarAisle.php'); ?>
    <div class="container d-flex flex-column">
      <div class="row mb-4" id="productContainer">
        <div class="col-md-6 col-lg-6 grey" style="margin-top:30px">
          <h2 class ="product"><?php echo $data['products'][6]['name']?></h2>
          <br/>
          <div class ="image">
          <?php  print('<img src="../../Images/Meat-Aisle/' . $data['products'][6]['image'] . '" alt="' . $value->name . ' Image">');?>
          </div>
        </div> 
        <div class="col-md-6 col-sm-12 col-lg-6 grey" style="margin-top:30px">
          <h3 id="price" class ="price"><?php echo $data['products'][6]['price']?>
            
          </h3>
          <form method ="POST" action = "../Order.php">

          <button class="general-btn" type ="submit" class="btn" class ="general-btn" onclick ="alert('Succesfully added to cart')" value ="Add To Cart🛒">Add To Cart</button>
          <input type ="hidden" name ="name" value ="Belted Galliway Sirloin" class ="name">
          <input type ="hidden" value = "<?php echo $data['products'][6]['price']?>" name ="price"> </h3>
          <button type ="button" class="general-btn add" onclick="add()">+</button>
          
          <input readonly type="text" id="quantity" name="quantity" placeholder="Quantity">
          <button type ="button" class="general-btn subtract inactive-btn" onclick="subtract()">-</button>
        
      </form>
          <button class="btn desButton" onclick="showDescription()">More Description</button>
          <div id="description" class="hideDesc">
            <p id="description-text">
            <?php echo $data['products'][6]['description']?>
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
                <td>274</td>
              </tr>
              <tr>
                <td>Total Fat (g)</td>
                <td>22.07</td>
              </tr>
              <tr>
                <td>Protein (g)</td>
                <td>17.51</td>
              </tr>
            </table>
            </div>
          </div>
          <br/>
        </div>
    </div>
    <?php require('../footerAisle.php'); ?>
  <script src="../../JS/prices.js"></script>
  <script src="../../JS/meat.js"></script>
  <script src ="../../JS/p3.js"></script>
  <script src="../../JS/products.js"></script>
</body>
</html>