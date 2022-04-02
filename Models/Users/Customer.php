<?php

namespace Models\Users;

use Models\Products\Product;

class Customer extends User implements ICustomer
{
    public string $type = self::TYPE_CUSTOMER;

    public function sendEmailPriceUpdated(Product $product)
    {
        // TODO: Implement sendEmailPriceUpdated() method.
    }

    public function buyProducts(array $products)
    {
        // TODO: Implement buyProducts() method.
    }
}