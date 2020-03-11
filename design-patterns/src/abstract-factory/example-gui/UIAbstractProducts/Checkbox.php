<?php

namespace DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts;

/**
 * Interface Checkbox
 * @package DesignPatterns\GUIAbstractFactory\ExampleGUI
 */
interface Checkbox
{
    /**
     * @return string
     */
    public function paint(): string;
}
