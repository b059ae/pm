<?php
namespace Models\Users;

use Validators\InArrayValidator;

abstract class User implements IUser
{
    use InArrayValidator;

    const TYPE_CUSTOMER = 'customer';
    const TYPE_SELLER = 'seller';

    public string $name;
    public string $address;
    public string $type;
}