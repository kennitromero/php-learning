<?php

namespace DesignPatterns\AbstractFactory\Conceptual\ConcreteFactories;

use DesignPatterns\AbstractFactory\Conceptual\AbstractFactory;
use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductA;
use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductB;
use DesignPatterns\AbstractFactory\Conceptual\ConcreteProducts\A\ConcreteProductA1;
use DesignPatterns\AbstractFactory\Conceptual\ConcreteProducts\B\ConcreteProductB1;

/**
 * Concrete Factories produce a family of products that belong to a single
 * variant. The factory guarantees that resulting products are compatible. Note
 * that signatures of the Concrete Factory's methods return an abstract product,
 * while inside the method a concrete product is instantiated.
 *
 * Las fábricas concretas producen una familia de productos que pertenecen a una única variante.
 * La fábrica garantiza que los productos resultantes son compatibles.
 * Obsérvese que las firmas de los métodos de la fábrica concreta devuelven un producto abstracto,
 * mientras que dentro del método un producto concreto es instanciado.
 *
 * Class ConcreteFactory1
 * @package DesignPatterns\GUIAbstractFactory\Conceptual\ConcreteFactory1
 */
class ConcreteFactory1 implements AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1;
    }

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1;
    }
}
