<?php

namespace DesignPatterns\FactoryMethod\Conceptual\ConcreteProducts;

use DesignPatterns\FactoryMethod\Conceptual\Product;

/**
 * Class ConcreteProduct1
 * @package DesignPatterns\FactoryMethod\Conceptual\ConcreteProducts
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class ConcreteProduct1 implements Product
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}
