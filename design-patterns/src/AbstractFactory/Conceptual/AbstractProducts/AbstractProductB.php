<?php

namespace DesignPatterns\AbstractFactory\Conceptual\AbstractProducts;

/**
 * Here's the the base interface of another product. All products can interact
 * with each other, but proper interaction is possible only between products of
 * the same concrete variant.
 *
 * Aquí está la interfaz base de otro producto. Todos los productos pueden interactuar entre sí,
 * pero la interacción adecuada sólo es posible entre productos de la misma variante concreta.
 *
 * Interface AbstractProductB
 * @package DesignPatterns\GUIAbstractFactory\Conceptual\GUIAbstractFactory
 */
interface AbstractProductB
{
    /**
     * Product B is able to do its own thing...
     *
     * El producto B es capaz de hacer su propia cosa...
     *
     * @return string
     */
    public function usefulFunctionB(): string;

    /**
     * ...but it also can collaborate with the ProductA.
     *
     * ...pero también puede colaborar con el ProductA.
     *
     * The Abstract Factory makes sure that all products it creates are of the
     * same variant and thus, compatible.
     *
     * La Fábrica de Abstractos se asegura de que todos los productos
     * que crea son de la misma variante y por lo tanto, compatibles.
     *
     * @param AbstractProductA $collaborator
     * @return string
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}
