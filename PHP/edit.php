<?php

$file = fopen("..//DB/products.json", "r");
$data = file_get_contents("..//DB/products.json");
$json = json_decode($data);