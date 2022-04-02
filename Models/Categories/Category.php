<?php

namespace Category;

use Models\Products\Product;

class Category implements ICategory
{
    public string $name;
    /** @var Product[]  */
    public array $products;
    public int $parentCategoryId;

    public function getHierarchy()
    {
        // TODO: Implement getHierarchy() method.
    }

    public function getProducts()
    {
        // TODO: Implement getProducts() method.
    }
}