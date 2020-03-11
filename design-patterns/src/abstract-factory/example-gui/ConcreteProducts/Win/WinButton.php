<?php

namespace DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts\Win;

use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Button;

/**
 * Class WinButton
 * @package DesignPatterns\GUIAbstractFactory\ExampleGUI\ConcreteProducts
 */
class WinButton implements Button
{
    /**
     * @return string
     */
    public function paint(): string
    {
        return "Button Win painting";
    }
}
