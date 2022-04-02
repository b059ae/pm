<?php

namespace Carts;

use Models\Products\Product;

interface ICart
{
    public function getTotalPrice();
    public function purchase();
    public function addProduct(Product $product);
    public function removeProduct(int $id);
}