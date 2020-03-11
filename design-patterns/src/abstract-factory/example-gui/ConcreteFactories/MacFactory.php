<?php

namespace DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts;

use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Button;
use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Checkbox;
use DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts\Mac\MacButton;
use DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts\Mac\MacCheckbox;
use DesignPatterns\AbstractFactory\ExampleGUI\GUIAbstractFactory;

/**
 * Class MacFactory
 * @package DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts
 */
class MacFactory implements GUIAbstractFactory
{
    /**
     * @return Button|MacButton
     */
    public function createButton(): Button
    {
        return new MacButton;
    }

    /**
     * @return Checkbox|MacCheckbox
     */
    public function createCheckox(): Checkbox
    {
        return new MacCheckbox;
    }
}
