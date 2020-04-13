<?php

namespace DesignPatterns\AbstractFactory\Conceptual\AbstractProducts;

/**
 * Each distinct product of a product family should have a base interface. All
 * variants of the product must implement this interface.
 *
 * Cada producto distinto de una familia de productos debe tener una interfaz de base.
 * Todas las variantes del producto deben implementar esta interfaz.
 *
 * Interface AbstractProductA
 * @package DesignPatterns\GUIAbstractFactory\Conceptual\AbstractProductA
 */
interface AbstractProductA
{
    /**
     * @return string
     */
    public function usefulFunctionA(): string;
}
