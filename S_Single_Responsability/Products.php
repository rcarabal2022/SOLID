<?php

namespace App;
require_once 'index.php';

class Products 
{
    protected $products = [];

    public function add($product = [])

    {
        $this->products = $product;
    }

    public function get()

    {
        return $this->products;
    }

    public function remove($id)

    {
        // Code here...
    }

}
