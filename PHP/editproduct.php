<!DOCTYPE html>
<html lang='en'>

<body>


<?php

    $id =$_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $aisle = $_POST['aisle'];
    $image = $_POST['image'];

    // echo $image;
    // echo $price;
    // echo $name;
    // echo $id;
    // echo $aisle;
    // echo $stock;
    // echo $description;

    

    $data = json_decode(file_get_contents('../DB/products.json'), true);

    $data['products'][$id]['id'] =$id;
    $data['products'][$id]['name'] =$name;
    $data['products'][$id]['price'] =$price;
    $data['products'][$id]['stock'] =$stock;
    $data['products'][$id]['aisle'] =$aisle;
    $data['products'][$id]['image'] =$image;
    $data['products'][$id]['description'] =$des;
    file_put_contents('../DB/products.json',json_encode($data));

    header('Location: products/products.php');
    ?>
    



    
</body>
</html>