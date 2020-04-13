<?php

namespace DesignPatterns\AbstractFactory\Conceptual\ConcreteFactories;

use DesignPatterns\AbstractFactory\Conceptual\AbstractFactory;
use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductA;
use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductB;
use DesignPatterns\AbstractFactory\Conceptual\ConcreteProducts\A\ConcreteProductA2;
use DesignPatterns\AbstractFactory\Conceptual\ConcreteProducts\B\ConcreteProductB2;

/**
 * Each Concrete Factory has a corresponding product variant.
 *
 * Cada fábrica concreta tiene una variante de producto correspondiente.
 *
 * Class ConcreteFactory2
 * @package DesignPatterns\GUIAbstractFactory\Conceptual\ConcreteFactory2
 */
class ConcreteFactory2 implements AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2;
    }

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2;
    }
}
