<?php

namespace DesignPatterns\FactoryMethod\Conceptual;

/**
 * The Product interface declares the operations that all concrete products must implement.
 *
 * Interface Product
 * @package DesignPatterns\FactoryMethod\Conceptual
 * @author Kennit Ruz <kruz@merqueo.com>
 */
interface Product
{
    /**
     * @return string
     */
    public function operation(): string;
}
