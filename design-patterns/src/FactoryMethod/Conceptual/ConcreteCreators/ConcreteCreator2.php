<?php

namespace DesignPatterns\FactoryMethod\Conceptual\ConcreteCreators;

use DesignPatterns\FactoryMethod\Conceptual\ConcreteProducts\ConcreteProduct2;
use DesignPatterns\FactoryMethod\Conceptual\Creator;
use DesignPatterns\FactoryMethod\Conceptual\Product;

/**
 * Class ConcreteCreator2
 * @package DesignPatterns\FactoryMethod\Conceptual\Concrete
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class ConcreteCreator2 extends Creator
{
    /**
     * @return Product
     */
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2;
    }
}
