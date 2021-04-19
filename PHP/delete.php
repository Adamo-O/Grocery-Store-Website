<?php
	
	$id = $_GET['id'];
 
	$data = json_decode(file_get_contents('../DB/products.json'), true);


      unset($data['products'][$id]);
	// unset($json[$id]);
 
	$json = json_encode($data, JSON_PRETTY_PRINT);
	file_put_contents('../DB/products.json"', $json);
 
    header('Location: products/products.php');
?>