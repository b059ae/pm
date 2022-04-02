<?php
namespace Models\Users;

use Models\Products\Product;

interface ICustomer
{
    public function sendEmailPriceUpdated(Product $product);
}