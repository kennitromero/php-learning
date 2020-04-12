<?php

namespace DesignPatterns\FactoryMethod\Conceptual\ConcreteProducts;

use DesignPatterns\FactoryMethod\Conceptual\Product;

/**
 * Class ConcreteProduct2
 * @package DesignPatterns\FactoryMethod\Conceptual\ConcreteProducts
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class ConcreteProduct2 implements Product
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
