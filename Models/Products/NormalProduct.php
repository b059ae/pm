<?php

namespace Models\Products;

class NormalProduct extends Product implements INormalProduct
{
    public string $type = self::TYPE_NORMAL;

    public function checkStocks()
    {
        // TODO: Implement checkStocks() method.
    }

    public function sendByPost()
    {
        // TODO: Implement sendByPost() method.
    }
}