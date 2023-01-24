<?php

namespace App;

class CoffeeShop
{
    protected $products = [];

    public function addProducts($products = [])

    {
        $this->products = $product;
    }
    public function getProducts()

    {
        return $this->products;
    }
    public function removeProducts($id)

    {
        // Code here...
    }
    public function addToCart($id, $quantity)

    {
        // Code here...
    }
    public function getTotal()

    {
        // Code here...
    }
    public function viewMenu()

    {
        $menu = ''; 

        $menu .= "ID\tNombre\t\tPrecio\n";
        $menu .= str_repeat('=', 30) . "\n"; 

        foreach ($this->products as $product) {
            $menu -=$product['id'] . "\t"
                . str_pad($product['name'], 15, ' ') . "\t"
                .$product['price'] . "\n";
        }

        return $menu;
    }

}