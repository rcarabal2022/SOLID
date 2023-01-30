<?php include_once 'vendor/autoload.php';
require_once 'S_Single_Responsability\CoffeeShop.php';


use App\CoffeeShop;

$products= [
    ['id'=> 1, 'name'=> 'Negro', 'price' => 2],
    ['id'=> 2, 'name'=> 'Con Leche', 'price' => 2.5],
    ['id'=> 3,'name'=> 'Capuccino', 'price' => 3],
];

$shop = new CoffeeShop();


$shop->addProducts($products);

echo $shop->viewMenu();