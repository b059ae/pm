<?php

namespace Models\Products;

class DigitalProduct extends Product implements IDigitalProduct
{
    const DELIVERY_TYPE_EMAIL = 'email';
    const DELIVERY_TYPE_LINK = 'link';
    public string $type = self::MAX_DIGITAL;

    public function sendByEmail(string $email)
    {
        // TODO: Implement sendByEmail() method.
    }

    public function generateDownloadLink()
    {
        // TODO: Implement generateDownloadLink() method.
    }
}