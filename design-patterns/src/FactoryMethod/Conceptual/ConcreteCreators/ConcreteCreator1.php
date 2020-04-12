<?php

namespace DesignPatterns\FactoryMethod\Conceptual\ConcreteCreators;

use DesignPatterns\FactoryMethod\Conceptual\ConcreteProducts\ConcreteProduct1;
use DesignPatterns\FactoryMethod\Conceptual\Creator;
use DesignPatterns\FactoryMethod\Conceptual\Product;

/**
 * Concrete Creators override the factory method in order to change the
 * resulting product's type.
 *
 * Class ConcreteCreator1
 * @package DesignPatterns\FactoryMethod\Conceptual\Concrete
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class ConcreteCreator1 extends Creator
{
    /**
     * Note that the signature of the method still uses the abstract product
     * type, even though the concrete product is actually returned from the
     * method. This way the Creator can stay independent of concrete product
     * classes.
     * @return Product
     */
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1;
    }
}
