<?php

namespace Models\Users;

use Models\Products\Product;

class Seller extends User implements ISeller
{
    public string $type = self::TYPE_SELLER;

    public function createProduct(Product $product)
    {
        // TODO: Implement createProduct() method.
    }

    public function sendEmailProductSold(Product $product)
    {
        // TODO: Implement sendEmailProductSold() method.
    }

    public function sendEmailProductOutOfStock(Product $product)
    {
        // TODO: Implement sendEmailProductOutOfStock() method.
    }

    public function buyProducts(array $products)
    {
        // TODO: Implement buyProducts() method.
    }
}