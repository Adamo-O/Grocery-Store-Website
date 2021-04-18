<!DOCTYPE html>
<html lang="en">

<body>
    <?php

   
    $name = $_POST['name'];
    $des = $_POST['des'];
    $price = $_POST['price'];
    $originalPrice=$_POST['price'];
    $stock = $_POST['stock'];
    $aisle = $_POST['cate'];
    $image = $_POST['name'];

    $data = json_decode(file_get_contents("../DB/products.json"), true);

    $data['products'][] =$_POST;
    file_put_contents("../DB/products.json",json_encode($data));
    echo "Product added successfully! ";
   

    ?>

    
</body>
</html>
