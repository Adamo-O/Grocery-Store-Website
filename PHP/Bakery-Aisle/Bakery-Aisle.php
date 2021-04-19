<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bakery</title>
  <link rel="stylesheet" href="../../CSS/style.css">
  <link href="../../css-fas/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">

</head>

<body>
<?php require('../navbar.php'); ?>
  </section>
  <section class="banner">
    <img src="../../Images/Bakery-Aisle/banner.jpg" alt="Banner Image">
    <h2>Bakery</h2>
  </section>
  <section class="products">
    <?php
    $file = fopen("../..//DB/products.json", "r");
    $data = file_get_contents("../..//DB/products.json");
    $json = json_decode($data);
    $products = $json->products;
    foreach ($products as $value) {
      $aisle = $value->aisle;
      if (strcasecmp($aisle, "Bakery-Aisle") == 0) {
        print('
          <div class="fake-margin col">
          <div class="row">
          <img src="../../Images/Bakery-Aisle/' . $value->image . '" alt="' . $value->name . ' Image">
          <p>' . $value->name . '<br>
          <a href="' . $value->name . '.php" class="check">Check it here</a>
          </p>
          </div>
          </div>
        ');
      }
    }
    ?>
  </section>
  <?php require('../footer.php'); ?>
</body>

</html>