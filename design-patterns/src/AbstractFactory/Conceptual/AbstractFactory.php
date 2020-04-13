<?php

namespace DesignPatterns\AbstractFactory\Conceptual;

use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductA;
use DesignPatterns\AbstractFactory\Conceptual\AbstractProducts\AbstractProductB;

/**
 * The Abstract Factory interface declares a set of methods that return
 * different abstract products. These products are called a family and are
 * related by a high-level theme or concept. Products of one family are usually
 * able to collaborate among themselves. A family of products may have several
 * variants, but the products of one variant are incompatible with products of
 * another.
 *
 * La interfaz de la Fábrica de Abstractos declara un conjunto de métodos que devuelven
 * diferentes productos abstractos. Estos productos se llaman una familia y están relacionados
 * por un tema o concepto de alto nivel. Los productos de una familia suelen ser capaces de colaborar entre sí.
 * Una familia de productos puede tener varias variantes,
 * pero los productos de una variante son incompatibles con los productos de otra.
 *
 * Interface GUIAbstractFactory
 * @package DesignPatterns\GUIAbstractFactory\Conceptual\GUIAbstractFactory
 */
interface AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA;

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB;
}
