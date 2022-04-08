<?php

declare(strict_types=1);

namespace Kasia\ShopingEcart\Model;

use Kasia\ShopingEcart\Controller\ProductController;

class Product
{
    public string $name;
    public float $price;
    public int $code;

    public function __construct()
    {
        $this->name = $name;
        $this->price = $price;
        $this->code = $code;
    }

    // product name 
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this->name;
    }

    // product price
    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this->price;
    }

    // product code
    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this->code;
    }

}
