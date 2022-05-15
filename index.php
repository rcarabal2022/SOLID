<?php include_once 'vendor/autoload.php';

use App\CoffeeShop;

$products= [
    ['id'=> 1, 'name'=> 'Negro', 'price' => 25],
    ['id'=> 2, 'name'=> 'Negro', 'price' => 25],
    ['id'=> 3,'name'=> 'Negro', 'price' => 25],
];

$shop = New CoffeeShop();


$shop ->addProducts($products);

echo $shop->viewMenu();