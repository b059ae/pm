<?php
namespace Models\Products;

use Validators\InArrayValidator;
use Validators\MaxValidator;
use Validators\UrlValidator;

abstract class Product
{
    use UrlValidator, MaxValidator, InArrayValidator;

    const MAX_URLS = 5;
    const TYPE_NORMAL = 'normal';
    const MAX_DIGITAL = 'digital';

    public string $name;
    public string $articleNumber;
    /** @var int[] */
    public array $prices;
    /** @var string[] */
    public array $pictures;
    public string $type;
}