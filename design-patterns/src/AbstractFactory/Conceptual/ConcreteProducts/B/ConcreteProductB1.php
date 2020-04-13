<?php

namespace DesignPatterns\AbstractFactory\Conceptual\ConcreteProducts\B;

use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductA;
use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductB;

/**
 * Class ConcreteProductB1
 * @package DesignPatterns\GUIAbstractFactory\Conceptual\GUIAbstractFactory
 */
class ConcreteProductB1 implements AbstractProductB
{
    /**
     * @return string
     */
    public function usefulFunctionB(): string
    {
        return "The result of the product B1.";
    }

    /**
     * The variant, Product B1, is only able to work correctly with the variant,
     * Product A1. Nevertheless, it accepts any instance of AbstractProductA as
     * an argument.
     *
     * La variante, el Producto B1, sólo puede funcionar correctamente con la variante, el Producto A1.
     * Sin embargo, acepta cualquier instancia del ProductoA como argumento.
     *
     * @param AbstractProductA $collaborator
     * @return string
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}
