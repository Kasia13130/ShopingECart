<?php

declare(strict_types=1);

namespace Kasia\ShopingEcart\Controller;

use Kasia\ShopingEcart\Model\Product;

class ProductController
{
    public function __construct()
    {
        
    }

    public function createProduct(): array
    {
        $productDetails = [];

        $newProduct = new Product();
        $productDetails['name'] = $newProduct->setName('Mandarynka');
        $productDetails['price'] = $newProduct->setPrice(4.50);
        $productDetails['code'] = $newProduct->setCode(66537);

        return $productDetails;
    }
}