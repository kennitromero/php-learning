<?php

namespace DesignPatterns\AbstractFactory\Conceptual\ConcreteProducts\A;

use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductA;

/**
 * Concrete Products are created by corresponding Concrete Factories.
 *
 * Los productos concretos son creados por las correspondientes fábricas concretas.
 *
 * Class ConcreteProductA1
 * @package DesignPatterns\GUIAbstractFactory\Conceptual\ConcreteProductA1
 */
class ConcreteProductA1 implements AbstractProductA
{
    /**
     * @return string
     */
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}
