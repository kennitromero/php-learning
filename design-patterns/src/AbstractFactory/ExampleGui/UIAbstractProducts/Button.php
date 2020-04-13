<?php

namespace DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts;

/**
 * Interface Button
 * @package DesignPatterns\GUIAbstractFactory\ExampleGUI
 */
interface Button
{
    /**
     * @return string
     */
    public function paint(): string;
}
