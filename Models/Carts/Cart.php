<?php
namespace Carts;

use Models\Products\Product;

class Cart implements ICart
{
    public array $items;

    public function getTotalPrice()
    {
        // TODO: Implement getTotalPrice() method.
    }

    public function purchase()
    {
        // TODO: Implement purchase() method.
    }

    public function addProduct(Product $product)
    {
        // TODO: Implement addProduct() method.
    }

    public function removeProduct(int $id)
    {
        // TODO: Implement removeProduct() method.
    }
}