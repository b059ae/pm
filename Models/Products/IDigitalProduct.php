<?php

namespace Models\Products;

interface IDigitalProduct
{
    public function sendByEmail(string $email);
    public function generateDownloadLink();
}