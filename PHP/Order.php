<?php
if (isset($_POST["name"])) {
    session_start();
    $name = $_POST["name"];$_POST["name"] = null;
    $price = $_POST["price"];$_POST["price"] = null;
    $quantity = $_POST["quantity"];$_POST["quantity"] = null;
    $array = array($name,$quantity,$price);
    $_SESSION['myArray'];
    if($_SESSION['myArray']== null){
        $_SESSION['myArray'] = array($array);
    }
    else{
        for($i = 0;$i<sizeof($_SESSION['myArray']);$i++){
            if($_SESSION['myArray'][$i][0] ==$array[0]){
                $_SESSION['myArray'][$i][1] += $array[1];break;
            }
            else if($i ==(sizeof($_SESSION['myArray'])-1)){
                array_push($_SESSION['myArray'],$array);break;
            }
        }
    }
    header('Location: Shopping Cart.php');
    exit();
}
?>