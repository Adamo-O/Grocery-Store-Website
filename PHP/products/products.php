<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">




  <link rel="shortcut icon" href="Images/re.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../../CSS/products.css">




  <title> Product Inventory</title>
</head>

<body>

  <div class="sidebar">
    <header>La Meilleure Épicerie</header>
    <div class="list-group"></div>
    <a href="../index.php" id="home"
      class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Home

      <a href="products.php" id="Inventory"
        class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Inventory

        <a href="../userList.php" id="accounts"
          class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Accounts</a>
        <a href="../OrderHistory.php" id="orders"
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
    <h2 class="title">INVENTORY</h2>

    <div class="product table">

      <table id="mytable">
        <thead>
          <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>PRODUCT NAME</th>
            <th>PRICE</th>
            <th>STOCK</th>
            <th>EDIT</th>
            <th> DELETE </th>
          </tr>
 


        </thead>
        <tbody>
          <?php
            $file = fopen("../..//DB/products.json", "r");
          $data = file_get_contents("../..//DB/products.json");
          $json = json_decode($data);
          $products = $json->products;
          $index = 0;
          foreach($products as $value){
            ?>
            <tr>
            <th scope="row"><?php echo $value->id?></th>
            <td class="img"><?php print('<img src="../../Images/'.$value->aisle.'/' . $value->image . '" alt="' . $value->name . ' Image" height="160px" width="160px">');?></td>
              <td><?php echo $value->name?></td>
              <td><?php echo $value->price?></td>
              <td><?php echo $value->stock?></td>
              <td><a href="../edit.php?id=<?php echo $value->id?>">edit </td>
              <td> <a href="../delete.php?id=<?php echo $value->id?>" class="product-delete-link"> <i class="material-icons">delete</i> </a></td>
              
            
             

            </tr>
            <?php
						$index++;
						}
					?>
          
          
          
        </tbody>
      </table>
    </div>






  </div>





  <div class="buttons">
    <a href="AddProducts.html" class="btn">Add new product</a>

    <input type="button" value="Delete selected products" class="btn"onclick=" deletebtn()">
     
  </div>
  <script src="../../JS/p7_8products.js"></script>






</body>





</html>