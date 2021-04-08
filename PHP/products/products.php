<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">




  <link rel="shortcut icon" href="Images/re.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../../P7_P8/CSS/products.css">




  <title> Product Inventory</title>
</head>

<body>
<?php


$file = fopen("../..//DB/products.json", "r");
$data = file_get_contents("../..//DB/products.json");
$data = json_decode($data,true);
$products = $json->products;



?>
  <div class="sidebar">
    <header>La Meilleure Épicerie</header>
    <div class="list-group"></div>
    <a href="../HTML/index.html" id="home"
      class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Home

      <a href="products.html" id="Inventory"
        class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Inventory

        <a href="../HTML/userList.html" id="accounts"
          class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">Accounts</a>
        <a href="../p11-12/orders.html" id="orders"
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
            <th>&nbsp;</th>
            <th>IMAGE</th>
            <th>PRODUCT NAME</th>
            <th>UNIT SOLD</th>
            <th>IN STOCK</th>
            <th>PRICE</th>
            <th>DELETE</th>
            <th> EDIT </th>
          </tr>
 


        </thead>
        <tbody>
          
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
            <td class="img"><?php print (' <img src="../../Images/Fruits-and-Vegetables-Aisle/' .$data['products'][0]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products']['id']['name']?></td>
              <td class="Unit Sold">1,450</td>
            <td class="Stock"><?php echo $data['products'][0]['stock']?></td>
            <td class="price">$<?php echo $data['products'][0]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons" id="delete">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/bellpepperedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fruits-and-Vegetables-Aisle/' .$data['products'][1]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][1]['name']?></td>
            <td class="Unit Sold">1,250</td>
            <td class="Stock"><?php echo $data['products'][1]['stock']?></td>
            <td class="price">$<?php echo $data['products'][1]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/orangeedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fruits-and-Vegetables-Aisle/' .$data['products'][2]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][2]['name']?></td>

            <td class="Unit Sold">1,100</td>
            <td class="Stock"><?php echo $data['products'][2]['stock']?></td>
            <td class="price">$<?php echo $data['products'][2]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/pearedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fruits-and-Vegetables-Aisle/' .$data['products'][3]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][3]['name']?></td>
            <td class="Unit Sold">1,400</td>
            <td class="Stock"><?php echo $data['products'][3]['stock']?></td>
            <td class="price">$<?php echo $data['products'][3]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/pineappleedit.html" class="edit">edit</a>
            </td>
          </tr>

          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fruits-and-Vegetables-Aisle/' .$data['products'][4]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][4]['name']?></td>
            <td class="Unit Sold">1,000</td>
            <td class="Stock"><?php echo $data['products'][4]['stock']?></td>
            <td class="price">$<?php echo $data['products'][4]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/potatoedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fruits-and-Vegetables-Aisle/' .$data['products'][5]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][5]['name']?></td>
            <td class="Unit Sold">500</td>
            <td class="Stock"><?php echo $data['products'][5]['stock']?></td>
            <td class="price">$<?php echo $data['products'][5]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/tomatoedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Meat-Aisle/' .$data['products'][6]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][6]['name']?></td>
            <td class="Unit Sold">1,000</td>
            <td class="Stock"><?php echo $data['products'][6]['stock']?></td>
            <td class="price">$<?php echo $data['products'][6]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/breadedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Meat-Aisle/' .$data['products'][7]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][7]['name']?></td>
            <td class="Unit Sold">1,200</td>
            <td class="Stock"><?php echo $data['products'][7]['stock']?></td>
            <td class="price">$<?php echo $data['products'][7]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/cakeedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Meat-Aisle/' .$data['products'][8]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][8]['name']?></td>
            <td class="Unit Sold">1,600</td>
            <td class="Stock"><?php echo $data['products'][8]['stock']?></td>
            <td class="price">$<?php echo $data['products'][8]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/cookieedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Meat-Aisle/' .$data['products'][9]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][9]['name']?></td>
            <td class="Unit Sold">2,000</td>
            <td class="Stock"><?php echo $data['products'][9]['stock']?></td>
            <td class="price" >$<?php echo $data['products'][9]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/rollsedit.html" class="edit">edit</a>
            </td>
          </tr>
            <th scope="row"><input type="checkbox" class="checkbox" /></th>
            <td class="img"><?php print (' <img src="../../Images/Meat-Aisle/' .$data['products'][10]['image'] .'.png"')?> height="160px" width="160px"></td>
          <td class="Product-Name"><?php echo $data['products'][10]['name']?></td>
          <td class="Unit Sold">1,450</td>
          <td class="Stock"><?php echo $data['products'][10]['stock']?></td>
          <td class="price">$<?php echo $data['products'][10]['price']?></td>
          <td>
            <a href="#" class="product-delete-link">
              <i class="material-icons">delete</i>
            </a>
          </td>
          <td><a href="../P7_P8/edit_pages/croissantedit.html" class="edit">edit</a>
          </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Meat-Aisle/' .$data['products'][11]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][11]['name']?></td>
            <td class="Unit Sold">1,450</td>
            <td class="Stock"><?php echo $data['products'][11]['name']?></td>
            <td class="price">$<?php echo $data['products'][11]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/cupcakesedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Bakery-Aisle/' .$data['products'][12]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][12]['name']?></td>
            <td class="Unit Sold">200</td>
            <td class="Stock"><?php echo $data['products'][12]['stock']?></td>
            <td class="price">$<?php echo $data['products'][12]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/crabedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Bakery-Aisle/' .$data['products'][13]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][13]['name']?></td>
            <td class="Unit Sold">1,450</td>
            <td class="Stock"><?php echo $data['products'][13]['stock']?></td>
            <td class="price">$<?php echo $data['products'][13]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/lobsteredit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Bakery-Aisle/' .$data['products'][14]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][14]['name']?></td>
            <td class="Unit Sold">1,450</td>
            <td class="Stock"><?php echo $data['products'][14]['stock']?></td>
            <td class="price">$<?php echo $data['products'][14]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/mackereledit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Bakery-Aisle/' .$data['products'][15]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][15]['name']?></td>
            <td class="Unit Sold">1,450</td>
            <td class="Stock"><?php echo $data['products'][15]['stock']?></td>
            <td class="price">$<?php echo $data['products'][15]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/salmonedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Bakery-Aisle/' .$data['products'][16]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][16]['name']?></td>
            <td class="Unit Sold">125</td>
            <td class="Stock"><?php echo $data['products'][16]['stock']?></td>
            <td class="price">$<?php echo $data['products'][16]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/shrimpedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Bakery-Aisle/' .$data['products'][17]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][17]['name']?></td>
            <td class="Unit Sold">150</td>
            <td class="Stock"><?php echo $data['products'][17]['stock']?></td>
            <td class="price">$<?php echo $data['products'][17]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/tunaedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fish-And-Sea-Food-Aisle/' .$data['products'][18]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][18]['name']?></td>
            <td class="Unit Sold">120</td>
            <td class="Stock"><?php echo $data['products'][18]['stock']?></td>
            <td class="price">$<?php echo $data['products'][18]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/beltededit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fish-And-Sea-Food-Aisle/' .$data['products'][19]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][19]['name']?></td>
            <td class="Unit Sold">150</td>
            <td class="Stock"><?php echo $data['products'][19]['stock']?></td>
            <td class="price">$<?php echo $data['products'][19]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/chickenbedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fish-And-Sea-Food-Aisle/' .$data['products'][20]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][20]['name']?> </td>
            <td class="Unit Sold">50</td>
            <td class="Stock"><?php echo $data['products'][20]['stock']?></td>
            <td class="price">$<?php echo $data['products'][20]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/ribeyeedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fish-And-Sea-Food-Aisle/' .$data['products'][21]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][21]['name']?></td>
            <td class="Unit Sold">550</td>
            <td class="Stock"><?php echo $data['products'][21]['stock']?></td>
            <td class="price">$<?php echo $data['products'][21]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/sausagesedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fish-And-Sea-Food-Aisle/' .$data['products'][22]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][22]['name']?></td>
            <td class="Unit Sold">450</td>
            <td class="Stock"><?php echo $data['products'][22]['stock']?></td>
            <td class="price">$<?php echo $data['products'][22]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/tboneedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Fish-And-Sea-Food-Aisle/' .$data['products'][23]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][23]['name']?></td>
            <td class="Unit Sold">1,800</td>
            <td class="Stock"><?php echo $data['products'][23]['stock']?></td>
            <td class="price">$<?php echo $data['products'][23]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/tomahawkedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Snacks-Aisle/' .$data['products'][24]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][24]['name']?></td>
            <td class="Unit Sold">250</td>
            <td class="Stock"><?php echo $data['products'][24]['stock']?></td>
            <td class="price">$<?php echo $data['products'][24]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/milkedit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Snacks-Aisle/' .$data['products'][25]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][25]['name']?></td>
            <td class="Unit Sold">150</td>
            <td class="Stock"><?php echo $data['products'][25]['stock']?></td>
            <td class="price">$<?php echo $data['products'][25]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/butteredit.html" class="edit">edit</a>
            </td>
          </tr>
          <tr>
              <th scope="row"><input type="checkbox" class="checkbox" /></th>
              <td class="img"><?php print (' <img src="../../Images/Snacks-Aisle/' .$data['products'][26]['image'] .'.png"')?> height="160px" width="160px"></td>
            <td class="Product-Name"><?php echo $data['products'][26]['name']?></td>
            <td class="Unit Sold">1,050</td>
            <td class="Stock"><?php echo $data['products'][26]['stock']?></td>
            <td class="price">$<?php echo $data['products'][26]['price']?></td>
            <td>
              <a href="#" class="product-delete-link">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td><a href="../P7_P8/edit_pages/cheeseedit.html" class="edit">edit</a>
            </td>
          </tr>

          <tr>
            <th scope="row"><input type="checkbox" class="checkbox" /></th>
            <td class="img"><?php print (' <img src="../../Images/Snacks-Aisle/' .$data['products'][27]['image'] .'.png"')?> height="160px" width="160px"></td>
          <td class="Product-Name"><?php echo $data['products'][27]['name']?></td>
          <td class="Unit Sold">1,250</td>
          <td class="Stock"><?php echo $data['products'][27]['stock']?></td>
          <td class="price">$<?php echo $data['products'][27]['price']?></td>
          <td>
            <a href="#" class="product-delete-link">
              <i class="material-icons">delete</i>
            </a>
          </td>
          <td><a href="../P7_P8/edit_pages/Kitkatedit.html" class="edit">edit</a>
          </td>
        </tr>
        <tr>
          <th scope="row"><input type="checkbox" class="checkbox" /></th>
          <td class="img"><?php print (' <img src="../../Images/Snacks-Aisle/' .$data['products'][28]['image'] .'.png"')?> height="160px" width="160px"></td>
        <td class="Product-Name"><?php echo $data['products'][28]['name']?></td>
        <td class="Unit Sold">1,250</td>
        <td class="Stock"><?php echo $data['products'][28]['stock']?></td>
        <td class="price">$<?php echo $data['products'][28]['price']?></td>
        <td>
          <a href="#" class="product-delete-link">
            <i class="material-icons">delete</i>
          </a>
        </td>
        <td><a href="../P7_P8/edit_pages/doritosedit.html" class="edit">edit</a>
        </td>
      </tr>
      <tr>
        <th scope="row"><input type="checkbox" class="checkbox" /></th>
        <td class="img"><?php print (' <img src="../../Images/Snacks-Aisle/' .$data['products'][29]['image'] .'.png"')?> height="160px" width="160px"></td>
      <td class="Product-Name"><?php echo $data['products'][29]['name']?></td>
      <td class="Unit Sold">1,250</td>
      <td class="Stock"><?php echo $data['products'][29]['stock']?></td>
      <td class="price">$<?php echo $data['products'][29]['price']?></td>
      <td>
        <a href="#" class="product-delete-link">
          <i class="material-icons">delete</i>
        </a>
      </td>
      <td><a href="../P7_P8/edit_pages/breakfastedit.html" class="edit">edit</a>
      </td>
    </tr>
    <tr>
      <th scope="row"><input type="checkbox" class="checkbox" /></th>
      <td class="img"><?php print (' <img src="../../Images/Dairy-Products-Aisle/' .$data['products'][30]['image'] .'.png"')?> height="160px" width="160px"></td>
    <td class="Product-Name"><?php echo $data['products'][30]['name']?></td>
    <td class="Unit Sold">1,250</td>
    <td class="Stock"><?php echo $data['products'][30]['stock']?></td>
    <td class="price">$<?php echo $data['products'][30]['price']?></td>
    <td>
      <a href="#" class="product-delete-link">
        <i class="material-icons">delete</i>
      </a>
    </td>
    <td><a href="../P7_P8/edit_pages/snickersedit.html" class="edit">edit</a>
    </td>
  </tr>
  <tr>
    <th scope="row"><input type="checkbox" class="checkbox" /></th>
    <td class="img"><?php print (' <img src="../../Images/Dairy-Products-Aisle/' .$data['products'][31]['image'] .'.png"')?> height="160px" width="160px"></td>
  <td class="Product-Name"><?php echo $data['products'][31]['name']?></td>
  <td class="Unit Sold">250</td>
  <td class="Stock"><?php echo $data['products'][31]['stock']?></td>
  <td class="price">$<?php echo $data['products'][31]['price']?></td>
  <td>
    <a href="#" class="product-delete-link">
      <i class="material-icons">delete</i>
    </a>
  </td>
  <td><a href="../P7_P8/edit_pages/oreoedit.html" class="edit">edit</a>
  </td>
</tr>
<tr>
  <th scope="row"><input type="checkbox" class="checkbox" /></th>
<<td class="img"><?php print (' <img src="../../Images/Dairy-Products-Aisle/' .$data['products'][32]['image'] .'.png"')?> height="160px" width="160px"></td>
<td class="Product-Name"><?php echo $data['products'][32]['name']?></td>
<td class="Unit Sold">150</td>
<td class="Stock"><?php echo $data['products'][32]['stock']?></td>
<td class="price">$<?php echo $data['products'][32]['price']?></td>
<td>
  <a href="#" class="product-delete-link">
    <i class="material-icons">delete</i>
  </a>
</td>
<td><a href="../P7_P8/edit_pages/popcornedit.html" class="edit">edit</a>
</td>
</tr>

        </tbody>
      </table>
    </div>






  </div>





  <div class="buttons">
    <a href="AddProducts.html" class="btn">Add new product</a>

    <input type="button" value="Delete selected products" class="btn"onclick=" deletebtn()">
     
  </div>
  <script src="../../P7_P8/JS/products.js"></script>






</body>





</html>