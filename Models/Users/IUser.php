<?php
namespace Models\Users;

use Models\Products\Product;

interface IUser
{
    /** @var Product[] */
    public function buyProducts(array $products);
}