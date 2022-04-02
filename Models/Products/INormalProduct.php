<?php

namespace Models\Products;

interface INormalProduct
{
    public function checkStocks();
    public function sendByPost();
}