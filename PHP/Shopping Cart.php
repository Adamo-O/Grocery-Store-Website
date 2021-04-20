<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="../css-fas/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../Images/re.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="../CSS/P4.css">
    <script src="../JS/p3.js"></script>

</head>
<body onload="addRows()">
    <?php require('navbar.php'); ?>

    <h2>Shopping bag</h2>

    <br/>

    <a href="index.php" class="previous">&laquo; Continue Shopping</a>
    <form method ="post">
      <button type ="submit" name ="order" value="submitted" class="previous" >Order Now >></button>
    </form>

    <br/><br/><br/>
    <table id="table1"  class="table">
      <tr>
        <th scope="col" style = "color:orange" >Name</th>
        <th scope="col " style = "color:orange">Quantity</th>
        <th scope="col" style = "color:orange" >Price</th>
        <th scope="col" style = "color:orange" >Total Price</th>
        <th scope="col" style = "color:orange">Action</th>
      </tr>
      <?php

      session_start();
      $_SESSION['myArray'];
      $table ="</td>";
      if($_SESSION['myArray']!==null){
        for($i=0;$i<sizeof($_SESSION['myArray']);$i++){
          echo '<tr>';
          echo '<td>'.$_SESSION['myArray'][$i][0].$table;
          echo '<td>'.$_SESSION['myArray'][$i][1].$table;
          echo '<td>'.$_SESSION['myArray'][$i][2].$table;
          echo '<td>'.($_SESSION['myArray'][$i][1]*$_SESSION['myArray'][$i][2]).$table;
          echo '<td>
          <form  method = "POST" action = "http://localhost/SOEN-287/PHP/Shopping Cart.php">
            <input name ="x" type = "hidden" value = "'.$i.'"/>
            <input name ="submitting" type = "Submit" value = "x" class ="button"/>
          </form></td>';
          echo '</tr>';
        }
        if(isset($_POST["x"])){
          if(sizeof($_SESSION['myArray'])==1){
            $_SESSION['myArray'] = null;
          }
          else{
            $value = $_POST["x"];
            array_splice($_SESSION['myArray'],$value, 1);
          }
          header('Location:http://localhost/SOEN-287/PHP/Shopping Cart.php',true);exit();
        }
      }
      ?>
      </table>
    <div class = "table">
        <table class="table" id="table2">
            <thead>
              <tr>
                <th scope="col">Cart Summary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Number of items</th>
                <td id="numberOfItems" class = "numberOfitems"><?php 
                if($_SESSION['myArray']!=null){echo sizeof($_SESSION['myArray']);}?></td>
              </tr>
              <tr>
                <th scope="row">Order Total: </th>
                <td id="orderTotal" class = "OrderTotal"><?php 
                if($_SESSION['myArray']!=null){
                  $total = 0;
                for($i=0;$i<sizeof($_SESSION['myArray']);$i++){
                  $total += $_SESSION['myArray'][$i][1]*$_SESSION['myArray'][$i][2];
                }
                echo round($total,2);
                }?></td>
              </tr>
              <tr>
                <th scope="row">QST:</th>
                <td  id="qst" class ="qst"><?php 
                if($_SESSION['myArray']!=null){$qst = 9.975/100 * $total; echo round($qst,2);}?></td>
              </tr>
              <tr>
                <th scope="row">GST:</th>
                <td id="gst" class ="gst"><?php 
                if($_SESSION['myArray']!=null){$gst = 5/100 * $total; echo round($gst,2);} ?></td>
              </tr>
              <tr>
                <th scope="row">Total:</th>
                <td id="total" class ="total"><?php 
                if($_SESSION['myArray']!=null){$NetTotal = $total + $gst + $qst; echo round($NetTotal,2);}?></td>
              </tr>
            </tbody>
        </table>
    </div>
    <?php require('footer.php'); ?>
    <?php
    if(isset($_POST["order"])&&$_SESSION['myArray']!=null){
        $orderNumber = "#".(string)(rand(12300,12400)).(string)(chr(rand(65,69))).(string)(chr(rand(65,69)));
        $data = json_decode(file_get_contents("../DB/orders.json"), true);
        $order=array();
        for($i=0;$i<sizeof($_SESSION['myArray']);$i++){
          array_push($order,
          array("name" => $_SESSION['myArray'][$i][0],
          "quantity" =>$_SESSION['myArray'][$i][1]));
        }
        $array = array(
          "orderNumber" => $orderNumber,
          "email"=>$_SESSION["user"]['email'],
          "order" => $order,
          "total" => round($NetTotal,2)
        );
        array_push($data['orders'],$array);
        file_put_contents('../DB/orders.json', json_encode($data));
        $_SESSION['myArray'] = null;
        header('Location:http://localhost/SOEN-287/PHP/index.php',true);exit();
    }
    ?>
</body>
</html>