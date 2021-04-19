<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order History</title>

  <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/orderstyle.css">

<body>
  <div class="sidebar">
    <header>La Meilleure Épicerie</header>
    <div class="list-group"></div>
    <a href="index.php" id="home"
      class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Home

      <a href="products/products.php" id="Inventory"
        class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Inventory

        <a href="../HTML/userList.html" id="accounts"
          class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Accounts</a>
        <a href="OrderHistory.php" id="orders"
          class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Orders</a>
        <a href="#" id="analytics"
          class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Analytics</a>
        <a href="#" id="settings"
          class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Settings</a>
        <a href="" id="reports"
          class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Reports</a>
        <a href="#" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action"
          id="login"> <b>Logout</b></a></li>

  </div>
    <div class="container">
        <h2 class="title">ORDER HISTORY</h2> 
        <div class="table">
            <table>
                
                <tr>
                    <th>order number</th>
                    <th>order price</th>
                    <th>order details</th>
                    <th colspan="2">actions</th>
                </tr>
                <?php
                    // If GET request to delete, find it in orders.json, delete it, and put new contents 
                    if (isset($_GET['delete'])) {
                        $ordersTemp = json_decode(file_get_contents("../DB/orders.json"), true);
                        foreach ($ordersTemp['orders'] as $orderTemp => $orderTempInfo) {
                            if ($orderTempInfo['orderNumber'] == $_GET['delete']) {
                                unset($ordersTemp['orders'][$orderTemp]);
                                break;
                            }
                        }
                        file_put_contents("../DB/orders.json", json_encode($ordersTemp));
                    }

                    // Create table with orders
                    $orders = json_decode(file_get_contents("../DB/orders.json"), true);
                    foreach($orders['orders'] as $order => $orderInfo) {
                        ?>
                        <tr>
                            <td class="order-number"><?php echo $orderInfo['orderNumber']?></td>
                            <td><?php echo "$" . $orderInfo['total']?></td>
                            <td>
                            <?php 
                            foreach ($orderInfo['order'] as $product => $productInfo) {
                                echo $productInfo['quantity'] . "x " . $productInfo['name'] . "<br />";
                            }
                            ?>
                            </td>
                            <td><a href = "EditOrder.php?orderNumber=<?php echo $orderInfo['orderNumber'];?>"><button>edit</button></a></td>
                            <td><a href = "OrderHistory.php?delete=<?php echo $orderInfo['orderNumber'];?>"><button>delete</button></a></td>
                        </tr>
                        <?php
                    }
                ?>
                
            </table>

        </div>
        
    </div>

</body>