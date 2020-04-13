<?php

namespace DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts;

use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Button;
use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Checkbox;
use DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts\Win\WinButton;
use DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts\Win\WinCheckbox;
use DesignPatterns\AbstractFactory\ExampleGUI\GUIAbstractFactory;

/**
 * Class WinFactory
 * @package DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts
 */
class WinFactory implements GUIAbstractFactory
{
    /**
     * @return Button
     */
    public function createButton(): Button
    {
        return new WinButton;
    }

    /**
     * @return Checkbox
     */
    public function createCheckox(): Checkbox
    {
        return new WinCheckbox;
    }
}
