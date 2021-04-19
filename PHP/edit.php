<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../CSS/addproducts.css">
    <script type="text/javascript" src="../JS/edit.js"></script>
    
    <title>EDIT PRODUCT</title>
</head>
    <body>
    <?php
    $id = $_GET['id'];
  

$file = fopen("..//DB/products.json", "r");
$data = json_decode(file_get_contents('../DB/products.json'), true);
         

?>


<div class="sidebar">
    <header>La Meilleure Épicerie</header>
    <div class="list-group"></div>
    <a href="../PHP/index.php" id="home"
      class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Home

      <a href="products/products.php" id="Inventory"
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
    
            <h2 class="title">EDIT PRODUCT</h2>
            <form id="theform" action="editproduct.php" method="POST">
     
                <p>
                <div class="row">
                    <label for="title">Product Name: </label>
                    <input type="text" id="title" class="form-content" name="name"value=<?php echo $data['products'][$id]['name']?>> </br></br>
                </div>
                <div class="row">
                    <label for="description">Description: </label>
    
                    <input type="text" id="description" class="form-content" name="description"value=""> </br></br>
                </div>
                <div class="row">
                    <label for="price">Price $: </label>
                    <input type="number" step="any" id="price" class="form-content" name="price" value=<?php echo $data['products'][$id]['price']?>> </br></br>
                </div> <div class="row">
                    <label for="stock">Units in Stock: </label>
                    <input type="number" step="any" id="stock" class="form-content" name="stock"value=<?php echo $data['products'][$id]['stock']?>> </br></br>
                </div> <div class="row">
                <label for="date">ID: </label>
                <input type="number" id="date" name="id" class="form-content" name="id"value=<?php echo $data['products'][$id]['id']?>> </br></br>
                <p id ="dInvalid"></p>
            </div>  <div class="row">
                       <div class="row">
                        <label for="price">Category:  </label>
                        <input type="radio" name="aisle" id="fruits-and-vegetables" value="Fruits-And-Vegetables-Aisle" checked />Fruits & vegetables
                         <input type="radio" name="aisle" id="meat" value="Meat-Aisle" /> Meat
                         <input type="radio" name="aisle" id="bakery" value="Bakery-Aisle" />Bakery
                         <input type="radio" name="aisle" id="fishandseafood" value="Fish-And-Sea-Food-Aisle" /> Fish and Seafood
                         <input type="radio" name="aisle" id="dairyproducts" value="Dairy-Products-Aisle" /> Dairy Products
                         <input type="radio" name="aisle" id="snacks" value="snacks" /> Snacks
                    
                    </div>
                </div> 
                
                <div class="row">
                    <label for="Image">Upload Image: </label>
                    <img id="img"  src="../../Images/<?php echo $data['products'][$id]['aisle']?>/<?php echo $data['products'][$id]['image']?>"  height="90px" width="90px">
                    <p id="q"></p>
                    <label for="title">File name: </label>
                    <input type="text" id="title" name ="image" value=<?php echo $data['products'][$id]['image']?>  height="90px" width="90px"> </br> </br>
                  
                  
    
    
    
                   
                </div>
                </p>
                <input type="submit" name="submit" value="Submit">  
      
            </form>
    
    
              
    
        </div>
 

        
        
    
    </body>
    
    </html>
