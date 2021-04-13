<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Review</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <link href="../css-fas/all.css" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/order.css">
  <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">
</head>

<body>
  <?php
  require('navbar.php');
  ?>

  <?php
  $orderNumberClient = strval($_POST["orderNumber"]);
  // Add check if the user is logged in
  if (empty($_SESSION['logIn'])) {
    header('Location: ../HTML/login.html');
  }
  $file = fopen("..//DB/orders.json", "r");
  $data = file_get_contents("..//DB/orders.json");
  $json = json_decode($data);
  $orders = $json->orders;
  $isFound = false;
  foreach ($orders as $value) {
    $orderNumberDB =  strval($value->orderNumber);
    if (strcasecmp($orderNumberDB, $orderNumberClient) == 0) {
      // Load the order
      $order = $value->order;
      print_table($order, $orderNumberClient);
      $isFound = true;
      break;
    } 
  }
  if (!$isFound) {
    print("
      <div class='contact-us'>
      <h3>Could not find the order number $orderNumberClient</h3>
      </div>
    ");
  }
  fclose($file);
  ?>
  
  <?php
  function print_table($arr, $num){
    print("
      <div class='contact-us'>
      <h3>The order for order number $num</h3>
      <br/>
      <table class='order'>
      <tr>
      <th colspan='2'>Orders</th>
      </tr>
      <tr>
      <th>Name</th>
      <th>Quantity</th>
      </tr>"
    );
    foreach ($arr as $value) {
      print("
        <tr>
        <td> $value->name </td>
        <td> $value->quantity </td>
        </tr>
      ");
    }
    print("
      </table>
      </div>
    ");
  }
  ?>

  <?php
  require('footer.php');
  ?>

  <script src="../JS/index.js"></script>
</body>

</html>