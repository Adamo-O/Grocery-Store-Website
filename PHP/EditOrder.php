<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Order</title>
  <link rel="stylesheet" href="../CSS/edit.css">
  <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/orderstyle.css">

    <?php 
        include('send-email.php');
        if (isset($_GET['orderNumber']) && !empty($_GET['orderNumber'])) {
            //session_unset();
            //session_start();
            //session_unregister('orderNumber');
            $_SESSION['orderNumber'] = $_GET['orderNumber'];
        }
    ?>
</head>

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
        <h2 class="title" id="title2">EDIT ORDER</h2>
        <div class="table">
                <form method="get" action="EditOrder.php">
                    
                    <table class = "edit-table">
                        <legend id="ordernum">Order <?php echo $_SESSION['orderNumber'] ?></legend>
                        <tr>
                            <th colspan="2">Item</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            // Save quantity changes
                            $ordersTemp = json_decode(file_get_contents("../DB/orders.json"), true);
                            $orderIndex = 0;
                            foreach ($ordersTemp['orders'] as $orderTemp => $orderInfoTemp) {
                                if ($orderInfoTemp['orderNumber'] == $_SESSION['orderNumber']) {
                                    $productIndex = 0;
                                    foreach ($orderInfoTemp['order'] as $productTemp => $productInfoTemp) {
                                        if (isset($_GET[$productInfoTemp['name']])) {
                                            $ordersTemp['orders'][$orderIndex]['order'][$productIndex]['quantity'] = $_GET[$productInfoTemp['name']];
                                        }
                                        $productIndex++;
                                    }
                                    if (isset($_GET[$productInfoTemp['name']])) {
                                        sendEmail($_SESSION['user']['email'], "Your order with order number " . $_SESSION['orderNumber'] . " has been edited.", "Please visit us to confirm. ");
                                    }
                                    break;
                                }
                                $orderIndex++;
                            }
                            
                            file_put_contents("../DB/orders.json", json_encode($ordersTemp));
                        
                            // Update table
                            $orders = json_decode(file_get_contents("../DB/orders.json"), true);
                            foreach($orders['orders'] as $order => $orderInfo) {
                                if ($orderInfo['orderNumber'] == $_SESSION['orderNumber']) {
                                    foreach ($orderInfo['order'] as $product => $productInfo) {
                        ?>
                                    <tr>
                                        <td class="img"><img src="../Images/<?php echo findAisle($productInfo['name']);?>" height="80px" width="80px"></td>
                                        <td><?php echo $productInfo['name'] ?></td>
                                        <td>
                                            <input type="number" step="any" id="quantity" class="form-content" name="<?php echo $productInfo['name']?>" placeholder="<?php echo $productInfo['quantity']?>" value="<?php echo $productInfo['quantity']?>">
                                        </td>
                                        <td><a href = "EditOrder.php?delete=<?php echo $orderInfo['orderNumber'];?>"><button>delete</button></a></td>
                                    </tr>
                        <?php 
                                    }
                                    break;
                                }
                            }
                        ?>
                        </form>
                    </table>
                    <br>
                    <div class = "large-buttons-edit">
                        <input type="hidden" name="orderNumber" value="<?php echo $_SESSION["orderNumber"]?>"/>
                        <button type="submit" id = "save-edit">Save changes</button>
                    </div>
                </form>
                

        </div>
    
    </div>
    <?php
    function findAisle($productName) {
        $ps = json_decode(file_get_contents("../DB/products.json"), true);
        foreach ($ps['products'] as $p => $pInfo) {
            if ($pInfo['name'] == $productName)
                return $pInfo['aisle'] . "/" . $pInfo['image'];
        }
    }
    ?>
</body>