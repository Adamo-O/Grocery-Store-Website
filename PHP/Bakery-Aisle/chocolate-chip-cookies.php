<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Chocolate Chip Cookies</title>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link href="../../css-fas/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/P3.css">
    <link rel="stylesheet" href="../../CSS/ProductDes.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php


$file = fopen("../..//DB/products.json", "r");
$data = file_get_contents("../..//DB/products.json");
$data = json_decode($data,true);

?>
  <?php require('../navbar.php'); ?>
    <div class="container h-100 d-flex flex-column">
      <div class="row h-75 mb-4">
        <div class="col-md-6 col-lg-6 grey" style="margin-top:30px">
          <h2 class ="product"><?php echo $data['products'][14]['name']?></h2>
          <br/>
          <div class ="image">
          <?php  print('<img src="../../Images/Bakery-Aisle/'. $data['products'][14]['image'] . '" alt="' . $value->name . ' Image">');?>
          </div>
        </div> 
        <div class="col-md-6 col-sm-12 col-lg-6 grey" style="margin-top:30px">
          <h3 id="price" class ="price">For only $<?php echo $data['products'][14]['price'];?>per patch</h3>
          <form method ="POST" action = "http://localhost/SOEN-287/PHP/Shopping Cart.php">

            <input type ="hidden" name ="name" value ="<?php echo $data['products'][14]['name'];?>s" class ="name">
            <input type ="hidden" value = "<?php echo $data['products'][14]['price'];?>" name ="price"> </h3>
            <label for="quantity">Quantity:</label></br>
            <input type="number" id="quantity" class="quantity" name="quantity"></br>
            <input type ="submit" class="btn" class ="cartButton" onclick ="alert('Succesfully added to cart')" value ="Add To Cart🛒">
          
          </form>
          <button  class="btn" id="desButtonCcc" onclick="showDescriptionCcc()">More Description</button>
          <br/>
          <div id="descContainerCcc" class="container-sm success shadow bg-success offset-3 p-4" hidden>
            <h6 style="color: white;"><? echo $data['products'][14]['description']?></h6>
            <style>
              table,
              th,
              td {
                padding: 10px;
                border: 2px solid white;
                border-collapse: collapse;
                text-align: center;
              }
            </style>
            <table id="descTableCcc" style="color:white;">
              <tr>
                <th colspan="2">Nutrition Table</th>
              </tr>
              <tr>
                <td>Calories</td>
                <td>120</td>
              </tr>
              <tr>
                <th>Values (per cookie)</th>
                <th>Daily %</th>
              </tr>
              <tr>
                <td>Total Fat 4.0g</td>
                <td>6%</td>
              </tr>
              <tr>
                <td>Cholesterol 7.8mg</td>
                <td>3%</td>
              </tr>
              <tr>
                <td>Sodium 63.9mg</td>
                <td>3%</td>
              </tr>
              <tr>
                <td>Carbohydrate 22.8g</td>
                <td>8%</td>
              </tr>
              <tr>
                <td>Protein 1.4g</td>
                <td>3%</td>
              </tr>
            </table>
          </div>
        </div>
    </div>
    <?php require('../footerAisle.php'); ?>
  <script src ="../../JS/p3.js"></script>
  <script src="../.../JS/products.js"></script>
  <script src="../../JS/bakery.js"></script>
</body>
</html>
