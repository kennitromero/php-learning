<?php

namespace DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts\Win;

use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Checkbox;

/**
 * Class WinCheckbox
 * @package DesignPatterns\GUIAbstractFactory\ExampleGUI\ConcreteProducts
 */
class WinCheckbox implements Checkbox
{
    /**
     * @return string
     */
    public function paint(): string
    {
        return "Checkbox Win painting";
    }
}
