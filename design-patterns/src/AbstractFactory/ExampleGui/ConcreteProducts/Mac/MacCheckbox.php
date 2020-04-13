<?php

namespace DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts\Mac;

use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Checkbox;

/**
 * Class MacCheckbox
 * @package DesignPatterns\GUIAbstractFactory\ExampleGUI\ConcreteProducts\Mac
 */
class MacCheckbox implements Checkbox
{
    /**
     * @return string
     */
    public function paint(): string
    {
        return "Checkbox Mac painting";
    }
}
