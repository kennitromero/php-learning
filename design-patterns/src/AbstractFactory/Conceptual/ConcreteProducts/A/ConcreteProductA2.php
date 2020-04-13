<?php

namespace DesignPatterns\AbstractFactory\Conceptual\ConcreteProducts\A;

use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductA;

/**
 * Class ConcreteProductA2
 * @package DesignPatterns\GUIAbstractFactory\Conceptual\ConcreteProductA2
 */
class ConcreteProductA2 implements AbstractProductA
{
    /**
     * @return string
     */
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}
