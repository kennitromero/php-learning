<?php

namespace DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts\Mac;

use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Button;

/**
 * Class MacButton
 * @package DesignPatterns\GUIAbstractFactory\ExampleGUI\ConcreteProducts\Mac
 */
class MacButton implements Button
{
    /**
     * @return string
     */
    public function paint(): string
    {
        return "Button Mac painting";
    }
}
