<?php
namespace Models\Users;

use Models\Products\Product;

interface ISeller
{
    public function createProduct(Product $product);

    public function sendEmailProductSold(Product $product);
    
    public function sendEmailProductOutOfStock(Product $product);
}