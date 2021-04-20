<!DOCTYPE html>
<html lang='en'>

<body>
    <?php

    $id =$_POST['id'];
    $name = $_POST['name'];
    $des = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $aisle = $_POST['aisle'];
    $image = $_POST['image'];
    

    $data = json_decode(file_get_contents('../DB/products.json'), true);

    $data['products'][] =$_POST;
    file_put_contents('../DB/products.json',json_encode($data));

    $code ='<img src=" ';
    $code1 = '"';

    
    
      $fp=fopen('../PHP/'.$aisle.'/'.$name.'.php','w');
    fwrite($fp, "<!DOCTYPE html>
    <html lang='en'>
    
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <link rel='stylesheet' href='../../CSS/style.css'>
      <link href='../../css-fas/all.css' rel='stylesheet'>
      <link rel='shortcut icon' href='../../Images/re.ico' type='image/x-icon'>
      <link rel='stylesheet' href='../../CSS/ProductDes.css'>
      <title>$code1 $name $code1</title>
    </head>
    
    <body>
    
      <section class='header'>
        <h1><a href='../index.php'>La Meilleure Épicerie</a></h1>
      </section>
      <section class='nav-bar'>
      <?php require('../navbarAisle.php'); ?>

      </section>
      <div class='content-container'>
        <div class='col-50'>
          <h3><?php echo $code1 $name $code1?></h3>
          <div class='img-container'>
          <?php  echo '$code../../Images/$aisle/$image $code1>' ?>
          </div>
        </div>
        <div class='col-50'>
          <p id='price' class='price'>For only $<?php echo $price ?> per pound</p>
          <button onclick='getData()' class='general-btn'>Add To Cart</button>
          <div class='quantity-container'>
            <label for='quantity'></label>
            <button class='general-btn add' onclick='add()'>+</button>
            <input readonly type='text' id='quantity' name='quantity' placeholder='Quantity'>
            <button class='general-btn subtract inactive-btn' onclick='subtract()'>-</button>
          </div>
          <button class='general-btn des-btn' onclick='description()'>More Description</button>
          <div class='description'>
            <p class='description-details'>
            <?php echo $code1 $des $code1 ?>
            </p>
            
          </div>
        </div>
      </div>
      <section id='footer'>
        <a href='https://facebook.com' target='_blank'><em class='fab fa-facebook fa-2x'></em></a>
        <a href='https://instagram.com' target='_blank'><em class='fab fa-instagram fa-2x'></em></a>
        <a href='https://twitter.com' target='_blank'><em class='fab fa-twitter-square fa-2x'></em></a>
        <h6>
          Thanks for shopping at La Meilleure Épicerie. <br>
          To contact us, please click <a href='../../HTML/contact-us.html' class='contact-page'>here</a>.
        </h6>
      </section>
      <script src='../../JS/products.js'></script>
      <script src ='../../JS/p3.js'></script>
    </body>
    
    </html>");
       fclose($fp);

    header('Location: products/products.php');
  
   

    ?>

    
</body>
</html>
