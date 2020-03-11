<?php

namespace DesignPatterns\AbstractFactory\Conceptual\ConcreteProducts\B;

use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductA;
use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductB;

/**
 * Class ConcreteProductB2
 * @package DesignPatterns\GUIAbstractFactory\Conceptual\GUIAbstractFactory
 */
class ConcreteProductB2 implements AbstractProductB
{
    /**
     * @return string
     */
    public function usefulFunctionB(): string
    {
        return "The result of the product B2.";
    }

    /**
     * @param AbstractProductA $collaborator
     * @return string
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B2 collaborating with the ({$result})";
    }
}
